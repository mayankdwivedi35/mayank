<?php
    include('db_con.php');
    $sql = "SELECT * FROM `view` WHERE page='dashboard'";
    $result = mysqli_query($conn, $sql);
    $no = mysqli_fetch_assoc($result);
    $x = $no['count'];
    $y = 1;
    $fno = $x + $y;
    // inserting new view count 
    $sql = "UPDATE `view` SET `count` = '$fno' WHERE `view`.`sno` = 3";
    $result = mysqli_query($conn, $sql);

?>