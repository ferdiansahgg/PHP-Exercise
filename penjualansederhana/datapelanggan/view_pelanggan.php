<?php
session_start();
?>

    <html>
<head>
<style>
body {
    background-color: blue;
}
td, th {
    color: white;
}
</style>
</head>
    <body>


        <?php
        $localhost = "localhost";
        $username = "root";
        $password = "";
        $dbname = "db_fa";
        // create connection
        $conn = new mysqli($localhost, $username, $password, $dbname);
        // check connection
        if ($conn->connect_error) {
            die("Connection failed :" . $conn->connect_error);
        }
        echo '<br>';
        echo '<table border="1">
            <thead>
            <tr>
            <th>Nama</th>
            <th>Alamat</th>
            </tr>
            </thead>';
        $sql = "SELECT * FROM data_pelanggan ";
        
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        while ($row) {
            echo '<tr>';
            echo '<td> ' . $row['nama'] . ' </td>';
            echo '<td> ' . $row['alamat'] . ' </td>';           
            echo '</tr>';
            $row = $result->fetch_assoc();
        }
        echo  '</table>';
        ?>
    </body>

    </html>
