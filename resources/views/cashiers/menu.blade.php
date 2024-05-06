<div class="checkoutd-nav">
    <ul class="nav flex-column nav-pills mb-3" id="pills-tab">


        {{-- <li class="nav-item">
            <a class="nav-link @if(request()->routeIs('cashier.purchases')) active @endif"  href="{{ route('cashier.purchases') }}" >الفاتورة الحالية</a>
        </li> --}}

        <li class="nav-item">
            <a class="nav-link @if(request()->routeIs('cashier.orders')) active @endif"  href="{{ route('cashier.orders') }}" >جميع الطلبات</a>
        </li>

        <li class="nav-item">
            <a class="nav-link @if(request()->routeIs('cashier.profile')) active @endif" href="{{ route('cashier.profile') }}">البروفايل</a>
        </li>

        <li class="nav-item">
            <a class="nav-link @if(request()->routeIs('cashier.changePassword')) active @endif"  href="{{ route('cashier.changePassword') }}">تغيير كلمة السر</a>
        </li>

        <li class="nav-item">
            <a class="nav-link @if(request()->routeIs('cashier.settings')) active @endif"  href="{{ route('cashier.settings') }}">الإعدادات</a>
        </li>

        <li class="nav-item">
            <a class="nav-link @if(request()->routeIs('cashier.logout')) active @endif"  href="{{ route('cashier.logout') }}">خروج</a>
        </li>
    </ul>
</div>
