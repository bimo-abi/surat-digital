<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notifikasi - SI-JTI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background-color: #f4f7f6;
            font-family: 'Segoe UI', sans-serif;
            margin: 0;
            overflow-x: hidden;
        }

        /* Sidebar Styling */
        .sidebar {
            width: 240px;
            height: 100vh;
            background: linear-gradient(to bottom, #000000 0%, #2c5282 100%);
            position: fixed;
            color: white;
            padding: 20px;
            display: flex;
            flex-direction: column;
        }

        .sidebar h2 {
            font-style: italic;
            font-weight: bold;
            font-size: 24px;
            margin-bottom: 30px;
            text-align: center;
        }

        .admin-profile {
            text-align: center;
            margin-bottom: 30px;
        }

        .profile-img {
            width: 80px;
            height: 80px;
            background-color: white;
            border-radius: 50%;
            margin: 0 auto 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 40px;
        }

        .nav-menu {
            list-style: none;
            padding: 0;
        }

        .nav-item {
            background: white;
            color: black;
            border-radius: 8px;
            margin-bottom: 15px;
            padding: 12px 15px;
            display: flex;
            align-items: center;
            text-decoration: none;
            font-weight: 600;
            transition: 0.3s;
        }

        .nav-item.active {
            background: #3182ce;
            color: white;
        }

        .nav-item i { 
            margin-right: 10px; 
            font-size: 18px; 
            width: 25px;
            text-align: center;
        }

        .dropdown-menu-custom {
            background: white;
            border-radius: 8px;
            margin-left: 15px;
            margin-bottom: 10px;
            padding: 0;
            overflow: hidden;
        }

        .dropdown-item-custom {
            padding: 10px 15px;
            color: #333;
            text-decoration: none;
            display: block;
            font-size: 14px;
            transition: 0.3s;
        }

        .dropdown-item-custom:hover {
            background: #f0f0f0;
        }

        .btn-keluar {
            margin-top: auto;
            color: #ff4d4d;
            text-decoration: none;
            display: flex;
            align-items: center;
            font-weight: bold;
            padding: 10px;
        }

        .btn-keluar i {
            margin-right: 10px;
            font-size: 20px;
        }

        /* Main Content Styling */
        .main-content {
            margin-left: 240px;
            padding: 0;
        }

        .header-bar {
            background: linear-gradient(to right, #000000, #2c5282);
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            font-size: 20px;
        }

        .page-title {
            padding: 20px 30px;
            background-color: white;
            border-bottom: 1px solid #ddd;
            font-weight: bold;
            font-size: 20px;
        }

        .content-body { 
            padding: 30px; 
        }

        /* Notification Page Specific */
        .notif-header {
            background: white;
            padding: 20px 30px;
            border-radius: 10px;
            margin-bottom: 20px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }

        .notif-header h4 {
            margin: 0 0 10px 0;
            font-weight: 600;
        }

        .notif-header p {
            margin: 0;
            color: #666;
        }

        .filter-bar {
            background: white;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }

        .filter-tabs {
            display: flex;
            gap: 20px;
            align-items: center;
        }

        .filter-tab {
            padding: 8px 20px;
            border-radius: 20px;
            cursor: pointer;
            font-weight: 600;
            font-size: 14px;
            transition: 0.3s;
        }

        .filter-tab.active {
            background: #3182ce;
            color: white;
        }

        .filter-tab-status {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 8px 15px;
            border-radius: 20px;
            cursor: pointer;
            font-size: 14px;
            font-weight: 600;
        }

        .status-dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            display: inline-block;
        }

        .status-dot.green { background: #48bb78; }
        .status-dot.yellow { background: #ed8936; }
        .status-dot.red { background: #f56565; }

        .mark-read {
            color: #3182ce;
            text-decoration: none;
            font-size: 14px;
            font-weight: 600;
        }

        .mark-read:hover {
            text-decoration: underline;
        }

        .notif-card {
            background: white;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 15px;
            display: flex;
            align-items: flex-start;
            gap: 20px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
            transition: 0.3s;
        }

        .notif-card:hover {
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        .notif-icon {
            width: 60px;
            height: 60px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 30px;
            flex-shrink: 0;
        }

        .notif-icon.green {
            background: #c6f6d5;
            color: #22543d;
        }

        .notif-icon.orange {
            background: #feebc8;
            color: #744210;
        }

        .notif-icon.red {
            background: #fed7d7;
            color: #742a2a;
        }

        .notif-content {
            flex: 1;
        }

        .notif-title {
            font-weight: 700;
            font-size: 16px;
            margin-bottom: 5px;
            color: #2d3748;
        }

        .notif-desc {
            color: #718096;
            font-size: 14px;
            margin-bottom: 8px;
        }

        .notif-time {
            font-size: 13px;
            color: #a0aec0;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .btn-perbaiki {
            background: #e53e3e;
            color: white;
            border: none;
            padding: 8px 20px;
            border-radius: 5px;
            font-size: 13px;
            font-weight: 600;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn-perbaiki:hover {
            background: #c53030;
        }

        .empty-state {
            background: white;
            border-radius: 10px;
            padding: 40px;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }

        .empty-state .bell-icon {
            font-size: 50px;
            color: #cbd5e0;
            margin-bottom: 15px;
        }

        .empty-state h5 {
            font-weight: 600;
            margin-bottom: 10px;
            color: #2d3748;
        }

        .empty-state p {
            color: #718096;
            font-size: 14px;
            margin: 0;
        }
    </style>
</head>
<body>

    <div class="sidebar">
        <h2>SI - JTI</h2>
        <div class="admin-profile">
            <div class="profile-img">👤</div>
            <span style="border-bottom: 5px dashed white; padding-bottom: 5px; display: inline-block;">Mahasiswa</span>
        </div>
        
        <ul class="nav-menu">
            <li><a href="/surat-digital/resources/views/mahasiswa/dashboard-mahasiswa.blade.php" class="nav-item"><i class="fa-solid fa-house"></i> Dashboard</a></li>
            <li>
                <a href="#" class="nav-item"><i class="fa-solid fa-envelope"></i> Surat <i class="fa-solid fa-chevron-down ms-auto" style="font-size: 12px;"></i></a>
                <div class="dropdown-menu-custom">
                    <a href="/surat-digital/resources/views/mahasiswa/pengajuan-surat-mahasiswa.blade.php" class="dropdown-item-custom">Pengajuan Surat</a>
                    <a href="/surat-digital/resources/views/mahasiswa/daftar-pengajuan-surat-mahasiswa.blade.php" class="dropdown-item-custom">Daftar Pengajuan Surat</a>
                </div>
            </li>
            <li><a href="/surat-digital/resources/views/mahasiswa/notifikasi-mahasiswa.blade.php" class="nav-item active"><i class="fa-solid fa-bell"></i> Notifikasi</a></li>
            <li><a href="/surat-digital/resources/views/mahasiswa/profil-mahasiswa.blade.php" class="nav-item"><i class="fa-solid fa-user"></i> Profil</a></li>
        </ul>

        <a href="#" class="btn-keluar">
            <i class="fa-solid fa-circle-left"></i> Keluar
        </a>
    </div>

    <div class="main-content">
        <div class="header-bar">
            <div style="color: white; font-size: 20px; font-weight: bold;"></div>
            <div class="text-white fw-bold"><i class="fa-solid fa-user-circle me-2"></i> Mahasiswa</div>
        </div>

        <div class="page-title">
            <i class="fa-solid fa-bell me-2"></i> Notifikasi
        </div>

        <div class="content-body">
            <div class="notif-header">
                <h4>Notifikasi</h4>
                <p>Informasi terbaru mengenai status pengajuan surat Anda</p>
            </div>

            <div class="filter-bar">
                <div class="filter-tabs">
                    <div class="filter-tab active">Semua</div>
                    <div class="filter-tab-status">
                        <span class="status-dot green"></span>
                        Disetujui
                    </div>
                    <div class="filter-tab-status">
                        <span class="status-dot yellow"></span>
                        Diproses
                    </div>
                    <div class="filter-tab-status">
                        <span class="status-dot red"></span>
                        Ditolak
                    </div>
                </div>
                <a href="#" class="mark-read">Tandai Sudah dibaca</a>
            </div>

            <div class="notif-card">
                <div class="notif-icon green">
                    <i class="fa-solid fa-clipboard-check"></i>
                </div>
                <div class="notif-content">
                    <div class="notif-title">Pengajuan Surat Sakit Disetujui</div>
                    <div class="notif-desc">Pengajuan surat Anda disetujui oleh admin JTI</div>
                    <div class="notif-time">
                        <i class="fa-solid fa-clock"></i>
                        10 menit lalu
                    </div>
                </div>
            </div>

            <div class="notif-card">
                <div class="notif-icon orange">
                    <i class="fa-solid fa-clock"></i>
                </div>
                <div class="notif-content">
                    <div class="notif-title">Pengajuan Surat Izin Kegiatan Kampus Diproses</div>
                    <div class="notif-desc">Admin sedang memverifikasi dokumen yang Anda kirim</div>
                    <div class="notif-time">
                        <i class="fa-solid fa-clock"></i>
                        3 jam lalu
                    </div>
                </div>
            </div>

            <div class="notif-card">
                <div class="notif-icon red">
                    <i class="fa-solid fa-clipboard-xmark"></i>
                </div>
                <div class="notif-content">
                    <div class="notif-title">Pengajuan Surat Sakit Ditolak</div>
                    <div class="notif-desc">Dokumen yang diupload belum lengkap. Silahkan upload ulang</div>
                    <div class="notif-time" style="margin-bottom: 10px;">
                        <i class="fa-solid fa-clock"></i>
                        Kemarin
                    </div>
                    <button class="btn-perbaiki">Perbaiki Dokumen</button>
                </div>
            </div>

            <div class="empty-state">
                <div class="bell-icon">
                    <i class="fa-solid fa-bell"></i>
                </div>
                <h5>Belum Ada Notifikasi</h5>
                <p>Semua notifikasi terkait pengajuan surat<br>akan muncul di halaman ini</p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>