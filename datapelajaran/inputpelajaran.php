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
    $skode = $_GET['txtkode'];
    $snp = $_GET['txtnamapelajaran'];
    $ssms = $_GET['txtsemester'];
    $sjp = $_GET['txtjp'];
    $conn = new mysqli($localhost, $username, $password, $dbname);
    // check connection
    if ($conn->connect_error) {
        die("Connection failed :" . $conn->connect_error);
    } else {

        $sql = 'INSERT INTO pelajaran';
        $sql = $sql . '(kode,nama_pelajaran,semester,jp)';
        $sql = $sql . "VALUES('" . $skode . "',' " . $snp . " ','" . $ssms . " ','" . $sjp . "');";
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