@extends('frontend.layouts.menu.app', ['title' => 'Riwayat Kehadiran'])

@section('content')
    <div class="container-riwayat">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <h5 class="card-header">Tempat PKL</h5>
                    <div class="table-responsive text-nowrap">
                        <table class="table">
                            <tbody class="table-border-bottom-0">
                                <tr>
                                    <td><strong>Perusahaan</strong>
                                    </td>
                                    <td>:</td>
                                    <td><span class="me-1">BMT SMKN 11</span></td>
                                </tr>
                                <tr>
                                    <td><strong>Periode</strong>
                                    </td>
                                    <td>:</td>
                                    <td><span class="me-1">Oktober (2023) - Maret (2024)</span></td>
                                </tr>
                                <tr>
                                    <td><strong>Alamat</strong>
                                    </td>
                                    <td>:</td>
                                    <td><span class="me-1">SMK Negeri 11 Bandung</span></td>
                                </tr>
                                <tr>
                                    <td><strong>No Telepon</strong>
                                    </td>
                                    <td>:</td>
                                    <td><span class="me-1">081223463156</span></td>
                                </tr>
                                <tr>
                                    <td><strong>Fax</strong>
                                    </td>
                                    <td>:</td>
                                    <td><span class="me-1">081223463156</span></td>
                                </tr>
                                <tr>
                                    <td><strong>Email</strong>
                                    </td>
                                    <td>:</td>
                                    <td><span class="me-1">smtsmkn11@gmail.com</span></td>
                                </tr>
                                <tr>
                                    <td><strong>Website</strong>
                                    </td>
                                    <td>:</td>
                                    <td><span class="me-1">bmt.smkn11.sch.id</span></td>
                                </tr>
                                <tr>
                                    <td><strong>Pembimbing</strong>
                                    </td>
                                    <td>:</td>
                                    <td><span class="me-1">Nina Murhayani</span></td>
                                </tr>
                                <tr>
                                    <td><strong>No Telepon Pembimbing</strong>
                                    </td>
                                    <td>:</td>
                                    <td><span class="me-1">081020001502</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-riwayat">
        <div class="row">
            <div class="col-12">
                <div id="calendar"></div>
            </div>
        </div>
    </div>

    <div id="modal-action" class="modal fade" tabindex="-1" aria-labelledby="modal-action-label" aria-hidden="true">
        <div class="modal-dialog">
            <form action="#" method="POST">
                <div class="modal-content-riwayat">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modal-action-label">Lorem Ipsum</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3">
                                    <input type="text" name="start-date" class="form-control">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <input type="text" name="end-date" class="form-control">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <textarea name="title" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
