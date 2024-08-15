@extends('frontend.layouts.menu-pembimbing.app', ['title' => 'Catatan Siswa'])

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <h5 class="card-header">List Catatan Rizky Alfin Pratama</h5>
            <table class="table-nilai">
                <thead class="head-nilai">
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Catatan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>2024-08-15</td>
                        <td>Test Aja YGY</td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="/edit-catatan-pembimbing"><i class="bx bx-edit-alt me-1"></i>
                                        Ubah Catatan</a>
                                    <a class="dropdown-item" href="/hapus-catatan"><i class="bx bx-trash me-1"></i>
                                        Hapus</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>2024-08-15</td>
                        <td>Test Aja YGY</td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="/edit-catatan-pembimbing"><i class="bx bx-edit-alt me-1"></i>
                                        Ubah Catatan</a>
                                    <a class="dropdown-item" href="/hapus-catatan"><i class="bx bx-trash me-1"></i>
                                        Hapus</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>2024-08-15</td>
                        <td>Test Aja YGY</td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="/edit-nilai"><i class="bx bx-edit-alt me-1"></i>
                                        Ubah Catatan</a>
                                    <a class="dropdown-item" href="/hapus-catatan"><i class="bx bx-trash me-1"></i>
                                        Hapus</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
