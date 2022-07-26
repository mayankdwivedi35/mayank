<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "rento";
  $conn = mysqli_connect($servername, $username, $password, $database);

  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $add1 = $_POST['add1'];
  $add2 = $_POST['add2'];
  $add3 = $_POST['add3'];
  $state = $_POST['state'];
  $pin = $_POST['pin'];
  $p1 = $_POST['p1'];
  $p2 = $_POST['p2'];
  $otp = "654654";
  //  $lat = $_POST['lat'];
  //  $lon = $_POST['lon'];

  $sql = "INSERT INTO `account` (`sno`, `fname`, `lname`, `email`, `phone`, `area`, `city`, `lmark`, `state`, `pin`, `password`, `lat`, `lon`, `date`, `otp`, `status`) VALUES (NULL, '$fname', '$lname', '$email', '$phone', '$add1', '$add2', '$add3', '$state', '$pin', '$p1', '123456789', '123456789', current_timestamp(), '$otp', 'pending')";
  $result = mysqli_query($conn, $sql);

  if ($result) {
    echo "
         <div id='msg'>
            <p>Data submitted successfully!</p>
         </div>
         ";
  } else {
    echo "
          <div id='msg'>
            <p>Fail to submit data!</p>
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
  <link rel="stylesheet" href="css/create.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="script.js"></script>
  <title>Document</title>
</head>

<body>

  <form id="regForm" action="create.php" method="POST">
    <h1>Welcome to Rento</h1>
    <!-- One "tab" for each step in the form: -->
    <div class="tab">
      <h3>Name: </h3>
      <input placeholder="First name..." oninput="this.className = ''" name="fname">
      <input placeholder="Last name..." oninput="this.className = ''" name="lname">
    </div>

    <div class="tab">
      <h3>Contact Info: </h3>
      <div class="search-box">
        <input type="text" autocomplete="off" autofocus="on" oninput="this.className = ''" placeholder="Phone..." class="input" name="phone" maxlength="10" />
        <div class="result"></div>
      </div>
      <input placeholder="E-mail..." oninput="this.className = ''" name="email">
    </div>

    <div class="tab">
      <h3>Address: </h3>
      <input placeholder="Area name" oninput="this.className = ''" name="add1" />
      <input placeholder="City name" oninput="this.className = ''" name="add2" />
      <input placeholder="Landmark" oninput="this.className = ''" name="add3" />
      <input placeholder="State" value="Chhattisgarh" oninput="this.className = ''" name="state" />
      <input placeholder="Pin code" oninput="this.className = ''" name="pin" />
    </div>

    <div class=" tab">
      <h3>Login Details: </h3>
      <input placeholder="Password..." oninput="this.className = ''" name="p1" type="password" />
      <input placeholder="Confirm..." oninput="this.className = ''" name="p2" type="password" />
      <input placeholder="Enter 6 degit OTP " oninput="this.className = ''" name="otp" type="number" />
    </div>

    <div class="btns" style="overflow:auto;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </form>

  <script>
    var currentTab = 0;
    showTab(currentTab);

    function showTab(n) {

      var x = document.getElementsByClassName("tab");
      x[n].style.display = "block";

      if (n == 0) {
        document.getElementById("prevBtn").style.display = "none";
      } else {
        document.getElementById("prevBtn").style.display = "block";
      }
      if (n == (x.length - 1)) {
        document.getElementById("nextBtn").innerHTML = "Submit";
      } else {
        document.getElementById("nextBtn").innerHTML = "Next";
      }

      fixStepIndicator(n)
    }

    function nextPrev(n) {

      var x = document.getElementsByClassName("tab");

      if (n == 1 && !validateForm()) return false;
      x[currentTab].style.display = "none";
      currentTab = currentTab + n;
      if (currentTab >= x.length) {
        document.getElementById("regForm").submit();
        return false;
      }
      showTab(currentTab);
    }

    function validateForm() {
      var x, y, i, valid = true;
      x = document.getElementsByClassName("tab");
      y = x[currentTab].getElementsByTagName("input");
      for (i = 0; i < y.length; i++) {
        if (y[i].value == "") {
          y[i].className += " invalid";
          valid = false;
        }
      }
      return valid;
    }
  </script>
</body>

</html>