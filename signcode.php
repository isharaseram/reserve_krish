<?php

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
     $fname = $_POST['fname'];
   $lname = $_POST['lname'];
    $mail = $_POST['email'];
   $phone = $_POST['phone'];
   $address = $_POST['address'];
   $city = $_POST['city'];
   $country = $_POST['country'];
  
   $pw = $_POST['pw'];
   $repw = $_POST['repw'];
    
   
   
                                        if (($fname=="") || ($lname=="")) {
                                                $nameer = "Insert Both Fisrt & Last Names";
                                        }elseif ($mail=="") {
                                            $mailer = "Plese enter corect Email address";
                                        }elseif ($phone=="") {
                                            $tper = "Please Enter Phone Number";
                                        }
                                        elseif (($address=="")) {
                                            $adder = "Insert Your Residential Address";
                                        }
                                        elseif (($city=="")) {
                                            $cityer = "Insert City";
                                        }
                                        elseif (($country=="")) {
                                            $cner = "Insert Your Country";
                                        }
                                        
                                        elseif (($pw=="")) {
                                            $pwer = "Insert a Login Password";
                                        }elseif (($pw!=$repw)) {
                                                $repwer = "Your Passwords Doesn't match";
                                        } else {
                                             $npw = md5($pw);
                                            
                                             $sql = "INSERT INTO `guest_registration_temp`(`title`, `fname`, `lname`, `address`, `city`, 
                                                 `country`, `mail`, `contact_num`, `password`)                 
                                                    VALUES ('$title','$fname','$lname','$address','$city','$country','$mail','$phone','$npw')" ;
            
                                                                $rslt = mysql_query($sql);
                                                                if ($rslt) {
                                                                    
                                                                    $headers = "From: Krish Bungalow";
                                                                    
                                                                    $msg = "Please Click on below to Verify your mail Address"."</br>".
                                                                            "http://localhost/krish/verify.php";
                                                                    
                                                                  $email=  mail($mail,"Krish Bungalow Guest Registration",$msg,$headers);
                                                                    
                                                                  if ($email){
                                                                      ?>
                                                            <script lang="javascript">
                                                                alert("You will recieve an E-Mail Shortly. Please verify throught the mail.");
//                                                                alert("You have successfuly Registerd As a Tutor. Please Login With your User Name & Password"); 
                                                                 window.location.replace("index.php");
                                                            </script>
                                                                    <?php
                                                                  }  else {
                                                                      ?>
                                                            <script lang="javascript">
                                                                alert("Incorrect  Email or Server Error, Please Try again");
//                                                                
                                                            </script>
                                                                    <?php
                                                                  }
                                                                    
                                                               }  else {
                                                                  ?>
                                                            <script lang="javascript">
                                                                alert("Please FillOut Correct Details");    
                                                            </script>
                                                                    <?php
                                                                }
                                            
                                            
                                            
                                        }
   
   
    
    
}
?>
