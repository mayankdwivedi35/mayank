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
    $owner_id = $get_data['sno'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post your property</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="main_full_box">
    <form action="#" method="post" enctype="multipart/form-data">
        <div class="form_top1">
            <div class="form_top_box">
                <div class="container">
                    <div class="row">
                        <div class="col-25">
                            <label for="fname">Full Name</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="fname" name="name" placeholder="Ex: Nishant bhagat">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="lname">Phone Number</label>
                        </div>
                        <div class="col-75">
                            <input type="number" id="lname" name="mobile" placeholder="Without +91">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="add1">Address</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="add1" name="add1" placeholder="Local area name">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="add2">City/town</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="add2" name="add2" placeholder="Your city name">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="add3">Landmark</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="add3" name="add3" placeholder="Ex: near city mall">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="pin">Pin code</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="pin" name="pin" placeholder="Pin code X X X X X X">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="type">Type</label>
                        </div>
                        <div class="col-75">
                            <select id="type" name="type">
                                <option value="All Type">All rooms</option>
                                <option value="pg">PG</option>
                                <option value="Room">Room</option>
                                <option value="hostel">Hostel</option>
                                <option value="flat">Flat</option>
                            </select>
                        </div>
                    </div>

                </div>

            </div>
            <div class="form_top_box">
                <div class="container">
                    <div class="row">
                        <div class="col-25">
                            <label for="price">Price</label>
                        </div>
                        <div class="col-75">
                            <input type="number" id="price" name="price" placeholder="Your Rent Price">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label for="price_type">Rent type</label>
                        </div>
                        <div class="col-75">
                            <select id="price_type" name="price_type">
                                <option value="Per months">Per months</option>
                                <option value="Per year">Per year</option>
                                <option value="Per day">Per day</option>
                                <option value="Per Week">Per Week</option>
                                <option value="Per hour">Per hour</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label for="country">Gender</label>
                        </div>
                        <div class="col-75">
                            <select id="gen" name="gen">
                                <option value="Boys">Boys</option>
                                <option value="Girls">Girls</option>
                                <option value="All">All</option>
                                <option value="Per Week">Per Week</option>
                                <option value="Per hour">Per hour</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label for="description">Details</label>
                        </div>
                        <div class="col-75">
                            <textarea id="description" name="description" placeholder="Write description..." style="height:100px"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="rule">Rule & Guidlines</label>
                        </div>
                        <div class="col-75">
                            <textarea id="rule" name="rule" placeholder="rule and guidlines for rent" style="height:100px"></textarea>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <div class="image_container">
            <h3>Minimum 1 image required</h3>
            <div class="upload_main_div">

                <div class="upload_box">
                    <p><input type="file" accept="image/*" name="img1" id="file" onchange="loadFile(event)" style="display: none;"></p>
                    <p class="upload_image"><label for="file" style="cursor: pointer;">Image 1</label></p>
                    <label for="file">
                        <div class="bg">
                            <p><img id="output" /></p>
                        </div>
                    </label>
                    <script>
                        var loadFile = function(event) {
                            var image = document.getElementById('output');
                            image.src = URL.createObjectURL(event.target.files[0]);
                        };
                    </script>
                </div>

                <div class="upload_box">
                    <p><input type="file" accept="image/*" name="img2" id="file2" onchange="loadFile2(event)" style="display: none;"></p>
                    <p class="upload_image"><label for="file2" style="cursor: pointer;">Image 2</label></p>
                    <label for="file2">
                        <div class="bg">
                            <p><img id="output2" /></p>
                        </div>
                    </label>
                    <script>
                        var loadFile2 = function(event) {
                            var image2 = document.getElementById('output2');
                            image2.src = URL.createObjectURL(event.target.files[0]);
                        };
                    </script>
                </div>

                <div class="upload_box">
                    <p><input type="file" accept="image/*" name="img3" id="file3" onchange="loadFile3(event)" style="display: none;"></p>
                    <p class="upload_image"><label for="file3" style="cursor: pointer;">Image 3</label></p>
                    <label for="file3">
                        <div class="bg">
                            <p><img id="output3" /></p>
                        </div>
                    </label>
                    <script>
                        var loadFile3 = function(event) {
                            var image3 = document.getElementById('output3');
                            image3.src = URL.createObjectURL(event.target.files[0]);
                        };
                    </script>
                </div>

                <div class="upload_box">
                    <p><input type="file" accept="image/*" name="img4" id="file4" onchange="loadFile4(event)" style="display: none;"></p>
                    <p class="upload_image"><label for="file4" style="cursor: pointer;">Image 4</label></p>
                    <label for="file4">
                        <div class="bg">
                            <p><img id="output4" /></p>
                        </div>
                    </label>
                    <script>
                        var loadFile4 = function(event) {
                            var image4 = document.getElementById('output4');
                            image4.src = URL.createObjectURL(event.target.files[0]);
                        };
                    </script>
                </div>

                <div class="upload_box">
                    <p><input type="file" accept="image/*" name="img5" id="file5" onchange="loadFile5(event)" style="display: none;"></p>
                    <p class="upload_image"><label for="file5" style="cursor: pointer;">Image 5</label></p>
                    <label for="file5">
                        <div class="bg">
                            <p><img id="output5" /></p>
                        </div>
                    </label>
                    <script>
                        var loadFile5 = function(event) {
                            var image5 = document.getElementById('output5');
                            image5.src = URL.createObjectURL(event.target.files[0]);
                        };
                    </script>
                </div>

                <div class="upload_box">
                    <p><input type="file" accept="image/*" name="img6" id="file6" onchange="loadFile6(event)" style="display: none;"></p>
                    <p class="upload_image"><label for="file6" style="cursor: pointer;">Image 6</label></p>
                    <label for="file6">
                        <div class="bg">
                            <p><img id="output6" /></p>
                        </div>
                    </label>
                    <script>
                        var loadFile6 = function(event) {
                            var image6 = document.getElementById('output6');
                            image6.src = URL.createObjectURL(event.target.files[0]);
                        };
                    </script>
                </div>



            </div>
        </div>
        <div class="submit">
            <input type="submit" value="Continue">
        </div>
        <div class="gap"></div>
                    </form>
    </div>
</body>

</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // connection 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "rento";
    $conn = mysqli_connect($servername, $username, $password, $database);

    // formating image 1
    $avatar = $_FILES['img1']['name'];
    $avatar_first = preg_replace("/\s+/", "_", $avatar);
    $avatar_name = pathinfo($avatar_first, PATHINFO_FILENAME);
    $avatar_tmpname = $_FILES['img1']['tmp_name'];
    $avatar_size = $_FILES['img1']['size'];
    $avatar_type = $_FILES['img1']['type'];
    $avatar_ext = pathinfo($avatar_first, PATHINFO_EXTENSION);
    $final_name = $avatar_name . date("mjYHis") . "." . $avatar_ext;
    // formating image 2
    $avatar2 = $_FILES['img2']['name'];
    $avatar_first2 = preg_replace("/\s+/", "_", $avatar2);
    $avatar_name2 = pathinfo($avatar_first2, PATHINFO_FILENAME);
    $avatar_tmpname2 = $_FILES['img2']['tmp_name'];
    $avatar_size2 = $_FILES['img2']['size'];
    $avatar_type2 = $_FILES['img2']['type'];
    $avatar_ext2 = pathinfo($avatar_first2, PATHINFO_EXTENSION);
    $final_name2 = $avatar_name2 . date("mjYHis") . "." . $avatar_ext2;
    // formating image 3
    $avatar3 = $_FILES['img3']['name'];
    $avatar_first3 = preg_replace("/\s+/", "_", $avatar3);
    $avatar_name3 = pathinfo($avatar_first3, PATHINFO_FILENAME);
    $avatar_tmpname3 = $_FILES['img3']['tmp_name'];
    $avatar_size3 = $_FILES['img3']['size'];
    $avatar_type3 = $_FILES['img3']['type'];
    $avatar_ext3 = pathinfo($avatar_first3, PATHINFO_EXTENSION);
    $final_name3 = $avatar_name3 . date("mjYHis") . "." . $avatar_ext3;
    // formating image 4
    $avatar4 = $_FILES['img4']['name'];
    $avatar_first4 = preg_replace("/\s+/", "_", $avatar4);
    $avatar_name4 = pathinfo($avatar_first4, PATHINFO_FILENAME);
    $avatar_tmpname4 = $_FILES['img4']['tmp_name'];
    $avatar_size4 = $_FILES['img4']['size'];
    $avatar_type4 = $_FILES['img4']['type'];
    $avatar_ext4 = pathinfo($avatar_first4, PATHINFO_EXTENSION);
    $final_name4 = $avatar_name4 . date("mjYHis") . "." . $avatar_ext4;
    // formating image 5
    $avatar5 = $_FILES['img5']['name'];
    $avatar_first5 = preg_replace("/\s+/", "_", $avatar5);
    $avatar_name5 = pathinfo($avatar_first5, PATHINFO_FILENAME);
    $avatar_tmpname5 = $_FILES['img5']['tmp_name'];
    $avatar_size5 = $_FILES['img5']['size'];
    $avatar_type5 = $_FILES['img5']['type'];
    $avatar_ext5 = pathinfo($avatar_first5, PATHINFO_EXTENSION);
    $final_name5 = $avatar_name5 . date("mjYHis") . "." . $avatar_ext5;
    // formating image 5
    $avatar6 = $_FILES['img6']['name'];
    $avatar_first6 = preg_replace("/\s+/", "_", $avatar6);
    $avatar_name6 = pathinfo($avatar_first6, PATHINFO_FILENAME);
    $avatar_tmpname6 = $_FILES['img6']['tmp_name'];
    $avatar_size6 = $_FILES['img6']['size'];
    $avatar_type6 = $_FILES['img6']['type'];
    $avatar_ext6 = pathinfo($avatar_first6, PATHINFO_EXTENSION);
    $final_name6 = $avatar_name6 . date("mjYHis") . "." . $avatar_ext6;
    // uploading image 
    $step1 = move_uploaded_file($avatar_tmpname, "image/" . $final_name);
    $step2 = move_uploaded_file($avatar_tmpname2, "image/" . $final_name2);
    $step3 = move_uploaded_file($avatar_tmpname3, "image/" . $final_name3);
    $step4 = move_uploaded_file($avatar_tmpname4, "image/" . $final_name4);
    $step5 = move_uploaded_file($avatar_tmpname5, "image/" . $final_name5);
    $step6 = move_uploaded_file($avatar_tmpname6, "image/" . $final_name6);

    if ($avatar2 == null) {
        $final_name2 = "default.jpg";
    }
    if ($avatar3 == null) {
        $final_name3 = "default.jpg";
    }
    if ($avatar4 == null) {
        $final_name4 = "default.jpg";
    }
    if ($avatar5 == null) {
        $final_name5 = "default.jpg";
    }
    if ($avatar6 == null) {
        $final_name6 = "default.jpg";
    }

    if ($step1) {

        $name = $_POST['name'];
        $gen = $_POST['gen'];
        $type = $_POST['type'];
        $mobile = $_POST['mobile'];
        $description = $_POST['description'];
        $rule = $_POST['rule'];
        $price = $_POST['price'];
        $price_type = $_POST['price_type'];
        $add1 = $_POST['add1'];
        $add2 = $_POST['add2'];
        $add3 = $_POST['add3'];
        $pin = $_POST['pin'];

// getting owner id 

        $sql = "INSERT INTO `post` (`sno`, `owner_id`, `name`, `owner`, `date`, `gen`, `type`, `price`, `price_type`, `add1`, `add2`, `add3`, `pincode`, `view_count`, `mobile`, `description`, `rule`, `available`, `img1`, `img2`, `img3`, `img4`, `img5`, `img6`) VALUES (NULL, '$owner_id', '$name', 'owner name', current_timestamp(), '$gen', '$type', '$price', '$price_type', '$add1', '$add2', '$add3', '$pin', '0', '$mobile', '$description', '$rule', 'Available', '$final_name', '$final_name2', '$final_name3', '$final_name4', '$final_name5', '$final_name6')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "data uploaded in db";
        } else {
            echo "fail to upload in data base";
        }
    } else {
        echo "Minimum 1 image required !";
    }
}

?>