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
    $nama = $_GET['nama'];
    $nis = $_GET['nis'];
    $alamat = $_GET['alamat'];
    $tanggal_lahir = $_GET['ttl'];
    $tempat_lahir = $_GET['tempatlahir'];
    $agama = $_GET['agama'];
    $no_hp = $_GET['nohp'];
    $conn = new mysqli($localhost, $username, $password, $dbname);
    // check connection
    if ($conn->connect_error) {
        die("Connection failed :" . $conn->connect_error);
    } else {
        // $sql query yanga akan di eksekusi
        $sql = "UPDATE siswa SET NIS='$nis',Nama ='$nama', Alamat='$alamat',Tanggal_lahir='$tanggal_lahir',Tempat_lahir=' $tempat_lahir  ', Agama=' $agama ',No_hp='$no_hp 'WHERE NIS='$nis';";
        //    . "SET NIS='" . $nis . "',";
        //    . "Nama='" . $nama . "',";
        //    . "Alamat='" . $alamat . "',";
        //    . "Tanggal_lahir='" . $tanggal_lahir . "',";
        //    . "Tempat_lahir='" . $tempat_lahir . "',";
        //    . "Agama='" . $agama . "',";
        //    . "No_hp='" . $no_hp . "',";
        //    . "WHERE NIS='" . $nis . "';";
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