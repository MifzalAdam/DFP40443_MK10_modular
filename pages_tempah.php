<?php
session_start();
?>

<h2 class="page-title">Tempahan Biskut Raya</h2>

<form method="POST" action="index.php?menu=checkout">

<div class="product-grid">

<?php
// List biskut statik
$produk = [
    ['id' => 1, 'nama' => 'Biskut Almond', 'harga' => 5.00, 'gambar' => 'almond.jpg'],
    ['id' => 2, 'nama' => 'Biskut Coklat', 'harga' => 4.50, 'gambar' => 'coklat.jpg'],
    ['id' => 3, 'nama' => 'Biskut Kacang', 'harga' => 6.00, 'gambar' => 'kacang.jpg'],
    ['id' => 4, 'nama' => 'Biskut Keju', 'harga' => 5.50, 'gambar' => 'keju.jpg'],
    ['id' => 5, 'nama' => 'Biskut Cornflakes', 'harga' => 4.80, 'gambar' => 'cornflakes.jpg'],
];

foreach($produk as $row){
?>

<div class="product-card">

    <img src="images/<?php echo $row['gambar']; ?>" class="product-image" alt="<?php echo $row['nama']; ?>">

    <h3 class="product-name"><?php echo $row['nama']; ?></h3>

    <p>Harga: RM <?php echo number_format($row['harga'], 2); ?></p>

    <div class="product-option">
        <label>Quantity:</label>
        <input 
            type="number" 
            name="qty[<?php echo $row['id']; ?>]" 
            class="qty-input" 
            value="0" 
            min="0">
    </div>

</div>

<?php } ?>

</div>

<br>

<button type="submit" class="btn-teruskan">Teruskan</button>

</form>