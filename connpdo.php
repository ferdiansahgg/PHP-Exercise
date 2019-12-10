<?php
$localhost = "localhost";
$username = "root";
$password = "";
try {
    $conn = new PDO("mysql:host=$localhost;dbname=data_pelanggan", $username,$password);
    //set the pdo error mode to exception
    $conn->setAttribute(PDO::ATR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connect Successfully";
    }
catch (PDOException $e)
{
    echo "Connection Failde : " .$e->getMesssage();
}
