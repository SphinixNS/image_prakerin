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
                <div class="card-body">
                    <h5 class="activity-text">Pengisian Laporan Kegiatan Harian</h5>
                    <form method="post" action="/siswa/aktivitas/isi">
                        @csrf
                        <input type="hidden" name="id_siswa" value="">
                        <input type="hidden" name="id_perusahaan" value="">
                        <input type="hidden" name="tanggal" value="">
                        <div class="form-group mb-3">
                            <label for="input-1">Kegiatan</label>
                            <textarea name="kegiatan" id="" rows="3" placeholder="Kegiatan yang saya lakukan hari ini ..."
                                class="form-control" required></textarea>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="input-4" class="form-label">Jam Datang</label>
                                <input class="form-control" type="time" name="mulai" required />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="input-4" class="form-label">Jam Kembali</label>
                                <input class="form-control" type="time" name="selesai" required />
                            </div>
                            <div class="mb-3 col-md-6">
                                <div class="form-group">
                                    <label for="input-5">Divisi</label>
                                    <input type="devision" name="devision" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="d-flex flex-row-reverse">
                                    <button type="submit" class="btn btn-primary px-5">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>

                    <div id="myModal" class="modal">

                        <div class="modal-content">
                            <div class="modal-header">
                                <span class="close">&times;</span>

                            </div>
                            <div class="modal-body mb-3">
                                <form method="POST" action="/siswa/absen">
                                    @csrf
                                    <div class="row">
                                        <div class="camera" style="margin-left: 18%;">
                                            <video id="video">Video stream not available.</video>
                                            <canvas id="canvas"> </canvas>
                                            <div class="output" style="border-radius: 0px;">
                                                <img id="photo" style="border-radius: 0px; margin-bottom: 20px;"
                                                    alt="The screen capture will appear in this box." />
                                            </div>
                                        </div>
                                        <input type="hidden" name="photo" value="" id="photo1">
                                        <input type="hidden" name="status" value="Hadir">
                                        <input type="hidden" name="id_perusahaan" value="">
                                        <input type="hidden" name="id_siswa" value="">
                                    </div>
                                    <div class="d-flex flex-row bd-highlight mb-3">
                                        <button class="p-2 btn btn-secondary ml-3" type="button" id="startbutton"
                                            onclick="replace('video', 'photo'); replace1('submit')">Take photo</button>
                                        <button class="p-2 btn btn-secondary ml-3"
                                            onclick="replace('photo', 'video'); close1('submit')"
                                            type="button">Ulang</button>
                                        <button class="p-2 btn btn-secondary ml-3" id="submit" type="submit"
                                            style="display: none">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
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
