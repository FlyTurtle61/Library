<div class="sidebar-wrapper active">
    <div class="sidebar-header">
        <div class="d-flex justify-content-between">
            <div class="logo">
                <a href="index.html"><img src="/assets/images/logo/logo.png" alt="Logo" srcset=""></a>
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
                <a href="{{ route('assistant.main') }}" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Asistan Panel</span>
                </a>
            </li>

            <li class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-person"></i>
                    <span>Asistan İşlemleri</span>
                </a>
                <ul class="submenu ">
                    <li class="submenu-item">
                        <a href="{{ route('assistant.books') }}">Kitap Ekle</a>
                    </li>
                    <li class="submenu-item">
                        <a href="{{ route('assistant.writers') }}">Kitap Listele</a>
                    </li>
                    <li class="submenu-item">
                        <a href="{{ route('assistant.writers') }}">Yazar Ekle</a>
                    </li>
                    <li class="submenu-item">
                        <a href="{{ route('assistant.writers') }}">Yazar Listele</a>
                    </li>
                </ul>
            </li>

        </ul>
    </div>
    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
</div>
