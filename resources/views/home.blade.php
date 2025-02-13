<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Albukhari Arabic Course &#8211; Kursus Bahasa Arab Online</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Taprom&display=swap"
        rel="stylesheet">
    {{-- cdn bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    {{-- sweetalert --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.min.css">
    {{-- home.css --}}
    <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
    {{-- font awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- aos --}}
    <link href="https://unpkg.com/aos@next/dist/aos.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
</head>

<body>
    <header class="w-100 py-3 bg-white shadow-lg">
        <nav class="container px-5 d-flex justify-content-between align-items-center">
            <!-- Kiri -->
            <div class="d-flex align-items-center">
                <a href="#" class="text-decoration-none text-warning d-flex align-items-center">
                    <img src="{{ asset('assets/image/icon-arabic.webp') }}" class="img-fluid"
                        style="width: 80px; height: 65px; object-fit: cover;" alt="icon-arabic">
                </a>
            </div>

            <!-- Tengah -->
            <div class="d-none d-md-flex gap-3">
                <ul class="d-flex list-unstyled m-0 gap-3 poppins fw-semibold gap-5 gap-md-4">
                    <li>
                        <a href="#hero"
                            class="text-dark text-decoration-none transition-all hover-text-warning">Beranda</a>
                    </li>
                    <li>
                        <a href="#keunggulan"
                            class="text-dark text-decoration-none transition-all hover-text-warning">Keunggulan</a>
                    </li>
                    <li>
                        <a href="#benefit"
                            class="text-dark text-decoration-none transition-all hover-text-warning">Benefit</a>
                    </li>
                    <li>
                        <a href="#source-code"
                            class="text-dark text-decoration-none transition-all hover-text-warning">Source Code</a>
                    </li>
                </ul>
            </div>

            <!-- Mobile Menu -->
            <div id="navMobile"
                class="position-fixed w-75 h-auto bg-white text-center top-40 start-50 translate-middle z-3 shadow rounded p-3 hidden">
                <ul
                    class="d-flex flex-column gap-4 justify-content-center align-items-center list-unstyled m-0 text-dark poppins fw-semibold">
                    <li>
                        <a href="#hero"
                            class="text-dark text-decoration-none transition-all hover-text-warning">Home</a>
                    </li>
                    <li>
                        <a href="#keunggulan"
                            class="text-dark text-decoration-none transition-all hover-text-warning">About Us</a>
                    </li>
                    <li>
                        <a href="#benefit"
                            class="text-dark text-decoration-none transition-all hover-text-warning">Courses</a>
                    </li>
                    <li>
                        <a href="#source-code"
                            class="text-dark text-decoration-none transition-all hover-text-warning">Blog</a>
                    </li>
                    <li>
                        <a href="#contact"
                            class="text-dark text-decoration-none transition-all hover-text-warning">Contact Us</a>
                    </li>
                </ul>
            </div>

            <!-- Mobile Menu Toggle -->
            <div id="menu" class="d-md-none cursor-pointer z-3 p-2 rounded" style="background-color: #8b00ff;">
                <i id="menuIcon" class="fa-solid fa-bars text-white fs-3"></i>
            </div>
        </nav>
    </header>

    <section class="hero-section position-relative overflow-hidden poppins" data-aos="fade-in">
        <div class="container min-vh-100 d-flex align-items-center px-0">
            <div class="row w-100 align-items-center justify-content-between">
                <!-- Text Content - Kiri -->
                <div class="col-lg-7 text-white py-5 px-lg-5" data-aos="fade-right" data-aos-delay="200">
                    <div class="mb-2">
                        <span class="badge custom-gradient text-white px-3 py-2 mb-3" data-aos="fade-down">
                            Kursus Bahasa Arab #1
                        </span>
                    </div>
                    <div class="typing-container" data-aos="zoom-in" data-aos-delay="300">
                        <h2 class="fw-bold">
                            Belajar Bahasa Arab dengan<br>
                            Mudah dan Menyenangkan di
                            <span class="typing-text gradient-text fw-bold auto-input"></span>
                        </h2>
                    </div>
                    <h2 class="h4" data-aos="fade-up" data-aos-delay="400">
                        Khusus Akhwat | Tanpa Ikhtilat | Biaya Terjangkau!
                    </h2>

                    <!-- CTA Button -->
                    <div class="mt-4" data-aos="zoom-in" data-aos-delay="500">
                        <a href="#daftar"
                            class="btn custom-gradient text-white btn-lg align-items-center px-4 py-2 rounded-pill poppins fw-bold gap-1">
                            <i class="fa-brands fa-whatsapp me-2" style="font-size:25px;"></i>
                            <span>Free Konsultasi</span>
                        </a>
                    </div>
                </div>

                <!-- Stats - Kanan -->
                <div class="col-lg-5 px-lg-4" data-aos="fade-left" data-aos-delay="600">
                    <div class="stats-container bg-white bg-opacity-10 p-4 rounded-4" data-aos="zoom-in"
                        data-aos-delay="700">
                        <div class="row g-4 py-md-3">
                            <div class="col-6">
                                <div class="text-white" data-aos="fade-up" data-aos-delay="800">
                                    <div class="d-flex align-items-center">
                                        <div class="stats-icon me-3">
                                            <i class="fas fa-users fs-1 gradient-text"></i>
                                        </div>
                                        <div>
                                            <h3 class="fw-bold gradient-text mb-0">6,200+</h3>
                                            <p class="mb-0 tag-line text-nowrap">Siswa Aktif</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-white" data-aos="fade-up" data-aos-delay="900">
                                    <div class="d-flex align-items-center">
                                        <div class="stats-icon me-3">
                                            <i class="fas fa-book-open fs-1 gradient-text"></i>
                                        </div>
                                        <div>
                                            <h3 class="fw-bold gradient-text mb-0">100+</h3>
                                            <p class="mb-0 tag-line">Kelas</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-white" data-aos="fade-up" data-aos-delay="1000">
                                    <div class="d-flex align-items-center">
                                        <div class="stats-icon me-3">
                                            <i class="fa-solid fa-chalkboard-user fs-1 gradient-text"></i>
                                        </div>
                                        <div>
                                            <h3 class="fw-bold gradient-text mb-0">50+</h3>
                                            <p class="mb-0 tag-line">Pengajar</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-white" data-aos="fade-up" data-aos-delay="1100">
                                    <div class="d-flex align-items-center">
                                        <div class="stats-icon me-3">
                                            <i class="fas fa-certificate fs-1 gradient-text"></i>
                                        </div>
                                        <div>
                                            <h3 class="fw-bold gradient-text mb-0">300+</h3>
                                            <p class="mb-0 tag-line">Lulusan</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pain-points-section py-5 position-relative overflow-hidden poppins">
        <!-- Background Decoration -->
        <div class="decoration-circle circle-1" data-aos="fade-in" data-aos-duration="1200"></div>
        <div class="decoration-circle circle-2" data-aos="fade-in" data-aos-duration="1200" data-aos-delay="300">
        </div>

        <!-- Container -->
        <div class="container">
            <!-- Section Heading -->
            <div class="text-center mb-5" data-aos="fade-up" data-aos-duration="1000">
                <span class="badge custom-gradient text-white px-3 py-2 mb-3">Permasalahan Umum</span>
                <h2 class="fw-bold mb-4">Apakah Anda Mengalami Hal-hal Berikut Ini?</h2>
                <p class="text-muted">Mari identifikasi kendala Anda dalam belajar bahasa Arab</p>
            </div>

            <!-- Cards Row -->
            <div class="row g-4 justify-content-center">
                <!-- Card 1 -->
                <div class="col-lg-6">
                    <div class="pain-point-card d-flex flex-column h-100" data-aos="fade-right"
                        data-aos-duration="1000">
                        <div class="card-content flex-grow-1">
                            <div class="d-flex gap-4">
                                <div class="icon-wrapper">
                                    <div class="icon-inner">
                                        <i class="fas fa-road-barrier"></i>
                                    </div>
                                    <div class="icon-border"></div>
                                </div>
                                <div>
                                    <p class="mb-0">Masih Pemula dan ingin cepat lancar berbicara bahasa Arab tapi
                                        tidak tahu dari mana.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-decoration"></div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-lg-6">
                    <div class="pain-point-card d-flex flex-column h-100" data-aos="fade-left"
                        data-aos-duration="1000">
                        <div class="card-content flex-grow-1">
                            <div class="d-flex gap-4">
                                <div class="icon-wrapper">
                                    <div class="icon-inner">
                                        <i class="fas fa-coins"></i>
                                    </div>
                                    <div class="icon-border"></div>
                                </div>
                                <div>
                                    <p class="mb-0">Sudah di level menengah dan membutuhkan kelas yang menggunakan
                                        bahasa pengantar bahasa Arab tanpa terjemahan agar cepat lancar berbicara bahasa
                                        Arab, tapi biasanya kelas seperti itu biayanya cukup mahal.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-decoration"></div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-lg-6">
                    <div class="pain-point-card d-flex flex-column h-100" data-aos="fade-right"
                        data-aos-duration="1000" data-aos-delay="200">
                        <div class="card-content flex-grow-1">
                            <div class="d-flex gap-4">
                                <div class="icon-wrapper">
                                    <div class="icon-inner">
                                        <i class="fas fa-book-open-reader"></i>
                                    </div>
                                    <div class="icon-border"></div>
                                </div>
                                <div>
                                    <p class="mb-0">Pernah ikut kursus bahasa Arab tapi terlalu fokus pada teori
                                        tanpa ada praktek.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-decoration"></div>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="col-lg-6">
                    <div class="pain-point-card d-flex flex-column h-100" data-aos="fade-left"
                        data-aos-duration="1000" data-aos-delay="200">
                        <div class="card-content flex-grow-1">
                            <div class="d-flex gap-4">
                                <div class="icon-wrapper">
                                    <div class="icon-inner">
                                        <i class="fas fa-users-slash"></i>
                                    </div>
                                    <div class="icon-border"></div>
                                </div>
                                <div>
                                    <p class="mb-0">Ingin ikut kelas bahasa Arab khawatir kelasnya dicampur dengan
                                        ikhwan/laki-laki.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-decoration"></div>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="col-lg-6">
                    <div class="pain-point-card d-flex flex-column h-100" data-aos="fade-up" data-aos-duration="1000"
                        data-aos-delay="400">
                        <div class="card-content flex-grow-1">
                            <div class="d-flex gap-4">
                                <div class="icon-wrapper">
                                    <div class="icon-inner">
                                        <i class="fas fa-hand-holding-dollar"></i>
                                    </div>
                                    <div class="icon-border"></div>
                                </div>
                                <div>
                                    <p class="mb-0">Ingin ikutan kelas bahasa Arab yang interaktif, berfokus pada
                                        praktek, dan pesertanya sedikit tapi biayanya mahal 200 - 500 ribu per bulan.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card-decoration"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- usp --}}
    <section class="usp-section py-80">
        <div class="container poppins">
            <div class="text-center mb-5" data-aos="fade-up" data-aos-duration="800">
                <span class="badge custom-gradient text-white px-3 py-2 mb-3">Kenapa Memilih Kami?</span>
                <h2 class="fw-bold">Keunggulan Belajar di <span class="gradient-text">Albukhari Arabic</span></h2>
            </div>

            <div class="row g-4 mb-3 justify-content-center">
                <!-- Kelas Semi Private -->
                <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="100" data-aos-duration="800">
                    <div class="usp-card h-100">
                        <div class="card-icon">
                            <i class="fas fa-users gradient-text"></i>
                        </div>
                        <h3>Kelas Semi Private</h3>
                        <p>Hanya 10 peserta per kelas untuk pengalaman belajar yang lebih intensif.</p>
                        <div class="card-hover-effect"></div>
                    </div>
                </div>

                <!-- Pembimbing Berpengalaman -->
                <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="800">
                    <div class="usp-card h-100">
                        <div class="card-icon">
                            <i class="fas fa-chalkboard-teacher gradient-text"></i>
                        </div>
                        <h3>Pembimbing Berpengalaman</h3>
                        <p>Diajarkan oleh lulusan LIPIA yang ahli dalam bahasa Arab.</p>
                        <div class="card-hover-effect"></div>
                    </div>
                </div>

                <!-- Fokus pada Praktek -->
                <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="300" data-aos-duration="800">
                    <div class="usp-card h-100">
                        <div class="card-icon">
                            <i class="fas fa-comments gradient-text"></i>
                        </div>
                        <h3>Fokus pada Praktek</h3>
                        <p>Kelas kami dirancang untuk meningkatkan kemampuan percakapan Anda.</p>
                        <div class="card-hover-effect"></div>
                    </div>
                </div>
            </div>

            <div class="row g-4 mb-3 justify-content-center">
                <!-- Biaya Terjangkau -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
                    <div class="usp-card h-100">
                        <div class="card-icon">
                            <i class="fas fa-tags gradient-text"></i>
                        </div>
                        <h3>Biaya Terjangkau</h3>
                        <p>Hanya Rp 99 ribu per bulan, dan bayar setelah sebulan belajar!</p>
                        <div class="card-hover-effect"></div>
                    </div>
                </div>

                <!-- E-Sertifikat -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200" data-aos-duration="800">
                    <div class="usp-card h-100">
                        <div class="card-icon">
                            <i class="fas fa-certificate gradient-text"></i>
                        </div>
                        <h3>E-Sertifikat</h3>
                        <p>Dapatkan sertifikat setelah menyelesaikan jilid 4 kitab Al Arabiyyah Bayna Yadayk.</p>
                        <div class="card-hover-effect"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- pilihan kelas --}}
    <section class="class-selection-section py-5 position-relative overflow-hidden poppins">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up" data-aos-duration="800">
                <span class="badge custom-gradient text-white px-3 py-2 mb-3">Program Kelas</span>
                <h2 class="fw-bold mb-4">Pilihan Level Kelas</h2>
                <p class="text-muted">Pilih kelas sesuai dengan kemampuan Anda</p>
            </div>

            <div class="row g-4 justify-content-center">
                <!-- Kelas Pemula Card -->
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100" data-aos-duration="800">
                    <div class="class-card shadow-lg">
                        <div class="card-inner">
                            <!-- Card Header -->
                            <div class="card-header gradient-purple p-4 text-white">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div>
                                        <h3 class="mb-2">Kelas AL ARABIYYAH BAYNA YADAYK</h3>
                                        <div class="level-tags">
                                            <span class="badge bg-white text-purple me-2">KHUSUS AKHWAT</span>
                                            <span class="badge bg-success">LEVEL PEMULA</span>
                                        </div>
                                    </div>
                                    <div class="card-icon">
                                        <i class="fas fa-graduation-cap"></i>
                                    </div>
                                </div>
                            </div>

                            <!-- Card Body -->
                            <div class="card-body p-4">
                                <!-- Rating -->
                                <div class="rating mb-3">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                </div>

                                <h4 class="h5 mb-3">Kelas Pemula</h4>
                                <p class="text-muted mb-4">Untuk Akhawat yang baru memulai belajar bahasa Arab. Kelas
                                    ini akan memperkenalkan dasar-dasar percakapan bahasa Arab dengan metode yang mudah
                                    dipahami.</p>

                                <!-- Benefits List -->
                                <div class="benefits-list">
                                    <div class="benefit-item">
                                        <i class="fas fa-check-circle text-success me-2"></i>
                                        <span>Kelas Full Praktek (Interactive)</span>
                                    </div>
                                    <div class="benefit-item">
                                        <i class="fas fa-check-circle text-success me-2"></i>
                                        <span>Fokus Percakapan Bahasa Arab</span>
                                    </div>
                                    <div class="benefit-item">
                                        <i class="fas fa-check-circle text-success me-2"></i>
                                        <span>12 Pertemuan Zoom Meeting Dalam Sebulan</span>
                                    </div>
                                    <div class="benefit-item">
                                        <i class="fas fa-check-circle text-success me-2"></i>
                                        <span>Durasi Belajar 1 Jam Dalam Sehari</span>
                                    </div>
                                    <div class="benefit-item">
                                        <i class="fas fa-check-circle text-success me-2"></i>
                                        <span>10 Peserta Dan 1 Guru Dalam 1 Kelas Zoom Meeting</span>
                                    </div>
                                    <div class="benefit-item">
                                        <i class="fas fa-check-circle text-success me-2"></i>
                                        <span>Pembimbing Lulusan Lupia</span>
                                    </div>
                                    <div class="benefit-item">
                                        <i class="fas fa-check-circle text-success me-2"></i>
                                        <span>Bisa Memilih Waktu Belajar</span>
                                    </div>
                                    <div class="benefit-item">
                                        <i class="fas fa-check-circle text-success me-2"></i>
                                        <span>Menggunakan Kitab Al Arabiyyah Bayna Yadayk Jilid 1</span>
                                    </div>
                                </div>

                                <!-- CTA Button -->
                                <button class="btn btn-gradient-purple w-100 mt-4">
                                    Daftar Sekarang
                                    <i class="fas fa-arrow-right ms-2"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Kelas Menengah Card -->
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200" data-aos-duration="800">
                    <div class="class-card shadow-lg">
                        <div class="card-inner">
                            <!-- Card Header -->
                            <div class="card-header gradient-purple p-4 text-white">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div>
                                        <h3 class="mb-2">Kelas AL ARABIYYAH BAYNA YADAYK</h3>
                                        <div class="level-tags">
                                            <span class="badge bg-white text-purple me-2">KHUSUS AKHWAT</span>
                                            <span class="badge bg-danger">LEVEL MENENGAH</span>
                                        </div>
                                    </div>
                                    <div class="card-icon">
                                        <i class="fas fa-graduation-cap"></i>
                                    </div>
                                </div>
                            </div>

                            <!-- Card Body -->
                            <div class="card-body p-4">
                                <!-- Rating -->
                                <div class="rating mb-3">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                </div>

                                <h4 class="h5 mb-3">Kelas Menengah</h4>
                                <p class="text-muted mb-4">Untuk Akhawat yang sudah memiliki pengetahuan dasar dan
                                    ingin memperlancar Bahasa Arab. Kelas ini fokus pada peningkatan keterampilan
                                    berbicara. Kelas menggunakan bahasa arab tanpa terjemahan</p>

                                <!-- Benefits List -->
                                <div class="benefits-list">
                                    <div class="benefit-item">
                                        <i class="fas fa-check-circle text-success me-2"></i>
                                        <span>Kelas Full Praktek (Interactive)</span>
                                    </div>
                                    <div class="benefit-item">
                                        <i class="fas fa-check-circle text-success me-2"></i>
                                        <span>Fokus Percakapan Bahasa Arab</span>
                                    </div>
                                    <div class="benefit-item">
                                        <i class="fas fa-check-circle text-success me-2"></i>
                                        <span>12 Pertemuan Zoom Meeting Dalam Sebulan</span>
                                    </div>
                                    <div class="benefit-item">
                                        <i class="fas fa-check-circle text-success me-2"></i>
                                        <span>Durasi Belajar 1 Jam Dalam Sehari</span>
                                    </div>
                                    <div class="benefit-item">
                                        <i class="fas fa-check-circle text-success me-2"></i>
                                        <span>10 Peserta Dan 1 Guru Dalam 1 Kelas Zoom Meeting</span>
                                    </div>
                                    <div class="benefit-item">
                                        <i class="fas fa-check-circle text-success me-2"></i>
                                        <span>Pembimbing Lulusan Lupia</span>
                                    </div>
                                    <div class="benefit-item">
                                        <i class="fas fa-check-circle text-success me-2"></i>
                                        <span>Bisa Memilih Waktu Belajar</span>
                                    </div>
                                    <div class="benefit-item">
                                        <i class="fas fa-check-circle text-success me-2"></i>
                                        <span>Menggunakan Kitab Al Arabiyyah Bayna Yadayk Jilid 2</span>
                                    </div>
                                </div>

                                <!-- CTA Button -->
                                <button class="btn btn-gradient-purple w-100 mt-4">
                                    Daftar Sekarang
                                    <i class="fas fa-arrow-right ms-2"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Testimonial Section -->
    <section class="testimonial-section py-5 position-relative overflow-hidden poppins">
        <div class="container">
            <div class="text-center mb-5">
                <span class="badge custom-gradient text-white px-3 py-2 mb-3">Testimonial</span>
                <h2 class="fw-bold mb-4">Apa Kata Mereka?</h2>
                <p class="text-muted">Pengalaman belajar dari para siswa Al-Bukhari</p>
            </div>

            <div class="position-relative">
                <div class="owl-carousel testimonial-carousel">
                    <!-- Testimonial Item 1 -->
                    <div class="testimonial-item">
                        <div class="testimonial-card">
                            <div class="testimonial-content">
                                <div class="quote-icon mb-3">
                                    <i class="fas fa-quote-left text-purple"></i>
                                </div>
                                <p class="testimonial-text mb-4">Alhamdulillah anak saya jadi bisa bahasa arab dan ada
                                    yang sudah mengerti kosakata nya, belajar di Al Bukhari sangat luar biasa, dapat
                                    mudah di pahami, dan di mengerti, anakku lebih pintar dan happy.</p>
                                <div class="testimonial-profile d-flex align-items-center">
                                    <div class="profile-image">
                                        <img src="/path/to/testimonial-image.jpg" alt="Testimoni"
                                            class="rounded-circle">
                                    </div>
                                    <div class="profile-info ms-3">
                                        <h5 class="mb-1">Ukhti Sari</h5>
                                        <p class="text-muted mb-0">Wali Murid</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial Item 2 -->
                    <div class="testimonial-item">
                        <div class="testimonial-card">
                            <div class="testimonial-content">
                                <div class="quote-icon mb-3">
                                    <i class="fas fa-quote-left text-purple"></i>
                                </div>
                                <p class="testimonial-text mb-4">Subhanallah, metode pembelajaran yang sangat bagus.
                                    Anak-anak jadi semangat belajar bahasa Arab. Ustadzahnya sangat sabar dalam
                                    mengajar.</p>
                                <div class="testimonial-profile d-flex align-items-center">
                                    <div class="profile-image">
                                        <img src="/path/to/testimonial-image-2.jpg" alt="Testimoni"
                                            class="rounded-circle">
                                    </div>
                                    <div class="profile-info ms-3">
                                        <h5 class="mb-1">Ummu Fatimah</h5>
                                        <p class="text-muted mb-0">Wali Murid</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-card">
                            <div class="testimonial-content">
                                <div class="quote-icon mb-3">
                                    <i class="fas fa-quote-left text-purple"></i>
                                </div>
                                <p class="testimonial-text mb-4">masyallah, metode pembelajaran yang sangat bagus.
                                    Anak-anak jadi semangat belajar bahasa Arab. Ustadzahnya sangat sabar dalam
                                    mengajar.</p>
                                <div class="testimonial-profile d-flex align-items-center">
                                    <div class="profile-image">
                                        <img src="/path/to/testimonial-image-2.jpg" alt="Testimoni"
                                            class="rounded-circle">
                                    </div>
                                    <div class="profile-info ms-3">
                                        <h5 class="mb-1">Ummu Fatimah</h5>
                                        <p class="text-muted mb-0">Wali Murid</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-item">
                        <div class="testimonial-card">
                            <div class="testimonial-content">
                                <div class="quote-icon mb-3">
                                    <i class="fas fa-quote-left text-purple"></i>
                                </div>
                                <p class="testimonial-text mb-4">allgyabar, metode pembelajaran yang sangat bagus.
                                    Anak-anak jadi semangat belajar bahasa Arab. Ustadzahnya sangat sabar dalam
                                    mengajar.</p>
                                <div class="testimonial-profile d-flex align-items-center">
                                    <div class="profile-image">
                                        <img src="/path/to/testimonial-image-2.jpg" alt="Testimoni"
                                            class="rounded-circle">
                                    </div>
                                    <div class="profile-info ms-3">
                                        <h5 class="mb-1">Ummu Fatimah</h5>
                                        <p class="text-muted mb-0">Wali Murid</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Why Learn Arabic --}}
    <section class="why-learn-section py-5 position-relative overflow-hidden poppins">
        <div class="container">
            <!-- Section Heading -->
            <div class="text-center mb-5" data-aos="fade-down">
                <span class="badge custom-gradient text-white px-3 py-2 mb-3">Keunggulan</span>
                <h2 class="fw-bold mb-4">Mengapa Harus Belajar Bahasa Arab?</h2>
                <p class="text-muted">Belajar bahasa Arab memiliki berbagai manfaat penting dalam memahami agama Islam.
                </p>
            </div>

            <!-- Benefits Container -->
            <div class="benefits-container">
                <!-- Benefit Item 1 -->
                <div class="benefit-item-two" data-aos="fade-up" data-aos-delay="100">
                    <div class="benefit-icon">
                        <i class="fas fa-book-quran"></i>
                    </div>
                    <div class="benefit-content">
                        <h4>Pemahaman Al-Qur'an</h4>
                        <p>Bahasa Arab adalah bahasa asli Al-Qur'an. Menguasai bahasa ini memungkinkan seseorang untuk
                            membaca, memahami, dan menafsirkan ayat-ayat Al-Qur'an secara lebih mendalam dan akurat.</p>
                    </div>
                </div>

                <!-- Benefit Item 2 -->
                <div class="benefit-item-two" data-aos="fade-up" data-aos-delay="200">
                    <div class="benefit-icon">
                        <i class="fas fa-scroll"></i>
                    </div>
                    <div class="benefit-content">
                        <h4>Memahami Hadis</h4>
                        <p>Banyak hadis Nabi Muhammad Shallallahu alaihi wasallam yang ditulis dalam bahasa Arab. Dengan
                            memahami bahasa ini, seseorang bisa memahami konteks dan makna hadis dengan lebih baik.</p>
                    </div>
                </div>

                <!-- Benefit Item 3 -->
                <div class="benefit-item-two" data-aos="fade-up" data-aos-delay="300">
                    <div class="benefit-icon">
                        <i class="fas fa-praying-hands"></i>
                    </div>
                    <div class="benefit-content">
                        <h4>Berdoa dengan Lebih Khusyuk</h4>
                        <p>Banyak doa dan dzikir dalam Islam yang diajarkan dalam bahasa Arab. Mengetahui bahasa Arab
                            memungkinkan seseorang untuk berdoa dan berdzikir dengan pemahaman yang lebih mendalam.</p>
                    </div>
                </div>

                <!-- Benefit Item 4 -->
                <div class="benefit-item-two" data-aos="fade-up" data-aos-delay="400">
                    <div class="benefit-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="benefit-content">
                        <h4>Menjalin Hubungan dengan Komunitas Muslim</h4>
                        <p>Bahasa Arab adalah lingua franca di banyak negara Muslim. Menguasai bahasa ini memudahkan
                            komunikasi dan interaksi dengan umat Islam dari berbagai negara.</p>
                    </div>
                </div>

                <!-- Benefit Item 5 -->
                <div class="benefit-item-two" data-aos="fade-up" data-aos-delay="500">
                    <div class="benefit-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <div class="benefit-content">
                        <h4>Menjaga Keaslian Ajaran</h4>
                        <p>Dengan belajar bahasa Arab, seseorang dapat meminimalkan kemungkinan salah tafsir atau
                            distorsi ajaran agama yang sering terjadi akibat terjemahan yang tidak akurat.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Decorative Elements -->
        <div class="decorative-circle circle-1"></div>
        <div class="decorative-circle circle-2"></div>
    </section>



    {{-- Target Audience --}}
    <section class="audience-galaxy py-5 position-relative overflow-hidden poppins">
        <div class="container">
            <!-- Section Header -->
            <div class="text-center mb-5">
                <span class="badge custom-gradient text-white px-3 py-2 mb-3">Target Peserta</span>
                <h2 class="fw-bold mb-4">Cocok Untuk Siapa Kelas Ini?</h2>
                <p class="text-muted mb-5">
                    Kelas ini cocok untuk siapapun yang ingin belajar dan memperdalam bahasa Arab dari nol ataupun dari
                    level menengah
                </p>
            </div>

            <!-- Hexagonal Grid -->
            <div class="hex-container d-flex flex-wrap justify-content-center">
                <!-- Hexagon 1 -->
                <div class="hex-wrapper" data-aos="fade-up" data-aos-delay="100">
                    <div class="hex-item">
                        <div class="hex-content">
                            <i class="fas fa-user-graduate hex-icon"></i>
                            <h4>Pelajar</h4>
                        </div>
                    </div>
                </div>

                <!-- Hexagon 2 -->
                <div class="hex-wrapper" data-aos="fade-up" data-aos-delay="200">
                    <div class="hex-item">
                        <div class="hex-content">
                            <i class="fas fa-university hex-icon"></i>
                            <h4>Mahasiswa</h4>
                        </div>
                    </div>
                </div>

                <!-- Hexagon 3 -->
                <div class="hex-wrapper" data-aos="fade-up" data-aos-delay="300">
                    <div class="hex-item">
                        <div class="hex-content">
                            <i class="fas fa-microphone hex-icon"></i>
                            <h4>Da'i</h4>
                        </div>
                    </div>
                </div>

                <!-- Hexagon 4 -->
                <div class="hex-wrapper" data-aos="fade-up" data-aos-delay="400">
                    <div class="hex-item">
                        <div class="hex-content">
                            <i class="fas fa-book-reader hex-icon"></i>
                            <h4>Guru Mengaji</h4>
                        </div>
                    </div>
                </div>

                <!-- Hexagon 5 -->
                <div class="hex-wrapper" data-aos="fade-up" data-aos-delay="500">
                    <div class="hex-item">
                        <div class="hex-content">
                            <i class="fas fa-kaaba hex-icon"></i>
                            <h4>Pengusaha Travel Umroh</h4>
                        </div>
                    </div>
                </div>

                <!-- Hexagon 6 -->
                <div class="hex-wrapper" data-aos="fade-up" data-aos-delay="600">
                    <div class="hex-item">
                        <div class="hex-content">
                            <i class="fas fa-plane-departure hex-icon"></i>
                            <h4>Calon TKI Luar Negeri</h4>
                        </div>
                    </div>
                </div>

                <!-- Hexagon 7 -->
                <div class="hex-wrapper" data-aos="fade-up" data-aos-delay="700">
                    <div class="hex-item">
                        <div class="hex-content">
                            <i class="fas fa-book-open hex-icon"></i>
                            <h4>Pembelajar Al-Qur'an</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Floating Decorative Elements -->
        <div class="floating-element fe-1" data-aos="fade-right" data-aos-delay="100">ع</div>
        <div class="floating-element fe-2" data-aos="fade-up" data-aos-delay="300">ب</div>
        <div class="floating-element fe-3" data-aos="fade-left" data-aos-delay="500">ر</div>
    </section>



    {{-- Tunggu Apa Lagi --}}
    <section class="price-spotlight py-5 position-relative overflow-hidden">
        <div class="container">
            <div class="cta-wrapper">
                <div class="cta-content text-center position-relative">
                    <!-- Decorative Elements -->
                    <div class="deco-dots"></div>
                    <div class="deco-lines"></div>

                    <!-- Main Content -->
                    <div class="shine-wrapper mb-4" data-aos="zoom-in" data-aos-delay="100">
                        <h2 class="mega-title">Tunggu Apa Lagi?</h2>
                    </div>

                    <div class="description-box mb-4" data-aos="fade-up" data-aos-delay="200">
                        <p class="lead mb-3">Rasakan kemudahan belajar percakapan bahasa Arab bersama Albukhari.</p>
                        <div class="special-offer">
                            <div class="offer-stars">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                            </div>
                            <span class="offer-badge">Spesial!</span>
                            <p class="mb-0">Belajar sekarang, bayar setelah sebulan belajar!</p>
                            <div class="offer-stars">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                            </div>
                        </div>
                    </div>

                    <div class="pricing-box" data-aos="zoom-in" data-aos-delay="800">
                        <div class="price-container">
                            <div class="old-price">
                                <span class="price-tag">Rp 250.000</span>
                                <div class="strike-through"></div>
                            </div>
                            <div class="price-divider">
                                <span class="price-label">Hanya</span>
                            </div>
                            <div class="current-price">
                                <span class="price-amount">Rp 99.000</span>
                                <div class="price-glow"></div>
                            </div>
                        </div>
                    </div>

                    <div class="cta-button mt-4" data-aos="fade-up" data-aos-delay="400">
                        <a href="#daftar" class="register-btn">
                            <span class="btn-content">Daftar Sekarang</span>
                            <span class="btn-particles"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Floating Elements -->
        <div class="floating-elements">
            <div class="float-item f1">ع</div>
            <div class="float-item f2">ر</div>
            <div class="float-item f3">ب</div>
            <div class="float-bubble b1"></div>
            <div class="float-bubble b2"></div>
            <div class="float-bubble b3"></div>
        </div>
    </section>

    {{-- Call to Action --}}
    <section class="cta-section py-5 poppins position-relative">
        <div class="container">
            <div class="cta-wrapperr position-relative overflow-hidden">
                <div class="cta-overlay"></div>
                <div class="cta-content text-center p-5 position-relative">
                    <span class="badge custom-gradient text-white px-3 py-2 mb-3" data-aos="fade-in">Bergabung
                        Sekarang</span>
                    <h2 class="text-white fw-bold mb-4" data-aos="fade-down">
                        Mulai Perjalanan Anda dalam Memahami Bahasa Al-Qur'an Bersama Para Pengajar Terpercaya
                    </h2>
                    <p class="text-white mb-4" data-aos="fade-up">
                        Investasi terbaik untuk masa depan Anda dalam memahami dan mendalami bahasa Arab
                    </p>
                    <div class="cta-buttons d-flex justify-content-center gap-3" data-aos="zoom-in">
                        <a href="#daftar"
                            class="btn custom-gradient text-white btn-lg rounded-pill poppins fw-bold cta-btn">
                            <span class="btn-content">
                                <i class="fas fa-user-plus me-2"></i>
                                Daftar Sekarang
                            </span>
                        </a>
                        <a href="#konsultasi"
                            class="btn btn-outline-light btn-lg rounded-pill poppins cta-btn-outline">
                            <span class="btn-content">
                                <i class="fa-brands fa-whatsapp me-2"></i>
                                Konsultasi Gratis
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Footer with Wave -->
    <footer class="footer position-relative poppins">
        <!-- Wave SVG -->

        <div class="footer-content">
            <div class="container">
                <div class="row g-4">
                    <!-- Brand Column -->
                    <div class="col-lg-4 mb-4">
                        <h4 class="text-white mb-4">Albukhari Arabic Course</h4>
                        <p class="text-white-50 mb-4">Pembelajaran bahasa Arab modern dengan metode yang mudah dipahami
                            dan menyenangkan untuk semua kalangan.</p>
                        <div class="social-links">
                            <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="social-link"><i class="fab fa-youtube"></i></a>
                            <a href="#" class="social-link"><i class="fab fa-tiktok"></i></a>
                        </div>
                    </div>

                    <!-- Quick Links -->
                    <div class="col-lg-2 col-md-4 mb-4">
                        <h5 class="text-white mb-4">Menu</h5>
                        <ul class="footer-links">
                            <li><a href="#home">Beranda</a></li>
                            <li><a href="#about">Tentang</a></li>
                            <li><a href="#program">Program</a></li>
                            <li><a href="#pricing">Biaya</a></li>
                        </ul>
                    </div>

                    <!-- Programs -->
                    <div class="col-lg-3 col-md-4 mb-4">
                        <h5 class="text-white mb-4">Program Kami</h5>
                        <ul class="footer-links">
                            <li><a href="#basic">Kelas Dasar</a></li>
                            <li><a href="#intermediate">Kelas Menengah</a></li>
                            <li><a href="#advanced">Kelas Mahir</a></li>
                            <li><a href="#private">Kelas Privat</a></li>
                        </ul>
                    </div>

                    <!-- Contact -->
                    <div class="col-lg-3 col-md-4 mb-4">
                        <h5 class="text-white m  b-4">Kontak Kami</h5>
                        <ul class="contact-info">
                            <li><i class="fas fa-map-marker-alt"></i> Jl. Ahmad Yani No.123, Surabaya</li>
                            <li><i class="fas fa-phone"></i> +62 812-3456-7890</li>
                            <li><i class="fas fa-envelope"></i> info@albukhari.com</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Copyright -->
            <div class="copyright">
                <div class="container">
                    <p class="text-center text-white mb-0">&copy; 2024 Albukhari Arabic Course. All rights reserved.
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    {{-- countup --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/countup.js/2.0.7/countUp.min.js"></script>
    {{-- aos --}}
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    {{-- sweetalert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.min.js"></script>
    {{-- typed --}}
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script>
        $(document).ready(function() {
            $('.testimonial-carousel').owlCarousel({
                loop: true,
                margin: 20,
                nav: true,
                dots: true,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplayHoverPause: true,
                items: 1, // Menampilkan hanya 1 item
                navText: [
                    '<i class="fas fa-chevron-left"></i>',
                    '<i class="fas fa-chevron-right"></i>'
                ],
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    768: {
                        items: 2,
                        nav: true
                    },
                    1024: {
                        items: 3,
                        nav: true
                    }
                }
            });
        });

        AOS.init({
            duration: 1000, // Durasi animasi
            once: true, // Animasi berjalan sekali
            offset: 120, // Jarak sebelum elemen terlihat
        });

        var typed = new Typed(".auto-input", {
            strings: ["Albukhari Arabic Course!"],
            typeSpeed: 100,
            backSpeed: 80,
            loop: true
        })

        const menuIcon = document.getElementById('menuIcon');
        const navMobile = document.getElementById('navMobile');

        menuIcon.addEventListener('click', () => {
            const isMenuOpen = navMobile.classList.contains('show');

            if (isMenuOpen) {
                // Close Menu
                navMobile.classList.remove('show');
                menuIcon.classList.remove('fa-xmark');
                menuIcon.classList.add('fa-bars');
            } else {
                // Open Menu
                navMobile.classList.add('show');
                menuIcon.classList.remove('fa-bars');
                menuIcon.classList.add('fa-xmark');
            }
        });
    </script>
</body>

</html>
