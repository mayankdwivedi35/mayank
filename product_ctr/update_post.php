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
    <link rel="stylesheet" href="update.css">
    <style>
        #bd_img1 {
            background-image: url(image/<?php echo "4.jpeg"; ?>);
        }

        #bd_img2 {
            background-image: url(image/<?php echo "4.jpeg"; ?>);
        }

        #bd_img3 {
            background-image: url(image/<?php echo "4.jpeg"; ?>);
        }

        #bd_img4 {
            background-image: url(image/<?php echo "4.jpeg"; ?>);
        }

        #bd_img5 {
            background-image: url(image/<?php echo "4.jpeg"; ?>);
        }

        #bd_img6 {
            background-image: url(image/<?php echo "4.jpeg"; ?>);
        }
    </style>
</head>

<body>
    <div class="main_full_box">
        <form action="" method="post" enctype="multipart/form-data">

            <div class="image_container">

                <div class="upload_main_div">

                    <div class="upload_box">
                        <p><input type="file" accept="image/*" name="img1" id="file" onchange="loadFile(event)" style="display: none;"></p>
                        <p class="upload_image"><label for="file" style="cursor: pointer;">Image 1</label></p>
                        <label for="file">
                            <div class="bg" id="bd_img1">
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
                            <div class="bg" id="bd_img2">
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
                            <div class="bg" id="bd_img3">
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
                            <div class="bg" id="bd_img4">
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
                            <div class="bg" id="bd_img5">
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
                            <div class="bg" id="bd_img6">
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

    if ($avatar != null) {
        $sqla = "SELECT * FROM `post`";
        $resulta = mysqli_query($conn, $sqla);
        $get_dataa = mysqli_fetch_assoc($resulta);
        $img1 = $get_dataa['img1'];
        unlink("image/$img1");
        $step1 = move_uploaded_file($avatar_tmpname, "image/" . $final_name);
        $sqlaa = "UPDATE `post` SET `img1` = '$final_name' WHERE `post`.`sno` = 1";
        $resultaa = mysqli_query($conn, $sqlaa);
    }
    if ($avatar2 != null) {
        $sqlb = "SELECT * FROM `post`";
        $resultb = mysqli_query($conn, $sqlb);
        $get_datab = mysqli_fetch_assoc($resultb);
        $img2 = $get_datab['img2'];
        unlink("image/$img2");
        $step2 = move_uploaded_file($avatar_tmpname2, "image/" . $final_name2);
        $sqlb = "UPDATE `post` SET `img2` = '$final_name2' WHERE `post`.`sno` = 1";
        $resultb = mysqli_query($conn, $sqlb);
    }
    if ($avatar3 != null) {
        $sqlc = "SELECT * FROM `post`";
        $resultc = mysqli_query($conn, $sqlc);
        $get_datac = mysqli_fetch_assoc($resultc);
        $img3 = $get_datac['img3'];
        unlink("image/$img3");
        $step3 = move_uploaded_file($avatar_tmpname3, "image/" . $final_name3);
        $sqlc = "UPDATE `post` SET `img3` = '$final_name3' WHERE `post`.`sno` = 1";
        $resultc = mysqli_query($conn, $sqlc);
    }
    if ($avatar4 != null) {
        $sqld = "SELECT * FROM `post`";
        $resultd = mysqli_query($conn, $sqld);
        $get_datad = mysqli_fetch_assoc($resultd);
        $img4 = $get_datad['img4'];
        unlink("image/$img4");
        $step4 = move_uploaded_file($avatar_tmpname4, "image/" . $final_name4);
        $sqld = "UPDATE `post` SET `img4` = '$final_name4' WHERE `post`.`sno` = 1";
        $resultd = mysqli_query($conn, $sqld);
    }
    if ($avatar5 != null) {
        $sqle = "SELECT * FROM `post`";
        $resulte = mysqli_query($conn, $sqle);
        $get_datae = mysqli_fetch_assoc($resulte);
        $img5 = $get_datae['img5'];
        unlink("image/$img5");
        $step5 = move_uploaded_file($avatar_tmpname5, "image/" . $final_name5);
        $sqle = "UPDATE `post` SET `img5` = '$final_name5' WHERE `post`.`sno` = 1";
        $resulte = mysqli_query($conn, $sqle);
    }
    if ($avatar6 != null) {
        $sqlf = "SELECT * FROM `post`";
        $resultf = mysqli_query($conn, $sqlf);
        $get_dataf = mysqli_fetch_assoc($resultf);
        $img6 = $get_dataf['img6'];
        unlink("image/$img6");
        $step6 = move_uploaded_file($avatar_tmpname6, "image/" . $final_name6);
        $sqlf = "UPDATE `post` SET `img6` = '$final_name6' WHERE `post`.`sno` = 1";
        $resultf = mysqli_query($conn, $sqlf);
    }
}

?>