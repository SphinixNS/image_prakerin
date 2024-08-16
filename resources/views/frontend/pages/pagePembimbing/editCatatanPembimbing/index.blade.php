@extends('frontend.layouts.menu-pembimbing.app', ['title' => 'Edit Catatan Siswa'])

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <h5 class="card-header">Edit Catatan Rizky Alfin Pratama</h5>
            <div class="container-xxl flex-grow-1 container-p-y">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="defaultFormControlInput" class="form-label">Tanggal</label>
                        <input type="date" class="form-control" id="defaultFormControlInput" placeholder="08/15/2024"
                            aria-describedby="defaultFormControlHelp" />
                    </div>
                    <div>
                        <label for="exampleFormControlTextarea1" class="form-label">Catatan</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Test Aja YGY"></textarea>
                    </div>
                </div>
            </div>
            <div class="text-end">
                <a href="/pembimbing-catatan" class="btn btn-info mt-5" style="background-color: #009688";>Submit</a>
            </div>
        </div>
    </div>
@endsection
