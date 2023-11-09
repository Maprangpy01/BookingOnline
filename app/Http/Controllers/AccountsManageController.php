<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Log;

class AccountsManageController extends Controller
{
    //
    public function IndividualIndex()
    {
        Log::info("[Start:IndividualIndex]");
        $data = [
            "TextSearch" => "",
            "Status" => [
                "Key" => "1",
                "Value" => "All"
                ]
            ];
            $url = config('envpath.Booking_User') . "/UserManagement/GetAllMemberList";
            $responseBody = postToApi($url, $data);
            
            $url = config('envpath.URL_API') . "/UtilsManagement/GetMemberStatusList";
            $GetMemberStatusList = getFromApi($url);
            
            // Get the current page number, or use 1 if it's not set
            $currentPage = request()->get('page', 1);
            $perPage = config('envpath.PerPage');
            
            // Create a LengthAwarePaginator instance
            if($responseBody){
                if ($responseBody['Result'] == 1) {
                    $responseBodyData = new LengthAwarePaginator(
                        array_slice($responseBody['ResultData']['MemeberList'], ($currentPage - 1) * $perPage, $perPage),
                        count($responseBody['ResultData']['MemeberList']),
                        $perPage,
                        $currentPage,
                        ['path' => request()->url(), 'query' => request()->query()]
                    );
                } else {
                    $responseBodyData = [];
                }
                Log::info("[End:IndividualIndex]");
            }else{
                Log::error("[Error] Connect API failed");
                return view("components.ManageMembershipPackages.overview");
            }
            

        return view("components.AccountsManage.individual", [
            'responseBody' => $responseBody,
            'responseBodyData' => $responseBodyData,
            'GetMemberStatusList' => $GetMemberStatusList,
        ]);
    }


    public function IndividualSearch(Request $request)
    {
        Log::info("[Start:IndividualSearch]");
        $data = [
            "TextSearch" => $request->TextSearch,
            "Status" => [
                "Key" => $request->Status,
                "Value" => $request->Status
                ]
            ];
            //dd($data);
        $url = config('envpath.URL_API') . "/UtilsManagement/GetMemberStatusList";
        $GetMemberStatusList = getFromApi($url);
        
        if($GetMemberStatusList){

            $url = config('envpath.CA_Server_Publish') . "/GetAllMemberList";
            $responseBody = postToApi($url, $data);
                
            // Get the current page number, or use 1 if it's not set
            $currentPage = request()->get('page', 1);
            $perPage = config('envpath.PerPage');
            
            if ($responseBody['Result'] == 1) {
                // Create a LengthAwarePaginator instance
                $responseBodyData = new LengthAwarePaginator(
                    array_slice($responseBody['ResultData']['MemeberList'], ($currentPage - 1) * $perPage, $perPage),
                    count($responseBody['ResultData']['MemeberList']),
                    $perPage,
                    $currentPage,
                    [
                        'path' => request()->url(),
                        'query' => array_merge(request()->query(), [
                            'TextSearch' => $request->TextSearch,
                        'Status' => $request->Status,
                    ]),
                ]
            );
            } else {
                $responseBodyData = [];
            }
            Log::info("[End:IndividualSearch]");
        }else{
            Log::error("[Error] Connect API failed");
            return view("components.AccountSetting.overview", [
                'title' => '',
                'responseBody' => '',
            ]);
        }
        
        //dd($responseBody);
        return view("components.AccountsManage.individual", [
            'responseBody' => $responseBody,
            'responseBodyData' => $responseBodyData,
            'GetMemberStatusList' => $GetMemberStatusList,
            'TextSearch' => $request->TextSearch,
            'StatusSearch' => $request->Status,
        ]);
    }

    public function ActivateIndividualIndex()
    {
        Log::info("[Start:ActivateIndividualIndex]");
        Log::info("[End:ActivateIndividualIndex]");
        return view("components.AccountsManage.activate-individual");
    }

