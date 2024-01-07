<?php
    
    include "koneksi.php";

    if(isset($_POST['proses'])){

    $direktori="isidata/";
    $nama_rumah=$_POST['nama_rumah'];
    $alamat=$_POST['alamat']; 
    $harga=$_POST['harga'];
    $harga_diskon=$_POST['harga_diskon'];
    $file_name=$_FILES['gambar']['name'];
    move_uploaded_file($_FILES['gambar']['tmp_name'],$direktori.$file_name);

    
    $query=mysqli_query($koneksi,"insert into tb_jual
    (nama_rumah,alamat,harga,harga_diskon,gambar) values 
    ('$nama_rumah','$alamat','$harga','$harga_diskon','$file_name')");

    if($query){
       header("location:tampil.php?pesan=sukses");
    }else{
       header("location:tampil.php?pesan=gagal");
    }
   }

?>