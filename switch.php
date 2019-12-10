<!DOCTYPE html>
<html lang="en">

<body>

    <?php
    $favcolor = $_POST['color'];
    switch ($favcolor) {
        case "red":
            echo "your favorite color is red!";
            break;
        case "blue":
            echo "your favorite color is blue!";
            break;
        case "yellow":
            echo "your favorite color is yellow!";
            break;
        default:
            echo "Please insert your favorite color :)";
    }

    ?>

</body>

</html>