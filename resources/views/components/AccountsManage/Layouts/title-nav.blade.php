<nav class="nav-menu-manag">
    <ul>
        <li class="{{ Route::currentRouteName() == 'AccountsManage.MemberIndex' ? 'active' : '' }}">
            <a onclick="load()" href="{{ route('AccountsManage.MemberIndex', [
                    'IDMember' => $IDMember,
                ]) }}">
                ข้อมูลสมาชิกบริการ
            </a>
        </li>
        <li class="{{ Route::currentRouteName() == 'AccountsManage.ProfileIndex' ? 'active' : '' }}">
            <a
            onclick="load()" href="{{ route('AccountsManage.ProfileIndex', [
                    'IDMember' => $IDMember,
                ]) }}">
                ข้อมูลส่วนตัว
            </a>
        </li>
        <li class="{{ Route::currentRouteName() == 'AccountsManage.BillingIndex' ? 'active' : '' }}">
            <a onclick="load()" href="{{ route('AccountsManage.BillingIndex', [
                        'IDMember' => $IDMember,
                    ]) }}">
                ข้อมูลออกใบกำกับภาษี
            </a>
        </li>
        <li class="{{ Route::currentRouteName() == 'AccountsManage.AddressIndex' ? 'active' : '' }}">
            <a onclick="load()" href="{{ route('AccountsManage.AddressIndex', [
                        'IDMember' => $IDMember,
                    ]) }}">
                ข้อมูลที่อยู่จัดส่ง
            </a>
        </li>
        <li class="{{ Route::currentRouteName() == 'AccountsManage.LogIndex' ? 'active' : '' }}">
            <a onclick="load()" href="{{ route('AccountsManage.LogIndex', [
                        'IDMember' => $IDMember,
                    ]) }}">
                ประวัติการเข้าใช้งาน
            </a>
        </li>
    </ul>
</nav>
