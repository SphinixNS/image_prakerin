@extends('frontend.layouts.menu.app', ['title' => 'Edit Profile'])

@section('content')
    <div class="container-profile">
        <div class="row">
            <div class="col-md-12">
                <div class="col-12 tab-content" id="myTabContent">
                    <ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="account-tab" data-bs-toggle="tab" href="#account" role="tab"
                                aria-controls="account" aria-selected="true">
                                <i class="bx bx-user me-1"></i> Profile
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="reset-password-tab" data-bs-toggle="tab" href="#reset-password"
                                role="tab" aria-controls="reset-password" aria-selected="false">
                                <i class="bx bx-lock-alt me-1"></i> Ganti Kata Sandi
                            </a>
                        </li>
                    </ul>
                    <div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">
                        <div class="card mb-4">
                            <h5 class="card-header">Profile Details</h5>
                            <div class="card-body">
                                <div class="d-flex align-items-start align-items-sm-center gap-4">
                                    <img src="{{ asset('frontend/menu/assets/img/avatars/1.png') }}" alt="user-avatar"
                                        class="d-block rounded" height="100" width="100" id="uploadedAvatar" />
                                    <div class="button-wrapper">
                                        <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                            <span class="d-none d-sm-block">Upload Foto Profile Baru</span>
                                            <i class="bx bx-upload d-block d-sm-none"></i>
                                            <input type="file" id="upload" class="account-file-input" hidden
                                                accept="image/png, image/jpeg" />
                                        </label>
                                        <button type="button" class="btn btn-outline-secondary account-image-reset mb-4">
                                            <i class="bx bx-reset d-block d-sm-none"></i>
                                            <span class="d-none d-sm-block">Reset</span>
                                        </button>

                                        <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                                    </div>
                                </div>
                            </div>
                            <hr class="my-0" />
                            <div class="card-body">
                                <form id="formAccountSettings" method="POST" onsubmit="return false">
                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                            <label for="firstName" class="form-label">Siswa</label>
                                            <input class="form-control" type="text" id="firstName" name="firstName"
                                                value="Lorem Ipsum" readonly />
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="lastName" class="form-label">Siswa</label>
                                            <input class="form-control" type="text" id="lastName" name="lastName"
                                                placeholder="Masukkan Nama Pendek" />
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="birthPlace" class="form-label">Tempat Lahir</label>
                                            <input type="text" class="form-control" id="birthPlace" name="birthPlace"
                                                placeholder="Tempat Lahir" />
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="birthDate" class="form-label">Tanggal Lahir</label>
                                            <input type="date" class="form-control" id="birthDate" name="birthDate"
                                                placeholder="Masukkan Tanggal Lahir" />
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="nis" class="form-label">NIS</label>
                                            <input class="form-control" type="number" id="nis" name="nis"
                                                placeholder="123456789" readonly />
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label" for="phoneNumber">Nomor Telepon</label>
                                            <div class="input-group input-group-merge">
                                                <span class="input-group-text">ID (+62)</span>
                                                <input type="number" id="phoneNumber" name="phoneNumber"
                                                    class="form-control" placeholder="81223463156" />
                                            </div>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="kelas" class="form-label">Kelas</label>
                                            <input class="form-control" type="text" id="kelas" name="kelas"
                                                placeholder="Rekayasa Perangkat Lunak" readonly />
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="gender" class="form-label">Jenis Kelamin</label>
                                            <input class="form-control" type="text" id="gender" name="gender"
                                                placeholder="Laki Laki" disabled />
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="parent" class="form-label">Orang Tua / Wali</label>
                                            <input class="form-control" type="text" id="parent" name="parent"
                                                placeholder="Budiono Siregar" />
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="parentAdress" class="form-label">Alamat Orang Tua / Wali</label>
                                            <textarea class="form-control" id="parentAdress" name="parentAdress" rows="3" placeholder="Tentang Kamu"></textarea>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label" for="parentPhoneNumber">Nomor Telepon Orang Tua /
                                                Wali</label>
                                            <div class="input-group input-group-merge">
                                                <span class="input-group-text">ID (+62)</span>
                                                <input type="number" id="parentPhoneNumber" name="parentPhoneNumber"
                                                    class="form-control" placeholder="81223463156" />
                                            </div>
                                        </div>

                                        <div class="mb-3 col-md-6">
                                            <label for="religion" class="form-label">Agama</label>
                                            <select id="religion" name="religion" class="select2 form-select">
                                                <option value="">Pilih Agama</option>
                                                <option value="islam">Islam</option>
                                                <option value="protestant">Protestan</option>
                                                <option value="catholic">Katolik</option>
                                                <option value="hindu">Hindu</option>
                                                <option value="buddha">Buddha</option>
                                                <option value="confucianism">Konghucu</option>
                                            </select>
                                        </div>
                                        <div class="mb-3 col-md-12">
                                            <label for="about" class="form-label">Tentang</label>
                                            <textarea class="form-control" id="about" name="about" rows="3" placeholder="Tentang Kamu"></textarea>
                                        </div>
                                    </div>
                                    <div class="mt-2">
                                        <button type="submit" class="btn btn-primary me-2">Simpan Perubahan</button>
                                        <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="reset-password" role="tabpanel" aria-labelledby="reset-password-tab">
                        <div class="card">
                            <h5 class="card-header">Ganti Password</h5>
                            <div class="card-body">
                                <form id="formChangePassword" onsubmit="return false">
                                    <div class="mb-3">
                                        <label for="currentPassword" class="form-label">Kata Sandi Lama</label>
                                        <input type="password" class="form-control" id="currentPassword"
                                            name="currentPassword" placeholder="Masukkan kata sandi lama" required />
                                    </div>

                                    <div class="mb-3">
                                        <label for="newPassword" class="form-label">Kata Sandi Baru</label>
                                        <input type="password" class="form-control" id="newPassword" name="newPassword"
                                            placeholder="Masukkan kata sandi baru" required />
                                    </div>

                                    <div class="alert alert-warning mb-3">
                                        <h6 class="alert-heading fw-bold mb-1">Perhatian!</h6>
                                        <p class="mb-0">Pastikan kata sandi baru dan konfirmasi kata sandi baru cocok
                                            sebelum mengirimkan formulir.</p>
                                    </div>

                                    <div class="mb-3">
                                        <label for="confirmNewPassword" class="form-label">Konfirmasi Kata Sandi
                                            Baru</label>
                                        <input type="password" class="form-control" id="confirmNewPassword"
                                            name="confirmNewPassword" placeholder="Konfirmasi kata sandi baru" required />
                                    </div>

                                    <button type="submit" class="btn btn-primary">Ganti Kata Sandi</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
