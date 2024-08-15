@extends('frontend.layouts.menu.app', ['title' => 'Nilai'])

@section('content')
    <div class="container-absen">
        <main class="content">
            <h1>Nilai Anda</h1>
            <h3>Nilai Siswa di Perusahaan</h3>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                            aria-expanded="true" aria-controls="collapseOne">
                            Penilaian Pembimbing Perusahaan
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="table-wrapper">
                                <table class="table-nilai">
                                    <thead class="head-nilai">
                                        <tr>
                                            <th>No</th>
                                            <th>Kriteria Penilaian</th>
                                            <th>Nilai</th>
                                            <th>Keterangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Kedisiplinan</td>
                                            <td>85</td>
                                            <td>Memenuhi standar disiplin kerja yang diharapkan.</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Kerja Sama</td>
                                            <td>88</td>
                                            <td>Kemampuan berkolaborasi dengan tim dan rekan kerja.</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Kejujuran</td>
                                            <td>90</td>
                                            <td>Kejujuran dalam melaksanakan tugas dan melaporkan hasil.</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="text-end">
                                    <a href="#" class="btn btn-danger mt-5" target="_blank">Download PDF</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Penilaian Guru Pembimbing
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <table class="table-nilai">
                                    <thead class="head-nilai">
                                        <tr>
                                            <th>No</th>
                                            <th>Kriteria Penilaian</th>
                                            <th>Nilai</th>
                                            <th>Keterangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Kerajinan</td>
                                            <td>87</td>
                                            <td>Ketelitian dan ketekunan dalam menyelesaikan tugas.</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Inisiatif</td>
                                            <td>89</td>
                                            <td>Kemampuan untuk mengambil inisiatif dan mencari solusi.</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Kemampuan Teknis</td>
                                            <td>92</td>
                                            <td>Kemampuan teknis yang relevan dengan bidang studi.</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="text-end">
                                    <a href="#" class="btn btn-danger mt-5" target="_blank">Download PDF</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Penilaian Pribadi
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <table class="table-nilai">
                                    <thead class="head-nilai">
                                        <tr>
                                            <th>No</th>
                                            <th>Kriteria Penilaian</th>
                                            <th>Nilai</th>
                                            <th>Keterangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Tanggung Jawab</td>
                                            <td>85</td>
                                            <td>Komitmen terhadap tugas dan tanggung jawab.</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Etika Kerja</td>
                                            <td>90</td>
                                            <td>Etika kerja dan profesionalisme.</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Komunikasi</td>
                                            <td>88</td>
                                            <td>Kemampuan berkomunikasi dengan efektif.</td>
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
            </div>
        </main>
    </div>
@endsection
