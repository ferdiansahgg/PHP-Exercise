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
        <th>NIS</th>
        <th>Kode Pelajaran</th>
        <th>Nilai Pelajaran</th>
        </tr>
        </thead>';
        $sql = "SELECT * FROM nilai WHERE NIS = '" . $_SESSION['NIS'] . "' ";
    // eksekusi query didalam $strquery di db yang dibuka oleh $conn
    // hasilnya adalah tabel yang disimpan di $result
    $result = $conn->query($sql);
    // baca satu baris dari tabel $result
    // simpan hasilnya di $row
    $row = $result->fetch_assoc();
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
    echo '<br>';
    $min = "SELECT MIN(nilai) AS Nilaminimum FROM Nilai";
//     echo '<form method="post" action="tambahnilai.html">
// 		<button type="submit">TAMBAH NILAI</button>
// 	</form>';
//     echo '<form method="post" action="editnilai.html">
// 		<button type="submit">EDIT NILAI</button>
//     </form>';
//     echo '<form method="post" action="hapusnilai.html">
//     <button type="submit">HAPUS NILAI</button>
// </form>';

    ?>
</body>

</html>

<?php
} else {
    echo 'Anda kudu <a href="index.php">login</a> dahulu !';
}
?>