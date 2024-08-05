@extends('admin.layout.app')
@section('title', 'Perusahaan')
@section('content')
    <main class="content">
        <div class="container-fluid p-0">

            {{-- <h1 class="h3 mb-3">Perusahaan</h1> --}}

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h1 class="card-title mb-0">{{ $data ? 'Edit Data' : 'Tambah Data' }} Perusahaan</h1>
                            {{-- <button type="button" class="btn btn-primary">Add Data</button> --}}
                        </div>
                        <div class="card-body">
                            <form
                                action="{{ $data ? route('admin.perusahaan.update', $data->id) : route('admin.perusahaan.store') }}" method="POST">
                                @csrf

                                <label class="form-label">Nama Perusahaan</label>                                
                                <input type="text" name="nama" class="form-control mb-3" placeholder=""
                                    value="{{ old('nama', $data->nama ?? '') }}" required>

                                <label class="form-label">Alamat</label>
                                <input type="text" name="alamat" class="form-control mb-3" placeholder=""
                                    value="{{ old('alamat', $data->alamat ?? '') }}">

                                <label class="form-label">Lokasi</label>
                                <input type="text" name="lokasi" class="form-control mb-3" placeholder=""
                                    value="{{ old('lokasi', $data->lokasi ?? '') }}">

                                <label class="form-label">Email</label>
                                <input type="email" name="email" class="form-control mb-3" placeholder=""
                                    value="{{ old('email', $data->email ?? '') }}">

                                <label class="form-label">No Telepon</label>
                                <input type="tel" name="no_telp" class="form-control mb-3" placeholder=""
                                    value="{{ old('no_telp', $data->no_telp ?? '') }}">

                                <label class="form-label">Website</label>
                                <input type="url" name="website" class="form-control mb-3" placeholder=""
                                    value="{{ old('website', $data->website ?? '') }}">

                                <label class="form-label">Kuota</label>
                                <input type="number" name="kuota" class="form-control mb-3" placeholder=""
                                    value="{{ old('kuota', $data->kuota ?? '') }}" required>

                                <label class="form-label">MOU</label>
                                <select name="mou" class="form-select mb-3">
                                    @if ($data)
                                    <option value="ya" {{ old('mou') == 'ya' || $data->mou == 'ya' ? 'selected' : '' }}>
                                        Ya</option>
                                    <option value="tidak" {{ old('mou') == 'tidak' || $data->mou == 'tidak' ? 'selected' : '' }}>Tidak
                                    </option>
                                    @else
                                    <option value="" hidden selected>Pilih Status</option>
                                    <option value="ya" {{ old('mou') == 'ya'  ? 'selected' : '' }}>
                                        Ya</option>
                                    <option value="tidak" {{ old('mou') == 'tidak'  ? 'selected' : '' }}>Tidak
                                    </option>
                                    @endif
                                    
                                </select>
                                <button type="submit" class="btn btn-primary float-end">Save</button>
                            </form>


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
