<html>

<body>


    <?php
    $localhost = "localhost";
    $username = "root";
    $password = "";
    $dbname = "datasiswa";
    $skode = $_GET['txtkode'];
    // create connection
    $conn = new mysqli($localhost, $username, $password, $dbname);
    // check connection
    if ($conn->connect_error) {
        die("Connection failed :" . $conn->connect_error);
    }
    // $sql query yanga akan di eksekusi
    echo "Connect Sucessfully" . '<br>';
    echo '<br>';
    echo '<table border="1">
        <thead>
        <tr>
        <th>KODE</th>
        <th>Nama Pelajaran</th>
        <th>Semester</th>
        <th>Jumlah Pelajaran</th>
        </tr>
        </thead>';
    $sql = " SELECT * FROM pelajaran WHERE kode ='$skode';";
    // eksekusi query didalam $strquery di db yang dibuka oleh $conn
    // hasilnya adalah tabel yang disimpan di $result
    $result = $conn->query($sql);
    // baca satu baris dari tabel $result
    // simpan hasilnya di $row
    $row = $result->fetch_assoc();
    echo 'Kode Pelajaran : ' . $row['kode'] . '<br>';
    echo 'Nama Pelajaran : ' . $row['nama_pelajaran'];
    while ($row) {
        echo '<tr>';
        echo '<td> ' . $row['kode'] . ' </td>';
        echo '<td> ' . $row['nama_pelajaran'] . ' </td>';
        echo '<td> ' . $row['semester'] . ' </td>';
        echo '<td> ' . $row['jp'] . ' </td>';
        echo '</tr>';
        $row = $result->fetch_assoc();
    }
    echo   "</form>";
    echo   '</table>';
    //close connection $conn->close(); , $conn = null;

    ?>
</body>

</html>