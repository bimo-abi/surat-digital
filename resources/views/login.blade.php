<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk ke Akun</title>
    <link rel="stylesheet" href="/resources/css/login.css">
</head>
<body>

    <div class="overlay"></div>

    <div class="login-card">
        <h2>Masuk ke Akun</h2>
        
        <form action="#">
            <div class="input-group">
                <label for="nim-email">NIM/Email</label>
                <input type="text" id="nim-email" name="nim-email" required>
            </div>

            <div class="input-group">
                <div class="label-row">
                    <label for="password">Password</label>
                    <a href="#" class="forgot-password">Lupa pasword?</a>
                </div>
                <input type="password" id="password" name="password" required>
            </div>

            <a href="#" class="btn-primary">Masuk</a>

            <p class="divider">Atau</p>

            <a href="/surat-digital/resources/views/register.blade.php" class="btn-secondary">Daftar Akun</a>
        </form>
    </div>

</body>
</html>
