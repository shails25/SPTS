
<?php
   session_start();
    if(isset($_SESSION["user"])){
       unset($_SESSION["user"]);
       session_destroy();
       header('Location: index.php');
    }

    if(isset($_SESSION["sname"])){
       unset($_SESSION["sname"]);
       session_destroy();
       header('Location: studentlogin.php');
    }
?>

