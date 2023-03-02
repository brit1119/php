<!DOCTYPE html>
<html>

<body>

    <?php
    $x = "100";

    while ($x >= 1) {
        if ($x % 2 == 0) {
            echo " ";
        } else {
            echo "$x <br>";
        }
        $x = $x - 1;
    }
    ?>

</body>

</html>