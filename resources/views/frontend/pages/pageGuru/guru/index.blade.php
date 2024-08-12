@extends('frontend.layouts.menu-guru.app', ['title' => 'Guru'])

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-12 mb-3 order-0">
                <div class="card">
                    <div class="d-flex align-items-end row">
                        <div class="col-sm-12">
                            <div class="card-body">
                                <h5 class="card-title text-primary">Hi, LOREM IPSUM! 🎉</h5>
                                <p class="mb-4">
                                    Selamat <span class="fw-bold">Anda</span> Sudah Berhasil Login, Silahkan lengkapi profile
                                    anda Segera
                                </p>
                                <a href="/edit-profile-guru" class="btn btn-sm btn-pink">My Profile</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 mb-3">
            <div class="card card-1">
                <div class="card-header">
                    <i class="fa fa-calendar-day card-icon"></i>
                    <h2>Monitoring</h2>
                    <span class="badge">0</span>
                </div>
                <a href="/absen" class="card-btn">Ayo Lakukan Monitoring</a>
            </div>
        </div>

        <div class="col-12">
            <div class="card">
                <h5 class="card-header">Daftar Perusahaan</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Jumlah Siswa</th>
                                <th>Jurusan</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            <tr>
                                <td><strong>1</strong>
                                </td>
                                <td>Perusahaan</td>
                                <td><span class="me-1">20</span></td>
                                <td><span class="me-1">Rekayasa Perangkat Lunak</span></td>
                            </tr>
                            <tr>
                                <td><strong>2</strong>
                                </td>
                                <td>Perusahaan</td>
                                <td><span class="me-1">20</span></td>
                                <td><span class="me-1">Rekayasa Perangkat Lunak</span></td>
                            </tr>
                            <tr>
                                <td><strong>3</strong>
                                </td>
                                <td>Perusahaan</td>
                                <td><span class="me-1">20</span></td>
                                <td><span class="me-1">Rekayasa Perangkat Lunak</span></td>
                            </tr>
                            <tr>
                                <td><strong>4</strong>
                                </td>
                                <td>Perusahaan</td>
                                <td><span class="me-1">20</span></td>
                                <td><span class="me-1">Rekayasa Perangkat Lunak</span></td>
                            </tr>
                            <tr>
                                <td><strong>5</strong>
                                </td>
                                <td>Perusahaan</td>
                                <td><span class="me-1">20</span></td>
                                <td><span class="me-1">Rekayasa Perangkat Lunak</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>>
    @endsection
