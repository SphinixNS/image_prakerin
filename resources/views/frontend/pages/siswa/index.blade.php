@extends('frontend.layouts.menu.app', ['title' => 'Siswa'])

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-12 mb-4 order-0">
                <div class="card">
                    <div class="d-flex align-items-end row">
                        <div class="col-sm-12">
                            <div class="card-body">
                                <h5 class="card-title text-primary">Hi, LOREM IPSUM! 🎉</h5>
                                <p class="mb-4">
                                    Selamat <span class="fw-bold">Anda</span> Sudah Berhasil Login, Silahkan lengkapi profile anda Segera
                                </p>
                                <a href="/edit-profile" class="btn btn-sm btn-outline-primary">My Profile</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cards-container mb-3">
            <div class="card card-1">
                <div class="card-header">
                    <i class="fa fa-calendar-day card-icon"></i>
                    <h2>Absen</h2>
                    <span class="badge">0</span>
                </div>
                <ul class="card-details">
                    <li>Jumlah Absen: 0</li>
                    <li>Tidak Absen: 0</li>
                </ul>
                <a href="/absen" class="card-btn">Lihat Absen</a>
            </div>

            <div class="card card-2">
                <div class="card-header">
                    <i class="fa fa-tachometer-alt card-icon"></i>
                    <h2>Aktivitas</h2>
                    <span class="badge">0</span>
                </div>
                <ul class="card-details">
                    <li>Belum Mengikuti: 0</li>
                    <li>Sudah Mengikuti: 0</li>
                </ul>
                <a href="/absen" class="card-btn">Lihat Aktivitas</a>
            </div>

            <div class="card card-3">
                <div class="card-header">
                    <i class="fa fa-chart-line card-icon"></i>
                    <h2>Nilai</h2>
                    <span class="badge">0</span>
                </div>
                <ul class="card-details">
                    <li>Belum Diberi: 0</li>
                    <li>Sudah Diberi: 0</li>
                </ul>
                <a href="/nilai" class="card-btn">Lihat Nilai</a>
            </div>

            <div class="card card-4">
                <div class="card-header">
                    <i class="fa fa-history card-icon"></i>
                    <h2>Riwayat Kehadiran</h2>
                    <span class="badge">0</span>
                </div>
                <ul class="card-details">
                    <li>Belum Mengikuti: 0</li>
                    <li>Sudah Mengikuti: 0</li>
                </ul>
                <a href="/riwayat-kehadiran" class="card-btn">Lihat Kehadiran</a>
            </div>
        </div>

        <div class="attendance-container">
            <div class="attendance-cards">
                <div class="attendance-card">
                    <p>Hadir</p>
                    <h2>0</h2>
                    <button class="btn btn-primary"><span style="color: white">Lihat</span></button>
                </div>
                <div class="attendance-card">
                    <p>Izin</p>
                    <h2>0</h2>
                    <button class="btn btn-primary "><span style="color: white">Lihat</span></button>
                </div>
                <div class="attendance-card">
                    <p>Sakit</p>
                    <h2>0</h2>
                    <button class="btn btn-primary"><span style="color: white">Lihat</span></button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
