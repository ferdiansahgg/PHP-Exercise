<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hitung</title>
</head>

<body>
    <h1>Menghitung nilai UAS + UTS</h1>

    <form action="hitungkal.php" method="POST">
        <?php
        for ($i = 0; $i <= 4; $i++) {
            echo "<br><label>Masukan Nilai ke - </label> .$i ";
            echo "<input type='text' name='nilai" . $i . "'>";
        }
        ?>
        <br>
        <br>

        <input type="submit" value="hitung">
    </form>
</body>

</html>