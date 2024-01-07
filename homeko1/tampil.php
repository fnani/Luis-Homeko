<html>
    <head>
        <title>Rumah yang anda jual</title>
        <link rel="stylesheet" href="css/tampil.css">
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
              <li><a href="#">Contact</a></li>
              <li><a href="index.php">Log-Out</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
    <!-- end header -->
        <br/>
    <div class="bd">
        <table border="1">
            <tr class="initr">
                <th class="inino">No</th>
                <th class="inith">Nama Rumah</th>
                <th class="inith">Alamat</th>
                <th class="inith">Harga</th>
                <th class="inith">Harga Diskon</th>
                <th class="iniopsi">Opsi</th>
            </tr>
            <?php
                include "koneksi.php";
                $no=1;
                //query untuk menampilkan semua data dari database
                $query=mysqli_query($koneksi,"select * from tb_jual order by id_rumah desc");
                while($data=mysqli_fetch_array($query)){
            ?>
            <tr class="initr">
                <td class="initdno"><?php echo $no++; ?></td>
                <td class="initd"><?php echo $data['nama_rumah'];?></td>
                <td class="initd"><?php echo $data['alamat'];?></td>
                <td class="initd"><?php echo $data['harga'];?></td>
                <td class="initd"><?php echo $data['harga_diskon'];?></td>
                <td class="initd">
                    <a class="op" href="edit.php?id_rumah=<?php echo $data['id_rumah'];?>">Edit</a>
                    <a class="op" href="hapus.php?id_rumah=<?php echo $data['id_rumah'];?>">Hapus</a>
                </td>
            </tr>
            <?php
                }
            ?>
        </table>
    </div>
    </body>
</html>