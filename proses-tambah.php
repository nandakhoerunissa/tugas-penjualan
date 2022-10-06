<?php
include("koneksi.php");
if(isset($_POST['tambah'])){
    $nama=$_POST['barang'];
    $stok=$_POST['stok'];
    $harga=$_POST['harga'];

    $sql = "INSERT INTO barang(nama_barang, stok_barang, harga_barang) VALUES ('$nama', '$stok', '$harga')";
    $query = mysqli_query($db, $sql);

    if($query){
        header('location:barang.php?status=sukses');
    }else{
        header('location:barang.php?status=gagal');
    }
    }
?>