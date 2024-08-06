@extends('admin.layout.app')
@section('title', 'Tambah Guru')
@section('content')
    <main class="content">
        <div class="container-fluid p-0">

            {{-- <h1 class="h3 mb-3">Guru</h1> --}}

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h1 class="card-title mb-0">{{ $data ? 'Edit Data' : 'Tambah Data' }} Guru</h1>
                        </div>
                        <div class="card-body">
                            <form action="{{ $data ? route('admin.guru.update', $data->id) : route('admin.guru.store') }}"
                                method="POST">
                                @csrf

                                <label class="form-label">Nama Guru</label>
                                <input type="text" name="nama" class="form-control mb-3" placeholder="" value="{{ old('nama', $data->nama ?? '') }}" required>
                            
                                <label class="form-label">NIP</label>
                                <input type="text" name="nip" class="form-control mb-3" placeholder="" value="{{ old('nip', $data->nip ?? '') }}" required>
                            
                                <label class="form-label">Alamat</label>
                                <input type="text" name="alamat" class="form-control mb-3" placeholder="" value="{{ old('alamat', $data->alamat ?? '') }}" >
                            
                                <label class="form-label">Jenis Kelamin</label>
                                <select name="jenkel" class="form-control mb-3" >
                                    <option value="">Pilih Jenis Kelamin</option>
                                    <option value="Laki-laki" {{ old('jenkel', $data->jenkel ?? '') == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                    <option value="Perempuan" {{ old('jenkel', $data->jenkel ?? '') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                                </select>
                            
                                <label class="form-label">Telepon</label>
                                <input type="text" name="telp" class="form-control mb-3" placeholder="" value="{{ old('telp', $data->telp ?? '') }}" >
                            

                                <button type="submit" class="btn btn-primary float-end">Save</button>
                            </form>


                        </div>
                    </div>
                </div>
            </div>



        </div>
    </main>
@endsection

@section('scripts')

@endsection
