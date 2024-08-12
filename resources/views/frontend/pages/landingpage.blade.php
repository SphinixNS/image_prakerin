@extends('frontend.layouts.app', ['title' => 'Landing Page'])

@section('content')
    <section class="hero-section d-flex justify-content-center align-items-center" id="section_1" data-wow-delay="0.1s">
        <div class="container-hero">
            <h1 class="hero-text">Selesaikan Semua Yang Telah Dilakukan Dengan Cara Yang Terbaik</h1>
            <h6 class="hero-text-small">Mudah digunakan, andal, dan aman. Tidak heran aplikasi ini menjadi pilihan terbaik
                untuk mewujudkan Pengalaman Prakerin Terbaik.</h6>

            <div class="cards">
                <div class="card">
                    <i class="fas fa-user-check" style="font-size: 50px; color: #ffffff;"></i>
                    <h4 class="card-text">ABSEN</h4>
                    <a href="#">Pelajari selengkapnya</a>
                </div>
                <div class="card">
                    <i class="fas fa-book" style="font-size: 50px; color: #ffffff;"></i>
                    <h4 class="card-text">JURNAL KEGIATAN</h4>
                    <a href="#">Pelajari selengkapnya</a>
                </div>
                <div class="card">
                    <i class="fas fa-chart-line" style="font-size: 50px; color: #ffffff;"></i>
                    <h4 class="card-text">NILAI</h4>
                    <a href="#">Pelajari selengkapnya</a>
                </div>
                <div class="card">
                    <i class="fa fa-history card-icon" style="font-size: 50px; color: #ffffff;"></i>
                    <h4 class="card-text">RIWAYAT KEHADIRAN</h4>
                    <a href="#">Pelajari selengkapnya</a>
                </div>
            </div>
        </div>

    </section>

    <section class="section-padding-dump">

    </section>

    <section class="timeline-section section-padding" id="section_2">
        <div class="section-overlay"></div>

        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-12 mx-auto">
                    <div class="timeline-container">
                        <ul class="vertical-scrollable-timeline" id="vertical-scrollable-timeline" data-wow-delay="0.1s">
                            <div class="list-progress">
                                <div class="inner"></div>
                            </div>

                            <li id="absen">
                                <h4 class="text-dark mb-3">Absen</h4>

                                <p class="text-dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis,
                                    cumque magnam? Sequi, cupiditate quibusdam alias illum sed esse ad dignissimos libero
                                    sunt, quisquam numquam aliquam? Voluptas, accusamus omnis?</p>

                                <div class="icon-holder">
                                    <i class="fa fa-calendar-check"></i>
                                </div>
                            </li>

                            <li id="jurnal">
                                <h4 class="text-dark mb-3">Jurnal Kegiatan</h4>

                                <p class="text-dark">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint animi
                                    necessitatibus aperiam repudiandae nam omnis est vel quo, nihil repellat quia velit
                                    error modi earum similique odit labore. Doloremque, repudiandae?</p>

                                <div class="icon-holder">
                                    <i class="fa fa-clipboard-list"></i>
                                </div>
                            </li>

                            <li id="nilai1">
                                <h4 class="text-dark mb-3">Nilai</h4>

                                <p class="text-dark">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi vero
                                    quisquam, rem assumenda similique voluptas distinctio, iste est hic eveniet debitis ut
                                    ducimus beatae id? Quam culpa deleniti officiis autem?</p>

                                <div class="icon-holder">
                                    <i class="fa fa-graduation-cap"></i>
                                </div>
                            </li>

                            <li id="nilai2">
                                <h4 class="text-dark mb-3">Nilai</h4>

                                <p class="text-dark">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi vero
                                    quisquam, rem assumenda similique voluptas distinctio, iste est hic eveniet debitis ut
                                    ducimus beatae id? Quam culpa deleniti officiis autem?</p>

                                <div class="icon-holder">
                                    <i class="fa fa-graduation-cap"></i>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="slider-section section-padding" id="section_3">
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="text-center">
                    <h1 class="mb-3 text-testi">Daftar Perusahaan!</h1>
                    <h6 class="section-title bg-white text-center px-3 mb-5 testi-text">Yang Telah Bekerja Sama Dengan
                        Kami</h6>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                    <div class="testimonial-item rounded p-4 bg-light me-3 text-center">
                        <div class="mb-4">
                            <img src="{{ asset('/frontend/img/chlorine.jpg') }}" alt="Logo Perusahaan" style="max-width: 150px;">
                        </div>
                        <h6 class="mb-1">PT. ForIt Asta Solusiindo</h6>
                        <p class="mb-1">
                            Pengembangan Perangkat Lunak dan Gim (Kuota 6 orang)
                        </p>
                    </div>
                    <div class="testimonial-item rounded p-4 bg-light me-3 text-center">
                        <div class="mb-4">
                            <img src="{{ asset('/frontend/img/chlorine.jpg') }}" alt="Logo Perusahaan" style="max-width: 150px;">
                        </div>
                        <h6 class="mb-1">PT. Testing Pedia</h6>
                        <p class="mb-1">
                            Pengembangan Perangkat Lunak dan Gim (Kuota 6 orang)
                        </p>
                    </div>
                    <div class="testimonial-item rounded p-4 bg-light me-3 text-center">
                        <div class="mb-4">
                            <img src="{{ asset('/frontend/img/chlorine.jpg') }}" alt="Logo Perusahaan" style="max-width: 150px;">
                        </div>
                        <h6 class="mb-1">PT. Coba Pedia</h6>
                        <p class="mb-1">
                            Pengembangan Perangkat Lunak dan Gim (Kuota 6 orang)
                        </p>
                    </div>
                    <div class="testimonial-item rounded p-4 bg-light me-3 text-center">
                        <div class="mb-4">
                            <img src="{{ asset('/frontend/img/chlorine.jpg') }}" alt="Logo Perusahaan" style="max-width: 150px;">
                        </div>
                        <h6 class="mb-1">PT. Lorem Ipsum</h6>
                        <p class="mb-1">
                            Pengembangan Perangkat Lunak dan Gim (Kuota 6 orang)
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
