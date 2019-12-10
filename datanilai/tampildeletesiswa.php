<!DOCTYPE html>
<html>

<body>

    <?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "datasiswa";

    //ambil data dari form
    $nis = $_GET["nis"];

    //konek ke database
    $conn = new mysqli($servername, $username, $password, $dbname);

    //cek koneksi( tanda "-" adalah tanda dari mysqli artinya seperti titik"." pada java script)
    if ($conn->connect_error) {
        echo ("koneksi gagal:" . $conn->connect_error);
    } else {
        //$sql = query yang akan dieksekusi
        $sql = " SELECT * FROM siswa";
        $sql = $sql . " WHERE NIS = '" . $nis . "';";

        //eksekusi query dalam $sql di DB yang akan dibuka oleh conn
        //hasilnya disimpan di $tblhasil
        $tblhasil = $conn->query($sql); //belum lengkap

        $row = $tblhasil->fetch_assoc();

        if ($row) {
            echo "<table>";
            echo "<form action='actdeletesiswa.php' method='get'>";

            echo "<tr> <td> Nama </td>";
            echo "<td> <input name='nama' value='" . $row["Nama"] . "'></td></tr>";
            echo "<tr> <td> NIS </td>";
            echo "<td> <input name='nis' value='" . $row["NIS"] . "'></td></tr>";

            echo "</form>";
            echo "</table>";
        } else {
            echo "Tidak ada siswa dengan NIS " . " " . $nis;
        }
    }

    ?>
</body>

</html>