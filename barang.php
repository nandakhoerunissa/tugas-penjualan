<?php
include("koneksi.php");?>

<html>
<head>
</head>
<body>
  <h1>Data Master Barang </h1>
  <h4> <a href=tambah.php> Tambah Barang</a></h4>
  <table border="1">
      <tr>
          <th>Nama Lengkap</th>
          <th>Tempat Lahir</th>
          <th>Tanggal Lahir</th>
          <th>Alamat</th>
          <th>Jenis Kelamin</th>
          <th>Agama</th>
</tr>

<?php
include("koneksi.php");
$sql='SELECT * FROM barang';
$query = mysqli_query($db, $sql);

while($barang=mysqli_fetch_array($query)){
    echo "<tr>";
    echo "<td>".$Pendaftaran['Nama Lengkap']."</td>";
    echo "<td>".$Pendaftaran['Tempat Lahir']."</td>";
    echo "<td>".$Pendaftaran['Tanggal Lahir']."</td>";
    echo "<td>".$Pendaftaran['Alamat']."</td>";
    echo "<td>".$Pendaftaran['Jenis Kelamin']."</td>";
    echo "<td>".$Pendaftaran'Agama']."</td>";
    echo "<td>";
    echo "<a href='edit-barang.php?id=".$barang['id']."'>Edit</a>|";
    echo "<a href='hapus-barang.php?id=".$barang['id']."'>Hapus</a>";
    echo "</tr>";

}
?>
</table>
</body>
</html>