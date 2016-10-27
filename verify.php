<?php
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
                
              $logsql ="SELECT * FROM demo_tution_db.guest_registration_temp where mail = '$username' and password = '$md5pw' " ;  
                                   $rslt = mysql_query($logsql); 
                                     if($rslt === FALSE) { 
                                                                    die(mysql_error()); // TODO: better error handling
                                                                }  else {
                                                                    $row = mysql_fetch_array($rslt);
                                                                }
                              
                                 
                                 
                                 
                                       if (mysql_num_rows($rslt)== 1){
                                           $query =  mysql_query("INSERT INTO demo_tution_db.`guest_registration`
                                               select * from guest_registration_temp where mail = '$username' ");
                                           $query2 = mysql_query("delete * from guest_registration_temp where mail = '$username'");
                                           
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
<!DOCTYPE html>
<!--[if lt IE 7]> <html dir="ltr" lang="en-US" class="ie6"> <![endif]-->
<!--[if IE 7]>    <html dir="ltr" lang="en-US" class="ie7"> <![endif]-->
<!--[if IE 8]>    <html dir="ltr" lang="en-US" class="ie8"> <![endif]-->
<!--[if gt IE 8]><!--> <html dir="ltr" lang="en-US"> <!--<![endif]-->

<!-- BEGIN head -->
<head>

	<!--Meta Tags-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
		
	<!-- Title -->
	<title>Krish Bungalow - A Luxury Bungalow</title>
        
<?php include 'header.php'; ?>
	<!-- Stylesheets -->
	
</head>

<!-- BEGIN body -->
<body class="loading">
	
	<!-- BEGIN DEMO ONLY -->

	<!-- END DEMO ONLY -->
	
	<!-- BEGIN #background-wrapper -->
	<div id="background-wrapper">
	
	<!-- BEGIN #wrapper -->
	<div id="wrapper">
		
		<!-- BEGIN #header-gmap -->
		<div id="header-gmap">
			
			<div id="map-canvas"></div>
			
		<!-- END #header-gmap -->
		</div>
		
		<!-- BEGIN #topbar -->
		<div id="topbar">
			
			<!-- #topbar-wrapper -->
			<div id="topbar-wrapper" class="clearfix">
				
				<!-- BEGIN .topbar-left -->
				<div class="topbar-left">
					
					<a href="#" class="gmap-button"></a>
					
				<!-- END .topbar-left -->
				</div>
				
				<!-- BEGIN .topbar-right -->
				<div class="topbar-right clearfix">
					
					<a href="booking1.html" class="button0">Book Now</a>
					
					<ul id="language-selection">
						<li><a href="#">English</a>
							<ul class="submenu">
								<li><a href="#">French</a></li>
								<li><a href="#">German</a></li>
								<li><a href="#">Italian</a></li>
							</ul>
						</li>
					</ul>
					
					<ul class="header-contact">
						<li class="phone_icon">+44 0123 4567</li>
						<li class="email_icon">email@website.com</li>
					</ul>
					
				<!-- END .topbar-right -->
				</div>
			
			<!-- END #topbar-right -->
			</div>
			
		<!-- END #topbar -->
		</div>
		
		<div role="banner">
		
			<!-- BEGIN .content-wrapper -->
			<?php include 'menue.php'; ?>
		</div>

		<div id="page-header" style="background:url(images/demo_image_08.jpg) no-repeat top center;">
			<h2>Reservation: Please Login For reservations</h2>
		</div>
<div class="content-wrapper clearfix">
			
			<!-- BEGIN .clearfix -->
			<div class="clearfix">
                        
                                 <div class="one-half clearfix">
				
				<div class="booking-main clearfix">
					
					<h4 class="title-style4">Please Login<span class="title-block"></span></h4>
                                        
                                <form class="booking-form" name="bookroom" action="" method="post" />
						
					
							
							<label for="last_name">User Name</label>
							<input type="email" name="uname" id="last_name" placeholder="a@b.com"/>
                                                          <label for="first_name"><?php echo $ernm  ?></label>
                                                        
                                                        <label for="first_name">Password</label>
							<input type="password" name="pw" id="first_name" placeholder="Password"/>
                                                        
						<label for="first_name"><?php echo $erpw  ?> </label>
						<input class="bookbutton" name="log" type="submit" value="Login" /> 
                                                    <label for="first_name"><?php echo $er1  ?></label>
                                                <a href="signin.php">
                                                    New Guest
                                                </a>
							
						

					</form>
						</div>
								</div>
							<!-- BEGIN .room-3 -->
							</div>
                        <hr class="space8" />
				</div>
				
			</div>
        <div class="one-fourth clearfix">
            <div></div>
        </div>
                            
                        </div>
        </div>
        <!-- End form-->
		
        
		
		<!-- BEGIN #footer -->
		<div id="footer">
			
			<!-- BEGIN .content-wrapper -->
			<div class="content-wrapper clearfix">
				
				<!-- BEGIN .one-fourth -->
				<div class="one-fourth">
					<h4 class="title-style2">Flickr Stream<span class="title-block"></span></h4>
					<div class="flickr_badge_wrapper clearfix">
						<script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=6&amp;flickr_display=latest&amp;size=s&amp;layout=x&amp;source=user&amp;user=65744139@N04"></script>
					</div>
				<!-- END .one-fourth -->
				</div>
				
				<!-- BEGIN .one-fourth -->
				<div class="one-fourth">
					<h4 class="title-style2">Latest Tweets<span class="title-block"></span></h4>
					<ul class="twitter-feed">
						<li><a href="#">@Proin</a> imperdiet adipiscing elit ac fermentum nullam et<span>about 6 hours ago</span></li>
						<li><a href="#">@Proin</a> imperdiet adipiscing elit ac fermentum nullam et<span>about 6 hours ago</span></li>
					</ul>
				<!-- END .one-fourth -->
				</div>
				
				<!-- BEGIN .one-fourth -->
				<div class="one-fourth">
					<h4 class="title-style2">Newsletter<span class="title-block"></span></h4>
					<p>Quisque bibendum erat feugiat rhoncus tincidunt ipsum.</p>
					<form action="#" method="post" />
						<input class="nsu-field" type="text" name="newsletter_email" value="" />
						<input type="submit" class="button1" name="submit" value="Subscribe" />
					</form>
				<!-- END .one-fourth -->
				</div>
				
				<!-- BEGIN .one-fourth -->
				<div class="one-fourth last-col">
					<h4 class="title-style2">Social Media<span class="title-block"></span></h4>	
					<ul class="social-icons clearfix">
						<li><a target="_blank" href="#"><span class="facebook-icon"></span></a></li>
						<li><a target="_blank" href="#"><span class="twitter-icon"></span></a></li>
						<li><a target="_blank" href="#"><span class="pinterest-icon"></span></a></li>
						<li><a target="_blank" href="#"><span class="gplus-icon"></span></a></li>
						<li><a target="_blank" href="#"><span class="linkedin-icon"></span></a></li>
					</ul>
				<!-- END .one-fourth -->
				</div>
				
				<div class="clearboth"></div>
				
				<!-- BEGIN #footer-bottom -->
				<div id="footer-bottom" class="clearfix">
					
					<p class="fl">&copy; 2013 Soho Hotel. All Rights Reserved</p>
					
					<nav class="secondary-navigation">
						<ul class="fr">
							<li><a href="accommodation.html">Accommodation</a><span>/</span></li>
							<li><a href="booking1.html">Book Now</a><span>/</span></li>
							<li><a href="contact.html">Directions &amp; Map</a><span>/</span></li>
						</ul>
					</nav>
					
				<!-- END #footer-bottom -->
				</div>
				
			<!-- END .content-wrapper -->
			</div>
		
		<!-- END #footer -->
		</div>
		
	<!-- END #wrapper -->
	</div>
	
	<!-- END #background-wrapper -->
	</div>
	
	<!-- JavaScript -->
	<script type="text/javascript" src="js/jquery-1.9.1.js"></script>
	<script type='text/javascript' src='js/jquery-ui.js'></script>
	<script type="text/javascript" src="js/superfish.js"></script>
	<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
	<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
	<script type="text/javascript" src="js/gmap.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
	
<!-- END body -->
</body>
</html>