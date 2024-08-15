@extends('frontend.layouts.menu-pembimbing.app', ['title' => 'Detail Siswa'])

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <main class="content">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                            aria-expanded="true" aria-controls="collapseOne">
                            Detail Dari Alfin
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="table-wrapper">
                                <table class="table-nilai">
                                    <tr>
                                        <th scope="row">NIS</th>
                                        <td>:</td>
                                        <td>2106510354</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Nama</th>
                                        <td>:</td>
                                        <td>Rizky Alfin Pratama</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">L/P</th>
                                        <td>:</td>
                                        <td>L</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Kelas</th>
                                        <td>:</td>
                                        <td>12 PPLG 2</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Konsentrasi</th>
                                        <td>:</td>
                                        <td>Rekayasa Perangkat Lunak</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Catatan</th>
                                        <td>:</td>
                                        <td><a href="/pembimbing-catatan" class=""><button
                                                    class="btn btn collapsed btn-info"
                                                    style="background-color: #009688">Catatan</button></a></td>

                                    </tr>
                                    <tr>
                                        <th scope="row">Nilai</th>
                                        <td>:</td>
                                        <td><a href="/pembimbing-nilai" class=""><button
                                                    class="btn btn collapsed btn-info"
                                                    style="background-color: #009688">Lihat Nilai</button></a></td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
