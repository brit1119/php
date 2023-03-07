<!DOCTYPE html>
<html>

<body>

    <table align="left" border="1" cellpadding="15" cellspacing="0" width="700">

        <?php
        $x = 1;
        while ($x <= 100) {
            if ($x % 2 == 0) {
                echo "<tr> <td></td> <td></td> <td></td> </tr>";
            } else {
                echo '<tr style="background-color: #ECECEC;"> <td></td> <td></td> <td></td></tr>';
            }
            $x++;
        }
        ?>

    </table>

</body>

</html>