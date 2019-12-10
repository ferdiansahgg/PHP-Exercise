<?php
session_start();
?>


<?php
if (isset($_SESSION["user"])) {
    if ($_SESSION["tipe"] == 0) {
        ?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Document</title>
        </head>

        <body>
            <form action="inputconn.php" method="get">
                <table>
                    <tr>
                        <td>NIS</td>
                        <td>
                            <input type="text" name="nis" id="">
                        </td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>
                            <input type="text" name="nama" id="">
                        </td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>
                            <input type="text" name="alamat" id="">
                        </td>
                    </tr>
                    <tr>
                        <td>Tanggal_lahir</td>
                        <td>
                            <input type="date" name="tgl_lahir" id="">
                        </td>
                    </tr>
                    <tr>
                        <td>Tempat Lahir</td>
                        <td>
                            <input type="text" name="tl_lahir" id="">
                        </td>
                    </tr>
                    <tr>
                        <td>Agama</td>
                        <td>
                            <input type="text" name="agama" id="">
                        </td>
                    </tr>
                    <tr>
                        <td>No_hp</td>
                        <td>
                            <input type="text" name="no_hp" id="">
                        </td>
                    </tr>
                </table>
                <input type="submit" value="INSERT" formtarget="_blank">
            </form>
        </body>

        </html>

    <?php
    } else {
        echo 'anda tidak bisa akses kesini';
    }
} else {
    echo 'Anda kudu <a href="index.php">login</a> dahulu !';
}
?>