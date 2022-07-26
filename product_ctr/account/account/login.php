<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $u1 = $_POST['u1'];
    $p1 = $_POST['p1'];
    // checking username and password
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "rento";
    $conn = mysqli_connect($servername, $username, $password, $database);

    $sql = "SELECT * FROM `account` WHERE phone='$u1' AND password='$p1'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);

    if ($num === 1) {
        session_start();
        $_SESSION['u1'] = $u1;
        $_SESSION['p1'] = $p1;
        header("location: owner/owner_access.php");
    } else {
        echo "
         <div id='msg'>
            <h3>Warning! Incorrect Password<h3>
         </div>
         ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Login to rento</title>
</head>

<body>
    <form action="login.php" method="POST">
        <div class="close-btn">-</div>
        <div class="login_box">
            <h1>Login</h1>
            <input type="number" placeholder="Phone Number" name="u1" autocomplete="off" />
            <input type="password" placeholder="Password" name="p1" />
            <button type="submit">Login</button>

            <div class="login_footer">
                <a href="#">Help?</a>
                <a href="#">Forgot password ?</a>
            </div>

        </div>
    </form>
</body>

</html>