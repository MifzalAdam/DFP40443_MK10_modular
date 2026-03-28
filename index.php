<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>UserSystem Homepage</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body class="homepage">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">

            <h1 class="display-3 fw-bold mb-4">Selamat Datang</h1>

            <p class="lead mb-5">
                Sistem Pengurusan Pengguna DFP40443. 
                Sila log masuk atau daftar akaun baru untuk mengakses dashboard.
            </p>

            <div class="card shadow-lg p-5">
                <div class="row">

                    <!-- LOGIN -->
                    <div class="col-md-6 mb-3 mb-md-0">
                        <h3>Dah ada akaun?</h3>
                        <p class="text-muted">Masuk ke sistem sekarang.</p>

                        <a href="login_view.php" 
                           class="btn btn-success btn-custom w-100">
                           Log Masuk
                        </a>
                    </div>

                    <!-- REGISTER -->
                    <div class="col-md-6">
                        <h3>Baru di sini?</h3>
                        <p class="text-muted">Cipta akaun dalam seminit.</p>

                        <a href="register_view.php" 
                           class="btn btn-register btn-custom w-100">
                           Daftar Sekarang
                        </a>
                    </div>

                </div>
            </div>

            <div class="mt-4">
                <small class="text-white-50">
                    &copy; 2024 DFP40443 PracWork2 System
                </small>
            </div>

        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>