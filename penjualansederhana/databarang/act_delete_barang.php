<?php
session_start();
?>


<!DOCTYPE html>
<html>
<head>
<style>
body {
    color: white;
    background-color: blue;
}
</style>
</head>

<body>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db_fa";

    //ambil data dari form
    $nama = $_GET["txtnama"];

    //konek ke database
    $conn = new mysqli($servername, $username, $password, $dbname);
    //cek koneksi( tanda "-" adalah tanda dari mysqli artinya seperti titik"." pada java script)
    if ($conn->connect_error) {
        echo ("koneksi gagal:" . $conn->error);
    } else {
        $sql = " DELETE FROM data_barang";
        $sql = $sql . " WHERE nama = '" . $nama . "';";
    }
    if ($conn->query($sql) === TRUE) {
        echo "Delete Success";
    } else {
        echo "Delete Error" . $conn->error;
    }
    ?>
</body>

</html>
