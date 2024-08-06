@extends('admin.layout.app')
@section('title', 'Tambah Kelas')
@section('content')
    <main class="content">
        <div class="container-fluid p-0">

            {{-- <h1 class="h3 mb-3">Kelas</h1> --}}

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h1 class="card-title mb-0">{{ $data ? 'Edit Data' : 'Tambah Data' }} Kelas</h1>
                            {{-- <button type="button" class="btn btn-primary">Add Data</button> --}}
                        </div>
                        <div class="card-body">
                            <form
                                action="{{ $data ? route('admin.kelas.update', $data->id) : route('admin.kelas.store') }}"
                                method="POST">
                                @csrf

                                <label class="form-label">Nama Kelas</label>
                                <input type="text" name="nama" class="form-control mb-3" placeholder=""
                                    value="{{ old('nama', $data->nama ?? '') }}" required>


                                <label class="form-label">Konsentrasi </label>
                                <select name="konsentrasi_id" class="form-select mb-3">
                                    @if ($data)
                                        @foreach ($konsentrasi as $item)
                                        <option value="{{$item -> id}}" {{ old('konsentrasi_id') == $item -> id || $data->konsentrasi_id == $item -> id ? 'selected' : '' }}> {{ $item -> nama }}</option>
                                        @endforeach
                                      
                                    @else
                                        <option value="" hidden selected>Pilih Konsentrasi</option>
                                        @foreach ($konsentrasi as $item)
                                        <option value="{{$item -> id}}" > {{ $item -> nama }}</option>
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
