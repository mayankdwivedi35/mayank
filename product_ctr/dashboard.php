<?php
session_start();
if (!isset($_SESSION['u1'])) {
    header("location: login.php");
}

$servername = "localhost";
$username = "root";
$password = "";
$database = "rento";
$conn = mysqli_connect($servername, $username, $password, $database);

$sql = "SELECT * FROM `account`";
$result = mysqli_query($conn, $sql);
$get_data = mysqli_fetch_assoc($result);
$fname = $get_data['fname'];
$lname = $get_data['lname'];
$date = $get_data['date'];
$add1 = $get_data['area'];
$add2 = $get_data['city'];
$pin = $get_data['pin'];
$name = "$fname $lname";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome <?php echo $name; ?></title>
    <link rel="stylesheet" href="./product_css/dashboard.css">
    <script src="https://kit.fontawesome.com/6134d4c766.js" crossorigin="anonymous"></script>
</head>
new code

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
            <img src="pg.jpg" alt="Rento user" onclick="myFunction(this);">
        </div>
        <div class="user_deta">
            <h3><?php echo $name; ?></h3>
            <p>Member from <?php echo $date; ?></p>
            <p><?php echo "$add1 $add2 $pin"; ?></p>
            <p><i><a href="create.html">Change Profile ?</a></i></p>
        </div>
    </div>
    <div class="container">
        <span onclick="this.parentElement.style.display='none'" class="closebtn">&nbsp; &times; &nbsp;</span>
        <img id="expandedImg" style="width:100%">
        <div id="imgtext"></div>
    </div>

    <!-- published post div  -->
    <div class="d1">
        <div class="main-head">
            <div class="main-title">
                <h2>Welcome <?php echo $name; ?></h2>
                <p>Manage your property</p>
            </div>
            <div class="main-find">
                <a href="#">
                    <div class="find-icon">
                        New Post +
                    </div>
                </a>
            </div>
        </div>

        <div class="d3">
            <!-- main box starting point -->
            <?php
            $sql = "SELECT * FROM `post` WHERE owner_id='1' ORDER BY sno DESC LIMIT 6";
            $result = mysqli_query($conn, $sql);
            $num = mysqli_num_rows($result);

            while ($info = mysqli_fetch_assoc($result)) {
                $sno = $info['sno'];
                $name = $info['name'];
                $owner = $info['owner'];
                $image = $info['img2'];
                $price = $info['price'];
                $add1 = $info['add1'];
                $add2 = $info['add2'];
                $add3 = $info['add3'];
                $pin = $info['pincode'];
                $gen = $info['gen'];

                echo "
                            <div class='d4'>
                <div class='d5'>
                    <a href='post/index.html'>
                        <img src='pg.jpg' alt='home'>
                        <p class='manage_button'>Edit / Delete</p>
                    </a>
                </div>
                <div class='d6'>
                    <div class='d7'>
                        <p> ₹$price per month</p>
                    </div>
                    <div class='d8'>
                        <p><b>$add1 $add2 $add3</b></p>
                        <p>Available for <b>$gen</b>. </p>
                    </div>
                    <div class='d9'>
                        <span class='star'>&bigstar;</span>
                        <span class='star'>&bigstar;</span>
                        <span class='star'>&bigstar;</span>
                        <span class='star'>&star;</span>
                        <span class='star'>&star;</span>
                    </div>
                    <div class='d12'>
                        <a href='#'>
                            <div class='d11'>
                                <i class='fa-solid fa-phone'></i> Call
                            </div>
                        </a>
                        <a href='#'>
                            <div class='d10'>
                                Delete ?
                            </div>
                        </a>

                    </div>
                </div>
            </div>
                            ";
            }
            ?>
        </div>


        <div class="load_div">
            <button type="button" class="load_more">Promote Your Property</button>
        </div>
    </div>

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