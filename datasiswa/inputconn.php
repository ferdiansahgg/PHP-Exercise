<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php
    $localhost = "localhost";
    $username = "root";
    $password = "";
    $dbname = "datasiswa";
    // create connection
    $nis = $_GET['nis'];
    $nama = $_GET['nama'];
    $alamat = $_GET['alamat'];
    $tgl_lahir = $_GET['tgl_lahir'];
    $tl_lahir = $_GET['tl_lahir'];
    $agama = $_GET['agama'];
    $no_hp = $_GET['no_hp'];
    $conn = new mysqli($localhost, $username, $password, $dbname);
    // check connection
    if ($conn->connect_error) {
        die("Connection failed :" . $conn->connect_error);
    } else {

        $sql = 'INSERT INTO siswa';
        $sql = $sql . '(NIS,Nama,Alamat,Tanggal_lahir,Tempat_lahir,Agama,No_hp)';
        $sql = $sql . "VALUES('" . $nis . "',' " . $nama . " ','" . $alamat . " ','" . $tgl_lahir . "' , '" . $tl_lahir . "','" . $agama . "','" . $no_hp . "');";
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