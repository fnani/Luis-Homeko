<?php
    include "koneksi.php";
    $id_rumah=$_GET['id_rumah'];

    $query=mysqli_query($koneksi,"delete from tb_jual
    where id_rumah='$id_rumah'");

    if($query){
        header("location:tampil.php?pesan=hapussukses");
     }else{
        header("location:tampil.php?pesan=hapusgagal");
     }
?>