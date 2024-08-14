@extends('admin.layout.app')
@section('title', 'Detail Pembimbing')
@section('content')


    <main class="content">
        <div class="container-fluid p-0">

            {{-- <h1 class="h3 mb-3">Pembimbing</h1> --}}

            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="card-title mb-0">Data Pembimbing</h5>
                        </div>
                        <div class="card-body">

                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th scope="col">Nama</th>
                                        <td>:</td>
                                        <td>{{ $data->nama }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">NIP</th>
                                        <td>:</td>
                                        <td>{{ $data->nip }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">No. Telp</th>
                                        <td>:</td>
                                        <td>{{ $data->no_telp }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Jenis Kelamin</th>
                                        <td>:</td>
                                        <td>{{ $data->jenkel }}</td>
                                    </tr>

                                </thead>

                            </table>
                        </div>
                    </div>
                </div>
                @if ($data->perusahaan)
                    @foreach ($data->perusahaan as $perusahaan)
                        <div class="col-6">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h5 class="card-title mb-0">Data Perusahaan</h5>
                                </div>
                                <div class="card-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">MOU</th>
                                                <td>:</td>
                                                <td>
                                                    <a href="{{ route('admin.perusahaan.detail', $perusahaan -> perusahaan -> perusahaan -> id) }}" style="text-decoration: none; color: inherit;">
                                                        {{ $perusahaan -> perusahaan -> perusahaan -> nama }}
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Email</th>
                                                <td>:</td>
                                                <td>{{ $perusahaan -> perusahaan -> perusahaan ->email }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Telepon</th>
                                                <td>:</td>
                                                <td>{{ $perusahaan -> perusahaan -> perusahaan ->no_telp }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Website</th>
                                                <td>:</td>
                                                <td>{{ $perusahaan -> perusahaan -> perusahaan ->website }}</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>



        </div>
    </main>
@endsection

@section('scripts')




@endsection
