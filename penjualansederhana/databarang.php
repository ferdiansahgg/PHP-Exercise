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
    
            h1,
            h2 {
                font-size: 40px;
                color: white;
            }

            li {

                font-size: 30px;
            }



            .header {
                color: white;
            }

            a {
                color: white;
            }

            body {
                background-color: blue;
                background-size: cover;
            }

            li {
                color: white;
            }
        </style>
        <title>APLIKASI PENJUALAN</title>
    </head>

    <body>
        <div align="right" class="header">
            <a href="logout.php">LOGOUT</a>
            <center>
                <h1>APLIKASI PENJUALAN</h1>
            </center>
            <hr>
        </div>


        <center>
            <h2>
                MENU
            </h2>
        </center>
        
        <div class="datanasabah">
        <center> <h2>PILIH MENU</h2></center>
            <ol>
                <li><a href="databarang/view_barang.php">View Data barang</a></li>
                <li><a href="databarang/input_data_barang.php">Input Data barang</a></li>
                <li><a href="databarang/halaman_edit_barang.php">Edit Data barang</a></li>
                <li><a href="databarang/delete_barang.php">Delete Data barang</a></li>
            </ol>
        </div>
    </body>

    </html>

