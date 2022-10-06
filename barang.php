<?php
include("koneksi.php");
if(!isset($_GET['id'])){
    header("location:barang.php?")
}
    $kode=$_GET['id'];
    $sql="SELECT * FROM barang where id=$kode";
    $query = mysqli_query($db,$sql)
    $barang =mysqli_fetch_assoc($query);

    if(mysqli_num_rows($query) <1){
        die ("data tidak ditemukan");
    }

?>
<html>
    <head>
    </head>
    <body>
    <h1>Data edit barang</h1>
    <h4> <a href=tambah.php>tambah barang</a></h4>
    <table border="1">
        <tr>
            <th>kode barang</th>
            <th>nama barang</th>
            <th>stok barang</th>
            <th>Barang barang</th>
            <th>Aksi</th>
</tr>


<?php
include("koneksi.php");
$sql='SELECT * FROM Barang';
$query = mysqli_query($db, $sql);

while($barang=mysqli_fetch_array($query)){
    echo "<tr>";
    echo "<td>" .$barang['id']."</td>";
    echo "<td>" .$barang['nama']."</td>";
    echo "<td>" .$barang['stok']."</td>";
    echo "<td>" .$barang[ 'harga']."</td>";
    echo "<td>";
    echo "<a href='edit-barang.php?id". $barang['id']. "'>Edit</a>|";
    echo "<a href='hapus-barang.php?id". $barang['id']. "'>hapus</a>";
    echo "</tr>";
}

?>
</table>
</body>
</html>
