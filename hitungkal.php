<!DOCTYPE html>
<html lang="en">

<body>

  <?php

  $sum = 0;
  for ($i = 0; $i <= 4; $i++) {
    $a[$i] = $_POST["nilai" . $i];
    $sum = $sum + $a[$i];
  }
  echo "hasilnya adalah" . $sum;
  ?>

</body>

</html>