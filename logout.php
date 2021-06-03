<?php
    session_start();
    //session_destroy();
    $_SESSION['user']=null;
    unset($_SESSION['user']);
    header("Location:index.php");
?>