    public function MemberIndex($IDMember)
    {
        Log::info("[Start:MemberIndex]");
        $data = [
            //  "CusMemberID" => session('user')['MemberID'],
            "CusMemberID" => $IDMember
        ];
        //dd($data);
        $url = config('envpath.CA_Subscription_Publish') . "/GetSubscriptionsByMemberID";
        
        $responseBody = postToApi($url, $data);
        //dd($responseBody);
        if($responseBody){
            Log::info("[End:MemberIndex]");
        }else{
            Log::error("[Error] Connect API failed");
            return view("components.AccountSetting.overview", [
                'title' => '',
                'responseBody' => '',
            ]);
        }
         return view("components.AccountsManage.member", [
             'title' => 'ข้อมูลสมาชิก',
             'IDMember' => $IDMember,
             'responseBody' => $responseBody
         ]);
    }
    public function ProfileIndex($IDMember)
    {
        Log::info("[Start:ProfileIndex]");
        $url = config('envpath.URL_API') . '/UtilsManagement/GetTitleName';
        $TitleNames = getFromApi($url);
        
        if($TitleNames){

            $url = config('envpath.URL_API') . '/UtilsManagement/GetBusinessTypeList';
            $JuristicTypeList = getFromApi($url);
            
            $url = config('envpath.URL_API') . '/UtilsManagement/GetDepartmentTypeList';
            $DepartmentList = getFromApi($url);
            
            $url = config('envpath.URL_API') . '/UtilsManagement/GetPositionTypeList';
            $PositionList = getFromApi($url);
            
            $data = [
                'CusMemberID' => $IDMember,
            ];
            $url = config('envpath.CA_Server_Publish') . '/GetUserInfoByID';
            $responseBody = postToApi($url, $data);
            
            session(['CusMemberIDInfo' => $IDMember]);
        
            Log::info("[End:ProfileIndex]");
        }else{
            Log::error("[Error] Connect API failed");
            return view("components.AccountSetting.overview", [
                'title' => '',
                'responseBody' => '',
            ]);
        }
        return view("components.AccountsManage.profile", [
            'title' => 'ACCOUNT PROFILE',
            'TitleNames' => $TitleNames,
            'JuristicTypeList' => $JuristicTypeList,
            'DepartmentList' => $DepartmentList,
            'PositionList' => $PositionList,
            'responseBody' => $responseBody,
            'IDMember' => $IDMember,
        ]);
    }
    public function ProfilePost(Request $request, $IDMember)
    {
        Log::info("[Start:ProfilePost]");
        $roles = [
            'Title' => 'required',
            'FirstName' => 'required',
            'LastName' => 'required',
            'Gender' => 'required',
            // 'IDNumber' => 'required',
            // 'DateOfBirth' => 'required',
            // 'Email' => 'required',
            // 'Mobile' => 'required',
        ];
        
        $message = MessageValidate();
        $request->validate($roles, $message);
        
        $data = [
            'PersonInfo' => [
                'CusMemberID' => $IDMember,
                'Prefix' => [
                    'Key' => $request->PrefixKey,
                    'Value' => $request->PrefixValue
                ],
                'CusGender' => [
                    'Key' => $request->GenderKey,
                    'Value' => $request->GenderValue
                ],
                'CusName' => $request->FirstName,
                'CusSurname' => $request->LastName,
                'CusNickname' => $request->CusNickname,
                'CusTaxID' => $request->IDNumber,
                'CusBirthday' => convertDateToISOFormat($request->DateOfBirth),
                'CusEmail' => $request->Email,
                'CusMobile' => $request->Mobile,
                "ActiveStatus" => $request->pActiveStatus,
            ],
            'CompanyInfo' => [
                'CompanyName' => $request->JuristicName,
                'CompanyTelephone' => $request->Telephone,
                'CompanyBusiness' => [
                    'Key' => $request->JuristicTypeKey,
                    'Value' => $request->JuristicTypeValue
                ],
                'CompanyDepartment' => [
                    'Key' => $request->SegmentKey,
                    'Value' => $request->SegmentValue
                ],
                'CompanyJobPosition' => [
                    'Key' => $request->PositionKey,
                    'Value' => $request->PositionValue
                ],
            ],
        ];
        $url = config('envpath.CA_Server_Publish') . '/SaveUserInfoByID';
        $responseBody = postToApi($url, $data);
        
        // session(['CusMemberIDInfo' => $ID]);
        if($responseBody){
            if($result['Result'] == 1){
                Log::info("[End:EditAddressPost]");
            }else{
                Log::info("[Failed] ".$responseBody['Message']);
                Log::info($data);
            }
        }else{
            Log::error("[Error] Connect API failed");
            return view("components.AccountSetting.overview", [
                'title' => '',
                'responseBody' => '',
            ]);
        }
        return redirect()->route('AccountsManage.ProfileIndex',['IDMember' => $IDMember])->with(['Result' => $responseBody['Result'], 'Message' => $responseBody['Message']]);
        
    }

