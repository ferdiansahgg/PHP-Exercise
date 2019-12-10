<!DOCTYPE html>
<html lang="en">

<body>

    <?php
    // Mengambil data dari textbox nuas dan memasukan kedalam variabel $nuas 
    $nuas =  $_GET['uas'];
    // Mengambil data dari textbox nuts dan memasukan kedalam variabel $nuts
    $nuts =  $_GET['uts'];
    if ($nuas < 0 || $nuas > 100) {
        echo "Masukan tidak valid, harus berisikan 0-100";
    } elseif ($nuts < 0 || $nuts > 100) {
        echo "Masukan tidak valid, harus berisikan 0-100";
    } else {
        $na = ($nuas + $nuts) / 2;
        if ($na >= 85 && $na <= 100) {
            echo "Anda mendapat nilai A, " . "Nilai Anda : " . $na;
        } elseif ($na >= 70 && $na < 85) {
            # code...
            echo "Anda mendapat nilai B, " . "Nilai Anda : " . $na;
        } elseif ($na >= 60 && $na < 70) {
            # code...
            echo "Anda mendapat nilai C, " . "Nilai Anda : " . $na;
        } elseif ($na >= 55 && $na < 60) {
            # code...
            echo "Anda mendapat nilai D, " . "Nilai Anda : " . $na;
        } elseif ($na < 55) {
            # code...
            echo "Anda mendapat nilai E, " . "Nilai Anda : " . $na;
        }
    }

    ?>

</body>

</html>