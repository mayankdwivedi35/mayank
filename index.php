<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/body.css">
    <link rel="stylesheet" href="css/index.css">
    <title>Welcome to rento India</title>
    <style>
        header {
    width: 100%;
    min-height: 100vh;
    background: linear-gradient(
            to bottom right,
            rgba(0, 0, 0, 0.8),
            rgba(0, 0, 0, 0.5)
        ),
        url("./img_src/index_header.jpg") center/cover;
}
    </style>
</head>

<body>
    <header>
        <!-- ==============================Navbar Started================ -->
        <div class="navbar">
            <div class="logo">NB</div>

            <div class="search-btn">
                <div class="btn">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                        <path d="M500.3 443.7l-119.7-119.7c27.22-40.41 40.65-90.9 33.46-144.7C401.8 87.79 326.8 13.32 235.2 1.723C99.01-15.51-15.51 99.01 1.724 235.2c11.6 91.64 86.08 166.7 177.6 178.9c53.8 7.189 104.3-6.236 144.7-33.46l119.7 119.7c15.62 15.62 40.95 15.62 56.57 0C515.9 484.7 515.9 459.3 500.3 443.7zM79.1 208c0-70.58 57.42-128 128-128s128 57.42 128 128c0 70.58-57.42 128-128 128S79.1 278.6 79.1 208z" />
                    </svg>
                    <span>Search</span>
                </div>
            </div>

            <div class="menu">
                <!-- ==========================Menu Button===================== -->
                <div class="btn">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                        <path d="M0 96C0 78.33 14.33 64 32 64H416C433.7 64 448 78.33 448 96C448 113.7 433.7 128 416 128H32C14.33 128 0 113.7 0 96zM0 256C0 238.3 14.33 224 32 224H416C433.7 224 448 238.3 448 256C448 273.7 433.7 288 416 288H32C14.33 288 0 273.7 0 256zM416 448H32C14.33 448 0 433.7 0 416C0 398.3 14.33 384 32 384H416C433.7 384 448 398.3 448 416C448 433.7 433.7 448 416 448z" />
                    </svg>
                    <span>Account</span>
                </div>
                <div class="space"></div>
                <!-- =======================Menu List===================== -->
                <div class="menu-list">
                    <ul>
                        <li>My Profile</li>
                        <li>Logout</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- ======================Navbar End============== -->
        <!-- ======================Navbar End============== -->

        <!-- =========================Nav Texts==================== -->
        <div class="nav-content">
            <div class="brand-text">Find the perfect room!</div>
        </div>
    </header>

    <section>
        <div class="section-title">Recent post</div>
        <div class="search-result">
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "rento";
            $conn = mysqli_connect($servername, $username, $password, $database);

            $sql = "SELECT * FROM `post` ORDER BY sno DESC LIMIT 6";
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
        <div class='card'>
        <div class='image-container'>
            <img src='5.jpeg' alt='img' />
        </div>
        <div class='info-container'>
            <span class='card-name'>$name</span>
            <span class='card-address'>$add1 $add2 $add3 $pin </span>
            <span class='card-price'>$price ₹ per Month</span>
        </div>
    </div>
 ";
            }
            ?>
        </div>
    </section>

    <?php include("./php_src/footer.php"); ?>

    <script src="script/nav_bar.js"></script>
</body>

</html>