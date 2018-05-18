<?php
    session_start();
    $_SESSION['correo']  = '';
    $_SESSION['password']  = '';
    $_SESSION['type']  = '';
    header("location: /medpa/index.html");
?>
