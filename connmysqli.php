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
        echo '<tr>
        <td>' . $row['Nama'] . '</td>
        <td>' . $row['NIS'] . '</td>
        <td>' . $row['Alamat'] . '</td>
        <td>' . $row['Tanggal_lahir'] . '</td>
        <td>' . $row['Tempat_lahir'] . '</td>
        <td>' . $row['Agama'] . '</td>
        <td>' . $row['No_hp'] . '</td>
        <tr>';
        $row = $result->fetch_assoc();
    }
    echo '</table>';
    //close connection $conn->close(); , $conn = null;

    ?>
</body>

</html>