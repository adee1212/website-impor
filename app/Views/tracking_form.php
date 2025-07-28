<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tracking Barang - Import System</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background: linear-gradient(135deg, #1a2980, #26d0ce);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            background-image: url('https://images.unsplash.com/photo-1519501025264-65ba15a82390?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            background-blend-mode: multiply;
        }
        
        .container {
            width: 100%;
            max-width: 800px;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
            animation: fadeIn 0.8s ease-out;
            padding: 40px;
        }
        
        .header {
            text-align: center;
            margin-bottom: 30px;
        }
        
        .logo {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 15px;
            animation: fadeIn 0.8s ease-out;
        }
        
        .logo i {
            font-size: 36px;
            color: #1a2980;
            margin-right: 15px;
            animation: pulse 2s infinite;
        }
        
        .logo h1 {
            color: #1a2980;
            font-size: 32px;
            display: inline-block;
            background: linear-gradient(to right, #1a2980, #26d0ce);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        
        .subtitle {
            color: #555;
            font-size: 18px;
            margin-bottom: 30px;
            text-align: center;
            animation: fadeIn 1s ease-out;
        }
        
        .tracking-form {
            background: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            padding: 30px;
            margin-bottom: 30px;
            animation: fadeInUp 1s ease-out;
        }
        
        .form-title {
            text-align: center;
            color: #1a2980;
            margin-bottom: 25px;
            font-size: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .form-title i {
            margin-right: 10px;
            color: #26d0ce;
        }
        
        .form-group {
            margin-bottom: 30px;
            position: relative;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 10px;
            font-weight: 600;
            color: #333;
            font-size: 16px;
            animation: slideInLeft 0.8s ease-out;
        }
        
        .input-container {
            position: relative;
            animation: slideInRight 0.8s ease-out;
        }
        
        .input-container i {
            position: absolute;
            left: 20px;
            top: 50%;
            transform: translateY(-50%);
            color: #777;
            font-size: 20px;
            transition: all 0.3s ease;
        }
        
        .form-group input {
            width: 100%;
            padding: 18px 20px 18px 60px;
            border: 2px solid #e1e5ee;
            border-radius: 10px;
            font-size: 18px;
            transition: all 0.3s ease;
            outline: none;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
        }
        
        .form-group input:focus {
            border-color: #26d0ce;
            box-shadow: 0 0 0 3px rgba(38, 208, 206, 0.2);
        }
        
        .form-group input:focus + i {
            color: #26d0ce;
            animation: pulse 1s infinite;
        }
        
        .btn-track {
            display: block;
            width: 100%;
            padding: 18px;
            background: linear-gradient(to right, #1a2980, #26d0ce);
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 18px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(26, 41, 128, 0.3);
            animation: fadeInUp 1.2s ease-out;
        }
        
        .btn-track:hover {
            background: linear-gradient(to right, #26d0ce, #1a2980);
            transform: translateY(-3px);
            box-shadow: 0 7px 20px rgba(26, 41, 128, 0.4);
        }
        
        .btn-track:active {
            transform: translateY(1px);
        }
        
        .btn-track i {
            margin-right: 10px;
        }
        
        .features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 40px;
        }
        
        .feature-card {
            background: linear-gradient(to bottom right, #f8f9fa, #ffffff);
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            border: 1px solid #e9ecef;
            transition: all 0.3s ease;
            animation: fadeInUp 1s ease-out;
        }
        
        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            border-color: #26d0ce;
        }
        
        .feature-card i {
            font-size: 36px;
            color: #1a2980;
            margin-bottom: 15px;
            background: linear-gradient(to right, #1a2980, #26d0ce);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        
        .feature-card h3 {
            color: #1a2980;
            margin-bottom: 10px;
            font-size: 18px;
        }
        
        .feature-card p {
            color: #666;
            font-size: 14px;
        }
        
        .footer {
            text-align: center;
            margin-top: 40px;
            color: #666;
            font-size: 14px;
            animation: fadeIn 1.6s ease-out;
        }
        
        .footer a {
            color: #1a2980;
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s;
        }
        
        .footer a:hover {
            color: #26d0ce;
            text-decoration: underline;
        }
        
        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
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
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .container {
                padding: 25px 20px;
            }
            
            .logo h1 {
                font-size: 26px;
            }
            
            .subtitle {
                font-size: 16px;
            }
            
            .tracking-form {
                padding: 20px;
            }
            
            .form-group input {
                padding: 15px 15px 15px 50px;
                font-size: 16px;
            }
            
            .features {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo">
                <i class="fas fa-ship"></i>
                <h1>IMPORT SYSTEM</h1>
            </div>
            <p class="subtitle">Lacak pengiriman barang impor Anda dengan mudah dan real-time</p>
        </div>
        
        <div class="tracking-form">
            <h2 class="form-title"><i class="fas fa-map-marker-alt"></i> Tracking Barang</h2>
            
            <form action="/tracking/cari" method="post">
                <?= csrf_field() ?>
                
                <div class="form-group">
                    <label for="nomor_resi">Masukkan Nomor Resi Pengiriman</label>
                    <div class="input-container">
                        <i class="fas fa-barcode"></i>
                        <input type="text" name="nomor_resi" id="nomor_resi" 
                               placeholder="Contoh: IMP-2023-8765-ABCD" required>
                    </div>
                </div>
                
                <button type="submit" class="btn-track">
                    <i class="fas fa-search-location"></i> Lacak Pengiriman
                </button>
            </form>
        </div>
        
        <div class="features">
            <div class="feature-card">
                <i class="fas fa-globe-americas"></i>
                <h3>Lacak dari Mana Saja</h3>
                <p>Pantau pengiriman Anda dari seluruh dunia kapan saja</p>
            </div>
            
            <div class="feature-card">
                <i class="fas fa-clock"></i>
                <h3>Update Real-time</h3>
                <p>Informasi lokasi terbaru setiap 30 menit sekali</p>
            </div>
            
            <div class="feature-card">
                <i class="fas fa-bell"></i>
                <h3>Notifikasi Otomatis</h3>
                <p>Dapatkan pemberitahuan saat status pengiriman berubah</p>
            </div>
        </div>
        
        <div class="footer">
            <p>Butuh bantuan? <a href="#">Hubungi Layanan Pelanggan</a></p>
            <p>© 2023 Import System. Hak Cipta Dilindungi.</p>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Animasi saat form focus
            const inputField = document.getElementById('nomor_resi');
            
            inputField.addEventListener('focus', function() {
                this.parentElement.parentElement.style.transform = 'scale(1.02)';
            });
            
            inputField.addEventListener('blur', function() {
                this.parentElement.parentElement.style.transform = 'scale(1)';
            });
            
            // Animasi saat tombol dihover
            const trackBtn = document.querySelector('.btn-track');
            
            trackBtn.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-3px)';
                this.style.boxShadow = '0 10px 25px rgba(26, 41, 128, 0.4)';
            });
            
            trackBtn.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
                this.style.boxShadow = '0 5px 15px rgba(26, 41, 128, 0.3)';
            });
        });
    </script>
</body>
</html>