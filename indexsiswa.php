<?php
session_start();
?>

<?php
if (isset($_SESSION["user"])) {
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
                background-image: url("img/img1.jpg");
                background-size: cover;
            }

            li {
                color: white;
            }
        </style>
        <title>DATA SISWA</title>
    </head>

    <body>
        <div align="right" class="header">
            <a href="logout.php">LOGOUT</a>
            <center>
                <h1>DATA SISWA SMK NIHONG 007</h1>
            </center>
            <hr>
        </div>


        <center>
            <h2>
                MENU
            </h2>
        </center>

        <div class="datasiswa">
            <h2>DATA SISWA</h2>
            <ol>
                <li><a href="/php/datasiswa/tampilsiswa.php">View Data Siswa</a></li>
            </ol>
        </div>
        <div class="datapelajaran">
            <h2>DATA PELAJARAN</h2>
            <ol>
                <li><a href="/php/datapelajaran/tampildatapelajarandb.php">View Data Pelajaran</a></li>
                <li><a href="/php/datapelajaran/tampiltertentu.html">View Data Pelajaran Berdasarkan kode
                        Pelajaran</a></li>
            </ol>
        </div>
        <div class="datanilai">
            <h2>DATA NILAI</h2>
            <ol>
                <li><a href="/php/datanilai/tampildatanilai.php">View Data Nilai</a></li>
                <li><a href="/php/datanilai/tampiltertentunilai.html">View Data Pelajaran Berdasarkan NIS
                        Pelajaran</a></li>
            </ol>
        </div>
    </body>

    </html>

<?php
} else {
    echo 'Anda kudu <a href="index.php">login</a> dahulu !';
}
?>