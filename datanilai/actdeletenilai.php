<!DOCTYPE html>
<html>

<body>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "datasiswa";

    //ambil data dari form
    $snis = $_GET["txtnis"];

    //konek ke database
    $conn = new mysqli($servername, $username, $password, $dbname);
    //cek koneksi( tanda "-" adalah tanda dari mysqli artinya seperti titik"." pada java script)
    if ($conn->connect_error) {
        echo ("koneksi gagal:" . $conn->error);
    } else {
        $sql = " DELETE FROM Nilai";
        $sql = $sql . " WHERE NIS = '" . $snis . "';";
    }
    if ($conn->query($sql) === TRUE) {
        echo "Delete Success";
    } else {
        echo "Delete Error" . $conn->error;
    }
    if ($conn->connect_error) {
        echo ("koneksi gagal:" . $conn->error);
    } else {
        //$sql = query yang akan dieksekusi

        $sql = " DELETE FROM siswa";
        $sql = $sql . " WHERE NIS = '" . $snis . "';";
    }
    if ($conn->query($sql) === TRUE) { } else {
        echo "Delete Error" . $conn->error;
    }


    ?>
</body>

</html>