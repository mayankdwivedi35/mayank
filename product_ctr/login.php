
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="product_css/login.css">
    <title>Login to rento</title>
</head>

<body>
    <form action="login.php" method="POST">
        <div class="close-btn">-</div>
        <div class="login_box">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $number = $_POST['number'];
    $pass = $_POST['pass'];
    // checking username and password
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "rento";
    $conn = mysqli_connect($servername, $username, $password, $database);

    $sql = "SELECT * FROM `account` WHERE phone='$number' AND password='$pass'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);

    if ($num === 1) {
        session_start();
        $_SESSION['number'] = $number;
        $_SESSION['pass'] = $password;
        header("location: http://localhost/site/");
    } else {
        echo "
         <div id='msg'>
            <h3>Warning! Incorrect Password<h3>
         </div>
         ";
    }
}
?>
            <h1>Login</h1>
            <input type="number" placeholder="Phone Number" name="number" autocomplete="off" />
            <input type="password" placeholder="Password" name="pass" />
            <button type="submit">Login</button>

            <div class="login_footer">
                <a href="#">Help?</a>
                <a href="#">Forgot password ?</a>
            </div>

        </div>
    </form>
</body>

</html>
