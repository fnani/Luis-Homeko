<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="css/saya.css" />
  </head>
  <body>
    <!-- header-logo -->
    <div class="pik">
      <div class="header">
        <p class="header-p">
          Selamat Datang Di <span class="header-span">HOMEKKO</span>
        </p>
        <!-- header-navi -->
        <div class="header-navi">
          <nav>
            <ul>
              <li><a href="beranda.php">Beranda</a></li>
              <li><a href="beranda.php">Tentang</a></li>
              <li><a href="tambahrumah.php">Saya</a></li>
              <li><a href="beranda.php">Contact</a></li>
              <li><a href="index.php">Log-Out</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
    <!-- end header -->

    <!-- start main -->
    <?php
            include "koneksi.php";
            $id_rumah=$_GET['id_rumah'];
            $query=mysqli_query($koneksi,"select * from tb_jual 
            where id_rumah = '$id_rumah'");
            $data=mysqli_fetch_array($query);
        ?>
    <div class="main">
      <!-- form -->

      <div class="form">
        <img src="img/jual.png" alt="" class="search-logo" />
        <div class="form-head">Edit Data Rumah</div>
        <form action="prosesedit.php" method="POST">
          <input
            type="hidden"
            name="id_rumah"
            value="<?php echo $data['id_rumah'] ?>"
          />
          <label for="nama_rumah" class="form-label">Nama Rumah</label>
          <input
            class="form-input"
            type="text"
            placeholder="Nama Rumah"
            id="nama_rumah"
            name="nama_rumah"
            value="<?php echo $data['nama_rumah'] ?>"
          />
          <br />
          <br />
          <label for="almat" class="form-label">Alamat</label>
          <input
            class="form-input"
            type="text"
            placeholder="Alamat"
            id="alamat"
            name="alamat"
            value="<?php echo $data['alamat'] ?>"
          />
          <br />
          <br />
          <label for="almat" class="form-label">Harga Rumah</label>
          <input
            class="form-input"
            type="text"
            placeholder="Harga Rumah"
            id="harga"
            name="harga"
            value="<?php echo $data['harga'] ?>"
          />
          <br />
          <br />
          <label for="harga" class="form-label">Harga Diskon</label>
          <br />
          <input
            class="form-input2"
            type="text"
            placeholder="Harga Diskon"
            id="harga_diskon"
            name="harga_diskon"
            value="<?php echo $data['harga_diskon'] ?>"
          />
          <input type="submit" class="form-button" value="Simpan" />
        </form>
      </div>
    </div>
  </body>
</html>
