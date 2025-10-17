<?php 
    $hora = date("H");
    if ($hora < 12) {
        echo "Good Morning";
    }elseif ($hora > 12){
        echo "Good Afternoon";
    }else {
        echo "Good Night";
    }
?>