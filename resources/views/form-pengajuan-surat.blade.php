<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pengajuan Surat - SI-JTI</title>
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

        /* SIDEBAR */
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

        .submenu-item.active {
            background: #3182ce;
            color: white;
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

        /*  MAIN CONTENT  */
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

        .header-title {
            color: white;
            font-size: 20px;
            font-weight: bold;
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

        /* FORM SECTION */
        .form-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 25px;
            color: #2d3748;
        }

        .form-container {
            display: grid;
            grid-template-columns: 1.5fr 1fr;
            gap: 30px;
        }

        .form-box {
            background: white;
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        }

        .form-group {
            margin-bottom: 18px;
        }

        .form-row {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .form-label {
            width: 120px;
            font-weight: 600;
            color: #4a5568;
            font-size: 14px;
        }

        .form-colon {
            width: 20px;
            color: #4a5568;
            font-size: 14px;
        }

        .form-control-custom {
            flex: 1;
            padding: 8px 12px;
            border: 1px solid #cbd5e0;
            border-radius: 6px;
            font-size: 14px;
        }

        .form-control-custom:focus {
            outline: none;
            border-color: #3182ce;
            box-shadow: 0 0 0 3px rgba(49, 130, 206, 0.1);
        }

        select.form-control-custom {
            cursor: pointer;
        }

        textarea.form-control-custom {
            min-height: 80px;
            resize: vertical;
        }

        .date-input-wrapper {
            display: flex;
            align-items: center;
            gap: 10px;
            flex: 1;
        }

        .date-input-wrapper input[type="date"] {
            flex: 1;
            padding: 8px 12px;
            border: 1px solid #cbd5e0;
            border-radius: 6px;
            font-size: 14px;
            font-family: 'Segoe UI', sans-serif;
        }

        .date-input-wrapper input[type="date"]:focus {
            outline: none;
            border-color: #3182ce;
            box-shadow: 0 0 0 3px rgba(49, 130, 206, 0.1);
        }

        .file-upload-wrapper {
            display: flex;
            align-items: center;
            gap: 10px;
            flex: 1;
        }

        .file-upload-btn {
            background: #e2e8f0;
            border: 1px solid #cbd5e0;
            padding: 8px 15px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 13px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .file-upload-btn:hover {
            background: #cbd5e0;
        }

        .file-upload-text {
            flex: 1;
            padding: 8px 12px;
            background: #f7fafc;
            border: 1px solid #e2e8f0;
            border-radius: 6px;
            font-size: 13px;
            color: #718096;
        }

        /* PREVIEW BOX */
        .preview-box {
            background: white;
            border: 3px solid #abb4bd;
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        }

        .preview-title {
            font-weight: bold;
            font-size: 16px;
            margin-bottom: 15px;
            color: #2d3748;
        }

        .preview-content {
            background: #f7fafc;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 15px;
            min-height: 200px;
            font-size: 14px;
        }

        .preview-item {
            margin-bottom: 10px;
        }

        .preview-label {
            font-weight: 600;
            color: #4a5568;
        }

        /* BUTTONS */
        .form-actions {
            display: flex;
            justify-content: space-between;
            margin-top: 25px;
        }

        .btn-kembali {
            background: #e2e8f0;
            color: #4a5568;
            border: none;
            padding: 10px 20px;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn-kembali:hover {
            background: #cbd5e0;
        }

        .btn-ajukan {
            background: #3182ce;
            color: white;
            border: none;
            padding: 10px 30px;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn-ajukan:hover {
            background: #2c5282;
        }

        /* RESPONSIVE */
        @media (max-width: 992px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }

            .main-wrapper {
                margin-left: 0;
            }

            .form-container {
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
                <a href="#" class="nav-item active">
                    <i class="fa-solid fa-envelope"></i> Surat 
                    <i class="fa-solid fa-chevron-down ms-auto" style="font-size: 12px;"></i>
                </a>
                <div class="dropdown-menu-custom">
                    <a href="#" class="submenu-item active">Pengajuan Surat</a>
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
            <div class="form-title">FORM PENGAJUAN SURAT</div>
            
            <div class="form-container">
                <!-- Form Box -->
                <div class="form-box">
                    <div class="form-group">
                        <div class="form-row">
                            <div class="form-label">Jenis Surat</div>
                            <div class="form-colon">:</div>
                            <select class="form-control-custom" id="jenisSurat">
                                <option>Surat Izin Sakit</option>
                                <option>Surat Izin Kegiatan Kampus</option>
                                <option>Surat Izin Kegiatan</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-row">
                            <div class="form-label">Nama</div>
                            <div class="form-colon">:</div>
                            <input type="text" class="form-control-custom" id="inputNama" placeholder="Masukkan nama lengkap">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-row">
                            <div class="form-label">NIM</div>
                            <div class="form-colon">:</div>
                            <input type="text" class="form-control-custom" id="inputNIM" placeholder="Masukkan NIM">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-row">
                            <div class="form-label">Keterangan</div>
                            <div class="form-colon">:</div>
                            <textarea class="form-control-custom" id="inputKeterangan" placeholder="Masukkan keterangan"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-row">
                            <div class="form-label">Tanggal Mulai</div>
                            <div class="form-colon">:</div>
                            <div class="date-input-wrapper">
                                <input type="date" class="form-control-custom" id="tanggalMulai">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-row">
                            <div class="form-label">Tanggal Selesai</div>
                            <div class="form-colon">:</div>
                            <div class="date-input-wrapper">
                                <input type="date" class="form-control-custom" id="tanggalSelesai">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-row">
                            <div class="form-label">Upload Bukti</div>
                            <div class="form-colon">:</div>
                            <div class="file-upload-wrapper">
                                <label class="file-upload-btn">
                                    <i class="fa-solid fa-paperclip"></i>
                                    Upload File
                                    <input type="file" style="display: none;" id="fileUpload" accept=".pdf,.jpg,.jpeg,.png">
                                </label>
                                <div class="file-upload-text" id="fileName">Format file dokumen bentuk PDF (Maks 2MB)</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Preview Box -->
                <div class="preview-box">
                    <div class="preview-title">Preview Surat</div>
                    <div class="preview-content">
                        <div class="preview-item">
                            <div class="preview-label">Nama :</div>
                            <div id="previewNama">-</div>
                        </div>
                        <div class="preview-item">
                            <div class="preview-label">Jenis Surat:</div>
                            <div id="previewJenis">-</div>
                        </div>
                        <div class="preview-item">
                            <div class="preview-label">Keterangan :</div>
                            <div id="previewKeperluan">-</div>
                        </div>
                        <div class="preview-item">
                            <div class="preview-label">Tanggal :</div>
                            <div id="previewTanggal">-</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Form Actions -->
            <div class="form-actions">
                <button class="btn-kembali" onclick="kembali()">
                    ← Kembali
                </button>
                <button class="btn-ajukan" onclick="ajukanSurat()">
                    Ajukan Surat
                </button>
            </div>
        </div>
    </main>

    <script>
        // Update preview when form changes
        document.getElementById('inputNama').addEventListener('input', function() {
            document.getElementById('previewNama').textContent = this.value || '-';
        });

        document.getElementById('jenisSurat').addEventListener('change', function() {
            document.getElementById('previewJenis').textContent = this.value;
        });

        document.getElementById('inputKeterangan').addEventListener('input', function() {
            document.getElementById('previewKeperluan').textContent = this.value || '-';
        });

        document.getElementById('tanggalMulai').addEventListener('change', updateTanggal);
        document.getElementById('tanggalSelesai').addEventListener('change', updateTanggal);

        function updateTanggal() {
            const mulai = document.getElementById('tanggalMulai').value;
            const selesai = document.getElementById('tanggalSelesai').value;
            if (mulai && selesai) {
                document.getElementById('previewTanggal').textContent = `${formatDate(mulai)} - ${formatDate(selesai)}`;
            } else if (mulai) {
                document.getElementById('previewTanggal').textContent = formatDate(mulai);
            } else {
                document.getElementById('previewTanggal').textContent = '-';
            }
        }

        function formatDate(dateString) {
            if (!dateString) return '-';
            const [year, month, day] = dateString.split('-');
            return `${day}/${month}/${year}`;
        }

        // File upload
        document.getElementById('fileUpload').addEventListener('change', function(e) {
            if (e.target.files.length > 0) {
                document.getElementById('fileName').textContent = e.target.files[0].name;
            }
        });

        function kembali() {
            if (confirm('Apakah Anda yakin ingin kembali?')) {
                window.location.href = 'pilih-surat.html';
            }
        }

        function ajukanSurat() {
            const nama = document.getElementById('inputNama').value;
            const nim = document.getElementById('inputNIM').value;
            
            if (!nama || !nim) {
                alert('Harap lengkapi semua field yang wajib diisi!');
                return;
            }
            
            if (confirm('Apakah Anda yakin ingin mengajukan surat ini?')) {
                alert('Surat berhasil diajukan!');
                window.location.href = 'daftar-pengajuan.html';
            }
        }
    </script>
</body>
</html>