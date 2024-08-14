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
                                                {{ $jurusan -> total }} orang
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Siswa</th>
                                            <td>:</td>
                                            <td>
                                                {{$jurusan -> total - $jurusan -> kuota}} orang
                                            </td>
                                        </tr>
                                        
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
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
                                       @foreach ($jurusan -> siswa as $siswa)
                                       <tr>
                                        <td>{{ $loop -> iteration }}</td>
                                        <td><a href="/admin/siswa/detail/ {{ $siswa -> siswa -> id }}" style="text-decoration: none; color: inherit;" > {{ $siswa -> siswa -> nama }}</a></td>
                                        <td> {{ $siswa -> siswa -> kelas -> nama }}</td>
                                        <td>
                                            <div class="dropdown" style="display: flex; justify-content: center; align-items: center;">
                                                <button class="btn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                    {{ $siswa -> status == "pending" ? "Menunggu" : "Diterima" }}
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="left: 50%; transform: translateX(-50%);">
                                                    <li><a class="dropdown-item" href="{{ route('admin.pemetaan.terima', $siswa -> id) }}">Terima</a></li>
                                                    <li><a class="dropdown-item" href="{{ route('admin.pemetaan.tolak', $siswa -> id) }}">Tolak</a></li>
                                                </ul>
                                            </div>
                                        </td>


                                    </tr>
                                       @endforeach
                                        
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
                            <h5 class="card-title mb-0"> Pembimbing </h5>
                        </div>
                        
                        @if ($jurusan -> pembimbing)
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table ">
                                    <thead>
                                        <tr>
                                            <th scope="col">Nama</th>
                                            <td>:</td>
                                            <td>{{ $jurusan -> pembimbing -> pembimbing -> nama }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="col">NIP</th>
                                            <td>:</td>
                                            <td>{{ $jurusan -> pembimbing -> pembimbing -> nip }}</td>
                                        </tr>
                                        <tr>
                                        <tr>
                                        <th scope="col">No. Telp</th>
                                            <td>:</td>
                                            <td>{{ $jurusan -> pembimbing -> pembimbing -> no_telp }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Jenis Kelamin</th>
                                            <td>:</td>
                                            <td>{{ $jurusan -> pembimbing -> pembimbing -> jenkel }}</td>
                                        </tr>
                                      
                                        </thead>
                                    <tbody>
                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        @else
                        <div class="card-body">
                            <a href="{{ route('admin.pembimbing.create', ['id' => encrypt($jurusan->id)]) }}">
                                <button class="btn btn-primary">
                                    Tambah Pembimbing
                                </button>
                            </a>
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
