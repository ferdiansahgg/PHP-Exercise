<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EDIT DATA BARANG</title>
</head>

<body>
    <?php
    $localhost = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db_fa";
    // create connection
    $nama =$_GET['txtnama'];
    $harga = $_GET['txtharga'];
    $stok = $_GET['txtstok'];

    $conn = new mysqli($localhost, $username, $password, $dbname);
    // check connection
    if ($conn->connect_error) {
        die("Connection failed :" . $conn->connect_error);
    } else {
        // $sql query yanga akan di eksekusi
        $sql = "UPDATE data_barang SET nama='$nama',harga='$harga',stok='$stok' WHERE nama='$nama';";
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
