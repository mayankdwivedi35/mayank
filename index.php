<?php include("config.php");

session_start();
if (!isset($_SESSION['number'])) {
    $login_status = "False";
    // header("location: login.php");
} else {
    $login_status = "True";
}
?>
<!-- upper me login hai ya logout check kia hu  -->
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include("include/meta.php");
    ?>
    <!--	Css Link
	========================================================-->
    <link rel="stylesheet" type="text/css" href="css//include/color.css" id="color-change">
    <link rel="stylesheet" type="text/css" href="fonts/flaticon/flaticon.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="css/include/search__result_box.css">
    <!--	Title
	=========================================================-->
    <title>Homex - Real Estate Template</title>

</head>

<body>

    <!--	Page Loader  -->
    <div class="page-loader position-fixed z-index-9999 w-100 bg-white vh-100">
        <div class="d-flex justify-content-center y-middle position-relative">
            <div class="spinner-border" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
    </div>
    <!--	Page Loader  -->
    <header>
        <!-- ==============================Navbar Started================ -->
        <div class="navbar">
            <div class="logo">NB</div>

            <!-- <div class="search-btn"> -->
            <!-- <div class="btn"> -->
            <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"> -->
            <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
            <!-- <path d="M500.3 443.7l-119.7-119.7c27.22-40.41 40.65-90.9 33.46-144.7C401.8 87.79 326.8 13.32 235.2 1.723C99.01-15.51-15.51 99.01 1.724 235.2c11.6 91.64 86.08 166.7 177.6 178.9c53.8 7.189 104.3-6.236 144.7-33.46l119.7 119.7c15.62 15.62 40.95 15.62 56.57 0C515.9 484.7 515.9 459.3 500.3 443.7zM79.1 208c0-70.58 57.42-128 128-128s128 57.42 128 128c0 70.58-57.42 128-128 128S79.1 278.6 79.1 208z" />
                    </svg> -->
            <!-- <span>Search</span> -->
            <!-- </div> -->
            <!-- </div>  -->

            <div class="menu">
                <!-- ==========================Menu Button===================== -->
                <div class="btn">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                        <path d="M0 96C0 78.33 14.33 64 32 64H416C433.7 64 448 78.33 448 96C448 113.7 433.7 128 416 128H32C14.33 128 0 113.7 0 96zM0 256C0 238.3 14.33 224 32 224H416C433.7 224 448 238.3 448 256C448 273.7 433.7 288 416 288H32C14.33 288 0 273.7 0 256zM416 448H32C14.33 448 0 433.7 0 416C0 398.3 14.33 384 32 384H416C433.7 384 448 398.3 448 416C448 433.7 433.7 448 416 448z" />
                    </svg>
                    <span> <?php
                            if ($login_status == "True") {
                                echo "Your name";
                            } else {
                                echo "Account";
                            }

                            ?></span>
                </div>
                <div class="space"></div>
                <!-- =======================Menu List===================== -->
                <div class="menu-list">
                    <?php
                    if ($login_status == "True") {
                        echo "
    <ul>
    <a href='#'><li>Home</li></a>
    <a href='#'><li>Post +</li></a>
    <a href='#'><li>Account</li></a>
    <a href='./product_ctr/logout.php'><li>Logout</li></a>
</ul>
    ";
                    } else {
                        echo "
    <ul>
    <a href='product_ctr/login.php'><li>Login</li></a>
    <a href='#'><li>Regester</li></a>
    <a href='#'><li>Search</li></a>
</ul>
    ";
                    }

                    ?>
                </div>
            </div>
        </div>
        <!-- ======================Navbar End============== -->
        <!-- ======================Navbar End============== -->
    </header>
    <div id="page-wrapper">
        <div class="row">
            <!--	Banner Start   -->
            <div class="overlay-black w-100 slider-banner1 position-relative" style="background-image: url('images/04.jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat;">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-lg-12">
                            <div class="text-white">
                                <h1 class="mb-4"><span class="text-primary">Find</span><br>
                                    Your dream place</h1>
                                <form method="post" action="propertygrid.php">
                                    <div class="row">
                                        <div class="col-md-8 col-lg-6">
                                            <div class="form-group">
                                                <div class="search-box">
                                                    <input type="text" autocomplete="off" autofocus="on" placeholder="City, Area, Town, location" class="form-control" name="address" required="required" value="" />
                                                    <div class="result"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-2">
                                            <div class="form-group">
                                                <select class="form-control" name="st">
                                                    <option value="">Students</option>
                                                    <option value="rent">Boys</option>
                                                    <option value="sale">Girls</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-2">
                                            <div class="form-group">
                                                <select class="form-control" name="type">
                                                    <option value="">All Type</option>
                                                    <option value="">Room</option>
                                                    <option value="flat">Flat</option>
                                                    <option value="bunglow">Hostel</option>
                                                    <option value="appartment">Paying Guest</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-lg-2">
                                            <div class="form-group">
                                                <button type="submit" name="filter" class="btn btn-primary w-100">Search Property</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--	Banner End  -->

            <!--	Text Block One
		======================================================-->
            <div class="full-row bg-gray">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="text-secondary double-down-line text-center mb-5">What We Do</h2>
                        </div>
                    </div>
                    <div class="text-box-one">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4 transation-3s">
                                    <i class="flaticon-rent text-primary flat-medium" aria-hidden="true"></i>
                                    <h5 class="text-secondary hover-text-primary py-3 m-0"><a href="#">Selling Service</a></h5>
                                    <p>Lacinia tempor tortor nibh. Et mattis cubilia suspendisse cras justo potenti.</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4 transation-3s">
                                    <i class="flaticon-for-rent text-primary flat-medium" aria-hidden="true"></i>
                                    <h5 class="text-secondary hover-text-primary py-3 m-0"><a href="#">Rental Service</a></h5>
                                    <p>Lacinia tempor tortor nibh. Et mattis cubilia suspendisse cras justo potenti.</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4 transation-3s">
                                    <i class="flaticon-list text-primary flat-medium" aria-hidden="true"></i>
                                    <h5 class="text-secondary hover-text-primary py-3 m-0"><a href="#">Property Listing</a></h5>
                                    <p>Lacinia tempor tortor nibh. Et mattis cubilia suspendisse cras justo potenti.</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4 transation-3s">
                                    <i class="flaticon-diagram text-primary flat-medium" aria-hidden="true"></i>
                                    <h5 class="text-secondary hover-text-primary py-3 m-0"><a href="#">Legal Investment</a></h5>
                                    <p>Lacinia tempor tortor nibh. Et mattis cubilia suspendisse cras justo potenti.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-----  Our Services  ---->

            <!--	Recent Properties  -->
            <div class="full-row">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="text-secondary double-down-line text-center mb-4">Recent Property</h2>
                        </div>
                        <!--- <div class="col-md-6">
                        <ul class="nav property-btn float-right" id="pills-tab" role="tablist">
                            <li class="nav-item"> <a class="nav-link py-3 active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">New</a> </li>
                            <li class="nav-item"> <a class="nav-link py-3" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Featured</a> </li>
                            <li class="nav-item"> <a class="nav-link py-3" id="pills-contact-tab2" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Top Sale</a> </li>
                            <li class="nav-item"> <a class="nav-link py-3" id="pills-contact-tab3" data-toggle="pill" href="#pills-resturant" role="tab" aria-controls="pills-contact" aria-selected="false">Best Sale</a> </li>
                        </ul>
                    </div> --->
                        <div class="col-md-12">
                            <div class="tab-content mt-4" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home">
                                    <div class="row">

                                        <?php $query = mysqli_query($con, "SELECT property.*, user.uname,user.utype,user.uimage FROM `property`,`user` WHERE property.uid=user.uid ORDER BY date DESC LIMIT 9");
                                        while ($row = mysqli_fetch_array($query)) {
                                        ?>

                                            <div class="col-md-6 col-lg-4">
                                                <div class="featured-thumb hover-zoomer mb-4">
                                                    <div class="overlay-black overflow-hidden position-relative"> <img src="admin/property/<?php echo $row['18']; ?>" alt="pimage">
                                                        <div class="featured bg-primary text-white">New</div>
                                                        <div class="sale bg-secondary text-white text-capitalize">For <?php echo $row['5']; ?></div>
                                                        <div class="price text-primary"><b>$<?php echo $row['13']; ?> </b><span class="text-white"><?php echo $row['12']; ?> Sqft</span></div>
                                                    </div>
                                                    <div class="featured-thumb-data shadow-one">
                                                        <div class="p-3">
                                                            <h5 class="text-secondary hover-text-primary mb-2 text-capitalize"><a href="propertydetail.php?pid=<?php echo $row['0']; ?>"><?php echo $row['1']; ?></a></h5>
                                                            <span class="location text-capitalize"><i class="fas fa-map-marker-alt text-primary"></i> <?php echo $row['14']; ?>Lorem ipsum dolor sit amet.</span>
                                                        </div>
                                                        <div class="p-4 d-inline-block w-100">
                                                            <div class="float-left text-capitalize"><i class="fas fa-user text-primary mr-1"></i>By : <?php echo $row['uname']; ?></div>
                                                            <div class="float-right"><i class="far fa-calendar-alt text-primary mr-1"></i> 6 Months Ago</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>

                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--	Recent Properties  -->

            <!--	Why Choose Us -->
            <div class="full-row living bg-one overlay-secondary-half" style="background-image: url('images/haddyliving.jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-lg-6">
                            <div class="living-list pr-4">
                                <h3 class="pb-4 mb-3 text-white">Why Choose Us</h3>
                                <ul>
                                    <li class="mb-4 text-white d-flex">
                                        <i class="flaticon-reward flat-medium float-left d-table mr-4 text-primary" aria-hidden="true"></i>
                                        <div class="pl-2">
                                            <h5 class="mb-3">Experience Quality</h5>
                                            <p>Ad non vivamus Elementum eget fringilla venenatis quisque, maecenas adipiscing aliquet justo. Libero. Gravida. Sapien, dolor nostra sem. Rutrum conubia inceptos egestas dolor class.</p>
                                        </div>
                                    </li>
                                    <li class="mb-4 text-white d-flex">
                                        <i class="flaticon-real-estate flat-medium float-left d-table mr-4 text-primary" aria-hidden="true"></i>
                                        <div class="pl-2">
                                            <h5 class="mb-3">Experience Quality</h5>
                                            <p>Ad non vivamus Elementum eget fringilla venenatis quisque, maecenas adipiscing aliquet justo. Libero. Gravida. Sapien, dolor nostra sem. Rutrum conubia inceptos egestas dolor class.</p>
                                        </div>
                                    </li>
                                    <li class="mb-4 text-white d-flex">
                                        <i class="flaticon-seller flat-medium float-left d-table mr-4 text-primary" aria-hidden="true"></i>
                                        <div class="pl-2">
                                            <h5 class="mb-3">Experience Quality</h5>
                                            <p>Ad non vivamus Elementum eget fringilla venenatis quisque, maecenas adipiscing aliquet justo. Libero. Gravida. Sapien, dolor nostra sem. Rutrum conubia inceptos egestas dolor class.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--	why choose us -->

            <!--	How it work -->
            <div class="full-row">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="text-secondary double-down-line text-center mb-5">How It Work</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="icon-thumb-one text-center mb-5">
                                <div class="bg-primary text-white rounded-circle position-absolute z-index-9">1</div>
                                <div class="left-arrow"><i class="flaticon-investor flat-medium icon-primary" aria-hidden="true"></i></div>
                                <h5 class="text-secondary mt-5 mb-4">Discussion</h5>
                                <p>Nascetur cubilia sociosqu aliquet ut elit nascetur nullam duis tincidunt nisl non quisque vestibulum platea ornare ridiculus.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="icon-thumb-one text-center mb-5">
                                <div class="bg-primary text-white rounded-circle position-absolute z-index-9">2</div>
                                <div class="left-arrow"><i class="flaticon-search flat-medium icon-primary" aria-hidden="true"></i></div>
                                <h5 class="text-secondary mt-5 mb-4">Files Review</h5>
                                <p>Nascetur cubilia sociosqu aliquet ut elit nascetur nullam duis tincidunt nisl non quisque vestibulum platea ornare ridiculus.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="icon-thumb-one text-center mb-5">
                                <div class="bg-primary text-white rounded-circle position-absolute z-index-9">3</div>
                                <div><i class="flaticon-handshake flat-medium icon-primary" aria-hidden="true"></i></div>
                                <h5 class="text-secondary mt-5 mb-4">Acquire</h5>
                                <p>Nascetur cubilia sociosqu aliquet ut elit nascetur nullam duis tincidunt nisl non quisque vestibulum platea ornare ridiculus.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--	How It Work -->

            <!--	Achievement
        ============================================================-->
            <div class="full-row overlay-secondary" style="background-image: url('images/counterbg.jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat;">
                <div class="container">
                    <div class="fact-counter">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="count wow text-center  mb-sm-50" data-wow-duration="300ms"> <i class="flaticon-house flat-large text-white" aria-hidden="true"></i>
                                    <?php
                                    $query = mysqli_query($con, "SELECT count(pid) FROM property");
                                    while ($row = mysqli_fetch_array($query)) {
                                    ?>
                                        <div class="count-num text-primary my-4" data-speed="3000" data-stop="<?php
                                                                                                                $total = $row[0];
                                                                                                                echo $total; ?>">0</div>
                                    <?php } ?>
                                    <div class="text-white h5">Property Available</div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="count wow text-center  mb-sm-50" data-wow-duration="300ms"> <i class="flaticon-house flat-large text-white" aria-hidden="true"></i>
                                    <?php
                                    $query = mysqli_query($con, "SELECT count(pid) FROM property where stype='sale'");
                                    while ($row = mysqli_fetch_array($query)) {
                                    ?>
                                        <div class="count-num text-primary my-4" data-speed="3000" data-stop="<?php
                                                                                                                $total = $row[0];
                                                                                                                echo $total; ?>">0</div>
                                    <?php } ?>
                                    <div class="text-white h5">Sale Property Available</div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="count wow text-center  mb-sm-50" data-wow-duration="300ms"> <i class="flaticon-house flat-large text-white" aria-hidden="true"></i>
                                    <?php
                                    $query = mysqli_query($con, "SELECT count(pid) FROM property where stype='rent'");
                                    while ($row = mysqli_fetch_array($query)) {
                                    ?>
                                        <div class="count-num text-primary my-4" data-speed="3000" data-stop="<?php
                                                                                                                $total = $row[0];
                                                                                                                echo $total; ?>">0</div>
                                    <?php } ?>
                                    <div class="text-white h5">Rent Property Available</div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="count wow text-center  mb-sm-50" data-wow-duration="300ms"> <i class="flaticon-man flat-large text-white" aria-hidden="true"></i>
                                    <?php
                                    $query = mysqli_query($con, "SELECT count(uid) FROM user");
                                    while ($row = mysqli_fetch_array($query)) {
                                    ?>
                                        <div class="count-num text-primary my-4" data-speed="3000" data-stop="<?php
                                                                                                                $total = $row[0];
                                                                                                                echo $total; ?>">0</div>
                                    <?php } ?>
                                    <div class="text-white h5">Registered Users</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


            <!--	Testonomial -->
            <div class="full-row">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="content-sidebar p-4">
                                <div class="mb-3 col-lg-12">
                                    <h4 class="double-down-line-left text-secondary position-relative pb-4 mb-4">Testimonial</h4>
                                    <div class="recent-review owl-carousel owl-dots-gray owl-dots-hover-primary">

                                        <?php

                                        $query = mysqli_query($con, "select feedback.*, user.* from feedback,user where feedback.uid=user.uid and feedback.status='1'");
                                        while ($row = mysqli_fetch_array($query)) {
                                        ?>
                                            <div class="item">
                                                <div class="p-4 bg-primary down-angle-white position-relative">
                                                    <p class="text-white"><i class="fas fa-quote-left mr-2 text-white"></i><?php echo $row['2']; ?>. <i class="fas fa-quote-right mr-2 text-white"></i></p>
                                                </div>
                                                <div class="p-2 mt-4">
                                                    <span class="text-primary d-table text-capitalize"><?php echo $row['uname']; ?></span> <span class="text-capitalize"><?php echo $row['utype']; ?></span>
                                                </div>
                                            </div>
                                        <?php }  ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--	Testonomial -->




            <!-- Scroll to top -->
            <a href="#" class="bg-primary text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a>
            <!-- End Scroll To top -->
        </div>
    </div>
    <!-- Wrapper End -->
    <!-- footer start -->
    <?php
    include("include/footer.php");
    ?>
    <!-- footer end here  -->
    <!--	Js Link
============================================================-->
    <script src="js/jquery.min.js"></script>
    <!--jQuery Layer Slider -->
    <script src="js/greensock.js"></script>
    <script src="js/layerslider.transitions.js"></script>
    <script src="js/layerslider.kreaturamedia.jquery.js"></script>
    <!--jQuery Layer Slider -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/tmpl.js"></script>
    <script src="js/jquery.dependClass-0.1.js"></script>
    <script src="js/draggable-0.1.js"></script>
    <script src="js/jquery.slider.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/YouTubePopUp.jquery.js"></script>
    <script src="js/validate.js"></script>
    <script src="js/jquery.cookie.js"></script>
    <script src="js/custom.js"></script>
    <script>
        $(document).ready(function() {
            $('.search-box input[type="text"]').on("keyup input", function() {
                /* Get input value on change */
                var inputVal = $(this).val();
                var resultDropdown = $(this).siblings(".result");
                if (inputVal.length) {
                    $.get("backend-search.php", {
                        term: inputVal
                    }).done(function(data) {
                        // Display the returned data in browser
                        resultDropdown.html(data);
                    });
                } else {
                    resultDropdown.empty();
                }
            });

            // Set search input value on click of result item
            $(document).on("click", ".result p", function() {
                $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
                $(this).parent(".result").empty();
            });
        });
    </script>
</body>

</html>