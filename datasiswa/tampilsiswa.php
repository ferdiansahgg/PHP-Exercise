<?php
session_start();
?>

<?php
if (isset($_SESSION["user"])) {
    ?>
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
        $sql = "SELECT * FROM siswa WHERE NIS = '" . $_SESSION['NIS'] . "' ";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        while ($row) {
            echo '<tr>';
            echo '<td> ' . $row['NIS'] . ' </td>';
            echo '<td> ' . $row['Nama'] . ' </td>';
            echo '<td> ' . $row['Alamat'] . ' </td>';
            echo '<td> ' . $row['Tanggal_lahir'] . ' </td>';
            echo '<td> ' . $row['Tempat_lahir'] . ' </td>';
            echo '<td> ' . $row['Agama'] . ' </td>';
            echo '<td> ' . $row['No_hp'] . ' </td>';
            echo '</tr>';
            $row = $result->fetch_assoc();
        }
        echo   "</form>";
        echo   '</table>';
        //close connection $conn->close(); , $conn = null;

        ?>
    </body>

    </html>
<?php
} else {
    echo 'Anda kudu <a href="index.php">login</a> dahulu !';
}
?>