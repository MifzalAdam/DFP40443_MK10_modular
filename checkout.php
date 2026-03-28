<?php
session_start();

if(!isset($_POST['qty'])){
    echo "<script>
            alert('Sila pilih sekurang-kurangnya satu biskut!');
            window.location='index.php?menu=tempah';
          </script>";
    exit();
}

$totalQty = 0;
$order = [];

foreach($_POST['qty'] as $id => $qty){

    $qty = (int)$qty;

    if($qty > 0){
        $order[$id] = $qty;
        $totalQty += $qty;
    }
}

if($totalQty == 0){
    echo "<script>
            alert('Sila pilih sekurang-kurangnya satu biskut!');
            window.location='index.php?menu=tempah';
          </script>";
    exit();
}

/* simpan order */
$_SESSION['order'] = $order;

/* pergi checkout */
header("Location:index.php?menu=bayar");
exit();
?>