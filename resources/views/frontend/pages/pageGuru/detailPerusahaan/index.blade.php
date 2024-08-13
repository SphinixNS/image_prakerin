@extends('frontend.layouts.menu-guru.app', ['title' => 'Guru'])

@section('content')
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-2"><span class="text-muted fw-light">Detail/</span> SAMSAT PAJAJARAN BDG</h4>
            <div class="row">
                <div class="col-xl">
                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">SAMSAT PAJAJARAN BDG</h5>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">MOU</th>
                                        <td>:</td>
                                        <td>tidak</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Alamat</th>
                                        <td>:</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Email</th>
                                        <td>:</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Telepon</th>
                                        <td>:</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Website</th>
                                        <td>:</td>
                                        <td></td>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-xl">
                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Pembimbing dan Kuota</h5>
                        </div>
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        Manajemen Perkantoran dan Layanan Bisnis
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <table class="table-nilai">
                                            <thead class="head-nilai">
                                                <tr>
                                                    <th>Kuota</th>
                                                    <th>Siswa</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>5</td>
                                                    <td>3</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Pembimbing
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <table class="table-nilai">
                                            <thead class="head-nilai">
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    <th>Perusahaan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Bapak Test</td>
                                                    <td>Perusahaan</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Bapak Test</td>
                                                    <td>Perusahaan</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Bapak Test</td>
                                                    <td>Perusahaan</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="jarak mb-4">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            List Siswa
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <table class="table-nilai">
                                <thead class="head-nilai">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Kelas</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Siswa Test</td>
                                        <td>Rekayasa Perangkat Lunak</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Siswa Test</td>
                                        <td>Rekayasa Perangkat Lunak</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Siswa Test</td>
                                        <td>Rekayasa Perangkat Lunak</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
                <div class="jarak mb-4">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                List Siswa
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <table class="table-nilai">
                                    <thead class="head-nilai">
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Kelas</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Siswa Test</td>
                                            <td>Rekayasa Perangkat Lunak</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Siswa Test</td>
                                            <td>Rekayasa Perangkat Lunak</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Siswa Test</td>
                                            <td>Rekayasa Perangkat Lunak</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="jarak mb-4">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                List Siswa
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <table class="table-nilai">
                                    <thead class="head-nilai">
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Kelas</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Siswa Test</td>
                                            <td>Rekayasa Perangkat Lunak</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Siswa Test</td>
                                            <td>Rekayasa Perangkat Lunak</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Siswa Test</td>
                                            <td>Rekayasa Perangkat Lunak</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
        data-bs-parent="#accordionExample">
        <div class="accordion" id="nestedAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="nestedHeadingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#nestedCollapseOne" aria-expanded="true" aria-controls="nestedCollapseOne">
                        MUHAMMAD RIDZKI NURHADRAMI
                    </button>
                </h2>
                <div id="nestedCollapseOne" class="accordion-collapse collapse show" aria-labelledby="nestedHeadingOne"
                    data-bs-parent="#nestedAccordion">
                    <div class="accordion-body">
                        <table class="table-nilai">
                            <thead class="head-nilai">
                                <tr>
                                    <th>No</th>
                                    <th>Alamat</th>
                                    <th>Jurusan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Jl. Bohong Awikwok</td>
                                    <td>Rekayasa Perangkat Lunak</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="nestedHeadingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#nestedCollapseTwo" aria-expanded="false" aria-controls="nestedCollapseTwo">
                        NOVAN ARRIJAL
                    </button>
                </h2>
                <div id="nestedCollapseTwo" class="accordion-collapse collapse" aria-labelledby="nestedHeadingTwo"
                    data-bs-parent="#nestedAccordion">
                    <div class="accordion-body">
                        <table class="table-nilai">
                            <thead class="head-nilai">
                                <tr>
                                    <th>No</th>
                                    <th>Alamat</th>
                                    <th>Jurusan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>2</td>
                                    <td>Jl. Bohong Awikwok</td>
                                    <td>Rekayasa Perangkat Lunak</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="nestedHeadingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#nestedCollapseThree" aria-expanded="false" aria-controls="nestedCollapseThree">
                        RIZKY ALFIN PRATAMA
                    </button>
                </h2>
                <div id="nestedCollapseThree" class="accordion-collapse collapse" aria-labelledby="nestedHeadingThree"
                    data-bs-parent="#nestedAccordion">
                    <div class="accordion-body">
                        <table class="table-nilai">
                            <thead class="head-nilai">
                                <tr>
                                    <th>No</th>
                                    <th>Alamat</th>
                                    <th>Kelas</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>3</td>
                                    <td>Jl. Bohong Awikwok</td>
                                    <td>Rekayasa Perangkat Lunak</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> --}}
@endsection
