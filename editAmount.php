<?php
include 'functions/config.php';

$id = $_GET['id'];
if($_GET['action']==0){
    $conn->query("UPDATE keranjang SET jumlah_tiket=jumlah_tiket-1 WHERE id_keranjang = '$id';");
}
if($_GET['action']==1){
    $conn->query("UPDATE keranjang SET jumlah_tiket=jumlah_tiket+1 WHERE id_keranjang = '$id';");
}
header("Location: keranjang.php");