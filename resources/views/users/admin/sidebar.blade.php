<div class="sidebar-wrapper active">
    <div class="sidebar-header">
        <div class="d-flex justify-content-between">
            <div class="logo">
                <a href="main"><img src="/assets/images/logo/logo.png" alt="Logo" srcset=""></a>
            </div>
            <div class="toggler">
                <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
            </div>
        </div>
    </div>
    <div class="sidebar-menu">
        <ul class="menu">
            <li class="sidebar-title">Menu</li>

            <li class="sidebar-item active ">
                <a href="{{ route('admin.main') }}" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Admin Panel</span>
                </a>
            </li>

            <li class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-person"></i>
                    <span>İşlemler</span>
                </a>
                <ul class="submenu ">
                    <li class="submenu-item ">
                        <a href="{{ route('admin.users') }}">Üye İşlemleri</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="">Kayıt İşlemleri</a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-person"></i>
                    <span>İşlemler</span>
                </a>
                <ul class="submenu ">
                    <li class="submenu-item ">
                        <a href="{{ route('admin.users') }}">Üye İşlemleri</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="">Kayıt İşlemleri</a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-item">
                <form method="POST" action="http://kutuphane.test/logout">
                    @csrf
                    <a class="sidebar-link block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition duration-150 ease-in-out"
                        href="http://kutuphane.test/logout"
                        onclick="event.preventDefault();
                                            this.closest('form').submit();">
                        <i class="bi bi-door-open"></i>
                        <span>Çıkış Yap</span>
                    </a>
                </form>
            </li>


        </ul>
    </div>
    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
</div>
