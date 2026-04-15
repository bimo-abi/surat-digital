<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi SI-JTI</title>
    <link rel="stylesheet" href="/try/login/css/register.css">
</head>
<body>
    <div class="overlay"></div> <div class="container">
        <div class="left-content">
            <h1>Selamat Datang Di SI-JTI</h1>
            <p>Buat akun Anda dan mulailah menjelajah SI-JTI membantu Anda mengelola alur kerja Anda dengan antarmuka pengguna yang sederhana dan indah serta interaksi yang lancar.</p>
        </div>

        <div class="right-content">
            <div class="form-card">
                <h2>Buat Akun Anda!</h2>
                <p class="subtitle">Silahkan isi data untuk membuat akun baru</p>
                
                <form action="#" method="POST">
                    <label for="prodi">Program Studi:</label>
                    <select id="prodi" name="prodi">
                        <option>Teknik Informatika</option>
                        <option>Manajemen Informatika</option>
                        <option>Teknik Komputer</option>
                        </select>

                    <label for="email">Email kampus</label>
                    <input type="email" id="email" name="email">

                    <label for="nim">NIM / NIP</label>
                    <input type="text" id="nim" name="nim">

                    <label for="nama">Nama Lengkap:</label>
                    <input type="text" id="nama" name="nama">

                    <label for="golongan">Golongan :</label>
                    <input type="text" id="golongan" name="golongan">

                    <label for="login_sebagai">Login Sebagai :</label>
                    <select id="login_sebagai" name="login_sebagai">
                        <option value="mahasiswa">Mahasiswa</option>
                        <option value="dosen">Dosen</option>
                        <option value="admin">Admin</option>
                    </select>

                    <label for="password">Password :</label>
                    <input type="password" id="password" name="password">

                    <label for="confirm_password">Konfirmasi Password :</label>
                    <input type="password" id="confirm_password" name="confirm_password">

                    <button type="submit">Registrasi</button>
                </form>
            </div>
        </div>
    </div>
    <div id="modalKonfirmasi" class="modal">
    <div class="modal-content">
        <h3>Konfirmasi Data</h3>
        <p>Pastikan data yang Anda masukkan sudah benar:</p>
        
        <div id="previewData"></div>
        
        <div class="modal-actions">
            <button type="button" id="btnBatal" class="btn-cancel">Batal</button>
            <button type="button" id="btnLanjut" class="btn-confirm">Konfirmasi & Daftar</button>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form');
    const modal = document.getElementById('modalKonfirmasi');
    const previewData = document.getElementById('previewData');
    const btnBatal = document.getElementById('btnBatal');
    const btnLanjut = document.getElementById('btnLanjut');

    form.addEventListener('submit', function(e) {
        // Mencegah form langsung terkirim
        e.preventDefault(); 

        // Mengambil nilai dari input form
        const prodi = document.getElementById('prodi').value;
        const email = document.getElementById('email').value;
        const nim = document.getElementById('nim').value;
        const nama = document.getElementById('nama').value;
        const golongan = document.getElementById('golongan').value;
        const loginSebagai = document.getElementById('login_sebagai').value;

        // Menyusun data ke dalam format HTML (Password sengaja tidak ditampilkan demi keamanan)
        previewData.innerHTML = `
            <p><strong>Program Studi</strong>: ${prodi}</p>
            <p><strong>Email</strong>: ${email}</p>
            <p><strong>NIM / NIP</strong>: ${nim}</p>
            <p><strong>Nama Lengkap</strong>: ${nama}</p>
            <p><strong>Golongan</strong>: ${golongan}</p>
            <p><strong>Login Sebagai</strong>: ${loginSebagai}</p>
        `;

        // Ubah display dari 'none' menjadi 'flex' agar pop-up muncul di tengah
        modal.style.display = 'flex'; 
    });

    // Aksi jika tombol Batal ditekan
    btnBatal.addEventListener('click', function() {
        modal.style.display = 'none'; // Sembunyikan pop-up kembali
    });

    // Aksi jika tombol Konfirmasi ditekan
    btnLanjut.addEventListener('click', function() {
        modal.style.display = 'none';
        form.submit(); // Lanjutkan proses pengiriman data ke server PHP
    });
});
</script>
</body>
</html>