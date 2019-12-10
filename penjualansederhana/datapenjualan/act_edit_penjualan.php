<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EDIT DATA PENJUALAN</title>
</head>

<body>
    <?php
    $localhost = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db_fa";
    // create connection
    $nomer =$_GET['txtnomer'];
    $tanggal = $_GET['txttanggal'];
    $nama_pelanggan = $_GET['txtnp'];
    $total_transaksi = $_GET['txttt'];
    $nama_barang = $_GET['txtnb'];
    $jumlah = $_GET['txtjml'];
    $harga = $_GET['txtharga'];
    $total_barang = $_GET['txttb'];

    $conn = new mysqli($localhost, $username, $password, $dbname);
    // check connection
    if ($conn->connect_error) {
        die("Connection failed :" . $conn->connect_error);
    } else {
        // $sql query yanga akan di eksekusi
        $sql = "UPDATE data_penjualan SET nomer_struk='$nomer',tanggal='$tanggal',nama_pelanggan='$nama_pelanggan',total_transaksi='$total_transaksi',nama_barang='$nama_barang',jumlah='$jumlah',harga='$harga',total_barang='$total_barang'WHERE nomer_struk='$nomer';";
    }
    if ($conn->query($sql) === TRUE) {
        echo "Update Success";
    } else {
        echo "Update Error" . $conn->error;
    }
    //close connection $conn->close(); , $conn = null;
    ?>
</body>

</html>
