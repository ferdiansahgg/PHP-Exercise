<?php
session_start();
?>

        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <style>
            body {
            color: white;
            background-color: blue;
            }
            </style>
            <title>DELETE DATA BARANG</title>
        </head>

            <body>
                <form action="act_delete_barang.php" method="get">
                    <table>
                        <tr>
                            <td>
                                <label for="">Masukan Nama Barang yang akan di delete:</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="txtnama" id="">
                            </td>
                        </tr>
                    </table>
                    <input type="submit" value="INSERT" formtarget="_blank">
                </form>
            </body>

            </html>