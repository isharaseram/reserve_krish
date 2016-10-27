<?php
include 'connection.php';
include 'signcode.php';

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
			<h2>Registration : Please Fill out below Details</h2>
		</div>
<div class="content-wrapper clearfix">
			
			<!-- BEGIN .clearfix -->
			<div class="clearfix">
                        
                                 <div class="one-half clearfix">
				
				<div class="booking-main clearfix">
					
					<h4 class="title-style4">Registration Form<span class="title-block"></span></h4>
                                        
                                <form class="booking-form" name="bookroom" action="" method="post" />
                                
						<label for="book_room">Title</label>
						<div class="select-wrapper">
							<select name="title" id="book_room">
								<option value="Mr" />Mr.
								<option value="Mrs" />Mrs
								<option value="Miss" />Miss
								<option value="Rev" />Rev
							</select>
						</div>
					
							<label for="first_name"></label>
						<div class="input-left">
                                                    
                                                    
							<label for="first_name">First Name</label>
							<input type="text" name="fname" id="first_name" value="<?php echo $fname  ?>"/>
                                                         <label for="first_name"><?php echo $nameer  ?></label>
							
							<label for="last_name">Last Name</label>
							<input type="text" name="lname" id="last_name" value="<?php echo $lname  ?>"/>
                                                         <label for="first_name"><?php echo $nameer  ?></label>
							
							<label for="email_address">Email Address</label>
							<input type="text" name="email" id="email_address" value="<?php echo $mail  ?>" />
                                                         <label for="first_name"><?php echo $mailer  ?></label>
							
							<label for="phone_number">Telephone Number</label>
							<input type="text" name="phone" id="phone_number" value="<?php echo $phone  ?>"/>
                                                         <label for="first_name"><?php echo $tper  ?></label>
							
							<label for="address_line1">Address</label>
							<input type="text" name="address" id="address_line1" value="<?php echo $address  ?>"/>
                                                        <label for="first_name"><?php echo $adder  ?></label>
							
						</div>
						
						<div class="input-right">
							
							<label for="address_line2">City</label>
							<input type="text" name="city" id="address_line2" value="<?php echo $city  ?>"/>
                                                        <label for="first_name"><?php echo $cityer  ?></label>
                                                        
                                                        <label for="country">Country</label>
							<input type="text" name="country" id="country" value="<?php echo $country  ?>" />
                                                        <label for="first_name"><?php echo $cner  ?></label>
							
							<label for="first_name">Password</label>
							<input type="password" name="pw" id="first_name" placeholder="Password" value="<?php echo $pw  ?>"/>
                                                        <label for="first_name"><?php echo $pwer  ?></label>
							
                                                        <label for="first_name">Re enter Password</label>
							<input type="password" name="repw" id="first_name" placeholder="Password"/>
                                                        <label for="first_name"><?php echo $repwer  ?></label>
						</div>
                                                
                                                    
							
						<input class="bookbutton" name="submit" type="submit" value="Submit" /> 
                                                    <label for="first_name"><?php echo $er1  ?></label>

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