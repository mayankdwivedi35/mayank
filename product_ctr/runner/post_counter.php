<?php
    include('db_con.php');
    $sql = "SELECT * FROM `view` WHERE page='post'";
    $result = mysqli_query($conn, $sql);
    $no = mysqli_fetch_assoc($result);
    $x = $no['count'];
    $y = 1;
    $fno = $x + $y;
    // inserting new view count 
    $sql = "UPDATE `view` SET `count` = '$fno' WHERE `view`.`sno` = 7";
    $result = mysqli_query($conn, $sql);
if($result){
    echo "success";
}
?>