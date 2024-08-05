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
                                action="{{ $data ? route('admin.tahun_ajaran.update', $data->id) : route('admin.tahun_ajaran.store') }}" method="POST">
                                @csrf

                                <label class="form-label">Tahun</label>                                
                                <input type="text" name="tahun" class="form-control mb-3" placeholder=""
                                    value="{{ old('tahun', $data->tahun ?? '') }}" required>

                                
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
