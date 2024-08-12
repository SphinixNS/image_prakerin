<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="/">
            <span class="align-middle">AdminKit</span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Pages
            </li>

            <li class="sidebar-item  {{ request()->routeIs('admin.dashboard*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{route('admin.dashboard')}}">
                    <i class="align-middle" data-feather="sliders"></i>
                    <span class="align-middle">Dashboard</span>
                </a>
            </li>

            <li class="sidebar-item  {{ request()->routeIs('admin.perusahaan*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{route('admin.perusahaan.index')}}">
                    <i class="align-middle" data-feather="briefcase"></i>
                    <span class="align-middle">Perusahaan</span>
                </a>
            </li>

            <li class="sidebar-item  {{ request()->routeIs('admin.tahun_ajaran*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{route('admin.tahun_ajaran.index')}}">
                    <i class="align-middle" data-feather="calendar"></i>
                    <span class="align-middle">Tahun Ajaran</span>
                </a>
            </li>

            <li class="sidebar-item  {{ request()->routeIs('admin.jurusan*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{route('admin.jurusan.index')}}">
                    <i class="align-middle" data-feather="book"></i>
                    <span class="align-middle">Jurusan</span>
                </a>
            </li>

            <li class="sidebar-item  {{ request()->routeIs('admin.konsentrasi*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{route('admin.konsentrasi.index')}}">
                    <i class="align-middle" data-feather="layers"></i>
                    <span class="align-middle">Konsentrasi Keahlian</span>
                </a>
            </li>

            <li class="sidebar-item  {{ request()->routeIs('admin.kelas*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{route('admin.kelas.index')}}">
                    <i class="align-middle" data-feather="grid"></i>
                    <span class="align-middle">Kelas</span>
                </a>
            </li>

            <li class="sidebar-item  {{ request()->routeIs('admin.guru*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{route('admin.guru.index')}}">
                    <i class="align-middle" data-feather="user"></i>
                    <span class="align-middle">Guru</span>
                </a>
            </li>

            <li class="sidebar-item  {{ request()->routeIs('admin.pembimbing*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{route('admin.pembimbing.index')}}">
                    <i class="align-middle" data-feather="user-check"></i>
                    <span class="align-middle">Pembimbing</span>
                </a>
            </li>

            <li class="sidebar-item  {{ request()->routeIs('admin.siswa*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{route('admin.siswa.index')}}">
                    <i class="align-middle" data-feather="users"></i>
                    <span class="align-middle">Siswa</span>
                </a>
            </li>

            <li class="sidebar-item  {{ request()->routeIs('admin.pemetaan*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{route('admin.pemetaan.index')}}">
                    <i class="align-middle" data-feather="map"></i>
                    <span class="align-middle">Pemetaan</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
