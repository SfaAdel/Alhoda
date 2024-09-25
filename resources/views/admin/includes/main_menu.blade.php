<collapse class="outer " accordion is-fullwidth>

    <a href="{{ route('dashboard') }}" class="card link-item-no-collapse "><i class="fas fa-tachometer-alt"></i><span>لوحه
            التحكم</span></a>


    <collapse-item title="العقارات" icon="fa-solid fa-city">
        @if (auth('admin')->user()->role == 'super_admin' || auth('admin')->user()->role == 'data_entry')
            <a class="link-item" href="{{ route('admin.properties.create') }}">اضافة عقار</a>
        @endif
        <a class="link-item" href="{{ route('admin.properties.index') }}">قائمة العقارات</a>
    </collapse-item>
    <collapse-item title="المدونات" icon="fa-solid fa-newspaper">
        @if (auth('admin')->user()->role == 'super_admin' || auth('admin')->user()->role == 'data_entry')
            <a class="link-item" href="{{ route('admin.blogs.create') }}">اضافة مدونة</a>
        @endif
        <a class="link-item" href="{{ route('admin.blogs.index') }}">قائمة المدونات</a>
    </collapse-item>
    <collapse-item title="الوسوم" icon="fa-solid fa-tag">
        @if (auth('admin')->user()->role == 'super_admin' || auth('admin')->user()->role == 'data_entry')
            <a class="link-item" href="{{ route('admin.tags.create') }}">اضافة وسوم</a>
        @endif
        <a class="link-item" href="{{ route('admin.tags.index') }}">قائمة الوسوم</a>
    </collapse-item>

    <a class="link-item" href="{{ route('admin.contacts.index') }}"> <i class="fa fa-envelope"></i><span>رسائل
            التواصل</span> </a>

    @if (auth('admin')->user()->role == 'super_admin')
        <collapse-item title=" الادارة" icon="fa fa-user-lock">
            <a class="link-item" href="{{ route('admin.admins.create') }}">اضافة مدير</a>
            <a class="link-item" href="{{ route('admin.admins.index') }}">قائمة المديرين</a>
        </collapse-item>
    @endif
    <a href="{{ route('admin.logout') }}"
        onclick="event.preventDefault();
                document.getElementById('logout-form').submit();"
        class="card link-item-no-collapse">
        <i class="fas fa-sign-out-alt"></i><span>تسجيل الخروج</span></a>
    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</collapse>
