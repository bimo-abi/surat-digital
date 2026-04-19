<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengajuan Surat - SI-JTI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #f4f7f6;
            font-family: 'Segoe UI', sans-serif;
            overflow-x: hidden;
        }

        /* ==================== SIDEBAR ==================== */
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
            border-radius: 10px;
            padding: 8px;
            margin: 10px 0 15px 20px;
            width:180px;
        }

        .submenu-item{
        display:block;
        padding:8px 12px;
        font-size:13px;
        color:black;
        text-decoration:none;
        border-radius:8px;
        margin-bottom:5px;
        }

        .submenu-item:hover{
        background:#f1f1f1;
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
        /* ==================== MAIN CONTENT ==================== */
        .main-wrapper {
            margin-left: 240px;
            min-height: 100vh;
        }

        .top-header {
            background: linear-gradient(to right, #000000, #2c5282);
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .user-info {
            color: white;
            font-weight: bold;
            font-size: 20px;
        }

        .user-info i {
            margin-right: 8px;
        }

        .page-header {
            padding: 20px 30px;
            background-color: white;
            border-bottom: 1px solid #ddd;
            font-weight: bold;
            font-size: 18px;
        }

        .page-header i {
            margin-right: 10px;
            color: #2c5282;
        }

        .content-area {
            padding: 30px;
        }

        /* ==================== PENGAJUAN SURAT ==================== */
        .section-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .section-header h4 {
            font-weight: bold;
            margin-bottom: 10px;
            color: #2d3748;
        }

        .section-header p {
            color: #718096;
            margin: 0;
        }

        .letter-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-bottom: 30px;
        }

        .letter-card {
            background: white;
            border-radius: 15px;
            padding: 30px 20px;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
            border: 2px solid transparent;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        }

        .letter-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.12);
        }

        .letter-card.selected {
            border-color: #3182ce;
            background: #ebf8ff;
        }

        .letter-icon-wrapper {
            width: 100px;
            height: 100px;
            margin: 0 auto 20px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .letter-icon-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .letter-title {
            font-weight: 600;
            font-size: 15px;
            color: #2d3748;
        }

        .btn-continue {
            background: #3182ce;
            color: white;
            border: none;
            padding: 12px 40px;
            border-radius: 25px;
            font-weight: 600;
            font-size: 15px;
            cursor: pointer;
            transition: all 0.3s ease;
            display: block;
            margin: 0 auto;
        }

        .btn-continue:hover:not(:disabled) {
            background: #2c5282;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(49, 130, 206, 0.4);
        }

        .btn-continue:disabled {
            background: #cbd5e0;
            cursor: not-allowed;
            transform: none;
        }

        /* ==================== RESPONSIVE ==================== */
        @media (max-width: 992px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }

            .main-wrapper {
                margin-left: 0;
            }

            .letter-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>

    <!-- SIDEBAR -->
    <div class="sidebar">
        <h2>SI - JTI</h2>
        <div class="admin-profile">
            <div class="profile-img">👤</div>
            <span style="border-bottom: 5px dashed white; padding-bottom: 5px; display: inline-block;">Mahasiswa</span>
        </div>
        
        <ul class="nav-menu">
            <li><a href="#" class="nav-item"><i class="fa-solid fa-house"></i> Dashboard</a></li>
            <li>
                <a href="#" class="nav-item"><i class="fa-solid fa-envelope"></i> Surat <i class="fa-solid fa-chevron-down ms-auto" style="font-size: 12px;"></i></a>
            <div class="dropdown-menu-custom">
                <a href="#" class="nav-item active">Pengajuan Surat</a>
                <a href="#" class="submenu-item">Daftar Pengajuan Surat</a>
            </div>
            </li>
            <li><a href="#" class="nav-item"><i class="fa-solid fa-bell"></i> Notifikasi</a></li>
            <li><a href="#" class="nav-item"><i class="fa-solid fa-user"></i> Profil</a></li>
        </ul>

        <a href="#" class="btn-keluar">
            <i class="fa-solid fa-circle-left"></i> Keluar
        </a>
    </div>

    <!-- MAIN CONTENT -->
    <main class="main-wrapper">
        <!-- Top Header -->
        <header class="top-header">
            <div class="header-title"></div>
            <div class="user-info">
                <i class="fa-solid fa-user-circle"></i>
                Mahasiswa
            </div>
        </header>

        <!-- Page Header -->
        <div class="page-header">
            <i class="fa-solid fa-envelope"></i>
            Pengajuan Surat
        </div>

        <!-- Content Area -->
        <div class="content-area">
            <div class="section-header">
                <h4>Pilih Jenis Surat</h4>
                <p>Silahkan pilih jenis surat yang ingin anda ajukan</p>
            </div>

            <div class="letter-grid">
                <div class="letter-card" onclick="selectCard(this)">
                    <div class="letter-icon-wrapper">
                        <img src="https://cdn-icons-png.flaticon.com/512/2913/2913366.png" alt="Surat Izin Sakit">
                    </div>
                    <div class="letter-title">Surat izin sakit</div>
                </div>

                <div class="letter-card" onclick="selectCard(this)">
                    <div class="letter-icon-wrapper">
                        <img src="https://cdn-icons-png.flaticon.com/512/2965/2965396.png" alt="Surat Izin Kegiatan Kampus">
                    </div>
                    <div class="letter-title">Surat izin Kegiatan Kampus</div>
                </div>

                <div class="letter-card" onclick="selectCard(this)">
                    <div class="letter-icon-wrapper">
                        <img src="https://cdn-icons-png.flaticon.com/512/2693/2693502.png" alt="Surat Izin Kegiatan">
                    </div>
                    <div class="letter-title">Surat izin Kegiatan</div>
                </div>
            </div>

            <button class="btn-continue" id="btnLanjutkan" onclick="lanjutkan()" disabled>Lanjutkan</button>
        </div>
    </main>

    
    <script>
        let selectedCard = null;

        function selectCard(element) {
            document.querySelectorAll('.letter-card').forEach(card => {
                card.classList.remove('selected');
            });
            
            element.classList.add('selected');
            selectedCard = element;
            document.getElementById('btnLanjutkan').disabled = false;
        }

        function lanjutkan() {
            if (selectedCard) {
                const letterTitle = selectedCard.querySelector('.letter-title').textContent;
                alert('Anda memilih: ' + letterTitle + '\nMengarahkan ke form pengajuan...');
            }
        }
    </script>
</body>
</html>