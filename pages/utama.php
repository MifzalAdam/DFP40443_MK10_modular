<?php include "config/produk.php"; ?>

<h1 class="title-center">Selamat Datang</h1>

<div class="form-grid">

<div class="gallery-row">
    <!-- Menggelung data produk yang diambil daripada Model melalui Controller | Looping product data retrieved from Model through Controller -->
    <?php foreach ($data as $produk): ?>
        <img src="<?= IMG_URL . htmlspecialchars($produk['gambar']) ?>" alt="<?= htmlspecialchars($produk['nama']) ?>" class="gallery-img">
    <?php endforeach; ?>
</div>

<div class="instructions-section">
    <h3>Cara Membuat Tempahan</h3>
    <p>
        Selamat datang ke Biskut Klasik! Untuk membuat tempahan, sila ikuti langkah-langkah mudah ini. 
        Mula-mula, klik pada menu <strong>Tempah</strong> di bahagian atas. Isikan kuantiti biskut yang anda inginkan dan masukkan nama anda, kemudian klik butang <strong>Teruskan</strong>. 
        Invois akan dipaparkan secara automatik. Sila klik butang <strong>Cetak</strong> untuk mencetak invois tersebut. Invois ini perlu diserahkan kepada kami semasa membuat tempahan. 
        Bayaran boleh dibuat secara tunai atau imbasan Kod QR semasa hari pengambilan tempahan. Terima kasih!
    </p>
</div>

<?php foreach ($data as $produk): ?>

    <div class="card-box">
        <img src="gambar/<?= $produk['gambar'] ?>" class="produk-img">
        <h3><?= $produk['nama'] ?></h3>
    </div>

<?php endforeach; ?>

</div>