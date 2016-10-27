<?php
session_start();
include 'connection.php';

if(isset($_POST['log']))
    
{
    
   $username = $_POST['uname'];
    $password = $_POST['pw']; 
    $md5pw = md5($password);
    
     if($username == ""){
                    $ernm = "Please Enter user name";
                } elseif($password == ""){
                   $erpw = "Please Enter Pasword";
                }
                
              $logsql ="SELECT * FROM demo_tution_db.guest_registration where mail = '$username' and password = '$md5pw' " ;  
                                   $rslt = mysql_query($logsql); 
                                     if($rslt === FALSE) { 
                                                                    die(mysql_error()); // TODO: better error handling
                                                                }  else {
                                                                    $row = mysql_fetch_array($rslt);
                                                                }
                                 
                                 
                                 
                                       if (mysql_num_rows($rslt)== 1){
                                           
                                      $user =  $row['fname'];
                                     $_SESSION['username'] = $user;
                                               ?>
                           <script language="javascript">
                             window.location = "reservation.php";
                            </script>
                            <?php 
                                   echo " You have Logged in"  ;  
                                
                           
                              }
                              
                               else {
                                                    $er1 =  "Please Enter correct User Name or Password";    
                                                }
}
?>
