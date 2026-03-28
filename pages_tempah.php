<form method="POST" action="index.php?menu=checkout">

<div class="product-grid">


<div class="product-card">

    <img src="images/<?php echo $row['gambar']; ?>" class="product-image">

    <h3 class="product-name">
        <?php echo $row['nama_produk']; ?>
    </h3>

    <div class="product-option">

        <div class="option-label">
            <span class="option-name">
                RM <?php echo $row['harga']; ?>
            </span>
        </div>

        <!-- IMPORTANT PART -->
        <input
            type="number"
            name="qty[<?php echo $row['id_produk']; ?>]"
            class="qty-input"
            value="0"
            min="0"
        >

    </div>

</div>

<?php } ?>

</div>

<br>

<button type="submit" class="btn-teruskan">
    Teruskan
</button>

</form>