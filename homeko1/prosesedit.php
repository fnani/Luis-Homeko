<?php
    include "koneksi.php";
   
    $id_rumah=$_POST['id_rumah'];
    $nama_rumah=$_POST['nama_rumah'];
    $alamat=$_POST['alamat'];
    $harga=$_POST['harga'];
    $harga_diskon=$_POST['harga_diskon'];
    $gambar=$_POST['gambar'];

  
    $query=mysqli_query($koneksi,"update tb_jual SET
    nama_rumah='$nama_rumah',
    alamat='$alamat',
    harga='$harga',
    harga_diskon='$harga_diskon'
    where id_rumah = '$id_rumah'");

    if($query){
        header("location:tampil.php?pesan=editsukses");
     }else{
        header("location:tampil.php?pesan=editgagal");
     }

?>