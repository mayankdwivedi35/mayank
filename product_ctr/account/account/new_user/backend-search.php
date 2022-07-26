<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "rento";

$conn = mysqli_connect($servername, $username, $password, $database);

$t_q = $_REQUEST["term"];
$leng = strlen($t_q);

if(isset($_REQUEST["term"])){
   if($leng == 10){
    $sql = "SELECT * FROM `account` WHERE phone='$t_q'"; 
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
        if($num > 0){
            echo "<p style='color:red;'>Sorry! You are regesterd</p>";
        }
        else{
            echo "<p style='color:green;'>OTP sent success full !</p>";
        }
   }
   else{
    echo "<P>Verifiying phone number</p>";
   }
}
 
// close connection
mysqli_close($conn);
?>