<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/create.css">
    <title>Document</title>
</head>
<body>

    <form id="regForm" action="/action_page.php">
        <h1>Update your Profile</h1>
        <!-- One "tab" for each step in the form: -->
        <div class="tab">Name:
          <p><input placeholder="First name..." oninput="this.className = ''" name="fname"></p>
          <p><input placeholder="Last name..." oninput="this.className = ''" name="lname"></p>
        </div>
        <div class="tab">Contact Info:
          <p><input placeholder="E-mail..." oninput="this.className = ''" name="email"></p>
          <p><input placeholder="Phone..." oninput="this.className = ''" name="phone" maxlength="10"></p>
        </div>
        <div class="tab">Address:
          <p><input placeholder="Area name" oninput="this.className = ''" name="add1"></p>
          <p><input placeholder="City name" oninput="this.className = ''" name="add2"></p>
          <p><input placeholder="Landmark" oninput="this.className = ''" name="add3"></p>
          <p><input placeholder="State" value="Chhattisgarh" oninput="this.className = ''" name="state"></p>
          <p><input placeholder="Pin code" oninput="this.className = ''" name="pin"></p>
        </div>
        <div class="tab">Login Info:
            <p><input placeholder="Password..." oninput="this.className = ''" name="p1" type="password"></p>
            <p><input placeholder="Confirm..." oninput="this.className = ''" name="p2" type="password"></p>
        </div>
        <div style="overflow:auto;">
          <div style="float:right;">
            <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
            <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
          </div>
        </div>
        
        <div style="text-align:center;margin-top:40px;">
          <span class="step"></span>
          <span class="step"></span>
          <span class="step"></span>
          <span class="step"></span>
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
            document.getElementById("prevBtn").style.display = "inline";
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
          if (valid) {
            document.getElementsByClassName("step")[currentTab].className += " finish";
          }
          return valid; 
        }
        
        function fixStepIndicator(n) {
          var i, x = document.getElementsByClassName("step");
          for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" active", "");
          }
          x[n].className += " active";
        }
        </script>
</body>
</html>