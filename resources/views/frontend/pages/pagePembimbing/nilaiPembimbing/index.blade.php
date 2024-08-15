@extends('frontend.layouts.menu-pembimbing.app', ['title' => 'Nilai Siswa'])

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">

        <div class="card">
            <h5 class="card-header">Detail Nilai Rizky Alfin Pratama</h5>
            <div class="table-wrapper">
                <table class="table-nilai">
                    <thead class="head-nilai">
                        <tr>
                            <th>No</th>
                            <th>Komponen</th>
                            <th>Skor (0-100)</th>
                            <th>Keterangan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Tanggung Jawab</td>
                            <td>85</td>
                            <td>A</td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="/edit-nilai"><i class="bx bx-edit-alt me-1"></i>
                                            Edit Nilai</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Etika Kerja</td>
                            <td>90</td>
                            <td>A</td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="/edit-nilai"><i class="bx bx-edit-alt me-1"></i>
                                            Edit Nilai</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Komunikasi</td>
                            <td>88</td>
                            <td>A</td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="/edit-nilai"><i class="bx bx-edit-alt me-1"></i>
                                            Edit Nilai</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
