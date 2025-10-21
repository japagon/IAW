<?php
    $temperatures = array (
                            array(1,12,26),
                            array(2,11,24),
                            array(3,15,24)
                            );
    echo "<table> <caption> Table of temperatures </caption>";

    echo "<tr> <th> Day </th> <th> Minimum </th> <th> Maximum </th> </tr>";

        for ($day = 0; $day < 3; $day++) {
    echo "<tr>";

    for ($col = 0; $col < 3; $col++) {
    echo "<td>", $temperatures[$day][$col],"</td>";
     }

    echo "</tr>";
}
    echo "</table>";
?>