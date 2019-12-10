<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Input Data Penjualan</title>
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

        $sql = 'INSERT INTO data_penjualan';
        $sql = $sql . '(nomer_struk,tanggal,nama_pelanggan,total_transaksi,nama_barang,jumlah,harga,total_barang)';
        $sql = $sql . "VALUES('" . $nomer . "',' " . $tanggal . " ','" . $nama_pelanggan . " ','" . $total_transaksi . "' , '" . $nama_barang . "', '" . $jumlah . "', '" . $harga . "', '" . $total_barang . "');";
        if ($conn->query($sql) === TRUE) {
            echo "New Record Succesfully";
        } else {
            echo "Error" . $sql . "<br>" . $conn->error;
        }
        // $conn->close();
    }
    ?>
</body>

</html>
