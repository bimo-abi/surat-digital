<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa - SI-JTI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        body {
            background-color: #f4f7f6;
            font-family: 'Segoe UI', sans-serif;
            margin: 0;
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
            padding: 10px 15px;
            display: flex;
            align-items: center;
            text-decoration: none;
            font-weight: 600;
            transition: 0.3s;
        }

        .nav-item i { margin-right: 10px; font-size: 18px; }

        .btn-keluar {
            margin-top: auto;
            color: red;
            text-decoration: none;
        }

        .main-content {
            margin-left: 240px;
        }

        .header-bar {
            background: linear-gradient(to right, #000000, #2c5282);
            padding: 15px 30px;
            color: white;
            display: flex;
            justify-content: flex-end;
        }

        .dashboard-title {
            padding: 20px 30px;
            background: white;
            border-bottom: 1px solid #ddd;
            font-weight: bold;
        }

        .content-body {
            padding: 30px;
        }

        .card-panel {
            background: white;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.05);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table th, table td {
            border: 1px solid #ccc;
            padding: 10px;
            font-size: 14px;
        }

        table th {
            background: #f1f1f1;
            text-align: center;
        }

        .pdf-link {
            color: red;
            text-decoration: none;
        }

        .status-ok {
            background: #17a2b8;
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 12px;
        }

        .status-reject {
            background: red;
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 12px;
        }

    </style>
</head>

<body>

<div class="sidebar">
    <h2>SI - JTI</h2>

    <div class="admin-profile">
        <div class="profile-img"></div>
        <span>Dosen</span>
    </div>

    <ul class="nav-menu">
        <li><a href="/surat-digital/resources/views/dosen/dashboard-dosen.blade.php" class="nav-item"><i class="fa-solid fa-house"></i> Dashboard</a></li>
        <li><a href="/surat-digital/resources/views/dosen/data-mahasiswa-dosen.blade.php" class="nav-item"><i class="fa-solid fa-users"></i> Data Mahasiswa</a></li>
    </ul>

    <a href="/surat-digital/resources/views/login.blade.php" class="btn-keluar">
        <i class="fa-solid fa-circle-left"></i> Keluar
    </a>
</div>

<div class="main-content">

    <div class="header-bar">
        <div><i class="fa-solid fa-user-circle"></i> Admin</div>
    </div>

    <div class="dashboard-title">
        <i class="fa-solid fa-clock-rotate-left me-2"></i> Riwayat
    </div>

    <div class="content-body">
        <div class="card-panel">

            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Prodi</th>
                        <th>Gol</th>
                        <th>NIM</th>
                        <th>Semester</th>
                        <th>Surat</th>
                        <th>Status</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>1.</td>
                        <td>Rayhan Riyadhul Jinan</td>
                        <td>Teknik Informatika</td>
                        <td>C</td>
                        <td>E41250835</td>
                        <td>2</td>
                        <td><a href="#" class="pdf-link"><i class="fa-solid fa-file-pdf"></i> .pdf</a></td>
                        <td><span class="status-ok">Terverifikasi</span></td>
                    </tr>

                    <tr>
                        <td>2.</td>
                        <td>Rayhan Riyadhul Jinan</td>
                        <td>Teknik Informatika</td>
                        <td>C</td>
                        <td>E41250835</td>
                        <td>2</td>
                        <td><a href="#" class="pdf-link"><i class="fa-solid fa-file-pdf"></i> .pdf</a></td>
                        <td><span class="status-reject">Ditolak</span></td>
                    </tr>

                    <tr>
                        <td>3.</td>
                        <td>Rayhan Riyadhul Jinan</td>
                        <td>Teknik Informatika</td>
                        <td>C</td>
                        <td>E41250835</td>
                        <td>2</td>
                        <td><a href="#" class="pdf-link"><i class="fa-solid fa-file-pdf"></i> .pdf</a></td>
                        <td><span class="status-ok">Terverifikasi</span></td>
                    </tr>

                </tbody>
            </table>

        </div>
    </div>

</div>

</body>
</html>