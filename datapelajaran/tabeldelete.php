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
    echo "Connect Sucessfully" . '<br>';
    echo '<br>';
    echo '<table border="1">
        <thead>
        <tr>
        <th>Nama</th>
        <th>NIS</th>
        <th>Alamat</th>
        <th>Tanggal_lahir</th>
        <th>Tempat_lahir</th>
        <th>Agama</th>
        <th>No_hp</th>
        <th>HAPUS</th>
        </tr>
        </thead>';
    $sql = "SELECT * FROM siswa";
    // eksekusi query didalam $strquery di db yang dibuka oleh $conn
    // hasilnya adalah tabel yang disimpan di $result
    $result = $conn->query($sql);
    // baca satu baris dari tabel $result
    // simpan hasilnya di $row
    $row = $result->fetch_assoc();
    while ($row) {
        echo "<form action='deletesiswawitharray.php' method='get'>";
        echo '<tr>';
        echo '<td> ' . $row['NIS'] . ' </td>';
        echo '<td> ' . $row['Nama'] . ' </td>';
        echo '<td> ' . $row['Alamat'] . ' </td>';
        echo '<td> ' . $row['Tanggal_lahir'] . ' </td>';
        echo '<td> ' . $row['Tempat_lahir'] . ' </td>';
        echo '<td> ' . $row['Agama'] . ' </td>';
        echo '<td> ' . $row['No_hp'] . ' </td>';
        echo '<td>';
        echo "<input type='submit' value='HAPUS'  name='btnhapus[" . $row["NIS"] . "]'>";
        echo '</td>';
        echo '</tr>';
        $row = $result->fetch_assoc();
    }
    echo   "</form>";
    echo   '</table>';
    //close connection $conn->close(); , $conn = null;

    ?>
</body>

</html>