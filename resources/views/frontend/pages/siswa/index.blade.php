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
                                <a href="#" class="btn btn-sm btn-outline-primary">My Profile</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cards-container">
            <div class="card card-1">
                <div class="card-header">
                    <i class="fa fa-calendar-check card-icon"></i>
                    <h2>Absen</h2>
                    <span class="badge">0</span>
                </div>
                <ul class="card-details">
                    <li>Jumlah Absen: 0</li>
                    <li>Tidak Absen: 0</li>
                </ul>
                <button class="card-btn">Lihat Absen</button>
            </div>

            <div class="card card-2">
                <div class="card-header">
                    <i class="fa fa-clipboard-list card-icon"></i>
                    <h2>Kuis</h2>
                    <span class="badge">0</span>
                </div>
                <ul class="card-details">
                    <li>Belum Mengikuti: 0</li>
                    <li>Sudah Mengikuti: 0</li>
                </ul>
                <button class="card-btn">Lihat Kuis</button>
            </div>

            <div class="card card-3">
                <div class="card-header">
                    <i class="fa fa-graduation-cap card-icon"></i>
                    <h2>Nilai</h2>
                    <span class="badge">0</span>
                </div>
                <ul class="card-details">
                    <li>Belum Diberi: 0</li>
                    <li>Sudah Diberi: 0</li>
                </ul>
                <button class="card-btn">Lihat Nilai</button>
            </div>

            <div class="card card-4">
                <div class="card-header">
                    <i class="fa fa-graduation-cap card-icon"></i>
                    <h2>Nilai</h2>
                    <span class="badge">0</span>
                </div>
                <ul class="card-details">
                    <li>Belum Mengikuti: 0</li>
                    <li>Sudah Mengikuti: 0</li>
                </ul>
                <button class="card-btn">Lihat Materi</button>
            </div>
        </div>

        <div class="attendance-container">
            <h2>Absensi Kehadiran</h2>
            <div class="attendance-cards">
                <div class="attendance-card">
                    <h3>Hadir</h3>
                    <p>0</p>
                    <button class="card-btn">Lihat</button>
                </div>
                <div class="attendance-card">
                    <h3>Alpa</h3>
                    <p>0</p>
                    <button class="card-btn">Lihat</button>
                </div>
                <div class="attendance-card">
                    <h3>Izin</h3>
                    <p>0</p>
                    <button class="card-btn">Lihat</button>
                </div>
                <div class="attendance-card">
                    <h3>Sakit</h3>
                    <p>0</p>
                    <button class="card-btn">Lihat</button>
                </div>
                <div class="attendance-card">
                    <h3>Belum Diabsen</h3>
                    <p>0</p>
                    <button class="card-btn">Lihat</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
