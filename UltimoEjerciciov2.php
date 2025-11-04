<?php
//ASOCIATIVO

$mark_evans =  array (
            array($name =>"Fernández Gil", "María", $project => 5, $activity => 10, $class => 6),
            array($name =>"Fernández Gil", "Jorge", $project => 6, $activity => 10, $class => 4),
            array($name =>"Fernández Gil", "Jesus", $project => 9, $activity => 5, $class => 8)

    );

    function order($name){
        $newName = explode(", ", $name);
        return $newName[1] . " " . $newName[0];
    };

    echo "<table>";
    echo "<tr>
            <th>Student</th>
            <th>Project (35%)</th>
            <th>Activity (15%)</th>
            <th>Exam (50%)</th>
            <th>Final Mark</th>
        </tr>";

    foreach( $mark_evans as $student){
        echo "<tr>"
    }

    echo "</table>";

?>