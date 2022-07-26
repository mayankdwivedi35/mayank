<?php
session_start();

session_unset();
session_destroy();
echo "you are logout action not set";
// header("location: https://aacharyacomputer.in/");
exit;
?>