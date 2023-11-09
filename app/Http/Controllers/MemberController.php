<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use PSpell\Config;
use Illuminate\Support\Facades\Log;
use Laravel\Socialite\Facades\Socialite;

class MemberController extends Controller
{
    public function HomeIndex()
    {
        Log::info("[Start:HomeIndex]");
        Log::info("[End:HomeIndex]");

        return view("components.Members.Home");
    }
    public function SignUpIndex()
    {
        Log::info("[Start:SignUpIndex]");
        $url = config('envpath.URL_API') . "/UtilsManagement/GetTitleName";

        $TitleNames = getFromApi($url);
        if (!empty($TitleNames)) {
            // dd($TitleNames);
            Log::info("[End:SignUpIndex]");
        } else {
            Log::error("[Error] Connect API failed");
            return view("components.Members.sign-up", [
                'TitleNames' => ''
            ]);
        }
        return view("components.Members.sign-up", [
            'TitleNames' => $TitleNames
        ]);
    }

    public function SignUpPost(Request $request)
    {
        Log::info("[Start:SignUpPost]");

        $roles = [
            'Prefix' => 'required',
            'CusName' => 'required',
            'CusSurname' => 'required',
            'CusTaxID' => 'required',
            'CusEmail' => 'required|email|same:ConfirmEmail',
            'ConfirmEmail' => 'required|email|same:CusEmail',
            'CusMobile' => 'required',
            'Password' => 'required|min:6|max:10|same:ConfirmPassword',
            'ConfirmPassword' => 'required|min:6|max:10|same:Password',
        ];

        $message = MessageValidate();
        $request->validate($roles, $message);

        $dataFromRequest = extractKeyValueFromRequest($request);
        $data = [
            "CusEmail" => $request->CusEmail,
            "Password" => $request->Password,
            "Prefix" => [
                "Key" => $request->PrefixKey,
                "Value" => $request->PrefixValue
            ],
            "CusName" => $request->CusName,
            "CusSurname" => $request->CusSurname,
            "CusTaxID" => $request->CusTaxID,
            "CusTaxType" => "CitizenID",
            "CusMobile" => $request->CusMobile,
        ];
        $url = config('envpath.Booking_User') . "/UserManagement/RegisterUser";
        $result = postToApi($url, $data);
        // dd($data,$result);

        Log::info("[End:SignUpPost]");
        if (!empty($result) && $result['Result'] == 1) {
            return redirect()->route('ConfirmEmailIndex')->with(['Result' => $result['Result'], 'Message' => $result['Message'], 'CusEmail' => $result['ResultData']['CusEmail']]);
        } else if (!empty($result) && $result['Result'] == 3) {
            // dd($result);
            return redirect()->route('SignUpIndex')->with(['Result' => $result['Result'], 'Message' => $result['Message'], 'CusEmail' => $result['ResultData']['CusEmail'], 'CusMemberID' => $result['ResultData']['CusMemberID']]);
        } else {
            return redirect()->route('SignUpIndex')->with(['Result' => $result['Result'], 'Message' => $result['Message']]);
        }
    }

    public function SignInIndex()
    {
        Log::info("[Start:SignInIndex]");
        Log::info("[End:SignInIndex]");
        return view("components.Members.sign-in");
    }


    public function SignInPost(Request $request)
    {
        Log::info("[Start:SignInPost]");
        $roles = [
            'CusEmail' => 'required|email',
            'Password' => 'required',
        ];

        $message = MessageValidate();

        $request->validate($roles, $message);

        $data = [
            "UserName" => $request->CusEmail,
            "Password" => $request->Password,
            "IPAddress" => $request->ip()
        ];
        $url = config('envpath.Booking_User') . "/UserManagement/Login";
        $result = postToApi($url, $data);

        // dd($result);
        Log::info("[End:SignInPost]");

        if (!empty($result) && $result['Result'] == 1) {
            session(['MemberID' =>  $result['ResultData']['MemberID']]);
            session(['CusFullName' =>  $result['ResultData']['CusFullName']]);
            session(['Token' =>  $result['ResultData']['Token']]);
            session(['MemberStatus' =>  'Member']);
            return redirect()->route('InterestIndex');
        } else if (!empty($result) && $result['Result'] == 3) {
            // dd($result);
            return redirect()->route('SignInIndex')->with(['Result' => $result['Result'], 'Message' => $result['Message'], 'CusEmail' => $result['ResultData']['CusEmail'], 'CusMemberID' => $result['ResultData']['CusMemberID']]);
        } else {
            return redirect()->route('SignInIndex')->with(['Result' => $result['Result'], 'Message' => $result['Message']]);
        }
    }

