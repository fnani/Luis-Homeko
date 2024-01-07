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
    <div class="main">
      <!-- form -->

      <div class="form">
        <img src="img/jual.png" alt="" class="search-logo" />
        <div class="form-head">Jual Rumah</div>
        <form action="prosestambahrumah.php" method="POST" enctype="multipart/form-data">
          <label for="nama_rumah" class="form-label">Nama Rumah</label>
          <input
            class="form-input"
            type="text"
            placeholder="Nama Rumah"
            id="nama_rumah"
            name="nama_rumah"
          />
          <br />
          <br />
          <label for="alamat" class="form-label">Alamat</label>
          <input
            class="form-input"
            type="text"
            placeholder="Alamat"
            id="alamat"
            name="alamat"
          />
          <br />
          <br />
          <label for="harga" class="form-label">Harga Rumah</label>
          <input
            class="form-input"
            type="text"
            placeholder="Harga Rumah"
            id="harga"
            name="harga"
          />
          <br />
          <br />
          <label for="harga" class="form-label">Harga Diskon</label>
          <br />
          <input
            class="form-input"
            type="text"
            placeholder="Harga Diskon"
            id="harga"
            name="harga_diskon"
          />
          <label for="foto" class="form-label"></label> <br />
          <input type="file" class="form-input2" name="gambar" />
          <input type="submit" class="form-button" name="proses" value="Jual" />
        </form>
      </div>
      <a href="tampil.php" class="tampilkann">Rumah Saya</a>
    </div>
  </body>
</html>
