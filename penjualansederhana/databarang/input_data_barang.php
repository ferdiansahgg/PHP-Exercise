<?php
session_start();
?>



        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>INPUT DATA BARANG</title>
        </head>

        <body>
            <form action="act_input_data_barang.php" method="get">
                <table>
                    <tr>
                        <td>Nama</td>
                        <td>
                            <input type="text" name="txtnama" id="">
                        </td>
                    </tr>
                    <tr>
                        <td>HARGA</td>
                        <td>
                            <input type="text" name="txtharga" id="">
                        </td>
                    </tr>
                    <tr>
                        <td>STOK</td>
                        <td>
                            <input type="text" name="txtstok" id="">
                        </td>
                    </tr>
                </table>
                <input type="submit" value="INSERT" formtarget="_blank">
            </form>
        </body>

        </html>

