<?php
    session_start();

    $_SESSION["isloggedin"]=false;

    echo "<script>location.assign('adminlogin.php');</script>";
?>