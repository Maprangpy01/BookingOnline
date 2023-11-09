<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Favorite
     *
     */
    public function ProfileIndex()
    {
        Log::info("[Start:ProfileIndex]");
        $url = config('envpath.URL_API') . "/UtilsManagement/GetTitleName";
        $TitleNames = getFromApi($url);

        $url = config('envpath.URL_API') . "/UtilsManagement/GetMarriedStatusList";
        $MarriedStatusList = getFromApi($url);

        $data = [
            'CusMemberID' => session('MemberID') ?? '',
        ];
        $url = config('envpath.Booking_User') . "/UserManagement/GetUserInfoByID";
        $responseBody = postToApi($url, $data);

        Log::info("[End:ProfileIndex]");
        return view('components.Profile.profile', [
            'TitleNames' => $TitleNames,
            'MarriedStatusList' => $MarriedStatusList,
            'responseBody' => $responseBody,
        ]);
    }

    public function ProfilePost(Request $request)
    {
        Log::info("[Start:ProfilePost]");
        $data = [
            'PersonInfo' => [
                'CusMemberID' => session('MemberID'),
                'Prefix' => [
                    'Key' => $request->PrefixKey,
                    'Value' => $request->PrefixValue
                ],
                'CusName' => $request->CusName,
                'CusSurname' => $request->CusSurname,
                'CusNickname' => $request->CusNickname,
                'CusTaxID' => $request->CusTaxID,
                'CusNationality' => $request->CusNationality,
                'CusDateOfBirth' => $request->DateofBirth,
                'CusGender' => [
                    'Key' => $request->CusGenderKey,
                    'Value' => $request->CusGenderValue
                ],
                'CusMarriedStatus' => [
                    'Key' => $request->CusMarriedStatusKey,
                    'Value' => $request->CusMarriedStatusValue
                ],
                'CusEmail' => $request->CusEmail,
                'CusTelephone' => $request->CusTelephone,
                'CusMobile' => $request->CusMobile,
                "CusLineID" => $request->CusLineID,
                "EmailChange" => false,
                "TaxIDChange" => false,
            ],
            'HouseRegisAddressInfo' => [
                'AddressID' => $request->HouseAddressID ?? 0,
                'AddressNo' => $request->HouseAddressNo,
                'AddressVillage' => $request->HouseAddressVillage,
                'AddressMoo' => $request->HouseAddressMoo,
                'AddressSoi' => $request->HouseAddressSoi,
                'AddressRoad' => $request->HouseAddressRoad,
                'Province' => [
                    'Key' => $request->HouseProvinceKey,
                    'Value' => $request->HouseProvinceValue
                ],
                'District' => [
                    'Key' => $request->HouseDistrictKey,
                    'Value' => $request->HouseDistrictValue
                ],
                'City' => [
                    'Key' => $request->HouseSubDistrictKey,
                    'Value' => $request->HouseSubDistrictValue
                ],
                'ZipCode' => $request->PostCode,
                'Country' => [
                    'Key' => '1',
                    'Value' => 'Thai'
                ],
                'StatusType' => 'ที่อยู่ตามบัตรประชาชน'
            ],
            'SendDocAddressInfo' => [
                'AddressID' => $request->SendDocAddressID ?? 0,
                'AddressNo' => $request->SendDocAddressNo,
                'AddressVillage' => $request->SendDocAddressVillage,
                'AddressMoo' => $request->SendDocAddressMoo,
                'AddressSoi' => $request->SendDocAddressSoi,
                'AddressRoad' => $request->SendDocAddressRoad,
                'Province' => [
                    'Key' => $request->SendDocProvinceKey,
                    'Value' => $request->SendDocProvinceValue
                ],
                'District' => [
                    'Key' => $request->SendDocDistrictKey,
                    'Value' => $request->SendDocDistrictValue
                ],
                'City' => [
                    'Key' => $request->SendDocSubDistrictKey,
                    'Value' => $request->SendDocSubDistrictValue
                ],
                'ZipCode' => $request->PostCodeDoc,
                'Country' => [
                    'Key' => '1',
                    'Value' => 'Thai'
                ],
                'StatusType' => 'ที่อยู่จัดส่งเอกสาร'
            ],
            'ContactAddressInfo' => [
                'AddressID' => $request->ContactAddressID ?? 0,
                'AddressNo' => $request->ContactAddressNo,
                'AddressVillage' => $request->ContactAddressVillage,
                'AddressMoo' => $request->ContactAddressMoo,
                'AddressSoi' => $request->ContactAddressSoi,
                'AddressRoad' => $request->ContactAddressRoad,
                'Province' => [
                    'Key' => $request->ContactProvinceKey,
                    'Value' => $request->ContactProvinceValue
                ],
                'District' => [
                    'Key' => $request->ContactDistrictKey,
                    'Value' => $request->ContactDistrictValue
                ],
                'City' => [
                    'Key' => $request->ContactSubDistrictKey,
                    'Value' => $request->ContactSubDistrictValue
                ],
                'ZipCode' => $request->PostCodeCon,
                'Country' => [
                    'Key' => '1',
                    'Value' => 'Thai'
                ],
                'StatusType' => 'ที่อยู่ที่ติดต่อได้ในประเทศไทย'
            ],
        ];
        // dd($data);
        $url = config('envpath.Booking_User') . "/UserManagement/SaveUserInfoByID";
        $responseBody = postToApi($url, $data);
        Log::info(mb_convert_encoding(json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE), 'UTF-8'));
        Log::info(mb_convert_encoding(json_encode($responseBody, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE), 'UTF-8'));
        Log::info("[End:ProfilePost]");
        return redirect()->route('ProfileIndex')->with(['Result' => $responseBody['Result'], 'Message' => $responseBody['Message']]);
    }

    public function InterestIndex()
    {
        Log::info("[Start:InterestIndex]");

        $data = [
            "CusMemberID" => session('MemberID') ?? ''
        ];
        $url = config('envpath.Booking_Service') . "/InterestManagement/GetAllInterestListByMemberID";
        $responseBody = postToApi($url, $data);
        
        
        Log::info("[End:InterestIndex]");
        if($responseBody['Result']==2){
            return view('components.AccountSetting.overview');
        }else if($responseBody['Result']==1){
            usort($responseBody['ResultData']['InterestInfoList'], function ($a, $b) {
                return strcmp($b['CusMemberID'], $a['CusMemberID']);
            });
    
            Log::info(mb_convert_encoding(json_encode($responseBody, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE), 'UTF-8'));
        return view('components.Interest.interest', [
            'responseBody' => $responseBody
        ]);
    }
    }
    public function InterestInIndex()
    {
        Log::info("[Start:InterestIndex]");

        $data = [
            "CusMemberID" => session('MemberID') ?? ''
        ];
        $url = config('envpath.Booking_Service') . "/InterestManagement/GetAllInterestListByMemberID";
        $responseBody = postToApi($url, $data);
        
        
        Log::info("[End:InterestIndex]");
        if($responseBody['Result']){
            usort($responseBody['ResultData']['InterestInfoList'], function ($a, $b) {
                return strcmp($b['CusMemberID'], $a['CusMemberID']);
            });
    
            Log::info(mb_convert_encoding(json_encode($responseBody, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE), 'UTF-8'));
        return view('components.Interest.interest', [
            'responseBody' => $responseBody
        ]);
    }
    }

    public function InterestPost(Request $request)
    {
        Log::info("[Start:InterestPost]");

        $InterestData = $request->InterestList;
        $InterestList = [];

        foreach ($InterestData as $item) {
            $InterestList[] = [
                "InterestID" => $item["InterestID"] ?? '',
                "InterestType" => $item["InterestType"] ?? '',
                "CusMemberID" => session('MemberID') ?? '',
                "InterestStatus" => $item["InterestStatus"] ?? ''
            ];
        }

        $data = [
            "InterestList" => $InterestList,
            "UpdatedBy" => session('MemberID') ?? '',
            "IPAddress" => $request->ip() ?? ''
        ];
        Log::info(mb_convert_encoding(json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE), 'UTF-8'));


        $url = config('envpath.Booking_Service') . "/InterestManagement/SaveInterestInfoByMemberID";
        $responseBody = postToApi($url, $data);

        Log::info("[End:InterestPost]");
        return response()->json($responseBody);
    }

    public function favorite()
    {
        Log::info("[Start:favorite]");

        $data = [
            // 'CusMemberID' => "MEM00043" ,
            'CusMemberID' => session('MemberID') ,
        ];
        $url = config('envpath.Booking_Service') . "/FavoritesManagement/GetAllfavoritesListByMemberID";
        $favorite = postToApi($url, $data);

        $url = config('envpath.Booking_Service') . '/MockData/GetMockDatafavoritesListByMemberID';
        $responseCardunit = getFromApi($url);

        // dd($favorite);
        Log::info("[End:favorite]");
        return view('components.Favorite.favorite',[
            'favorite' => $favorite,
            'cardUnit' => $responseCardunit,
        ]);
    }

    /**
     * Contact
     *
     */
    public function contact()
    {
        Log::info("[Start:contact]");
        Log::info("[End:contact]");
        return view('components.Contact.contact');
    }

    /**
     * Compare
     *
     */
    public function compare()
    {
        Log::info("[Start:compare]");
        Log::info("[End:compare]");
        return view('components.Compare.compare');
    }

    public function BookingHistory()
    {
        Log::info("[Start:BookingHistory]");

        $data = [
            // 'CusMemberID' => "MEM00043" ,
            'CusMemberID' => session('MemberID') ,
        ];
        // $url = config('envpath.Booking_Service') . "/EventsManagement/GetAllBookingListByMemberID";
        // $history = postToApi($url, $data);

        $url = config('envpath.Booking_Service') . "/EventsManagement/GetMockDataBookingListByMemberID";
        $history = getFromApi($url);

        // dd($history);
        Log::info("[End:BookingHistory]");
        return view("components.BookingHistory.booking-history",[
            'history' => $history,
        ]);
    }

    /**
     * Event
     *
     */
    public function event()
    {
        Log::info("[Start:event]");
        Log::info("[End:event]");
        return view('components.Event.event');
    }

    /**
     * Event Home
     *
     */
    public function event_home()
    {
        Log::info("[Start:event_home]");
        Log::info("[End:event_home]");
        return view('components.Event.event-home');
    }
}
