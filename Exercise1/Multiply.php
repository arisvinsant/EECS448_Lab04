<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

echo multiply();

function multiply() {
    echo "<table>";

    for ($x = 1; $x < 101; $x++) {
        echo "<tr> ";

        for ($y = 1; $y < 101; $y++) {
            echo "<td> ";
            echo $x * $y;
            echo "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}
?>
