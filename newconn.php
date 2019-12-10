<!DOCTYPE html>
<html lang="en">

<body>
    <form action="form1.php" method="post">
        <label for="">pilih mapel:</label>



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
        } else {

            $sql = 'SELECT * FROM pelajaran';
            echo '<select name="mapel">';
            $tblhasil = $conn->query($sql);
            $row = $tblhasil->fetch_assoc();

            while ($row) {
                # code...
                echo '<option value="' . $row['kode'] . '">' . $row['nama_pelajaran'] . '</option>';
                $row = $tblhasil->fetch_assoc();
            }
            echo '</select>';
            echo $row['kode'] . $row['nama_pelajaran'];
        }
        ?>
        <br>
        <br>
        <br>
        <input type="submit" value="Tampilkan" formtarget="_blank">
    </form>
</body>

</html>