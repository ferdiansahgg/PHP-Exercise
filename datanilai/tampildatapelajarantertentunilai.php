<html>

<body>


    <?php
    $localhost = "localhost";
    $username = "root";
    $password = "";
    $dbname = "datasiswa";
    $snis = $_GET['txtnis'];
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
        <th>NIS</th>
        <th>Kode Pelajaran</th>
        <th>Nilai</th>
        </tr>
        </thead>';
    $sql = " SELECT * FROM Nilai WHERE NIS ='$snis';";
    // eksekusi query didalam $strquery di db yang dibuka oleh $conn
    // hasilnya adalah tabel yang disimpan di $result
    $result = $conn->query($sql);
    // baca satu baris dari tabel $result
    // simpan hasilnya di $row
    $row = $result->fetch_assoc();
    echo 'NIS Siswa : ' . $row['NIS'] . '<br>';
    echo 'Nilai Siswa : ' . $row['nilai'];
    while ($row) {
        echo '<tr>';
        echo '<td> ' . $row['NIS'] . ' </td>';
        echo '<td> ' . $row['kode'] . ' </td>';
        echo '<td> ' . $row['nilai'] . ' </td>';
        echo '</tr>';
        $row = $result->fetch_assoc();
    }
    echo   "</form>";
    echo   '</table>';
    //close connection $conn->close(); , $conn = null;

    ?>
</body>

</html>