<?php
 session_start();
?>
<!DOCTYPE html>
<html lang=”en”>
 <body>
 <?php

// Add the session_unset() function at the end of the former script
// and check the content of $_SESSION. What has happened?
    $_SESSION["role"] = "provider";
    echo "<div>User: ", $_SESSION["user"], "</div>";
    echo "<div>Role: ", $_SESSION["role"], "</div>";


 ?>

 <?php
    session_unset();

    echo "After \"session unset\"";

    var_dump(value: $_SESSION);
?>
 </body>
</html>
