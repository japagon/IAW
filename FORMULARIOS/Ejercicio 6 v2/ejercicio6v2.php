<?php
 session_start();
?>
<!DOCTYPE html>
<html lang=”en”>
 <body>
 <?php

// Using the code in slide 25, add a script to change the user’s
//  role to “provider”.
    $_SESSION["role"] = "provider";
    echo "<div>User: ", $_SESSION["user"], "</div>";
    echo "<div>Role: ", $_SESSION["role"], "</div>";

    
 ?>
 </body>
</html>


