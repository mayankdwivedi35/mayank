<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "countries";

$conn = mysqli_connect($servername, $username, $password, $database);

$s_q = $_REQUEST["term"];

if(isset($_REQUEST["term"])){

    $sql = "SELECT * FROM `countries` where name LIKE '%$s_q%'"; 
    $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);
        if($num > 0){
            while($info = mysqli_fetch_assoc($result)){
                $info = $info['name'];
                echo "<p>" . $info. "</p>";
            }
        }  
        else {
            echo "<h5>No matches found</h5>";
            // storing word to database 
          
        }
}
 
// close connection
mysqli_close($conn);
?>