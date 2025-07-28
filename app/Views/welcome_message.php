<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Import Management System</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #2c3e50;
            --secondary: #34495e;
            --accent: #3498db;
            --light: #ecf0f1;
            --danger: #e74c3c;
            --success: #2ecc71;
            --warning: #f39c12;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #f5f7fa;
            color: #333;
        }
        
        /* Navigation */
        .navbar {
            background: var(--primary);
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        .logo {
            color: white;
            font-size: 1.5rem;
            font-weight: bold;
            display: flex;
            align-items: center;
        }
        
        .logo i {
            margin-right: 10px;
        }
        
        .login-btn {
            background: var(--accent);
            color: white;
            border: none;
            padding: 8px 20px;
            border-radius: 4px;
            font-weight: 500;
            text-decoration: none;
            transition: all 0.3s;
        }
        
        .login-btn:hover {
            background: #2980b9;
        }
        
        /* Hero Section */
        .hero {
            padding: 80px 30px;
            text-align: center;
            background: linear-gradient(135deg, #f5f7fa 0%, #e4e8eb 100%);
        }
        
        .hero h1 {
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 20px;
        }
        
        .hero p {
            font-size: 1.2rem;
            color: var(--secondary);
            max-width: 800px;
            margin: 0 auto 40px;
        }
        
        /* Features Section */
        .features {
            padding: 60px 30px;
            background: white;
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 40px;
            color: var(--primary);
        }
        
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .feature-card {
            background: var(--light);
            border-radius: 8px;
            padding: 30px;
            text-align: center;
            transition: transform 0.3s;
        }
        
        .feature-card:hover {
            transform: translateY(-5px);
        }
        
        .feature-icon {
            font-size: 2.5rem;
            color: var(--accent);
            margin-bottom: 20px;
        }
        
        .feature-card h3 {
            margin-bottom: 15px;
            color: var(--primary);
        }
        
        /* Footer */
        .footer {
            background: var(--primary);
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 60px;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="logo">
            <i class="fas fa-boxes"></i>
            <span>Import Management</span>
        </div>
        <a href="/login" class="login-btn">
            <i class="fas fa-sign-in-alt"></i> Login
        </a>
    </nav>
    
    <!-- Hero Section -->
    <section class="hero">
        <h1>Solusi Manajemen Import Terintegrasi</h1>
        <p>Sistem terpadu untuk mengelola proses import Anda dengan lebih efisien dan transparan</p>
    </section>
    
    <!-- Features Section -->
    <section class="features">
        <h2 class="section-title">Fitur Unggulan Kami</h2>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-boxes"></i>
                </div>
                <h3>Kelola Barang</h3>
                <p>Manajemen data barang import secara lengkap dan terstruktur</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-calculator"></i>
                </div>
                <h3>Perhitungan CBM</h3>
                <p>Hitung volume barang secara akurat untuk biaya pengiriman</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-file-invoice-dollar"></i>
                </div>
                <h3>Invoice Otomatis</h3>
                <p>Generate invoice profesional dengan hitungan biaya otomatis</p>
            </div>
        </div>
    </section>
    
    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2023 Import Management System. All rights reserved.</p>
    </footer>
</body>
</html>