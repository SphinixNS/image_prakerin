@extends('frontend.layouts.menu-pembimbing.app', ['title' => 'Edit Nilai Siswa'])

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <h5 class="card-header">Berikan Nilai Rizky Alfin Pratama</h5>

                <table class="table-nilai">
                    <thead class="head-nilai">
                        <tr>
                            <th>No</th>
                            <th>Komponen</th>
                            <th>Skor (0-100)</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Tanggung Jawab</td>
                            <td>
                                <div class="input-group">
                                    <input type="number" class="form-control" placeholder="85" aria-label="nilai"
                                        aria-describedby="basic-addon11" />
                                </div>
                            </td>
                            <td>A</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Etika Kerja</td>
                            <td>
                                <div class="input-group">
                                    <input type="number" class="form-control" placeholder="90" aria-label="nilai"
                                        aria-describedby="basic-addon11" />
                                </div>
                            </td>
                            <td>A</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Komunikasi</td>
                            <td>
                                <div class="input-group">
                                    <input type="number" class="form-control" placeholder="88" aria-label="nilai"
                                        aria-describedby="basic-addon11" />
                                </div>
                            </td>
                            <td>A</td>
                        </tr>
                    </tbody>
                </table>
                <div class="text-end">
                    <a href="/pembimbing-nilai" class="btn btn-info mt-5" style="background-color: #009688";>Submit</a>
                </div>
            </div>
        </div>
    </div>
@endsection
