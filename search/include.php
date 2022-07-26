<?php 
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);
        if($num > 0){
            while($info = mysqli_fetch_assoc($result)){
                $sno = $info['sno'];
                $address1 = $info['address1'];
                $address2 = $info['address2'];
                $pin = $info['pin'];
                $price = $info['price'];
                $gander = $info['gander'];
                $type = $info['type'];
                echo "               
            <div class='d4'>
                <div class='d5'>
                    <a href='#'>
                        <img src='pg.jpg' alt='home'>
                    </a>
                </div>
                <div class='d6'>
                    <div class='d7'>
                        <p> ₹$price per month</p>
                    </div>
                    <div class='d8'>
                        <p><b>$address1,$address1 $pin</b></p>
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
                ";
            }
        }