    public function SignInVerifyIndex($ID)
    {
        Log::info("[Start:SignInVerifyIndex]");
        $roles = [
            'CusEmail' => 'required|email',
            'Password' => 'required',
        ];

        $message = MessageValidate();

        //$request->validate($roles, $message);
        $data = [
            "CusMemberID" => $ID,
            "Status" => "active"
        ];
        $url = config('envpath.Booking_User') . "/UserManagement/UpdateMemberStatus";
        $result = postToApi($url, $data);
        Log::info("[End:SignInVerifyIndex]");
        return view("components.Members.sign-in", [
            "CusMemberID" => $ID
        ]);
    }
    public function SignInVerifyPost(Request $request)
    {
        Log::info("[Start:SignInVerifyPost]");
        $data = [
            "UserName" => $request->CusEmail,
            "Password" => $request->Password,
            "IPAddress" => $request->ip()
        ];
        $url = config('envpath.Booking_User') . "/UserManagement/Login";
        $result = postToApi($url, $data);

        Log::info("[End:SignInVerifyPost]");
        if (!empty($result) && $result['Result'] == 1) {
            session(['MemberID' =>  $result['ResultData']['MemberID']]);
            session(['CusFullName' =>  $result['ResultData']['CusFullName']]);
            session(['Token' =>  $result['ResultData']['Token']]);
            session(['MemberStatus' =>  'Member']);
            return redirect()->route('InterestIndex');
        } else {
            return redirect()->route('SignInIndex')->with(['Result' => $result['Result'], 'Message' => $result['Message']]);
        }
    }

    public function LogoutIndex()
    {
        Log::info("[Start:LogoutIndex]");
        session()->forget('MemberID');
        session()->forget('MemberStatus');
        session()->forget('CusFullName');
        session()->forget('Token');
        session()->forget('SubScriptionStatus');
        Log::info("[End:LogoutIndex]");
        return redirect()->route('OverviewIndex');
    }

    public function ConfirmEmailIndex()
    {
        Log::info("[Start:ConfirmEmailIndex]");
        Log::info("[End:ConfirmEmailIndex]");
        return view("components.Members.confirm-email");
    }
    public function ForgotPasswordIndex()
    {
        Log::info("[Start:ForgotPasswordIndex]");
        Log::info("[End:ForgotPasswordIndex]");
        return view("components.Members.forgot-password");
    }

    public function ForgotPassword2Index()
    {
        Log::info("[Start:ForgotPassword2Index]");
        Log::info("[End:ForgotPassword2Index]");
        return view("components.Members.forgot-password2");
    }

    public function ForgotPasswordPost(Request $request)
    {
        Log::info("[Start:ForgotPasswordPost]");
        // $roles = [
        //     'Email' => 'required|email',
        // ];

        // $message = MessageValidate();

        // $request->validate($roles, $message);
        $status = $request->status;

        $data = [
            'CusEmail' => $request->CusEmail,
        ];
        $url_post = config('envpath.Booking_User') . "/UserManagement/ResetPasswordResetToken";
        $responsePassword = postToApi($url_post, $data);

        if ($responsePassword) {
            if (!empty($responsePassword['Result']) == 1) {
                Log::info("[End:ForgotPasswordPost]");
            } else {
                Log::info("[Failed] " . $responsePassword['Message']);
            }
            // dd($responsePassword);
            if($status==1){
                return redirect()->route('SignInIndex');
            }else{
            return redirect()->route('ForgotPassword2Index')->with(['Result' => $responsePassword['Result'], 'Message' => $responsePassword['Message'], 'email' => $request->CusEmail,]);
            }
        } else {
            Log::error("[Error] Connect API failed");
            return view("components.Members.forgot-password");
        }
    }

    public function ChangePasswordIndex(Request $request)
    {
        Log::info("[Start:ChangePasswordIndex]");
        Log::info("[End:ChangePasswordIndex]");
        return view("components.Members.reset-password", [
            'Result' => '1',
            'Message' => ''

        ]);
    }
    public function ResetPasswordPost($ID, $Token)
    {
        Log::info("[Start:ResetPasswordPost]");
        //Validate
        $Result = 1;
        $ErrorMessage = '';
        $data = [
            'CusMemberID' => $ID,
            'Token' => $Token
        ];
        //dd($data);
        $url = config('envpath.Booking_User') . '/UserManagement/ResetPasswordCheckToken';

        //dd($url);
        $responseBody = postToApi($url, $data);

        //dd($responseBody);

        if ($responseBody) {
            $Result = $responseBody['Result'];

            if (!$Result) {
                $ErrorMessage = 'Token หมดอายุ';
            } else {
                $ErrorMessage = $responseBody['Message'];
            }
        }
        Log::info("[End:ResetPasswordPost]");
        return view("components.Members.reset-password", [
            'Result' => $Result,
            'Message' => $ErrorMessage,
            'CusMemberID' =>  $ID
        ]);
    }

