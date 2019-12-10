<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>APLIKASI PENJUALAN</title>
    <style>
       
       .padding {
            padding-bottom: 250px;
        }
    </style>
</head>

<body>
    <label for=""></label>
    <div class="padding">
    </div>
    <form action="login.php" method="post">
        <center>
            <table border="1" cellpadding="5">
                <tr>
                    <td> <label for="">Email :</label> </td>
                    <td><input type="text" name="txtemail"></td>
                </tr>
                <tr>
                    <td> <label for="">Username :</label> </td>
                    <td><input type="text" name="txtuser"></td>
                </tr>
                <tr>
                    <td><label for="">Password :</label></td>
                    <td><input type="password" name="txtpass"></td>
                </tr>
            </table>
            <br>
            <input type="submit" value="Login" name="btnlogin">
        </center>
    </form>
</body>

</html>