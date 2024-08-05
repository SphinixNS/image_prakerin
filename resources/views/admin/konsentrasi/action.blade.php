@extends('admin.layout.app')
@section('title', 'Tambah Konsentrasi')
@section('content')
    <main class="content">
        <div class="container-fluid p-0">

            {{-- <h1 class="h3 mb-3">Konsentrasi</h1> --}}

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h1 class="card-title mb-0">{{ $data ? 'Edit Data' : 'Tambah Data' }} Konsentrasi</h1>
                            {{-- <button type="button" class="btn btn-primary">Add Data</button> --}}
                        </div>
                        <div class="card-body">
                            <form
                                action="{{ $data ? route('admin.konsentrasi.update', $data->id) : route('admin.konsentrasi.store') }}"
                                method="POST">
                                @csrf

                                <label class="form-label">Nama Konsentrasi</label>
                                <input type="text" name="nama" class="form-control mb-3" placeholder=""
                                    value="{{ old('nama', $data->nama ?? '') }}" required>


                                <label class="form-label">Jurusan</label>
                                <select name="jurusan_id" class="form-select mb-3">
                                    @if ($data)
                                        @foreach ($jurusan as $item)
                                        <option value="{{$item -> id}}" {{ old('jurusan_id') == $item -> id || $data->jurusan_id == $item -> id ? 'selected' : '' }}> {{ $item -> nama }}</option>
                                        @endforeach
                                      
                                    @else
                                        <option value="" hidden selected>Pilih Jurusan</option>
                                        @foreach ($jurusan as $item)
                                        <option value="{{$item -> id}}" {{ old('jurusan_id') == $item -> id ? 'selected' : '' }}> {{ $item -> nama }}</option>
                                        @endforeach
                                       
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
