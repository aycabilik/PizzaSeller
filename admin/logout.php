<?php

session_start();
//unset();

    session_destroy();
    unset($_SESSION['username']);
    header('location: login.php');
?>