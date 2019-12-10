<html>

<body>


    <?php
    $localhost = "localhost";
    $username = "root";
    $password = "";
    $dbname = "datasiswa";
    // create connection
    $conn = new mysqli($localhost, $username, $password, $dbname);
    // check connection
    if ($conn->connect_error) {
        die("Connection failed :" . $conn->connect_error);
    }
    // $sql query yanga akan di eksekusi
    // echo "Connect Sucessfully".'<br>';
    // echo '<br>';
    echo '<table border="1">
        <thead>
        <tr>
        <th>KODE</th>
        <th>NAMA PELAJARAN</th>
        <th>NILAI</th>
        </tr>
        </thead>';
    $nis = $_GET['tnis'];
    $sql = 'SELECT * FROM siswa';
    $sql = $sql . "WHERE NIS = '" . $nis . "'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    if ($row) {
        # code...
        $nama = $row['Nama'];
        echo 'NIS : ' . $nis;
        echo 'Nama :' . $nama;
        $sql = 'SELECT p.kode, p.nama, n.nilai';
        $sql = $sql . 'FROM p.pelajaran,p.pelajaran ,n.Nilai';
        $sql = $sql . "WHERE NIS = '" . $nis . "'";
        $sql = $sql . 'AND n.kode = p.kode';
        echo "Query = <br>";

        while ($row) {
            echo '<tr>
            <td>' . $row['kode'] . '</td>
            <td>' . $row['nama'] . '</td>
            <td>' . $row['Nilai'] . '</td>
            <tr>';
            $row = $result->fetch_assoc();
        }
        echo '</table';
    } else {
        echo 'siswa tidak terdaftar';
    }


    //close connection $conn->close(); , $conn = null;

    ?>
</body>

</html>