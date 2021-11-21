<!DOCTYPE html>
<html>
<?php
$cols = 101;
$rows = 101;
echo "<table border=\"1\">";

    for ($r =0; $r < $rows; $r++){

        echo'<tr>';
        if ($r == 0)
        {
            for ($c = 0; $c < $cols; $c++)
            {
                echo '<td>' .$c. '</td>';
            }
        }
        else{
            for ($c = 0; $c < $cols; $c++){
                if ($c == 0)
                {
                echo '<td>' .$r. '</td>';
                }
                else
                {
                echo '<td>' .$c*$r.'</td>';
                }
            }
            echo '</tr>'; 
        }
        

    }

  echo"</table>";
?>
</html>