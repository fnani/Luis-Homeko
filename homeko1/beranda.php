<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css" />
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
              <li><a href="#main">Beranda</a></li>
              <li><a href="#tentang">Tentang</a></li>
              <li><a href="tambahrumah.php">Saya</a></li>
              <li><a href="#">Contact</a></li>
              <li><a href="index.php">Log-Out</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
    <!-- end header -->

    <!-- main start -->
    <div id="main">
      <div class="main-teks">
        <h1 class="teks1">Halo Semua 👋, selamat datang di</h1>
        <h1 class="teks2">Huis Homekko</h1>
        <h1 class="teks3">
          Website <span class="teks-sp">Jual & Beli rumah</span>
        </h1>
        <h1 class="teks4">
          Rumah yang nyaman adalah tempat terbaik untuk.
          <span class="teks-sp">pulang!</span>
        </h1>
        <img src="img/grg2.png" class="imek" alt="" />
        <a href="#main2">Mulai Beli Rumah</a>
        <div id="tentang">
          <h1 class="tentang-teks">TENTANG KAMI</h1>
          <h1 class="tentangt">
            Tugas project <br />
            web Fanani & Octa
          </h1>
          <h1 class="tekst-pudar">
            Perbaiki hari ini siapa tau besok mati Pebanyak ibadah inggat dunia
            semakin tua, Slebeww!! Slepettt.
          </h1>
          <div class="tentang2">
            <h1 class="tentangt">Fitur web kami</h1>
            <h1 class="tekst-pudar">
              Di web kami banyak menyediakan bergagai fitur yang mempermudahkan
              anda dalam melakukan jual beli rumah. Disini anda dapat membeli
              rumah dengan harga yang sangat terjangkau ,anda dapat menyesuaikan
              tempat yang ingin anda tempati di seluruh bagian wilayah kota di
              Indonesia.
            </h1>
          </div>
        </div>
      </div>
    </div>
    <!-- start main2 -->
    <div id="main2">
      <div id="gallery"><hr></div>
         <!-- conten -->

    <div class="conten">
      <h1 class="jdl-conten">Promo di Homekko</h1>
    </div>

    <!-- kost -->
    <?php

echo '<div class="pilih-rumah">';
include "koneksi.php";

$query = mysqli_query($koneksi, "SELECT * FROM tb_jual");
while ($row = mysqli_fetch_assoc($query)) {
    $nama_rumah = $row['nama_rumah'];
    $alamat = $row['alamat'];
    $harga = $row['harga'];
    $harga_diskon = $row['harga_diskon'];
    $gambar = $row['gambar'];


    echo '<a href="click.html">';
    echo '<div class="rumah">';
    echo '<img src="isidata/' . $gambar . '" class="imgrumah" alt="' . $nama_rumah . '">';
    echo '<p class="p-nama">' . $nama_rumah . '</p>';
    echo '<img src="img/lokk.png" alt="" class="lokk" />';
    echo '<p class="almt">' . $alamat . '</p>';
    echo '<p class="p-harga">'. $harga . '</p>';
    echo '<p class="p-hargaril">'. $harga_diskon . '</p>';
    echo '</div>';
    echo '</a>';
    
}echo '</div>';
?>
    <!-- end main -->

    <!-- start footer -->
    <div class="garisatas"></div>
    <div class="text-footer">
      <h2>Beli Rumah Online Murah Dan Banyak Promo Hanya Di Homekko</h2>
      <br />
      <p>
        Sebagai satu platform Sewa kos terpopuler di XI_ERPEEL, Homekko
        menyediakan beberapa Rumah Yang dengan harga Terjangkau, dari dalam maupun luar negeri. Selain memberikan banyak diskon
        rumah, Homekko juga memberikan kemudahan dalam melakukan Jual atau
        Beli Rumah murah secara online.Beli rumah online bisa dilakukan
        melalui website Homekko.com atau lewat aplikasi yang bisa diunduh secara
        gratis di PlayStore dan AppStore.
      </p>
    </div>

    <div class="garisatas"></div>

    <!-- footer -->
    <footer>
      <div class="footer-content">
        <div class="footer-logo">
          <p class="footer-span">Home<span class="t">kko</span></p>
        </div>
        <div class="footer-info">
          <h2>Tentang Homekko</h2>
          <div class="footer-info-p">
            <ul>
              <li>
                <a href="">Cara memesan</a>
                <a href="">Cara menjual</a>
                <a href="">Tentang kami</a>
                <a href="">Pusat bantuan</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="footer-info">
          <h2>Lainya</h2>
          <div class="footer-info-p">
            <ul>
              <li>
                <a href="">Syarat dan ketentuan</a>
                <a href="">Kebijakan dan privasi</a>
                <a href="">Homekko ads</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="footer-info">
          <h2>Contact Us</h2>
          <div class="footer-info-p">
            <ul>
              <li>
                <a href="">hoemkko@gmail.com</a>
                <a href="">+62 857-3004-8647</a>
                <a href="">Instagram :@homekko</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <br />
      <div class="garisbawah"></div>
      <div class="footer-bottom">&copy; Homekko</div>
    </footer>
    <!-- end footer -->
  </body>
</html>
