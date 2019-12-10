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
    $snis = $_GET['txtnis'];
    $skode = $_GET['txtkode'];
    $snilai = $_GET['txtnilai'];
    $conn = new mysqli($localhost, $username, $password, $dbname);
    // check connection
    if ($conn->connect_error) {
        die("Connection failed :" . $conn->connect_error);
    } else {
        // $sql query yanga akan di eksekusi
        $sql = "UPDATE Nilai SET nilai='$nis',kode ='$skode', nilai='$snilai' WHERE 'Nilai'.'NIS'='$snis' AND 'Nilai'.'kode'='$skode'';";
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