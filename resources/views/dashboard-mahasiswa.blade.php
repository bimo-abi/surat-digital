<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda Mahasiswa - SI-JTI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background-color: #f4f7f6;
            font-family: 'Segoe UI', sans-serif;
            margin: 0;
            overflow-x: hidden;
        }

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

        .dashboard-title {
            padding: 20px 30px;
            background-color: white;
            border-bottom: 1px solid #ddd;
            font-weight: bold;
            font-size: 18px;
        }

        .content-body { 
            padding: 30px; 
        }

        /* Card Stats Styling */
        .stat-card {
            background: white;
            border-radius: 12px;
            padding: 20px;
            display: flex;
            align-items: center;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
            margin-bottom: 15px;
            min-height: 80px;
        }

        .stat-icon { 
            width: 50px;
            height: 50px;
            margin-right: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 8px;
        }

        .stat-icon.blue { background: #e3f2fd; color: #1976d2; }
        .stat-icon.green { background: #e8f5e9; color: #388e3c; }
        .stat-icon.orange { background: #fff3e0; color: #f57c00; }
        .stat-icon.red { background: #ffebee; color: #d32f2f; }
        .stat-icon.mail { background: #e3f2fd; color: #1976d2; }

        .stat-text {
            font-weight: 600;
            font-size: 15px;
            color: #333;
        }

        /* Right Side Cards */
        .profile-card {
            background: #e0e0e0;
            border-radius: 15px;
            padding: 30px 20px;
            text-align: center;
            margin-bottom: 20px;
        }

        .profile-card-img {
            width: 80px;
            height: 80px;
            background: white;
            border-radius: 50%;
            margin: 0 auto 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 40px;
        }

        .info-card {
            background: #e0e0e0;
            border-radius: 15px;
            padding: 20px;
        }

        .info-card h6 {
            font-weight: bold;
            margin-bottom: 15px;
            font-size: 20px;
            border-bottom: 1px solid #ccc;
            padding-bottom: 7px;
        }

        .info-row {
            margin-bottom: 8px;
            font-size: flex;

        }

        .info-label {
            font-weight: 600;
        }

        .btn-ubah-profil {
            background: #4a5568;
            color: white;
            border: none;
            padding: 8px 20px;
            border-radius: 5px;
            margin-top: 15px;
            font-size: 13px;
            width: 100%;
        }

        /* Notification Panel */
        .notif-panel {
            background: #e0e0e0;
            border-radius: 15px;
            padding: 20px;
            margin-top: 20px;
    
        }

        .notif-panel h6 {
            font-weight: bold;
            margin-bottom: 15px;
            border-bottom: 1px solid #ccc;
            padding-bottom: 7px;
        }

        .notif-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .notif-item {
            padding: 10px 0;
            font-size: 14px;
            
        }

        .notif-item:last-child {
            border-bottom: none;
        }

        .notif-item b {
            color: #333;
        }

        .btn-ajukan {
            background: #4a5568;
            color: white;
            border: none;
            padding: 8px 25px;
            border-radius: 5px;
            margin-top: 15px;
            font-size: 13px;
        }

        /* Grid Layout */
        .dashboard-grid {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 350px;
            gap: 20px;
        }

        .left-section {
            grid-column: 1 / 4;
        }

        .right-section {
            grid-column: 4;
        }

        .stat-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
            margin-bottom: 20px;
        }

        @media (max-width: 1200px) {
            .dashboard-grid {
                grid-template-columns: 1fr;
            }
            .left-section, .right-section {
                grid-column: 1;
            }
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
            <li><a href="#" class="nav-item active"><i class="fa-solid fa-house"></i> Dashboard</a></li>
            <li>
                <a href="#" class="nav-item"><i class="fa-solid fa-envelope"></i> Surat <i class="fa-solid fa-chevron-down ms-auto" style="font-size: 12px;"></i></a>
                <div class="dropdown-menu-custom">
                    <a href="#" class="dropdown-item-custom">Pengajuan Surat</a>
                    <a href="#" class="dropdown-item-custom">Daftar Pengajuan Surat</a>
                </div>
            </li>
            <li><a href="#" class="nav-item"><i class="fa-solid fa-bell"></i> Notifikasi</a></li>
            <li><a href="#" class="nav-item"><i class="fa-solid fa-user"></i> Profil</a></li>
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

        <div class="dashboard-title">
            <i class="fa-solid fa-house me-2"></i> Dashboard
        </div>

        <div class="content-body">
            <div class="dashboard-grid">
                <div class="left-section">
                    <div class="stat-grid">
                        <div class="stat-card">
                            <div class="stat-icon blue">
                                <i class="fa-solid fa-clipboard-list fa-lg"></i>
                            </div>
                            <div class="stat-text">Semua Pengajuan</div>
                        </div>
                        <div class="stat-card">
                            <div class="stat-icon green">
                                <i class="fa-solid fa-file-circle-check fa-lg"></i>
                            </div>
                            <div class="stat-text">Pengajuan Diterima</div>
                        </div>
                        <div class="stat-card">
                            <div class="stat-icon orange">
                                <i class="fa-solid fa-clock fa-lg"></i>
                            </div>
                            <div class="stat-text">Pengajuan dalam proses</div>
                        </div>
                        <div class="stat-card">
                            <div class="stat-icon red">
                                <i class="fa-solid fa-circle-xmark fa-lg"></i>
                            </div>
                            <div class="stat-text">Pengajuan Ditolak</div>
                        </div>
                        <div class="stat-card" style="grid-column: 1 / 2;">
                            <div class="stat-icon mail">
                                <i class="fa-solid fa-envelope fa-lg"></i>
                            </div>
                            <div class="stat-text">Surat Masuk</div>
                        </div>
                    </div>

                    <div class="notif-panel">
                        <h6><i class="fa-solid fa-bell me-2"></i> Notifikasi Terbaru</h6>
                        <ul class="notif-list">
                            <li class="notif-item">• Surat Keterangan aktif kuliah disetujui</li>
                            <li class="notif-item">• Profil berhasil diperbarui</li>
                        </ul>
                        <button class="btn-ajukan">+ Ajukan Surat Baru</button>
                    </div>
                </div>

                <div class="right-section">
                    <div class="profile-card">
                        <div class="profile-card-img">👤</div>
                        <div style="border-bottom: 2px dashed #999; display: inline-block; margin-bottom: 10px; width: 80px;"></div>
                        <div style="font-size: 14px; margin-top: 10px;">Tahun Akademik<br><strong>2025/2026</strong></div>
                    </div>

                    <div class="info-card">
                        <h6>Info Mahasiswa</h6>
                        <div class="info-row">
                            <span class="info-label">Prodi :</span> Teknik Informatika
                        </div>
                        <div class="info-row">
                            <span class="info-label">Golongan :</span> C
                        </div>
                        <div class="info-row">
                            <span class="info-label">NIM :</span> E41250971
                        </div>
                        <div class="info-row">
                            <span class="info-label">Email :</span> e41250971@student.polije.ac.id
                        </div>
                        <button class="btn-ubah-profil">
                            <i class="fa-solid fa-pen me-2"></i>Ubah Profil
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>