@extends('admin.layout.app')
@section('title', 'Tambah Jurusan')
@section('content')
    <main class="content">
        <div class="container-fluid p-0">

            {{-- <h1 class="h3 mb-3">Jurusan</h1> --}}

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h1 class="card-title mb-0">{{ $data ? 'Edit Data' : 'Tambah Data' }} Jurusan</h1>
                            {{-- <button type="button" class="btn btn-primary">Add Data</button> --}}
                        </div>
                        <div class="card-body">
                            <form
                                action="{{ $data ? route('admin.jurusan.update', $data->id) : route('admin.jurusan.store') }}" method="POST">
                                @csrf

                                <label class="form-label">Nama Jurusan</label>                                
                                <input type="text" name="nama" class="form-control mb-3" placeholder=""
                                    value="{{ old('nama', $data->nama ?? '') }}" required>

                             
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
