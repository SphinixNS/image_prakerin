@extends('frontend.layouts.menu.app', ['title' => 'Absen'])

@section('content')
    <div class="container-absen">
        <div class="attendance-buttons">
            <button class="tab" id="hadir-button">Hadir</button>
            <button class="tab-izin">Izin</button>
            <button class="tab-sakit">Sakit</button>
        </div>
        <main class="content">
            <div class="no-data">
                <img src="{{ asset('/frontend/menu/assets/img/avatars/hand-drawn-no-data-concept.png') }}" alt="No Data Icon" class="no-data-image">
                <p>Tidak Ada Data Absen Kamu Nih!</p>
            </div>
        </main>
    </div>

    <div id="modal-hadir" class="modal">
        <div class="modal-content">
            <span class="close-modal">&times;</span>
            <h2>Konfirmasi Kehadiran</h2>
            <p>Apakah kamu yakin ingin menandai kehadiran?</p>
            <button class="confirm-button">Ya</button>
            <button class="cancel-button">Batal</button>
        </div>
    </div>
@endsection
