<?php
    include('db_con.php');
    $sql = "SELECT * FROM `view` WHERE page='help'";
    $result = mysqli_query($conn, $sql);
    $no = mysqli_fetch_assoc($result);
    $x = $no['count'];
    $y = 1;
    $fno = $x + $y;
    // inserting new view count 
    $sql = "UPDATE `view` SET `count` = '$fno' WHERE `view`.`sno` = 5";
    $result = mysqli_query($conn, $sql);

?>