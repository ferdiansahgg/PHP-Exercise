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
    $dbname = "datasiswa";

    // create connection
    $user = $_POST['txtusername'];
    $pass = $_POST['txtpass'];
    $conn = new mysqli($localhost, $username, $password, $dbname);
    // check connection
    if ($conn->connect_error) {
        die("Connection failed :" . $conn->connect_error);
    }
    $sql = "SELECT * FROM pengguna";
    $result = $conn->query($sql);
    $loginsuccess = false;
    $row = $result->fetch_assoc();
    while (($row) && (!$loginsuccess)) {
        if (($user == $row['user']) && ($pass == $row['pass'])) {
            $loginsuccess = true;
        } else {
            $row = $result->fetch_assoc();
        }
    }
    if ($loginsuccess) {
        session_start();
        $_SESSION['user'] = $user;
        $_SESSION['pass'] = $pass;
        $_SESSION['tipe'] = $row['tipe'];
        if ($_SESSION['tipe'] == 1) {
            $sql = "SELECT * FROM siswa WHERE user='" . $user . "';";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            $_SESSION['NIS'] = $row['NIS'];
            Redirect('indexsiswa.php', false);
        } else {
            Redirect('menu.php', false);
        }
        // header("location:indexdb.html");
    } else {
        echo 'Username atau Password Anda Salah!!';
    }




    ?>
</body>

</html>