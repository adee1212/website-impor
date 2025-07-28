<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Import Management Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
        
        .dashboard-container {
            display: flex;
            min-height: 100vh;
        }
        
        .sidebar {
            width: 250px;
            background: var(--primary);
            color: white;
            padding: 20px 0;
            box-shadow: 2px 0 10px rgba(0,0,0,0.1);
        }
        
        .sidebar-header {
            padding: 0 20px 20px;
            border-bottom: 1px solid rgba(255,255,255,0.1);
            margin-bottom: 20px;
        }
        
        .sidebar-header h2 {
            font-size: 1.3rem;
            margin-bottom: 5px;
        }
        
        .user-info {
            font-size: 0.9rem;
            opacity: 0.8;
        }
        
        .user-role {
            display: inline-block;
            background: var(--accent);
            padding: 2px 8px;
            border-radius: 10px;
            font-size: 0.7rem;
            margin-top: 5px;
        }
        
        .nav-menu {
            list-style: none;
        }
        
        .nav-menu li {
            margin: 5px 0;
        }
        
        .nav-menu a {
            display: block;
            color: white;
            text-decoration: none;
            padding: 12px 20px;
            transition: all 0.3s;
            border-left: 3px solid transparent;
        }
        
        .nav-menu a:hover {
            background: var(--secondary);
            border-left: 3px solid var(--accent);
        }
        
        .nav-menu a i {
            margin-right: 10px;
            width: 20px;
            text-align: center;
        }
        
        .main-content {
            flex: 1;
            padding: 30px;
        }
        
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }
        
        .page-title h1 {
            font-size: 1.8rem;
            color: var(--primary);
        }
        
        .logout-btn {
            background: var(--danger);
            color: white;
            border: none;
            padding: 8px 15px;
            border-radius: 4px;
            cursor: pointer;
            display: flex;
            align-items: center;
        }
        
        .logout-btn i {
            margin-right: 5px;
        }
        
        .card {
            background: white;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            margin-bottom: 30px;
            overflow-x: auto;
        }
        
        .action-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        
        .btn {
            display: inline-flex;
            align-items: center;
            padding: 8px 15px;
            border-radius: 4px;
            text-decoration: none;
            font-size: 0.9rem;
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .btn-primary {
            background: var(--accent);
            color: white;
            border: none;
        }
        
        .btn-primary:hover {
            background: #2980b9;
        }
        
        .search-filter {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
        }
        
        .search-filter input, 
        .search-filter select {
            padding: 8px 12px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 0.9rem;
        }
        
        .data-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.9rem;
        }
        
        .data-table th {
            background: var(--primary);
            color: white;
            padding: 12px 15px;
            font-weight: 500;
            text-align: left;
        }
        
        .data-table td {
            padding: 12px 15px;
            border-bottom: 1px solid #eee;
            vertical-align: middle;
        }
        
        .data-table tr:hover {
            background: #f8f9fa;
        }
        
        .status {
            display: inline-block;
            padding: 4px 8px;
            border-radius: 12px;
            font-size: 0.75rem;
            font-weight: 500;
        }
        
        .status-shipped {
            background: #d4edda;
            color: #155724;
        }
        
        .status-pending {
            background: #fff3cd;
            color: #856404;
        }
        
        .status-customs {
            background: #cce5ff;
            color: #004085;
        }
        
        .status-delayed {
            background: #f8d7da;
            color: #721c24;
        }
        
        .text-right {
            text-align: right;
        }
        
        .text-center {
            text-align: center;
        }
        
        .badge {
            display: inline-block;
            padding: 3px 7px;
            border-radius: 10px;
            font-size: 0.75rem;
            font-weight: bold;
        }
        
        .badge-profit {
            background: #d4edda;
            color: #155724;
        }
        
        .badge-loss {
            background: #f8d7da;
            color: #721c24;
        }
        
        .pagination {
            display: flex;
            justify-content: center;
            margin-top: 20px;
            gap: 5px;
        }
        
        .pagination a, 
        .pagination span {
            padding: 8px 12px;
            border: 1px solid #ddd;
            border-radius: 4px;
            text-decoration: none;
            color: var(--primary);
        }
        
        .pagination a:hover {
            background: var(--primary);
            color: white;
        }
        
        .pagination .active {
            background: var(--primary);
            color: white;
            border-color: var(--primary);
        }
    </style>
