<?php
session_start();
?>



        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>INPUT DATA PELANGGAN</title>
        </head>

        <body>
            <form action="act_input_data_pelanggan.php" method="get">
                <table>
                    <tr>
                        <td>Nama</td>
                        <td>
                            <input type="text" name="txtnama" id="">
                        </td>
                    </tr>
                    <tr>
                        <td>USERNAME</td>
                        <td>
                            <input type="text" name="txtuser" id="">
                        </td>
                    </tr>
                    <tr>
                        <td>EMAIL</td>
                        <td>
                            <input type="text" name="txtemail" id="">
                        </td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td>
                            <input type="text" name="txtpass" id="">
                        </td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>
                            <input type="text" name="txtalamat" id="">
                        </td>
                    </tr>
                </table>
                <input type="submit" value="INSERT" formtarget="_blank">
            </form>
        </body>

        </html>

