<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Import Management Dashboard</title>
    <style>
        :root {
            --primary: #2c3e50;
            --secondary: #34495e;
            --accent: #3498db;
            --light: #ecf0f1;
            --danger: #e74c3c;
            --success: #2ecc71;
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
            box-shadow: 2px 0 10px rgba(0, 0, 0, 0.1);
        }

        .sidebar-header {
            padding: 0 20px 20px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
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

        .stats-cards {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .card {
            background: white;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }

        .stat-card {
            text-align: center;
        }

        .stat-card h3 {
            font-size: 0.9rem;
            color: #7f8c8d;
            margin-bottom: 10px;
        }

        .stat-card .value {
            font-size: 1.8rem;
            font-weight: bold;
            color: var(--primary);
        }

        .recent-activity {
            margin-top: 30px;
        }

        .section-title {
            font-size: 1.2rem;
            margin-bottom: 15px;
            color: var(--primary);
            padding-bottom: 10px;
            border-bottom: 1px solid #eee;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
                <li><a href="/barang"><i class="fas fa-boxes"></i> Kelola Barang</a></li>
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
                    <h1>Dashboard</h1>
                </div>
                <a href="/logout" class="logout-btn">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
            </div>

            <!-- Stats Cards -->
            <div class="stats-cards">
                <div class="card stat-card">
                    <h3>Total Barang</h3>
                    <div class="value">1,248</div>
                </div>
                <div class="card stat-card">
                    <h3>Invoice Bulan Ini</h3>
                    <div class="value">42</div>
                </div>
                <div class="card stat-card">
                    <h3>Total CBM</h3>
                    <div class="value">856.5</div>
                </div>
                <div class="card stat-card">
                    <h3>Pending Approval</h3>
                    <div class="value">7</div>
                </div>
            </div>

            <!-- Recent Activity Section -->
            <div class="card recent-activity">
                <h2 class="section-title">Aktivitas Terkini</h2>
                <p>Recent activity log would go here...</p>
            </div>
        </main>
    </div>
</body>

</html>