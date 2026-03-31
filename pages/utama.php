<?php include "config/produk.php"; ?>

<h1 class="title-center">Selamat Datang</h1>

<div class="form-grid">

<?php foreach ($data as $produk): ?>

    <div class="card-box">
        <img src="gambar/<?= $produk['gambar'] ?>" class="produk-img">
        <h3><?= $produk['nama'] ?></h3>
    </div>

<?php endforeach; ?>

</div>

</div> <div class="info-section">
        <h2 class="title-center">Cara Membuat Tempahan</h2>
        <p>
            Selamat datang ke Biskut Klasik! Untuk membuat tempahan, sila ikuti langkah-langkah mudah ini. 
            Mula-mula, klik pada menu <strong>Tempah</strong> di bahagian atas... (sambung ayat anda)
        </p>
    </div>