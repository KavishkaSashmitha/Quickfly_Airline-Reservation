<?php
    include 'config.php';

    session_start();
    $_SESSION['email']=$email;

    echo $email;


?>