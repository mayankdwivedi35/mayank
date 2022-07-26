<div class="d1">

        <div class="d3">
            <!-- main box starting point -->

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
         <div class='d4'>
         <div class='d5'>
             <a href='#'>
                 <img src='product_ctr/images/$image' alt='home'>
             </a>
         </div>
         <div class='d6'>
             <div class='d7'>
                 <p> ₹$price per month</p>
             </div>
             <div class='d8'>
                 <p><b>$add1 $add2 $add3</b></p>
                 <p>Available for <b>$gen</b>. </p>
                 <p>product id <b>$sno</b>. for future use</p>
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
                         Owner
                     </div>
                 </a>

             </div>
         </div>
         </div>
         ";
            }
            ?>
        </div>
    </div>