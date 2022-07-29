<?php
session_start();

session_unset();
session_destroy();
echo "logout ho gya hai bs index page ko dikha dena hai ";
header("location: http://localhost/site/");
exit;
?>