<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" href="product.css">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/6134d4c766.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="script.js"></script>

</head>

<body>
    <!-- top cross bar  -->
    <div class="cross">
        <div class="logo">DelhiZone</div>
        <div class="info_box">
            <!-- <div class="cross_icon">?</div> for future use only -->
            <div class="cross_icon">X</div>
        </div>
    </div>
    <!-- input filds n search bar  -->
    <form action="#" method="post">
        <div class="searchbar">
            <div class="search-box">
                <div class="search-box">
                    <input type="text" autocomplete="off" autofocus="on" placeholder="City, Area, Town, location" class="input" name="address" required="required" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                                                                                                                            $address = $_POST['address'];
                                                                                                                                            echo $address;
                                                                                                                                        } ?>" />
                    <div class="result"></div>
                </div>
                <div>
                    <button class="search-btn"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
            </div>
            <div class="noti">
                <div class="profile"><i class="fa-solid fa-user-plus"></i></div>
                <div class="pcon">
                    <h3>
                        Create Your Account<br>
                    </h3>
                    <marquee behavior="scroll" direction="down" height="9px" scrollamount="1">
                        <p>Change your house to business</p>
                        <p>Click and post your add</p>
                        <p>Grow your business online </p>
                        <p>Free marketing for your property</p>
                    </marquee>
                </div>
            </div>
            <div class="filter">
                <select name="gen" id="gender-filter">
                    <?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $gen = $_POST['gen'];
                        echo "<option value='$gen'>$gen</option>";
                    } ?>
                    <option value="All gander">All gender</option>
                    <option value="Boys">Boys</option>
                    <option value="Girls">Girls</option>
                </select>

                <select name="room" id="room-type">
                    <?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $room = $_POST['room'];
                        echo "<option value='$room'>$room</option>";
                    } ?>
                    <option value="All Type">All rooms</option>
                    <option value="pg">PG</option>
                    <option value="Room">Room</option>
                    <option value="hostel">Hostel</option>
                    <option value="flat">Flat</option>
                </select>


                <select name="price" id="price">
                    <?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $price = $_POST['price'];
                        echo "<option value='$price'>$price</option>";
                    } ?>
                    <option value="All price">All price range</option>
                    <option value="1000">under 1000</option>
                    <option value="2000">under 2000</option>
                    <option value="3000">under 3000</option>
                    <option value="4000">under 4000</option>
                    <option value="5000">under 5000</option>
                    <option value="6000">under 6000</option>
                    <option value="7000">under 7000</option>
                    <option value="8000">more then 8000</option>
                </select>
                <input type="submit" value="APPLY">
            </div>
        </div>

    </form>

    <div class='d1'>
        <div class='main-head'>
            <div class='main-title'>
                <h2><?php 
                                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                        echo "Result for";
                                    }
                                    else{
                                        echo "Recent search";
                                    }
                ?></h2>
                <p>
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $querry = $_POST['address'];
                        echo $querry;
                    }
                    else{
                        echo "Over 500+ post";
                    }
                    ?>
                </p>
            </div>
            <div class='main-find'>
            <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $querry = $_POST['address'];
                        echo "
                        <a href='index.php'>
                        <div class='find-icon'>
                            <i class='fa-solid fa-magnifying-glass'></i>
                            Clear search
                        </div>
                    </a>
                        ";
                    }
                    else{
                        echo "
                        <a href='new.php'>
                        <div class='find-icon'>
                        + Add you
                        <i class='fa-solid fa-house-circle-check'></i>
                    </div>
                    </a>
                        ";
                    }
                    ?>
            </div>
        </div>

        <div class='d3'>
            <!-- main box starting point -->
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "danger";

            $conn = mysqli_connect($servername, $username, $password, $database);

            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                $address = $_POST['address'];
                $gen = $_POST['gen'];
                $room = $_POST['room'];
                $price = $_POST['price'];

                if ("All gander" == $gen & "All Type" == $room & "All price" == $price) {
                    $sql = "SELECT * FROM `danger_table` WHERE address1 LIKE '%$address%' or address2 LIKE '%$address%'";
                    include 'include.php';
                } else {
                    if ("All gander" != $gen & "All Type" == $room & "All price" == $price) {
                        $sql = "SELECT * FROM `danger_table` WHERE (address1 LIKE '%$address%' or address2 LIKE '%$address%') AND gander='$gen'";
                        include 'include.php';
                    }
                    if ("All gander" == $gen & "All Type" != $room & "All price" == $price) {
                        $sql = "SELECT * FROM `danger_table` WHERE (address1 LIKE '%$address%' or address2 LIKE '%$address%') AND type='$room'";
                        include 'include.php';
                    }
                    if ("All gander" == $gen & "All Type" == $room & "All price" != $price) {
                        $sql = "SELECT * FROM `danger_table` WHERE (address1 LIKE '%$address%' or address2 LIKE '%$address%') AND price<'$price'";
                        include 'include.php';
                    }
                    if ("All gander" != $gen & "All Type" != $room & "All price" == $price) {
                        $sql = "SELECT * FROM `danger_table` WHERE (address1 LIKE '%$address%' or address2 LIKE '%$address%') AND gander='$gen' AND type='$room'";
                        include 'include.php';
                    }
                    if ("All gander" == $gen & "All Type" != $room & "All price" != $price) {
                        $sql = "SELECT * FROM `danger_table` WHERE (address1 LIKE '%$address%' or address2 LIKE '%$address%') AND type='$room' AND price<'$price'";
                        include 'include.php';
                    }
                    if ("All gander" != $gen & "All Type" == $room & "All price" != $price) {
                        $sql = "SELECT * FROM `danger_table` WHERE (address1 LIKE '%$address%' or address2 LIKE '%$address%') AND gander='$gen' AND price<'$price'";
                        include 'include.php';
                    }
                    if ("All gander" != $gen & "All Type" != $room & "All price" != $price) {
                        $sql = "SELECT * FROM `danger_table` WHERE (address1 LIKE '%$address%' or address2 LIKE '%$address%') AND gander='$gen' AND type='$room' AND price<'$price'";
                        include 'include.php';
                    }
                }
            }
            else{
                echo"
                <div class='d1'>


    <div class='d3'>
        <div class='d4'>
            <div class='d5'>
                <a href='#'>
                    <img src='pg.jpg' alt='home'>
                </a>
            </div>
            <div class='d6'>
                <div class='d7'>
                    <p> ₹price per month</p>
                </div>
                <div class='d8'>
                    <p><b>address1,address1 pin</b></p>
                    <p>Available for <b>Boys</b> and <b>Girls</b> both. </p>
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
                            <i class='fa-solid fa-circle-info'></i> Owner
                        </div>
                    </a>

                </div>
            </div>
        </div>

        <div class='d4'>
            <div class='d5'>
                <a href='#'>
                    <img src='pg.jpg' alt='home'>
                </a>
            </div>
            <div class='d6'>
                <div class='d7'>
                    <p> ₹price per month</p>
                </div>
                <div class='d8'>
                    <p><b>address1,address1 pin</b></p>
                    <p>Available for <b>Boys</b> and <b>Girls</b> both. </p>
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
                            <i class='fa-solid fa-circle-info'></i> Owner
                        </div>
                    </a>

                </div>
            </div>
        </div>

        <div class='d4'>
            <div class='d5'>
                <a href='#'>
                    <img src='pg.jpg' alt='home'>
                </a>
            </div>
            <div class='d6'>
                <div class='d7'>
                    <p> ₹price per month</p>
                </div>
                <div class='d8'>
                    <p><b>address1,address1 pin</b></p>
                    <p>Available for <b>Boys</b> and <b>Girls</b> both. </p>
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
                            <i class='fa-solid fa-circle-info'></i> Owner
                        </div>
                    </a>

                </div>
            </div>
        </div>


        <div class='d4'>
            <div class='d5'>
                <a href='#'>
                    <img src='pg.jpg' alt='home'>
                </a>
            </div>
            <div class='d6'>
                <div class='d7'>
                    <p> ₹price per month</p>
                </div>
                <div class='d8'>
                    <p><b>address1,address1 pin</b></p>
                    <p>Available for <b>Boys</b> and <b>Girls</b> both. </p>
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
                            <i class='fa-solid fa-circle-info'></i> Owner
                        </div>
                    </a>

                </div>
            </div>
        </div>


        <div class='d4'>
            <div class='d5'>
                <a href='#'>
                    <img src='pg.jpg' alt='home'>
                </a>
            </div>
            <div class='d6'>
                <div class='d7'>
                    <p> ₹price per month</p>
                </div>
                <div class='d8'>
                    <p><b>address1,address1 pin</b></p>
                    <p>Available for <b>Boys</b> and <b>Girls</b> both. </p>
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
                            <i class='fa-solid fa-circle-info'></i> Owner
                        </div>
                    </a>

                </div>
            </div>
        </div>


        <div class='d4'>
            <div class='d5'>
                <a href='#'>
                    <img src='pg.jpg' alt='home'>
                </a>
            </div>
            <div class='d6'>
                <div class='d7'>
                    <p> ₹price per month</p>
                </div>
                <div class='d8'>
                    <p><b>address1,address1 pin</b></p>
                    <p>Available for <b>Boys</b> and <b>Girls</b> both. </p>
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
                            <i class='fa-solid fa-circle-info'></i> Owner
                        </div>
                    </a>

                </div>
            </div>
        </div>

    </div>

</div>
                ";
            }
        
            ?>
        </div>

    </div>
    <!-- closing of main div of resultt  -->
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa-solid fa-circle-arrow-up"></i></button>
    <script src="js_body.js"></script>
</body>

</html>