</head>
<body>
    <div class="dashboard-container">
        <!-- Sidebar Navigation -->
        <aside class="sidebar">
            <div class="sidebar-header">
                <h2>Import Management</h2>
                <div class="user-info">
                    <p><?= $nama ?></p>
                    <span class="user-role"><?= $role ?></span>
                </div>
            </div>
            
            <ul class="nav-menu">
                <li><a href="/dashboard"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
                <li><a href="/barang" class="active"><i class="fas fa-boxes"></i> Kelola Barang</a></li>
                <li><a href="/data-cbm/create"><i class="fas fa-calculator"></i> Input Data CBM</a></li>
                <li><a href="/invoice"><i class="fas fa-file-invoice-dollar"></i> Kelola Invoice</a></li>
                <li><a href="/reports"><i class="fas fa-chart-bar"></i> Laporan</a></li>
                <li><a href="/settings"><i class="fas fa-cog"></i> Pengaturan</a></li>
            </ul>
        </aside>
        
        <!-- Main Content Area -->
        <main class="main-content">
            <div class="header">
                <div class="page-title">
                    <h1>Data Barang Impor</h1>
                </div>
                <a href="/logout" class="btn btn-danger">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
            </div>
            
            <div class="card">
                <div class="action-bar">
                    <div class="search-filter">
                        <input type="text" placeholder="Cari barang...">
                        <select>
                            <option>Semua Status</option>
                            <option>Dalam Pengiriman</option>
                            <option>Tiba di Gudang</option>
                            <option>Proses Bea Cukai</option>
                        </select>
                        <button class="btn btn-primary">
                            <i class="fas fa-filter"></i> Filter
                        </button>
                    </div>
                    <a href="/barang/create" class="btn btn-primary">
                        <i class="fas fa-plus"></i> Tambah Barang
                    </a>
                </div>
                
                <table class="data-table">
                    <thead>
                        <tr>
                            <th width="5%">No</th>
                            <th>Nama Barang</th>
                            <th>HS Code</th>
                            <th class="text-right">Jumlah</th>
                            <th class="text-right">Harga (Rp)</th>
                            <th class="text-right">Cost Modal (Rp)</th>
                            <th class="text-right">Harga Aktual (Rp)</th>
                            <th class="text-right">CBM (m³)</th>
                            <th>Status Pengiriman</th>
                            <th>Nomor Resi</th>
                            <th class="text-right">Laba Bersih (Rp)</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($barang as $i => $b): ?>
                            <?php 
                                $laba_bersih = $b['harga_aktual'] - $b['cost_modal'];
                                $status_class = '';
                                switch(strtolower($b['status_pengiriman'])) {
                                    case 'dalam pengiriman': $status_class = 'status-pending'; break;
                                    case 'tiba di gudang': $status_class = 'status-shipped'; break;
                                    case 'proses bea cukai': $status_class = 'status-customs'; break;
                                    case 'tertunda': $status_class = 'status-delayed'; break;
                                    default: $status_class = 'status-pending';
                                }
                            ?>
                            <tr>
                                <td><?= $i + 1 ?></td>
                                <td><strong><?= esc($b['nama_barang']) ?></strong></td>
                                <td><?= esc($b['hs_code']) ?></td>
                                <td class="text-right"><?= esc($b['jumlah']) ?></td>
                                <td class="text-right"><?= number_format($b['harga'], 0, ',', '.') ?></td>
                                <td class="text-right"><?= number_format($b['cost_modal'], 0, ',', '.') ?></td>
                                <td class="text-right"><?= number_format($b['harga_aktual'], 0, ',', '.') ?></td>
                                <td class="text-right"><?= esc($b['cbm']) ?></td>
                                <td>
                                    <span class="status <?= $status_class ?>">
                                        <?= esc($b['status_pengiriman']) ?>
                                    </span>
                                </td>
                                <td><?= esc($b['nomor_resi'] ?? '-') ?></td>
                                <td class="text-right">
                                    <span class="badge <?= $laba_bersih >= 0 ? 'badge-profit' : 'badge-loss' ?>">
                                        <?= number_format($laba_bersih, 0, ',', '.') ?>
                                    </span>
                                </td>
                                <td class="text-center">
                                    <a href="/barang/edit/<?= $b['id'] ?>" class="btn btn-success" style="padding: 5px 8px;">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="/barang/delete/<?= $b['id'] ?>" class="btn btn-danger" style="padding: 5px 8px;" onclick="return confirm('Yakin ingin menghapus?')">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                
                <div class="pagination">
                    <a href="#"><i class="fas fa-angle-left"></i></a>
                    <a href="#">1</a>
                    <span class="active">2</span>
                    <a href="#">3</a>
                    <a href="#"><i class="fas fa-angle-right"></i></a>
                </div>
            </div>
        </main>
    </div>
    
    <script>
        // Simple confirmation for delete action
        document.querySelectorAll('.btn-danger').forEach(btn => {
            btn.addEventListener('click', function(e) {
                if(!confirm('Yakin ingin menghapus barang ini?')) {
                    e.preventDefault();
                }
            });
        });
    </script>
</body>
</html>