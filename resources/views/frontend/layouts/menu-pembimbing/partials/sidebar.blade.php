<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand menu">
        <a href="#" class="app-brand-link">
            <i class="bi bi-back logo-icon"></i>
            <span class="logo-text">PRAKERIN</span>
        </a>
        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <li class="menu-item {{ request()->is('pembimbing') ? 'active' : '' }}">
            <a href="pembimbing" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>

        <li class="menu-item {{ request()->is('kriteria') ? 'active' : '' }}">
            <a href="/kriteria" class="menu-link">
                <i class="menu-icon tf-icons bx bx-task"></i>
                <div data-i18n="Analytics">Kriteria</div>
            </a>
        </li>
    </ul>

    <div class="menu-footer">
        <a href="/" class="btn btn-green btn-footer">
            <i class="bi bi-house-door"></i> Kembali ke Halaman Utama
        </a>
        <a href="logout" class="btn btn-danger btn-footer">
            <i class="bi bi-box-arrow-right"></i> Logout
        </a>
    </div>
</aside>
