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
            <th>Nomer Struk</th>
            <th>Tanggal</th>
            <th>Nama Pelanggan</th>
            <th>Total Transaksi</th>
            <th>Nama Barang</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Total Barang</th>
            </tr>
            </thead>';
        $sql = "SELECT * FROM data_penjualan ";
        
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        while ($row) {
            echo '<tr>';
            echo '<td> ' . $row['nomer_struk'] . ' </td>';
            echo '<td> ' . $row['tanggal'] . ' </td>';    
            echo '<td> ' . $row['nama_pelanggan'] . ' </td>';
            echo '<td> ' . $row['total_transaksi'] . ' </td>';
            echo '<td> ' . $row['nama_barang'] . ' </td>';
            echo '<td> ' . $row['jumlah'] . ' </td>';
            echo '<td> ' . $row['harga'] . ' </td>';
            echo '<td> ' . $row['total_barang'] . ' </td>';       
            echo '</tr>';
            $row = $result->fetch_assoc();
        }
        echo  '</table>';
        ?>
    </body>

    </html>
