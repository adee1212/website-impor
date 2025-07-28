<!DOCTYPE html>
<html>

<head>
    <title>Hasil Tracking</title>
</head>

<body>
    <!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Tracking - Import System</title>
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
            flex-direction: column;
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
            max-width: 1200px;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
            animation: fadeIn 0.8s ease-out;
            padding: 40px;
            margin-top: 20px;
        }
        
        .header {
            text-align: center;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 1px solid #e9ecef;
            position: relative;
        }
        
        .logo {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 15px;
        }
        
        .logo i {
            font-size: 36px;
            color: #1a2980;
            margin-right: 15px;
        }
        
        .logo h1 {
            color: #1a2980;
            font-size: 32px;
            display: inline-block;
            background: linear-gradient(to right, #1a2980, #26d0ce);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        
        .tracking-title {
            text-align: center;
            margin: 30px 0;
            animation: fadeIn 1s ease-out;
        }
        
        .tracking-title h2 {
            color: #1a2980;
            font-size: 28px;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .tracking-title h2 i {
            margin-right: 10px;
            color: #26d0ce;
        }
        
        .resi-info {
            background: linear-gradient(to right, #f8f9fa, #e9ecef);
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 30px;
            border-left: 4px solid #1a2980;
            display: flex;
            justify-content: space-between;
            align-items: center;
            animation: slideInLeft 0.8s ease-out;
        }
        
        .resi-label {
            font-weight: 600;
            color: #333;
            font-size: 18px;
        }
        
        .resi-value {
            font-weight: 700;
            color: #1a2980;
            font-size: 20px;
            background: rgba(26, 41, 128, 0.1);
            padding: 8px 15px;
            border-radius: 6px;
        }
        
        .no-results {
            text-align: center;
            padding: 40px;
            animation: fadeIn 1s ease-out;
        }
        
        .no-results i {
            font-size: 60px;
            color: #e74c3c;
            margin-bottom: 20px;
            background: linear-gradient(to right, #e74c3c, #c0392b);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        
        .no-results h3 {
            color: #333;
            margin-bottom: 15px;
            font-size: 24px;
        }
        
        .no-results p {
            color: #666;
            font-size: 18px;
            margin-bottom: 30px;
        }
        
        .results-container {
            overflow-x: auto;
            margin-bottom: 40px;
            animation: fadeInUp 1s ease-out;
        }
        
        .results-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .results-table thead {
            background: linear-gradient(to right, #1a2980, #26d0ce);
            color: white;
        }
        
        .results-table th {
            padding: 18px 15px;
            text-align: left;
            font-weight: 600;
            font-size: 16px;
        }
        
        .results-table tbody tr {
            background-color: white;
            transition: all 0.3s ease;
        }
        
        .results-table tbody tr:nth-child(even) {
            background-color: #f8f9fa;
        }
        
        .results-table tbody tr:hover {
            background-color: #e9f7fe;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }
        
        .results-table td {
            padding: 15px;
            border-bottom: 1px solid #e9ecef;
            color: #333;
        }
        
        .status-cell {
            display: flex;
            align-items: center;
        }
        
        .status-badge {
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }
        
        .status-shipped {
            background-color: #3498db;
            color: white;
        }
        
        .status-processing {
            background-color: #f39c12;
            color: white;
        }
        
        .status-delivered {
            background-color: #2ecc71;
            color: white;
        }
        
        .status-customs {
            background-color: #9b59b6;
            color: white;
        }
        
        .btn-container {
            display: flex;
            justify-content: center;
            margin-top: 30px;
            animation: fadeInUp 1.2s ease-out;
        }
        
        .btn-back {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 15px 30px;
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
            text-decoration: none;
            box-shadow: 0 5px 15px rgba(26, 41, 128, 0.3);
        }
        
        .btn-back:hover {
            background: linear-gradient(to right, #26d0ce, #1a2980);
            transform: translateY(-3px);
            box-shadow: 0 7px 20px rgba(26, 41, 128, 0.4);
        }
        
        .btn-back:active {
            transform: translateY(1px);
        }
        
        .btn-back i {
            margin-right: 10px;
        }
        
        .timeline-container {
            margin-top: 40px;
            animation: fadeInUp 1.4s ease-out;
        }
        
        .timeline-title {
            color: #1a2980;
            font-size: 22px;
            margin-bottom: 25px;
            display: flex;
            align-items: center;
        }
        
        .timeline-title i {
            margin-right: 10px;
            color: #26d0ce;
        }
        
        .timeline {
            position: relative;
            max-width: 1000px;
            margin: 0 auto;
        }
        
        .timeline::after {
            content: '';
            position: absolute;
            width: 6px;
            background-color: #e9ecef;
            top: 0;
            bottom: 0;
            left: 50%;
            margin-left: -3px;
            border-radius: 3px;
        }
        
        .timeline-item {
            padding: 10px 40px;
            position: relative;
            width: 50%;
            box-sizing: border-box;
        }
        
        .timeline-item::after {
            content: '';
            position: absolute;
            width: 20px;
            height: 20px;
            background-color: white;
            border: 4px solid #1a2980;
            top: 15px;
            border-radius: 50%;
            z-index: 1;
        }
        
        .timeline-item-left {
            left: 0;
        }
        
        .timeline-item-left::after {
            right: -10px;
        }
        
        .timeline-item-right {
            left: 50%;
        }
        
        .timeline-item-right::after {
            left: -10px;
        }
        
        .timeline-content {
            padding: 20px;
            background-color: white;
            position: relative;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.08);
            border-left: 4px solid #1a2980;
        }
        
        .timeline-date {
            color: #1a2980;
            font-weight: 600;
            margin-bottom: 5px;
        }
        
        .timeline-status {
            font-weight: 600;
            margin-bottom: 10px;
            color: #333;
        }
        
        .timeline-location {
            color: #666;
            font-size: 14px;
            display: flex;
            align-items: center;
        }
        
        .timeline-location i {
            margin-right: 5px;
            color: #e74c3c;
        }
        
        .footer {
            text-align: center;
            margin-top: 40px;
            color: #666;
            font-size: 14px;
            padding-top: 20px;
            border-top: 1px solid #e9ecef;
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
        
        /* Responsive */
        @media (max-width: 992px) {
            .timeline::after {
                left: 31px;
            }
            
            .timeline-item {
                width: 100%;
                padding-left: 70px;
                padding-right: 25px;
            }
            
            .timeline-item::after {
                left: 21px;
            }
            
            .timeline-item-left, .timeline-item-right {
                left: 0;
            }
            
            .timeline-item-left::after, .timeline-item-right::after {
                left: 21px;
            }
        }
        
        @media (max-width: 768px) {
            .container {
                padding: 25px 15px;
            }
            
            .logo h1 {
                font-size: 26px;
            }
            
            .resi-info {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
            }
            
            .results-table th, .results-table td {
                padding: 12px 8px;
                font-size: 14px;
            }
            
            .btn-back {
                padding: 12px 20px;
                font-size: 16px;
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
        </div>
        
        <div class="tracking-title">
            <h2><i class="fas fa-map-marked-alt"></i> Hasil Tracking Barang</h2>
        </div>
        
        <div class="resi-info">
            <div class="resi-label">Nomor Resi yang Dilacak:</div>
           <div class="resi-value">
    <?= isset($hasil[0]['nomor_resi']) ? htmlspecialchars($hasil[0]['nomor_resi']) : htmlspecialchars($nomor_resi); ?>
</div>

        </div>
        
        <!-- Hasil Tracking dari Database -->
        
        
        <?php if (empty($hasil)): ?>
            <div class="no-results">
                <i class="fas fa-exclamation-triangle"></i>
                <h3>Data Tidak Ditemukan</h3>
                <p>Maaf, tidak ditemukan barang dengan nomor resi <strong><?= htmlspecialchars($nomor_resi) ?></strong>.</p>
            </div>
        <?php else: ?>
            <div class="results-container">
                <table class="results-table">
                    <thead>
                        <tr>
                            <th><i class="fas fa-barcode"></i> Nomor Resi</th>
                            <th><i class="fas fa-box"></i> Nama Barang</th>
                            <th><i class="fas fa-cubes"></i> Jumlah</th>
                            <th><i class="fas fa-code"></i> HS Code</th>
                            <th><i class="fas fa-truck-loading"></i> Status Pengiriman</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($hasil as $barang): ?>
                            <?php 
                            // Menentukan kelas CSS berdasarkan status pengiriman
                            $statusClass = '';
                            $statusIcon = '';
                            switch ($barang['status_pengiriman']) {
                                case 'Proses Bea Cukai':
                                    $statusClass = 'status-customs';
                                    $statusIcon = 'fas fa-warehouse';
                                    break;
                                case 'Dalam Pengiriman Laut':
                                    $statusClass = 'status-shipped';
                                    $statusIcon = 'fas fa-ship';
                                    break;
                                case 'Telah Sampai':
                                    $statusClass = 'status-delivered';
                                    $statusIcon = 'fas fa-check-circle';
                                    break;
                                case 'Proses Penanganan':
                                    $statusClass = 'status-processing';
                                    $statusIcon = 'fas fa-tasks';
                                    break;
                                default:
                                    $statusClass = 'status-processing';
                                    $statusIcon = 'fas fa-tasks';
                            }
                            ?>
                            <tr>
                                <td><?= htmlspecialchars($barang['nomor_resi']) ?></td>
                                <td><?= htmlspecialchars($barang['nama_barang']) ?></td>
                                <td><?= htmlspecialchars($barang['jumlah']) ?></td>
                                <td><?= htmlspecialchars($barang['hs_code']) ?></td>
                                <td class="status-cell">
                                    <span class="status-badge <?= $statusClass ?>">
                                        <i class="<?= $statusIcon ?>"></i> <?= htmlspecialchars($barang['status_pengiriman']) ?>
                                    </span>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            
           
        <?php endif; ?>
        
        <div class="btn-container">
            <a href="/tracking" class="btn-back">
                <i class="fas fa-search"></i> Cari Resi Lain
            </a>
        </div>
        
        <div class="footer">
            <p>Butuh bantuan lebih lanjut? <a href="#">Hubungi Layanan Pelanggan</a></p>
            <p>© 2023 Import System. Hak Cipta Dilindungi. | <a href="#">Kebijakan Privasi</a> | <a href="#">Syarat & Ketentuan</a></p>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Animasi untuk baris tabel
            const tableRows = document.querySelectorAll('.results-table tbody tr');
            tableRows.forEach((row, index) => {
                row.style.animationDelay = `${index * 0.1}s`;
                row.classList.add('animate__animated', 'animate__fadeInUp');
            });
            
            // Animasi untuk timeline items
            const timelineItems = document.querySelectorAll('.timeline-item');
            timelineItems.forEach((item, index) => {
                item.style.animationDelay = `${index * 0.2}s`;
                item.classList.add('animate__animated', 'animate__fadeInUp');
            });
        });
    </script>
</body>
</html>