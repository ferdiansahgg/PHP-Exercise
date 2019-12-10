<!DOCTYPE html>
<html lang="en">

<body>

  <?php
  // Mengambil data dari textbox bil1 dan memasukan kedalam variabel $bil1 
  $bil1 =  $_GET['bil1'];
  // Mengambil data dari textbox bil2 dan memasukan kedalam variabel $bil2
  $bil2 =  $_GET['bil2'];
  // Menjumlahkan data dari $bil + $bil2 dan memasukan kedalam variabel $jumlah
  $jumlah = $bil1 + $bil2;
  //   Menampilkan tulisan hasilnya adalah dan hasil dari penjumlahan $jumlah
  echo "Hasilnya adalah " . $jumlah;

  ?>

</body>

</html>