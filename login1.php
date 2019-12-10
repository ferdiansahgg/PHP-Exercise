<html>

<head>

</head>

<body>
    <?php
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
    $sql = "SELECT * FROM pengguna WHERE user='$user' and pass=''";
    $row = mysqli_num_rows($sql);


    ?>

</body>

</html>