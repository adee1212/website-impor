<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi - Import System</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background: linear-gradient(120deg, #1a2980, #26d0ce);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .container {
            display: flex;
            width: 900px;
            background-color: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
            animation: fadeIn 0.8s ease-out;
        }

        .hero {
            flex: 1;
            background: linear-gradient(rgba(26, 41, 128, 0.85), rgba(38, 208, 206, 0.85)), url('https://images.unsplash.com/photo-1533750349088-cd871a92f312?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: "";
            position: absolute;
            top: -50px;
            left: -50px;
            width: 200px;
            height: 200px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
        }

        .hero::after {
            content: "";
            position: absolute;
            bottom: -80px;
            right: -80px;
            width: 250px;
            height: 250px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
        }

        .hero h2 {
            font-size: 32px;
            margin-bottom: 15px;
            position: relative;
            z-index: 2;
            animation: slideInLeft 0.8s ease-out;
        }

        .hero p {
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 20px;
            position: relative;
            z-index: 2;
            animation: slideInLeft 1s ease-out;
        }

        .features {
            list-style-type: none;
            margin-top: 30px;
            position: relative;
            z-index: 2;
            animation: slideInLeft 1.2s ease-out;
        }

        .features li {
            margin-bottom: 15px;
            display: flex;
            align-items: center;
        }

        .features i {
            margin-right: 10px;
            color: #26d0ce;
            font-size: 20px;
            background: white;
            border-radius: 50%;
            width: 30px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .form-container {
            flex: 1;
            padding: 40px;
            position: relative;
        }

        .logo {
            text-align: center;
            margin-bottom: 30px;
            animation: fadeIn 1s ease-out;
        }

        .logo h1 {
            color: #1a2980;
            font-size: 28px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .logo h1 i {
            margin-right: 10px;
            color: #26d0ce;
        }

        .form-group {
            margin-bottom: 25px;
            position: relative;
            animation: slideInRight 0.8s ease-out;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #333;
            font-size: 14px;
        }

        .input-with-icon {
            position: relative;
        }

        .input-with-icon i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #777;
        }

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 15px 15px 15px 45px;
            border: 2px solid #e1e5ee;
            border-radius: 8px;
            font-size: 16px;
            transition: all 0.3s ease;
            outline: none;
        }

        .form-group input:focus,
        .form-group select:focus {
            border-color: #26d0ce;
            box-shadow: 0 0 0 3px rgba(38, 208, 206, 0.2);
        }

        .form-group input:focus+i {
            color: #26d0ce;
            animation: pulse 1s infinite;
        }

        .form-group select {
            appearance: none;
            background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cpolyline points='6 9 12 15 18 9'%3e%3c/polyline%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right 15px center;
            background-size: 16px;
            padding-right: 40px;
        }

        .btn {
            display: block;
            width: 100%;
            padding: 15px;
            background: linear-gradient(to right, #1a2980, #26d0ce);
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 18px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
            animation: fadeInUp 1.2s ease-out;
        }

        .btn:hover {
            background: linear-gradient(to right, #26d0ce, #1a2980);
            transform: translateY(-3px);
            box-shadow: 0 7px 15px rgba(38, 208, 206, 0.4);
        }

        .btn:active {
            transform: translateY(1px);
        }

        .btn::after {
            content: "";
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: rgba(255, 255, 255, 0.1);
            transform: rotate(30deg);
            transition: all 0.6s ease;
        }

        .btn:hover::after {
            transform: rotate(30deg) translate(20%, 20%);
        }

        .footer-text {
            text-align: center;
            margin-top: 25px;
            color: #777;
            font-size: 14px;
            animation: fadeIn 1.4s ease-out;
        }

        .footer-text a {
            color: #1a2980;
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s;
        }

        .footer-text a:hover {
            color: #26d0ce;
            text-decoration: underline;
        }

        /* Animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-50px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes slideInRight {
            from {
                opacity: 0;
                transform: translateX(50px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes pulse {
            0% {
                transform: translateY(-50%) scale(1);
            }

            50% {
                transform: translateY(-50%) scale(1.1);
            }

            100% {
                transform: translateY(-50%) scale(1);
            }
        }

        /* Responsive */
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                width: 100%;
            }

            .hero {
                padding: 30px 20px;
            }

            .hero h2 {
                font-size: 24px;
            }

            .form-container {
                padding: 30px 20px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="hero">
            <h2>Bergabunglah dengan WorldWide Global Import</h2>
            <p>Daftarkan diri Anda sekarang dan nikmati kemudahan dalam mengelola proses impor serta pemantauan barang Impor.</p>

            <ul class="features">
                <li><i class="fas fa-check-circle"></i> Akses ke jaringan pemasok internasional</li>
                <li><i class="fas fa-check-circle"></i> Pelacakan pengiriman real-time</li>
                <li><i class="fas fa-check-circle"></i> Manajemen dokumen otomatis</li>
                <li><i class="fas fa-check-circle"></i> Dukungan bea cukai 24/7</li>
                <li><i class="fas fa-check-circle"></i> Analisis pasar dan harga terupdate</li>
            </ul>
        </div>

        <div class="form-container">
            <div class="logo">
                <h1><i class="fas fa-ship"></i> IMPORT SYSTEM</h1>
                <p>Registrasi Akun Baru</p>
            </div>

            <form action="/register/save" method="post">
                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <div class="input-with-icon">
                        <i class="fas fa-user"></i>
                        <input type="text" id="nama" name="nama" placeholder="Masukkan nama lengkap" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <div class="input-with-icon">
                        <i class="fas fa-envelope"></i>
                        <input type="email" id="email" name="email" placeholder="Masukkan email" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <div class="input-with-icon">
                        <i class="fas fa-lock"></i>
                        <input type="password" id="password" name="password" placeholder="Buat password" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="role">Peran</label>
                    <div class="input-with-icon">
                        <i class="fas fa-user-tag"></i>
                        <select id="role" name="role" required>
                            <option value="" disabled selected>Pilih peran Anda</option>
                            <option value="importir">Importir</option>
                            <option value="operator">Operator</option>

                        </select>
                    </div>
                </div>

                <button type="submit" class="btn">Daftar Sekarang</button>
            </form>

            <p class="footer-text">Sudah punya akun? <a href="#">Masuk disini</a></p>
            <p class="footer-text">Dengan mendaftar, Anda menyetujui <a href="#">Syarat dan Ketentuan</a> serta <a href="#">Kebijakan Privasi</a> kami</p>
        </div>
    </div>
</body>

</html>