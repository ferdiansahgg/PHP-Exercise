<!DOCTYPE html>
<html>

<body>

    <?php
    $arr = $_GET['btnhapus'];
    foreach ($arr as $key => $value) {
        # code...
        echo $key . '=>' . $value . '<br>';
        $nis = $key;
    }
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "datasiswa";

    //ambil data dari form
    // $nis = $_GET["nis"];

    //konek ke database
    $conn = new mysqli($servername, $username, $password, $dbname);

    //cek koneksi( tanda "-" adalah tanda dari mysqli artinya seperti titik"." pada java script)
    if ($conn->connect_error) {
        echo ("koneksi gagal:" . $conn->error);
    } else {
        $sql = " DELETE FROM Nilai";
        $sql = $sql . " WHERE NIS = '" . $nis . "';";
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
        $sql = $sql . " WHERE NIS = '" . $nis . "';";
    }
    if ($conn->query($sql) === TRUE) { } else {
        echo "Delete Error" . $conn->error;
    }


    ?>
</body>

</html>