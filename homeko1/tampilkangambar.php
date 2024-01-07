<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rumah Saya</title>
  <link rel="stylesheet" href="css/saya.css" />
  <style>
    .cardo {
      border: 1px solid #ddd;
      padding: 10px;
      margin: 10px;
      width: 200px;
      float: left;
    }
    imgcrad {
      max-width: 100%;
      height: auto;
    }
  </style>
</head>
<body>

<?php
include "koneksi.php";

$query = mysqli_query($koneksi, "SELECT * FROM tb_jual");
while ($row = mysqli_fetch_assoc($query)) {
    $nama_rumah = $row['nama_rumah'];
    $alamat = $row['alamat'];
    $harga = $row['harga'];
    $gambar = $row['gambar'];

    echo '<div class="cardo">';
    echo '<img src="isidata/' . $gambar . '" class="imgcrad" alt="' . $nama_rumah . '">';
    echo '<p><b>Nama Rumah:</b> ' . $nama_rumah . '</p>';
    echo '<p><b>Alamat:</b> ' . $alamat . '</p>';
    echo '<p><b>Harga:</b> ' . $harga . '</p>';
    echo '</div>';
}
?>

</body>
</html>
