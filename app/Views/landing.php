<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Import Management System</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <style>
        :root {
            --primary: #0274e6;
            --secondary: #0056b3;
            --accent: #c00411;
            --light: #f8f9fa;
            --dark: #212529;
            --success: #28a745;
            --warning: #ffc107;
            --danger: #dc3545;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f5f7fa;
            color: #333;
            overflow-x: hidden;
        }

        /* Navigation */
        .navbar {
            background: white;
            padding: 15px 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }

        .logo {
            color: var(--primary);
            font-size: 1.8rem;
            font-weight: bold;
            display: flex;
            align-items: center;
        }

        .logo img {
            height: 80px;
            margin-right: 10px;
        }

        .nav-links {
            display: flex;
            gap: 30px;
        }

        .nav-links a {
            color: var(--dark);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
        }

        .nav-links a:hover {
            color: var(--accent);
        }

        .nav-buttons {
            display: flex;
            gap: 15px;
        }

        .btn {
            padding: 8px 20px;
            border-radius: 4px;
            font-weight: 500;
            text-decoration: none;
            transition: all 0.3s;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .btn-primary {
            background: var(--primary);
            color: white;
            border: 2px solid var(--primary);
        }

        .btn-primary:hover {
            background: var(--secondary);
            border-color: var(--secondary);
        }

        .btn-outline {
            background: transparent;
            color: var(--primary);
            border: 2px solid var(--primary);
        }

        .btn-outline:hover {
            background: var(--primary);
            color: white;
        }

        /* Hero Section */
        .hero {
            padding: 150px 5% 100px;
            display: flex;
            align-items: center;
            background: linear-gradient(to right, #f8f9fa 50%, #e9f2fb 50%);
            position: relative;
            overflow: hidden;
        }

        .hero-content {
            flex: 1;
            max-width: 600px;
        }

        .hero h1 {
            font-size: 2.8rem;
            color: var(--dark);
            margin-bottom: 20px;
            line-height: 1.2;
        }

        .hero h1 span {
            color: var(--primary);
        }

        .hero p {
            font-size: 1.1rem;
            color: #555;
            margin-bottom: 30px;
            line-height: 1.6;
        }

        .hero-buttons {
            display: flex;
            gap: 15px;
            margin-bottom: 30px;
        }

        .hero-image {
            flex: 1;
            position: relative;
            height: 500px;
        }

        .hero-image img {
            position: absolute;
            width: 100%;
            max-width: 600px;
            border-radius: 10px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }

        .hero-image .img-1 {
            top: 0;
            left: 0;
            z-index: 2;
        }

        .hero-image .img-2 {
            top: 50px;
            left: 50px;
            z-index: 1;
            opacity: 0.8;
        }

        /* Stats Section */
        .stats {
            padding: 80px 5%;
            background: white;
            text-align: center;
        }

        .stats-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            gap: 30px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .stat-item {
            flex: 1;
            min-width: 200px;
        }

        .stat-number {
            font-size: 3rem;
            font-weight: bold;
            color: var(--primary);
            margin-bottom: 10px;
        }

        .stat-label {
            font-size: 1.1rem;
            color: #555;
        }

        /* Features Section */
        .features {
            padding: 100px 5%;
            background: #f8f9fa;
        }

        .section-title {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-title h2 {
            font-size: 2.2rem;
            color: var(--dark);
            margin-bottom: 15px;
        }

        .section-title p {
            color: #666;
            max-width: 700px;
            margin: 0 auto;
            font-size: 1.1rem;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .feature-card {
            background: white;
            border-radius: 10px;
            padding: 30px;
            text-align: center;
            transition: transform 0.3s, box-shadow 0.3s;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .feature-icon {
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 20px;
            background: #e9f2fb;
            width: 80px;
            height: 80px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
        }

        .feature-card h3 {
            margin-bottom: 15px;
            color: var(--dark);
            font-size: 1.3rem;
        }

        .feature-card p {
            color: #666;
            line-height: 1.6;
        }

        /* Services Section */
        .services {
            padding: 100px 5%;
            background: white;
        }

        .services-container {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .service-card {
            flex: 1 1 300px;
            background: #f8f9fa;
            border-radius: 10px;
            overflow: hidden;
            transition: transform 0.3s;
        }

        .service-card:hover {
            transform: translateY(-10px);
        }

        .service-image {
            height: 200px;
            overflow: hidden;
        }

        .service-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s;
        }

        .service-card:hover .service-image img {
            transform: scale(1.1);
        }

        .service-content {
            padding: 25px;
        }

        .service-content h3 {
            margin-bottom: 15px;
            color: var(--dark);
        }

        .service-content p {
            color: #666;
            margin-bottom: 20px;
            line-height: 1.6;
        }

        .service-link {
            color: var(--primary);
            text-decoration: none;
            font-weight: 500;
            display: inline-flex;
            align-items: center;
            gap: 5px;
        }

        .service-link i {
            transition: transform 0.3s;
        }

        .service-link:hover i {
            transform: translateX(5px);
        }

        /* Testimonials */
        .testimonials {
            padding: 100px 5%;
            background: #f8f9fa;
        }

        .swiper {
            width: 100%;
            max-width: 1000px;
            padding: 30px 0 50px;
        }

        .testimonial-card {
            background: white;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            margin: 0 20px;
        }

        .testimonial-content {
            font-style: italic;
            color: #555;
            margin-bottom: 20px;
            line-height: 1.8;
        }

        .testimonial-author {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .author-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            overflow: hidden;
        }

        .author-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .author-info h4 {
            color: var(--dark);
            margin-bottom: 5px;
        }

        .author-info p {
            color: #777;
            font-size: 0.9rem;
        }

        /* CTA Section */
        .cta {
            padding: 100px 5%;
            background: var(--primary);
            color: white;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .cta::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80') no-repeat center center;
            background-size: cover;
            opacity: 0.1;
        }

        .cta h2 {
            font-size: 2.2rem;
            margin-bottom: 20px;
            position: relative;
        }

        .cta p {
            font-size: 1.1rem;
            max-width: 700px;
            margin: 0 auto 30px;
            position: relative;
        }

        .cta-buttons {
            display: flex;
            justify-content: center;
            gap: 15px;
            position: relative;
        }

        .btn-white {
            background: white;
            color: var(--primary);
            border: 2px solid white;
        }

        .btn-white:hover {
            background: transparent;
            color: white;
        }

        .btn-transparent {
            background: transparent;
            color: white;
            border: 2px solid white;
        }

        .btn-transparent:hover {
            background: white;
            color: var(--primary);
        }

        /* Footer */
        .footer {
            background: var(--dark);
            color: white;
            padding: 60px 5% 30px;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .footer-col h3 {
            font-size: 1.3rem;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
        }

        .footer-col h3::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 50px;
            height: 2px;
            background: var(--accent);
        }

        .footer-col p {
            color: #bbb;
            margin-bottom: 15px;
            line-height: 1.6;
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 10px;
        }

        .footer-links a {
            color: #bbb;
            text-decoration: none;
            transition: color 0.3s;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .footer-links a:hover {
            color: white;
        }

        .footer-links i {
            width: 20px;
            text-align: center;
        }

        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }

        .social-links a {
            color: white;
            background: rgba(255, 255, 255, 0.1);
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            transition: background 0.3s;
        }

        .social-links a:hover {
            background: var(--accent);
        }

        .copyright {
            text-align: center;
            padding-top: 30px;
            margin-top: 30px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: #bbb;
            font-size: 0.9rem;
        }

        /* Responsive */
        @media (max-width: 992px) {
            .hero {
                flex-direction: column;
                text-align: center;
                background: #f8f9fa;
                padding-top: 120px;
            }

            .hero-content {
                margin-bottom: 50px;
            }

            .hero-buttons {
                justify-content: center;
            }

            .hero-image {
                height: auto;
                margin: 0 auto;
            }

            .hero-image img {
                position: static;
                margin-bottom: 20px;
            }
        }

        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }

            .hero h1 {
                font-size: 2.2rem;
            }

            .hero-buttons {
                flex-direction: column;
            }

            .btn {
                width: 100%;
                justify-content: center;
            }
        }
    </style>
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="logo">
            <img src="assets/logo.png" alt="Logo">
            <span>WorldWide Global Import</span>
        </div>
        <div class="nav-links">
            <a href="#home">Beranda</a>
            <a href="#services">Layanan</a>
            <a href="#features">Fitur</a>
            <a href="#about">Tentang Kami</a>
            <a href="http://wa.me/6285117008504">Kontak</a>
        </div>
        <div class="nav-buttons">
            <a href="/tracking" class="btn btn-outline">
                <i class="fas fa-search-location"></i> Tracking
            </a>
            <a href="/login" class="btn btn-primary">
                <i class="fas fa-sign-in-alt"></i> Login
            </a>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="hero-content">
            <h1>Solusi <span>Import Barang</span> Terbaik dari Luar Negeri</h1>
            <p>Kami menyediakan layanan import barang dari berbagai negara dengan proses cepat, aman, dan harga kompetitif. Mulai dari pembelian, pengurusan dokumen, hingga pengiriman ke Indonesia.</p>
            <div class="hero-buttons">
                <a href="\tracking" class="btn btn-primary">
                    <i class="fas fa-search-location"></i> Cek Status Barang
                </a>
                <a href="#contact" class="btn btn-outline">
                    <i class="fas fa-headset"></i> Konsultasi Gratis
                </a>
            </div>
            <div class="stats-container" style="justify-content: flex-start; margin-top: 30px;">
                <div class="stat-item" style="text-align: left;">
                    <div class="stat-number">15+</div>
                    <div class="stat-label">Klien Puas</div>
                </div>
                <div class="stat-item" style="text-align: left;">
                    <div class="stat-number">10+</div>
                    <div class="stat-label">Negara Mitra</div>
                </div>
            </div>
        </div>
        <div class="hero-image">
            <img src="https://images.unsplash.com/photo-1556740738-b6a63e27c4df?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Hero Image 1" class="img-1">
            <img src="https://images.unsplash.com/photo-1486401899868-0e435ed85128?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Hero Image 2" class="img-2">
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats">
        <div class="stats-container">
            <div class="stat-item">
                <div class="stat-number">3+</div>
                <div class="stat-label">Tahun Pengalaman</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">1000+</div>
                <div class="stat-label">Barang Diimport</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">12/6</div>
                <div class="stat-label">Layanan Pelanggan</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">99%</div>
                <div class="stat-label">Kepuasan Pelanggan</div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features" id="features">
        <div class="section-title">
            <h2>Mengapa Memilih Kami?</h2>
            <p>Kami memberikan solusi lengkap untuk semua kebutuhan import Anda dengan layanan terbaik dan profesional</p>
        </div>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-globe"></i>
                </div>
                <h3>Jaringan Global</h3>
                <p>Koneksi dengan supplier di berbagai negara untuk memastikan Anda mendapatkan produk terbaik dengan harga kompetitif</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-file-invoice-dollar"></i>
                </div>
                <h3>Transparansi Biaya</h3>
                <p>Detail biaya yang jelas tanpa hidden cost, termasuk bea masuk, pajak, dan biaya logistik</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3>Keamanan Barang</h3>
                <p>Asuransi dan sistem packing khusus untuk memastikan barang sampai dalam kondisi sempurna</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-stopwatch"></i>
                </div>
                <h3>Proses Cepat</h3>
                <p>Waktu pengiriman yang lebih singkat dengan sistem logistik terintegrasi kami</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-headset"></i>
                </div>
                <h3>Layanan 12/6</h3>
                <p>Tim customer service siap membantu Anda kapan saja melalui berbagai channel komunikasi</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-search-location"></i>
                </div>
                <h3>Real-time Tracking</h3>
                <p>Pantau perjalanan barang Anda dari negara asal hingga sampai di gudang Anda</p>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services" id="services">
        <div class="section-title">
            <h2>Layanan Kami</h2>
            <p>Berbagai solusi import yang kami tawarkan untuk bisnis dan kebutuhan pribadi Anda</p>
        </div>
        <div class="services-container">
            <div class="service-card">
                <div class="service-image">
                    <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Import Bisnis">
                </div>
                <div class="service-content">
                    <h3>Import untuk Bisnis</h3>
                    <p>Solusi lengkap untuk perusahaan yang ingin mengimpor barang dalam skala besar dengan biaya efisien.</p>
                    <a href="#" class="service-link">
                        Selengkapnya <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <div class="service-card">
                <div class="service-image">
                    <img src="https://images.unsplash.com/photo-1556740738-b6a63e27c4df?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Import Pribadi">
                </div>
                <div class="service-content">
                    <h3>Import Pribadi</h3>
                    <p>Beli barang dari luar negeri untuk kebutuhan pribadi dengan proses mudah dan harga terjangkau.</p>
                    <a href="#" class="service-link">
                        Selengkapnya <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <div class="service-card">
                <div class="service-image">
                    <img src="https://images.unsplash.com/photo-1434626881859-194d67b2b86f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Konsolidasi Barang">
                </div>
                <div class="service-content">
                    <h3>Konsolidasi Barang</h3>
                    <p>Gabungkan beberapa barang dari berbagai supplier untuk menghemat biaya pengiriman.</p>
                    <a href="#" class="service-link">
                        Selengkapnya <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>



    <!-- Testimonials Section -->
    <section class="testimonials" style="text-align: center;">
        <div class="section-title">
            <h2>Apa Kata Klien Kami?</h2>
            <p>Testimoni dari pelanggan yang telah menggunakan layanan kami</p>
        </div>
        <div class="swiper">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="testimonial-card" style="max-width: 600px; margin: 0 auto; padding: 20px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); background: #fff; border-radius: 10px;">
                        <div class="testimonial-content" style="font-style: italic; margin-bottom: 20px;">
                            "Sangat puas dengan layanan import dari China. Barang sampai tepat waktu dengan kondisi baik. Proses administrasi juga sangat jelas dan transparan. Recommended banget!"
                        </div>
                        <div class="testimonial-author" style="display: flex; flex-direction: column; align-items: center; gap: 5px;">
                            <div class="author-avatar" style="display: none;"></div>
                            <div class="author-info">
                                <h4 style="margin: 0; font-size: 18px; font-weight: 600;">Budi Santoso</h4>
                                <p style="margin: 0; font-size: 14px; color: #666;">Owner Toko Elektronik</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="testimonial-card" style="max-width: 600px; margin: 0 auto; padding: 20px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); background: #fff; border-radius: 10px;">
                        <div class="testimonial-content" style="font-style: italic; margin-bottom: 20px;">
                            "Sebagai dropshipper, saya sangat terbantu dengan layanan konsolidasi barangnya. Biaya pengiriman jadi lebih murah dan prosesnya sangat mudah diakses melalui dashboard online."
                        </div>
                        <div class="testimonial-author" style="display: flex; flex-direction: column; align-items: center; gap: 5px;">
                            <div class="author-avatar" style="display: none;"></div>
                            <div class="author-info">
                                <h4 style="margin: 0; font-size: 18px; font-weight: 600;">Dewi Lestari</h4>
                                <p style="margin: 0; font-size: 14px; color: #666;">Online Seller</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="testimonial-card" style="max-width: 600px; margin: 0 auto; padding: 20px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); background: #fff; border-radius: 10px;">
                        <div class="testimonial-content" style="font-style: italic; margin-bottom: 20px;">
                            "Tim yang sangat profesional dan responsif. Saya mengimpor mesin industri dari china dan mereka membantu dari proses pembelian hingga pengurusan bea cukai. Sangat memuaskan!"
                        </div>
                        <div class="testimonial-author" style="display: flex; flex-direction: column; align-items: center; gap: 5px;">
                            <div class="author-avatar" style="display: none;"></div>
                            <div class="author-info">
                                <h4 style="margin: 0; font-size: 18px; font-weight: 600;">Suranta Basuki</h4>
                                <p style="margin: 0; font-size: 14px; color: #666;">Direktur PT Maju Jaya</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta">
        <h2>Siap Memulai Import Barang Anda?</h2>
        <p>Konsultasikan kebutuhan import Anda dengan tim profesional kami dan dapatkan penawaran terbaik hari ini</p>
        <div class="cta-buttons">
            <a href="http://wa.me/6285117008504" class="btn btn-white">
                <i class="fas fa-headset"></i> Hubungi Kami
            </a>
            <a href="/register" class="btn btn-transparent">
                <i class="fas fa-user-plus"></i> Daftar Sekarang
            </a>
        </div>
    </section>



    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script>
        // Initialize Swiper
        const swiper = new Swiper('.swiper', {
            loop: true,
            autoplay: {
                delay: 5000,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            breakpoints: {
                640: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 30,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
            }
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();

                const targetId = this.getAttribute('href');
                if (targetId === '#') return;

                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.style.boxShadow = '0 2px 15px rgba(0, 0, 0, 0.1)';
            } else {
                navbar.style.boxShadow = '0 2px 15px rgba(0, 0, 0, 0.1)';
            }
        });
    </script>
</body>

</html>
<?= $this->endSection() ?>