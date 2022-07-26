<?php
  session_start();
    if(!isset($_SESSION['u1'])){
       header("location: login.php");
    }
            
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/account.css">
    <script src="https://kit.fontawesome.com/6134d4c766.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="nav_click">
        <div class="nav_click_box">
            <i class="fa-solid fa-arrow-left-long"></i>
        </div>
        <div class="nav_click_box">
            <i class="fa-solid fa-share"></i>
        </div>
    </div>
    <div class="user_1">
        <div class="user_profile_img">
            <img src="https://foyr.com/learn/wp-content/uploads/2022/05/dining-room-in-a-house.jpg" alt="Rento user"
                onclick="myFunction(this);">
        </div>
        <div class="user_deta">
            <h3>Nishant Bhagat</h3>
            <p>Member since Aug 2022</p>
            <p>Raipur Chhattisgarh</p>
        </div>
    </div>
    <div class="container">
        <span onclick="this.parentElement.style.display='none'" class="closebtn">&nbsp; &times; &nbsp;</span>
        <img id="expandedImg" style="width:100%">
        <div id="imgtext"></div>
    </div>

    <h3 id="head_pub">Published Property</h3>
    <a href="logout.php">temperary logout button</a>
    <p>

    <?php
$uname = $_SESSION['u1'];
echo $uname;
    ?>
    </p>
<div class="published"></div>

    <script>
        function myFunction(imgs) {
            var expandImg = document.getElementById("expandedImg");
            var imgText = document.getElementById("imgtext");
            expandImg.src = imgs.src;
            imgText.innerHTML = imgs.alt;
            expandImg.parentElement.style.display = "block";
        }
    </script>
</body>

</html>