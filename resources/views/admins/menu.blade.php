<div class="checkoutd-nav">
    <ul class="nav flex-column nav-pills mb-3" id="pills-tab">
        <li class="nav-item">
            <a class="nav-link @if(request()->routeIs('admin.dashboard')) active @endif"  href="{{ route('admin.dashboard') }}" >لوحة التحكم</a>
        </li>
        <li class="nav-item">
            <a class="nav-link @if(request()->routeIs('admin.cashier*')) active @endif"  href="{{ route('admin.cashier.index') }}" >إدارة المسؤلين عن الكاشير</a>
        </li>
        <li class="nav-item">
            <a class="nav-link @if(request()->routeIs('admin.category*')) active @endif"  href="{{ route('admin.category.index') }}" >إدارة الفئات</a>
        </li>
        <li class="nav-item">
            <a class="nav-link @if(request()->routeIs('admin.product*')) active @endif"  href="{{ route('admin.product.index') }}" >إدارة المنتجات</a>
        </li>

        <li class="nav-item">
            <a class="nav-link @if(request()->routeIs('admin.about*')) active @endif"  href="{{ route('admin.about.index') }}" >إدارة من نحن</a>
        </li>

        <li class="nav-item">
            <a class="nav-link @if(request()->routeIs('admin.gallary*')) active @endif"  href="{{ route('admin.gallary.index') }}" >إدارة معرض الصور</a>
        </li>
        <li class="nav-item">
            <a class="nav-link @if(request()->routeIs('admin.slider*')) active @endif"  href="{{ route('admin.slider.index') }}" >إدارة السلايدرز</a>
        </li>

        <li class="nav-item">
            <a class="nav-link  @if(request()->routeIs('admin.contact*')) active @endif"  href="{{ route('admin.contact.index') }}" >جميع الرسائل</a>
        </li>

        <li class="nav-item">
            <a class="nav-link @if(request()->routeIs('admin.orders')) active @endif"  href="{{ route('admin.orders') }}" >جميع الطلبات</a>
        </li>

        <li class="nav-item">
            <a class="nav-link @if(request()->routeIs('admin.profile')) active @endif" href="{{ route('admin.profile') }}">البروفايل</a>
        </li>

        <li class="nav-item">
            <a class="nav-link @if(request()->routeIs('admin.changePassword')) active @endif"  href="{{ route('admin.changePassword') }}">تغيير كلمة السر</a>
        </li>

        <li class="nav-item">
            <a class="nav-link @if(request()->routeIs('admin.settings')) active @endif"  href="{{ route('admin.settings') }}">الإعدادات</a>
        </li>

        <li class="nav-item">
            <a class="nav-link @if(request()->routeIs('admin.logout')) active @endif"  href="{{ route('admin.logout') }}">خروج</a>
        </li>
    </ul>
</div>