    public function BillingIndex($IDMember)
    {
        Log::info("[Start:BillingIndex]");
        $data = [
            "CusMemberID" => $IDMember
        ];
        $url = config('envpath.CA_Server_Publish') . "/GetUserTaxInfoByID";
        $responseBody = postToApi($url, $data);
        
        if($responseBody){
            Log::info("[End:BillingIndex]");
        }else{
            Log::error("[Error] Connect API failed");
            return view("components.AccountSetting.overview", [
                'title' => '',
                'responseBody' => '',
            ]);
        }
        return view("components.AccountsManage.billing", [
            'title' => 'ACCOUNT BILLING',
            'IDMember' => $IDMember,
            'responseBody' => $responseBody,
        ]);
    }

    public function AddressIndex($IDMember)
    {
        Log::info("[Start:AddressIndex]");
        $data = [
            //"CoporateID" => "COP00019",
            "CusMemberID" => $IDMember,
        ];
        
        
        $url = config('envpath.CA_Server_Publish') . "/GetAllUserAddressInfoByID";
        $responseBody = postToApi($url, $data);
        //dd($responseBody);
        
        if($responseBody){
            Log::info("[End:AddressIndex]");
        }else{
            Log::error("[Error] Connect API failed");
            return view("components.AccountSetting.overview", [
                'title' => '',
                'responseBody' => '',
            ]);
        }
        return view("components.AccountsManage.address", [
            'title' => 'ACCOUNT ADDRESS',
            'IDMember' => $IDMember,
            'responseBody' => $responseBody,
        ]);
    }

    public function LogIndex($IDMember)
    {
        Log::info("[Start:LogIndex]");
        $data = [
            "CusMemberID" => $IDMember,
        ];
        $url = config('envpath.CA_Server_Publish') . "/GetLoginHistoryByID";
        $responseBody = postToApi($url, $data);
        $currentPage = request()->get('page', 1);
        $perPage = config('envpath.PerPage');
        
        if($responseBody){
            if ($responseBody['Result'] == 1) {
                // Create a LengthAwarePaginator instance
                $responseBodyData = new LengthAwarePaginator(
                    array_slice($responseBody['ResultData']['HistoryList'], ($currentPage - 1) * $perPage, $perPage),
                    count($responseBody['ResultData']['HistoryList']),
                    $perPage,
                    $currentPage,
                    ['path' => request()->url(), 'query' => request()->query()]
                );
            } else {
                $responseBodyData = [];
            }
            Log::info("[End:LogIndex]");
        }else{
            Log::error("[Error] Connect API failed");
            return view("components.AccountSetting.overview", [
                'title' => '',
                'responseBody' => '',
            ]);
        }
        return view("components.AccountsManage.log", [
            'title' => 'ACCOUNT LOG',
            'IDMember' => $IDMember,
            'responseBody' => $responseBody,
            'responseBodyData' => $responseBodyData,
        ]);
    }
}
