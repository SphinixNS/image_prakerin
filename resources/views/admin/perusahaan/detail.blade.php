@extends('admin.layout.app')
@section('title', 'Perusahaan')
@section('content')

    <style>
        .map-container {
            position: relative;
            height: 100px;
            /* Set fixed height for the map */
            overflow: hidden;
            background: #eee;
        }

        .map-container iframe {
            top: 1rem;
            left: 1rem;
            width: 100%;
            height: 100%;
            border: 0;
        }
    </style>

    <main class="content">
        <div class="container-fluid p-0">

            <div class="row">

                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="card-title mb-0">{{ $data->nama }}</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">MOU</th>
                                            <td>:</td>
                                            <td>{{ $data->mou }}</td>
                                        </tr>
                                        <tr>    
                                            <th scope="col">Alamat</th>
                                            <td>:</td>
                                            <td>{{ $data->alamat }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Email</th>
                                            <td>:</td>
                                            <td>{{ $data->email }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Telepon</th>
                                            <td>:</td>
                                            <td>{{ $data->no_telp }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Website</th>
                                            <td>:</td>
                                            <td>{{ $data->website }}</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3" class="p-0">
                                                <div class="map-container mb-2 mt-2 mx-2">
                                                    <iframe
                                                        src="{{$data -> lokasi}}"
                                                        frameborder="0" allowfullscreen="" aria-hidden="false"
                                                        tabindex="0">
                                                    </iframe>
                                                </div>
                                            </td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

               @foreach ($data -> jurusan as $jurusan)
                    {{-- Start List Siswa --}}
                <div class="col-7">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="card-title mb-0"> List Siswa </h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table ">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Kelas</th>
                                            <th scope="col">Action</th>


                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td style="width: 20%">
                                                    CAHYA MUNARA PERMADI</td>
                                            <td>11 PPLG 2</td>
                                            <td>Diterima</td>


                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td style="width: 20%">
                                                    CHEPI SYAHBUDIEN BASIL</td>
                                            <td>11 PPLG 2</td>
                                            <td>Menunggu</td>
                                        </tr>
                                        
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- End List Siswa --}}

                {{-- Start Detail Jurusan dan Pembimbing --}}
                <div class="col-5">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="card-title mb-0"> {{ $jurusan -> jurusan -> nama }} </h5>
                        </div>
                        <div class="card-body mt-0">
                            <div class="table-responsive">
                                <table class="table ">
                                    <thead>
                                        <tr>
                                            <th scope="col">Kuota</th>
                                            <td>:</td>
                                            <td>
                                                {{ $jurusan -> kuota }} orang
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Siswa</th>
                                            <td>:</td>
                                            <td>
                                                ?? orang
                                            </td>
                                        </tr>
                                        
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="card-title mb-0"> Pembimbing </h5>
                        </div>
                        
                        @if ($data -> pembimbing)
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table ">
                                    <thead>
                                        <tr>
                                            <th scope="col">Nama</th>
                                            <td>:</td>
                                            <td>Nina Nurhayani</td>
                                        </tr>
                                        <tr>
                                            <th scope="col">NIP</th>
                                            <td>:</td>
                                            <td>197912012010102010</td>
                                        </tr>
                                        <tr>
                                        <th scope="col">Alamat</th>
                                            <td>:</td>
                                            <td>Tidak Tersedia</td>
                                        </tr>
                                        <tr>
                                        <th scope="col">No. Telp</th>
                                            <td>:</td>
                                            <td>081020001502</td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Jenis Kelamin</th>
                                            <td>:</td>
                                            <td>Perempuan</td>
                                        </tr>
                                      
                                        </thead>
                                    <tbody>
                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        @endif

                    </div>
                </div>

            
                {{-- End  Detail Jurusan dan Pembimbing  --}}
               
               @endforeach


            </div>



        </div>
    </main>
@endsection

@section('scripts')

@endsection
