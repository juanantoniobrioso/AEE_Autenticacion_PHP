<?php
session_start();

//Este php es solo para cerrar sesión y que te
//devuelva a la página de login.php


session_destroy();
header("Location: login.php");
exit();
?>