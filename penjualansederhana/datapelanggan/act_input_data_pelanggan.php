<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Input Data Admin</title>
</head>

<body>
    <?php
    $localhost = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db_fa";
    // create connection
    $nama = $_GET['txtnama'];
    $user = $_GET['txtuser'];
    $email = $_GET['txtemail'];
    $pass = $_GET['txtpass'];
    $alamat = $_GET['txtalamat'];
    $conn = new mysqli($localhost, $username, $password, $dbname);
    // check connection
    if ($conn->connect_error) {
        die("Connection failed :" . $conn->connect_error);
    } else {

        $sql = 'INSERT INTO data_pelanggan';
        $sql = $sql . '(nama,username,email,password,alamat)';
        $sql = $sql . "VALUES('" . $nama . "',' " . $user . " ','" . $email . " ','" . $pass . "' , '" . $alamat . "');";
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
