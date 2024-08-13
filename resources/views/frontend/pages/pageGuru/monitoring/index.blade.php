@extends('frontend.layouts.menu-guru.app', ['title' => 'Monitoring'])

@section('content')
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-2"><span class="text-muted fw-light">Forms/</span> Monitoring</h4>
            <div class="row">
                <div class="col-xl">
                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Monitoring</h5>
                            <i class="bi bi-calendar float-end" title="Monitoring"></i>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="mb-3">
                                    <i class="bx bx-building-house"></i>
                                    <label class="form-label" for="company-select">Pilih Perusahaan</label>
                                    <select class="form-select" id="company-select">
                                        <option value="" disabled selected>Pilih Perusahaan</option>
                                        <option value="company1">Perusahaan 1</option>
                                        <option value="company2">Perusahaan 2</option>
                                        <option value="company3">Perusahaan 3</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <i class="bx bx-calendar"></i>
                                    <label class="form-label" for="monitoring-date">Tanggal Monitoring</label>
                                    <input type="date" class="form-control" id="monitoring-date" />
                                </div>
                                <div class="mb-3">
                                    <button type="button" class="btn btn-primary" id="take-photo-btn">
                                        Ambil Foto
                                    </button>
                                </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl">
                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Monitoring</h5>
                            <i class="bi bi-calendar float-end" title="Monitoring"></i>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <i class="bx bx-note"></i>
                                <label class="form-label" for="student-attendance">Kehadiran Siswa</label>
                                <div class="input-group input-group-merge">
                                    <textarea class="form-control" id="student-attendance" rows="4" placeholder="Masukkan kehadiran siswa"
                                        aria-label="Kehadiran Siswa"></textarea>
                                </div>
                            </div>

                            <div class="mb-3">
                                <i class="bx bx-comment"></i>
                                <label class="form-label" for="student-attitude">Sikap Siswa</label>
                                <div class="input-group input-group-merge">
                                    <textarea id="student-attitude" class="form-control" rows="4" placeholder="Masukkan sikap siswa"
                                        aria-label="Sikap Siswa"></textarea>
                                </div>
                            </div>

                            <div class="mb-3">
                                <i class="bx bx-award"></i>
                                <label class="form-label" for="student-competency">Kompetensi Siswa</label>
                                <div class="input-group input-group-merge">
                                    <textarea id="student-competency" class="form-control" rows="4" placeholder="Masukkan kompetensi siswa"
                                        aria-label="Kompetensi Siswa"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Kirim</button>
                </form>

                <div class="modal fade" id="photoModal" tabindex="-1" aria-labelledby="photoModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="photoModalLabel">Ambil Foto</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <input type="file" accept="image/*" capture="camera" class="form-control">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                <button type="button" class="btn btn-primary">Kirim Foto</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script>
        document.getElementById('take-photo-btn').addEventListener('click', function() {
            var photoModal = new bootstrap.Modal(document.getElementById('photoModal'));
            photoModal.show();
        });
    </script>
@endsection
