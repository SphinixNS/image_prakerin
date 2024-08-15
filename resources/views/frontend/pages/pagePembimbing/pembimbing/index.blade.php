@extends('frontend.layouts.menu-pembimbing.app', ['title' => 'Pembimbing'])

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
                                <a href="/edit-profile-pembimbing" class="btn btn-sm btn-green">My Profile</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <main class="content">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Detail Perusahaan
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <table class="table-nilai">
                                <tr>
                                    <th scope="row">Nama Perusahaan</th>
                                    <td>:</td>
                                    <td>BPSDM</td>
                                </tr>
                                <tr>
                                    <th scope="row">Alamat</th>
                                    <td>:</td>
                                    <td>Jl. Kol Masturi KM 3.5 No 11 Kota Cimahi</td>
                                </tr>
                                <tr>
                                    <th scope="row">Email</th>
                                    <td>:</td>
                                    <td>bpsdm@gmail.com</td>
                                </tr>
                                <tr>
                                    <th scope="row">Fax</th>
                                    <td>:</td>
                                    <td>085762205113</td>
                                </tr>
                                <tr>
                                    <th scope="row">No Telepon</th>
                                    <td>:</td>
                                    <td>085762205113</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <div class="card">
            <h5 class="card-header">Daftar Siswa</h5>
            <div class="card-body">
                <section class="section-padding-dump">
                    <div class="card-container-student">
                        <div class="card-student">
                            <div class="card-icon-student">
                                <i class="fas fa-user-graduate fa-3x" style="color:#009688;"></i>
                            </div>
                            <div class="card-content-student">
                                <div class="card-title-student">
                                    <h6>RIZKY ALFIN PRATAMA</h6>
                                </div>
                                <div class="card-description-student">
                                    <p>Rekayasa Perangkat Lunak</p>
                                    <p>"Ini Orang Awikwok Banget"</p>
                                </div>
                            </div>
                            <div class="card-buttons-student">
                                <a href="student" class="apply-btn-link">
                                    <button class="apply-btn">Detail Siswa</button>
                                </a>
                            </div>
                        </div>
                        <div class="card-student">
                            <div class="card-icon-student">
                                <i class="fas fa-user-graduate fa-3x" style="color:#009688;"></i>
                            </div>
                            <div class="card-content-student">
                                <div class="card-title-student">
                                    <h6>RIZKY ALFIN PRATAMA</h6>
                                </div>
                                <div class="card-description-student">
                                    <p>Rekayasa Perangkat Lunak</p>
                                    <p>"Ini Orang Awikwok Banget"</p>
                                </div>
                            </div>
                            <div class="card-buttons-student">
                                <a href="student" class="apply-btn-link">
                                    <button class="apply-btn">Detail Siswa</button>
                                </a>
                            </div>
                        </div>
                        <div class="card-student">
                            <div class="card-icon-student">
                                <i class="fas fa-user-graduate fa-3x" style="color:#009688;"></i>
                            </div>
                            <div class="card-content-student">
                                <div class="card-title-student">
                                    <h6>RIZKY ALFIN PRATAMA</h6>
                                </div>
                                <div class="card-description-student">
                                    <p>Rekayasa Perangkat Lunak</p>
                                    <p>"Ini Orang Awikwok Banget"</p>
                                </div>
                            </div>
                            <div class="card-buttons-student">
                                <a href="student" class="apply-btn-link">
                                    <button class="apply-btn">Detail Siswa</button>
                                </a>
                            </div>
                        </div>
                        <div class="card-student">
                            <div class="card-icon-student">
                                <i class="fas fa-user-graduate fa-3x" style="color:#009688;"></i>
                            </div>
                            <div class="card-content-student">
                                <div class="card-title-student">
                                    <h6>RIZKY ALFIN PRATAMA</h6>
                                </div>
                                <div class="card-description-student">
                                    <p>Rekayasa Perangkat Lunak</p>
                                    <p>"Ini Orang Awikwok Banget"</p>
                                </div>
                            </div>
                            <div class="card-buttons-student">
                                <a href="student" class="apply-btn-link">
                                    <button class="apply-btn">Detail Siswa</button>
                                </a>
                            </div>
                        </div>
                        <div class="card-student">
                            <div class="card-icon-student">
                                <i class="fas fa-user-graduate fa-3x" style="color:#009688;"></i>
                            </div>
                            <div class="card-content-student">
                                <div class="card-title-student">
                                    <h6>RIZKY ALFIN PRATAMA</h6>
                                </div>
                                <div class="card-description-student">
                                    <p>Rekayasa Perangkat Lunak</p>
                                    <p>"Ini Orang Awikwok Banget"</p>
                                </div>
                            </div>
                            <div class="card-buttons-student">
                                <a href="student" class="apply-btn-link">
                                    <button class="apply-btn">Detail Siswa</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
