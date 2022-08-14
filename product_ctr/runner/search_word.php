<?php
    include('db_con.php');
   
    $sql = "INSERT INTO `search` (`sno`, `word`, `date`) VALUES (NULL, 'jdhf', current_timestamp())";
    $result = mysqli_query($conn, $sql);
if($result){
    echo "success";
}
else{
    echo "fail";
}
?>