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
            <form action="tambahnilai.php" method="get">
                <table>
                    <tr>
                        <td>NIS</td>
                        <td>
                            <input type="text" name="txtnis" id="">
                        </td>
                    </tr>
                    <tr>
                        <td>Kode Pelajaran</td>
                        <td>
                            <input type="text" name="txtkode" id="">
                        </td>
                    </tr>
                    <tr>
                        <td>Nilai Pelajaran</td>
                        <td>
                            <input type="text" name="txtnilai" id="">
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