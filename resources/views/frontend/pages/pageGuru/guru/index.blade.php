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
                <a href="/monitoring" class="card-btn">Ayo Lakukan Monitoring</a>
            </div>
        </div>

        <main class="content">
            <h1>Detail Rincian</h1>
            <h3>Siswa PKL</h3>
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
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Jumlah Siswa</th>
                                        <th>Jurusan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    <tr>
                                        <td><strong>1</strong>
                                        </td>
                                        <td>Perusahaan</td>
                                        <td><span class="me-1">20</span></td>
                                        <td><span class="me-1">Rekayasa Perangkat Lunak</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="/detail-page">
                                                        <i class="bx bx-info-circle me-1"></i> Detail
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>2</strong>
                                        </td>
                                        <td>Perusahaan</td>
                                        <td><span class="me-1">20</span></td>
                                        <td><span class="me-1">Rekayasa Perangkat Lunak</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="/detail-page">
                                                        <i class="bx bx-info-circle me-1"></i> Detail
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>3</strong>
                                        </td>
                                        <td>Perusahaan</td>
                                        <td><span class="me-1">20</span></td>
                                        <td><span class="me-1">Rekayasa Perangkat Lunak</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="/detail-page">
                                                        <i class="bx bx-info-circle me-1"></i> Detail
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>4</strong>
                                        </td>
                                        <td>Perusahaan</td>
                                        <td><span class="me-1">20</span></td>
                                        <td><span class="me-1">Rekayasa Perangkat Lunak</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="/detail-page">
                                                        <i class="bx bx-info-circle me-1"></i> Detail
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>5</strong>
                                        </td>
                                        <td>Perusahaan</td>
                                        <td><span class="me-1">20</span></td>
                                        <td><span class="me-1">Rekayasa Perangkat Lunak</span></td>
                                        <td>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="/detail-page">
                                                    <i class="bx bx-info-circle me-1"></i> Detail
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="text-end">
                                <a href="#" class="btn btn-danger mt-5" target="_blank">Download PDF</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>>
@endsection
