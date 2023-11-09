@php
    $url = config('envpath.CA_Server_Publish') . '/GetCountAll';
    $responseBody = getFromApi($url);
@endphp
<div class="col-xxl-3 mt-2">
    <div class="card b-rd-10 br-sh-0">
        <div class="card-body p-3">
            <div class="row">
                <div class="col-8">
                    <img src="{{ asset('assets/images/no-picture-available-dark.png') }}" alt="" width="40px"
                        height="40px" class="b-rd-10">
                    <p class="fnt-14 mt-1 mb-0">
                        จำนวนบัญชีผู้ใช้งานทั้งหมด
                    </p>
                </div>
                <div class="col-4 text-end">
                    <h4>
                        <strong>
                            {{ $responseBody['ResultData']['CountAll'] }}
                        </strong>
                    </h4>
                    <p class="fnt-14 mt-1 mb-0">
                        บัญชี
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@if (Route::currentRouteName() == 'AccountsManage.IndividualIndex' ||
        Route::currentRouteName() == 'AccountsManage.IndividualSearch')
    <div class="col-xxl-3 mt-2">
        <a onclick="load()" href="{{ route('ApprovalCorporateMembers.ApproveCorporateIndex') }}" class="link-line-non">
            <div class="card b-rd-10 br-sh-0">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <img src="{{ asset('assets/images/no-picture-available-dark.png') }}" alt=""
                                width="40px" height="40px" class="b-rd-10">
                            <p class="fnt-14 mt-1 mb-0">
                                จำนวนบัญชีแบบนิติบุคคล
                            </p>
                        </div>
                        <div class="col-4 text-end">
                            <h4>
                                <strong>
                                    {{ $responseBody['ResultData']['CountCompany​'] }}
                                </strong>
                            </h4>
                            <p class="fnt-14 mt-1 mb-0">
                                บัญชี
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-xxl-3 mt-2">
        <a onclick="load()" href="{{ route('AccountsManage.IndividualIndex') }}" class="link-line-non">
            <div class="card b-rd-10 br-sh-0">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <img src="{{ asset('assets/images/no-picture-available-dark.png') }}" alt=""
                                width="40px" height="40px" class="b-rd-10">
                            <p class="fnt-14 mt-1 mb-0">
                                จำนวนบัญชีแบบบุคคลธรรมดา
                            </p>
                        </div>
                        <div class="col-4 text-end">
                            <h4>
                                <strong>
                                    {{ $responseBody['ResultData']['CountUser'] }}
                                </strong>
                            </h4>
                            <p class="fnt-14 mt-1 mb-0">
                                บัญชี
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
@endif
@if (Route::currentRouteName() == 'AccountsManage.ActivateIndividualIndex')
    <div class="col-xxl-3 mt-2">
        <div class="card b-rd-10 br-sh-0">
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-8">
                        <img src="{{ asset('assets/images/no-picture-available-dark.png') }}" alt="" width="40px"
                            height="40px" class="b-rd-10">
                        <p class="fnt-14 mt-1 mb-0">
                            จำนวนบัญชีรอยืนยันตัวตน
                        </p>
                    </div>
                    <div class="col-4 text-end">
                        <h4>
                            <strong>
                                256
                            </strong>
                        </h4>
                        <p class="fnt-14 mt-1 mb-0">
                            บัญชี
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
