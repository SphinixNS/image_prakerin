@extends('frontend.layouts.app', ['title' => 'Landing Page'])

@section('content')
    <section class="hero-section d-flex justify-content-center align-items-center" id="section_1" data-wow-delay="0.1s">
        <div class="container-hero">
            <h1 class="hero-text">Selesaikan Semua Yang Telah Dilakukan Dengan Cara Yang Terbaik</h1>
            <h6 class="hero-text-small">Mudah digunakan, andal, dan aman. Tidak heran aplikasi ini menjadi pilihan terbaik
                untuk mewujudkan Pengalaman Prakerin Terbaik.</h6>

            {{-- <div class="buttons">
                <a href="login" class=" btn btn-primary button-text-a">Login Sekarang</a>
            </div> --}}

            <div class="cards">
                <div class="card">
                    <i class="fas fa-user-check" style="font-size: 50px; color: #ffffff;"></i>
                    <h4 class="card-text">ABSEN</h4>
                    <a href="#absen">Pelajari selengkapnya</a>
                </div>
                <div class="card">
                    <i class="fas fa-book" style="font-size: 50px; color: #ffffff;"></i>
                    <h4 class="card-text">JURNAL KEGIATAN</h4>
                    <a href="#jurnal">Pelajari selengkapnya</a>
                </div>
                <div class="card">
                    <i class="fas fa-chart-line" style="font-size: 50px; color: #ffffff;"></i>
                    <h4 class="card-text">NILAI</h4>
                    <a href="#nilai1">Pelajari selengkapnya</a>
                </div>
                <div class="card">
                    <i class="fas fa-chart-line" style="font-size: 50px; color: #ffffff;"></i>
                    <h4 class="card-text">NILAI</h4>
                    <a href="#nilai2">Pelajari selengkapnya</a>
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
                    <h1 class="mb-3">Daftar Perusahaan!</h1>
                    <h6 class="section-title bg-white text-center px-3 mb-5 testi-text">Yang Telah Bekerja Sama Dengan
                        Kami</h6>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                    <div class="testimonial-item rounded p-4 bg-light me-3">
                        <div class="d-flex align-items-center mb-4">

                            <div class="ms-4">
                                <h6 class="mb-1">PT. ForIt Asta Solusiindo</h6>
                                <p class="mb-1">
                                    Pengembangan Perangkat Lunak dan Gim (Kuota 6 orang) <br>
                                </p>

                            </div>
                        </div>
                        <p class="text-center">Google Maps</p>
                        <div class="mb-0">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.9607077767278!2d107.53966857332063!3d-6.895303417473201!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e59b48322cdb%3A0x10a755b12e9aef37!2sBITC%20(Baros%20Information%2C%20Technology%2C%20%26%20Creative%20Center!5e0!3m2!1sen!2sid!4v1700614722986!5m2!1sen!2sid"
                                width="100%" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="testimonial-item rounded p-4 bg-light me-3">
                        <div class="d-flex align-items-center mb-4">

                            <div class="ms-4">
                                <h6 class="mb-1">PT. Testing Pedia</h6>
                                <p class="mb-1">
                                    Pengembangan Perangkat Lunak dan Gim (Kuota 6 orang) <br>
                                </p>

                            </div>
                        </div>
                        <p class="text-center">Google Maps</p>
                        <div class="mb-0">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.9607077767278!2d107.53966857332063!3d-6.895303417473201!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e59b48322cdb%3A0x10a755b12e9aef37!2sBITC%20(Baros%20Information%2C%20Technology%2C%20%26%20Creative%20Center!5e0!3m2!1sen!2sid!4v1700614722986!5m2!1sen!2sid"
                                width="100%" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="testimonial-item rounded p-4 bg-light me-3">
                        <div class="d-flex align-items-center mb-4">

                            <div class="ms-4">
                                <h6 class="mb-1">PT. Coba Pedia</h6>
                                <p class="mb-1">
                                    Pengembangan Perangkat Lunak dan Gim (Kuota 6 orang) <br>
                                </p>

                            </div>
                        </div>
                        <p class="text-center">Google Maps</p>
                        <div class="mb-0">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.9607077767278!2d107.53966857332063!3d-6.895303417473201!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e59b48322cdb%3A0x10a755b12e9aef37!2sBITC%20(Baros%20Information%2C%20Technology%2C%20%26%20Creative%20Center!5e0!3m2!1sen!2sid!4v1700614722986!5m2!1sen!2sid"
                                width="100%" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="testimonial-item rounded p-4 bg-light me-3">
                        <div class="d-flex align-items-center mb-4">

                            <div class="ms-4">
                                <h6 class="mb-1">PT. Lorem Ipsum</h6>
                                <p class="mb-1">
                                    Pengembangan Perangkat Lunak dan Gim (Kuota 6 orang) <br>
                                </p>

                            </div>
                        </div>
                        <p class="text-center">Google Maps</p>
                        <div class="mb-0">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.9607077767278!2d107.53966857332063!3d-6.895303417473201!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e59b48322cdb%3A0x10a755b12e9aef37!2sBITC%20(Baros%20Information%2C%20Technology%2C%20%26%20Creative%20Center!5e0!3m2!1sen!2sid!4v1700614722986!5m2!1sen!2sid"
                                width="100%" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
