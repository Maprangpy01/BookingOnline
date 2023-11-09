@extends('components.AccountsManage.template.temp-card')
@section('content-temp')
    <div class="row mt-4">
        <div class="col-md-6">
            <p class="h-title-5 ct-am-pl">
                <strong>
                    ประวัติการเข้าใช้งาน
                </strong>
            </p>
        </div>
    </div>
    <table width="100%" class="table text-secondary">
        <tr>
            <td></td>
            <td valign="middle" scope="row">
                <span class="ms-4">
                    <strong>
                        IP Address
                    </strong>
                </span>
            </td>
            <td class="table-td-w-log" height="60" valign="middle">&nbsp;</td>
            <td height="60" align="center" valign="middle">
                <strong>
                    เวลาการเข้าใช้งาน
                </strong>
            </td>
        </tr>
        @if ($responseBody['Result'] == 1)
            @foreach ($responseBodyData as $item)
                <tr>
                    <td></td>
                    <td height="60" valign="middle" scope="row">
                        <span class="ms-4">
                            {{ $item[0] }}
                        </span>
                    </td>
                    <td class="table-td-w-log" height="60" valign="middle">&nbsp;</td>
                    <td height="60" align="center" valign="middle">
                        <i class="bi bi-clock me-2"></i>
                        {{ convertISOToDateTime($item[1]) }}
                    </td>
                </tr>
            @endforeach
        @endif
    </table>
    @if (count($responseBodyData) > 0)
        <div class="ms-3">
            <div class="pagination-custom">
                {!! $responseBodyData->links('vendor.pagination.custom') !!}
            </div>
        </div>
    @endif
@endsection
