<?php
    $hostname="localhost";
    $username="root";
    $password="";
    $database="db_rumah";

    $koneksi=mysqli_connect($hostname,$username,$password,$database);
    if($koneksi){
        //echo "database sudah terkoneksi";
    }else{
        mysqli_connect_errno();
    }
?>