    public function ChangePasswordPost(Request $request)
    {
        Log::info("[Start:ChangePasswordPost]");
        $roles = [
            'Password' => 'required|same:ConfirmPassword',
            'ConfirmPassword' => 'required|same:Password',
        ];

        $message = MessageValidate();

        $request->validate($roles, $message);

        $data = [
            // 'CusMemberID' => session('user')['MemberID'],
            'CusMemberID' => session('MemberID') ?? $request->CusMemberID,
            'NewPassword' => $request->input('Password')
        ];
        //dd($data);

        $url_post = config('envpath.Booking_User') . "/UserManagement/ChangePasswordByID";
        $responsePassword = postToApi($url_post, $data);
        // dd($responsePassword);

        if ($responsePassword) {
            if (!empty($responsePassword['Result']) && $responsePassword['Result'] == 1) {
                Log::info("[End:ChangePasswordPost]");
            } else {
                Log::info("[Failed] " . $responsePassword['Message']);
            }
            return redirect()->route('ChangePasswordIndex')->with(['Result' => $responsePassword['Result'], 'Message' => $responsePassword['Message']]);
        } else {
            Log::error("[Error] Connect API failed");
            return redirect()->route('ChangePasswordIndex');
        }
    }

    public function SendEmail(Request $request)
    {
        Log::info("[Start:SendEmail]");

        $dataEmail = [
            "Sender"=> "Real Asset Systemก",
            "Subject"=> "[RealAsset] Verify registration",
            "ToSubject"=> "User",
            "To"=> $request->CusEmail,
            "URL"=> config('envpath.Booking_Domain') .'/sign-in/'.encrypt($request->CusMemberID),
            "Type"=> "VerifyRegis"
        ];
        // dd($dataEmail);
        $url = config('envpath.Booking_Notification') . "/MailManagement/SendMail";
        $responseEmail = postToApi($url, $dataEmail);

        Log::info($dataEmail);
        Log::info("[End:SendEmail]");
        return response()->json($responseEmail);
    }

    public function InterestCategoryIndex()
    {
        Log::info("[Start:InterestCategoryIndex]");
        $data = [
            "CusMemberID" => session('user')['MemberID']
        ];

        $url = config('envpath.CA_Content_Publish') . "/GetInterestCetagories";
        $responseBody = postToApi($url, $data);

        if ($responseBody) {
            Log::info("[End:InterestCategoryIndex]");
            return view("components.Members.interest-category", [
                'title' => 'หมวดหมู่ความสนใจ',
                'responseBody' => $responseBody,
            ]);
        } else {
            Log::error("[Error] Connect API failed");
            return view("components.ManageMembershipPackages.overview");
        }
    }

    public function InterestCategoryPost(Request $request)
    {
        Log::info("[Start:InterestCategoryPost]");
        $data = $request->input('InterestCetagoriesList');

        // $url = config('envpath.CA_Content_Publish') . "/SaveInterestCetagories";
        // $responseBody = postToApi($url, $data);

        if ($responseBody) {
            if ($responseBody['Result'] == 1) {
                Log::info("[End:InterestCategoryPost]");
            } else {
                Log::info("[Failed] " . $responseBody['Message']);
                Log::info($data);
            }
        } else {
            Log::error("[Error] Connect API failed");
            return view("components.ManageMembershipPackages.overview");
        }
        return response()->json($responseBody);
    }

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {

        try {

            $googleUser = Socialite::driver('google')->user();
            $data = [
                'CusID' => $googleUser->getId(),
                'CusName' => $googleUser->getName(),
                'CusEmail' => $googleUser->getEmail(),
                'Img' => $googleUser->getAvatar(),
                'token' => $googleUser->token,
            ];
            // dd(
            //     $googleUser->getId(),
            //     $googleUser->getName(),
            //     $googleUser->getEmail(),
            //     $googleUser->getAvatar(),
            //     $googleUser,
            //     $data
            // );
            return redirect()->route('InterestIndex');
        } catch (\Exception $e) {
            Log::info("Error : " . $e->getMessage());
        }
    }
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->stateless()->redirect();
    }

    public function handleFacebookCallback()
    {

        try {

            $facebookUser = Socialite::driver('facebook')->stateless()->user();
            $data = [
                'CusID' => $facebookUser->getId(),
                'CusName' => $facebookUser->getName(),
                'CusEmail' => $facebookUser->getEmail(),
                'Img' => $facebookUser->getAvatar() . "&access_token={$facebookUser->token}",
                'token' => $facebookUser->token,
            ];
            // dd(
            //     $facebookUser->getId(),
            //     $facebookUser->getName(),
            //     $facebookUser->getEmail(),
            //     $facebookUser->getAvatar(),
            //     $facebookUser,
            //     $facebook,
            //     $data
            // );
            return redirect()->route('InterestIndex');
        } catch (\Exception $e) {
            Log::info("Error : " . $e->getMessage());
        }
    }
}
