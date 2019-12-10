<?php
session_start();
?>



        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>INPUT DATA PENJUALAN</title>
        </head>

        <body>
            <form action="act_input_data_penjualan.php" method="get">
                <table>
                    <tr>
                        <td>Nomer Struk</td>
                        <td>
                            <input type="text" name="txtnomer" id="">
                        </td>
                    </tr>
                    <tr>
                        <td>TANGGAL</td>
                        <td>
                            <input type="text" name="txttanggal" id="">
                        </td>
                    </tr>
                    <tr>
                        <td>Nama Pelanggan</td>
                        <td>
                            <input type="text" name="txtnp" id="">
                        </td>
                    </tr>
                    <tr>
                        <td>Total Transaksi</td>
                        <td>
                            <input type="text" name="txttt" id="">
                        </td>
                    </tr>
                    <tr>
                        <td>Nama Barang</td>
                        <td>
                            <input type="text" name="txtnb" id="">
                        </td>
                    </tr>
                    <tr>
                        <td>Jumlah</td>
                        <td>
                            <input type="text" name="txtjml" id="">
                        </td>
                    </tr>
                    <tr>
                        <td>Harga</td>
                        <td>
                            <input type="text" name="txtharga" id="">
                        </td>
                    </tr>
                    <tr>
                        <td>Total Barang</td>
                        <td>
                            <input type="text" name="txttb" id="">
                        </td>
                    </tr>
                </table>
                <input type="submit" value="INSERT" formtarget="_blank">
            </form>
        </body>

        </html>

