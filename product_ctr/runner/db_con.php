<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "rento";

    $conn = mysqli_connect($servername, $username, $password, $database);
if(!$conn){
    echo "connection fail !";
}

?>