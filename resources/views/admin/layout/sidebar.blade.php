<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="index.html">
            <span class="align-middle">AdminKit</span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Pages
            </li>

            <li class="sidebar-item  {{ request()->routeIs('admin.dashboard*') ? 'active' : '' }}">
                <a class="sidebar-link"  href="{{route('admin.dashboard')}}">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                </a>
            </li>
          

            <li class="sidebar-item  {{ request()->routeIs('admin.perusahaan*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{route('admin.perusahaan.index')}}">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">Perusahaan</span>
                </a>
            </li>
            <li class="sidebar-item  {{ request()->routeIs('admin.tahun_ajaran*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{route('admin.tahun_ajaran.index')}}">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">Tahun Ajaran</span>
                </a>
            </li>
            <li class="sidebar-item  {{ request()->routeIs('admin.jurusan*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{route('admin.jurusan.index')}}">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">Jurusan</span>
                </a>
            </li>
            <li class="sidebar-item  {{ request()->routeIs('admin.konsentrasi*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{route('admin.konsentrasi.index')}}">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">Konsentrasi Keahlian</span>
                </a>
            </li>
            <li class="sidebar-item  {{ request()->routeIs('admin.kelas*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{route('admin.kelas.index')}}">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">Kelas</span>
                </a>
            </li>
            <li class="sidebar-item  {{ request()->routeIs('admin.guru*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{route('admin.guru.index')}}">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">Guru</span>
                </a>
            </li>
            <li class="sidebar-item  {{ request()->routeIs('admin.pembimbing*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{route('admin.pembimbing.index')}}">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">Pembimbing</span>
                </a>
            </li>
            <li class="sidebar-item  {{ request()->routeIs('admin.siswa*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{route('admin.siswa.index')}}">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">Siswa</span>
                </a>
            </li>
            <li class="sidebar-item  {{ request()->routeIs('admin.pemetaan*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{route('admin.pemetaan.index')}}">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">Pemetaan</span>
                </a>
            </li>

            {{-- <li class="sidebar-item  {{ request()->routeIs('admin.dashboard*') ? 'active' : '' }}">
                <a class="sidebar-link" href="pages-sign-in.html">
                    <i class="align-middle" data-feather="log-in"></i> <span class="align-middle">Sign In</span>
                </a>
            </li>

            <li class="sidebar-item  {{ request()->routeIs('admin.dashboard*') ? 'active' : '' }}">
                <a class="sidebar-link" href="pages-sign-up.html">
                    <i class="align-middle" data-feather="user-plus"></i> <span class="align-middle">Sign Up</span>
                </a>
            </li>

            <li class="sidebar-item  {{ request()->routeIs('admin.dashboard*') ? 'active' : '' }}">
                <a class="sidebar-link" href="pages-blank.html">
                    <i class="align-middle" data-feather="book"></i> <span class="align-middle">Blank</span>
                </a>
            </li>

            <li class="sidebar-header">
                Tools & Components
            </li>

            <li class="sidebar-item  {{ request()->routeIs('admin.dashboard*') ? 'active' : '' }}">
                <a class="sidebar-link" href="ui-buttons.html">
                    <i class="align-middle" data-feather="square"></i> <span class="align-middle">Buttons</span>
                </a>
            </li>

            <li class="sidebar-item  {{ request()->routeIs('admin.dashboard*') ? 'active' : '' }}">
                <a class="sidebar-link" href="ui-forms.html">
                    <i class="align-middle" data-feather="check-square"></i> <span class="align-middle">Forms</span>
                </a>
            </li>

            <li class="sidebar-item  {{ request()->routeIs('admin.dashboard*') ? 'active' : '' }}">
                <a class="sidebar-link" href="ui-cards.html">
                    <i class="align-middle" data-feather="grid"></i> <span class="align-middle">Cards</span>
                </a>
            </li>

            <li class="sidebar-item  {{ request()->routeIs('admin.dashboard*') ? 'active' : '' }}">
                <a class="sidebar-link" href="ui-typography.html">
                    <i class="align-middle" data-feather="align-left"></i> <span class="align-middle">Typography</span>
                </a>
            </li>

            <li class="sidebar-item  {{ request()->routeIs('admin.dashboard*') ? 'active' : '' }}">
                <a class="sidebar-link" href="icons-feather.html">
                    <i class="align-middle" data-feather="coffee"></i> <span class="align-middle">Icons</span>
                </a>
            </li>

            <li class="sidebar-header">
                Plugins & Addons
            </li>

            <li class="sidebar-item  {{ request()->routeIs('admin.dashboard*') ? 'active' : '' }}">
                <a class="sidebar-link" href="charts-chartjs.html">
                    <i class="align-middle" data-feather="bar-chart-2"></i> <span class="align-middle">Charts</span>
                </a>
            </li>

            <li class="sidebar-item  {{ request()->routeIs('admin.dashboard*') ? 'active' : '' }}">
                <a class="sidebar-link" href="maps-google.html">
                    <i class="align-middle" data-feather="map"></i> <span class="align-middle">Maps</span>
                </a>
            </li> --}}
        </ul>


    </div>
</nav>
    