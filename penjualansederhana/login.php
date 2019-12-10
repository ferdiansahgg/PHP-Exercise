<html>

<head>

</head>

<body>
    <?php

    function Redirect($url, $permanent = false)
    {
        header('Location: ' . $url, true, $permanent ? 301 : 302);
        exit();
    }
    $localhost = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db_fa";

    // create connection
    $user = $_POST['txtuser'];
    $pass = $_POST['txtpass'];
    $email = $_POST['txtemail'];
    $conn = new mysqli($localhost, $username, $password, $dbname);
    // check connection
    if ($conn->connect_error) {
        die("Connection failed :" . $conn->connect_error);
    }
    $sql = "SELECT * FROM data_pelanggan";
    $result = $conn->query($sql);
    $loginsuccess = false;
    $row = $result->fetch_assoc();
    while (($row) && (!$loginsuccess)) {
        if (($user == $row['username']) || ($email == $row['email']) && ($pass == $row['password'])) {
            $loginsuccess = true;
        } else {
            $row = $result->fetch_assoc();
        }
    }
    if ($loginsuccess) {
        session_start();
        $_SESSION['username'] = $user;
        $_SESSION['password'] = $pass;
        $_SESSION['email'] = $email;
        // $_SESSION['tipe_pengguna'] = $row['tipe_pengguna'];
        // if ($_SESSION['tipe_pengguna'] == 2) {
        //     $sql = "SELECT * FROM datanasabah WHERE no_rek='" . $rek . "';";
        //     $result = $conn->query($sql);
        //     $row = $result->fetch_assoc();
        //     $_SESSION['no_rek'] = $row['no_rek'];
        //     Redirect('halamannasabah.php', false);
        // } else {
        //     Redirect('halamanadmin.php', false);
        // }
        header("location:halaman1.php");
    } else {
        echo 'Username atau Password Anda Salah!!';
    }




    ?>
</body>

</html>