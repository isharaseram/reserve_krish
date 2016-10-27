<?php
session_start();
include 'connection.php';

$uname = $_SESSION['username'];
$from = $_SESSION['from'];
  $to = $_SESSION['to'];




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
		
			<?php include 'menue.php'; ?>
		</div>

		<div id="page-header" style="background:url(images/demo_image_08.jpg) no-repeat top center;">
			<h2>Reservation: Choose Your Date</h2>
		</div>

		<!-- BEGIN .content-wrapper -->
		<div class="content-wrapper clearfix">
			
			<!-- BEGIN .booking-step-wrapper -->
			<div class="booking-step-wrapper clearfix">
			
				<div class="step-wrapper clearfix">
					<div class="step-icon-wrapper">
						<div class="step-icon step-icon-current">1.</div>
					</div>
					<div class="step-title">Choose Your Date</div>
				</div>
			
				<div class="step-wrapper clearfix">
					<div class="step-icon-wrapper">
						<div class="step-icon">2.</div>
					</div>
					<div class="step-title">Choose Your Room</div>
				</div>
			
				<div class="step-wrapper clearfix">
					<div class="step-icon-wrapper">
						<div class="step-icon">3.</div>
					</div>
					<div class="step-title">Place Your Reservation</div>
				</div>
			
				<div class="step-wrapper last-col clearfix">
					<div class="step-icon-wrapper">
						<div class="step-icon">4.</div>
					</div>
					<div class="step-title">Confirmation</div>
				</div>
			
				<div class="step-line"></div>
			
			<!-- END .booking-step-wrapper -->
			</div>
			
			<div class="booking-main-wrapper">
				
				<div class="booking-main">
					<h4 class="title-style4">Your Reservation<span class="title-block"></span></h4>
					<ul>
						
						
					
					
                                        <?php  
                                                                        $datefrom = $from;
                                                                           $dateto = $to;
                                                                           
                                                                           if ($datefrom=="") {
                                                                               $fromer = "Please select the Starting Date";
                                                                           }elseif ($dateto=="") {
                                                                                    $toer = "Please select the Ending Date";
                                                                                }  else {
                                                                                    
                                                                                   $_SESSION['from'] = $datefrom;
                                                                                   $_SESSION['to'] = $dateto;
                                        
                                            $begin = new DateTime( $datefrom );
                                            $end = new DateTime( $dateto );
                                            $end = $end->modify( '+1 day' ); 

                                            $interval = new DateInterval('P1D');
                                            $daterange = new DatePeriod($begin, $interval ,$end);

                                            foreach($daterange as $date){
                                               // echo $date->format("Y-m-d") . "<br>";
                                               $sepdate =$date->format("Y-m-d");


                                                $result2 = mysql_query("select SUM(`room1`= '') + SUM(`room2`= '') + SUM(`room3` = '') + SUM(`room4` = '') + SUM(`room5` = '') as total,
                                                    sum(`banglow` = '') as bang FROM demo_tution_db.resereved where date = '$sepdate'");
                                              
                                                  
                                                
                                                
                                                while ($row1 = mysql_fetch_array($result2)) {
                                                    
                                                }

                                                 

                                                 if (($row1['total']==NULL)&& ($row1['bang']==NULL)) {
                                                     ?>
                                             <li><span><?php  echo $sepdate; ?></span> <?php  echo "5 rooms OR Bungalow is Available"; ?></li>
                                            <li> <p></p></li>
                                            
					    
                                                     <?php
                                                     
//                                                     echo $sepdate."- 5 rooms OR Bungalow is Available"."<br>";

                                                 }elseif (($row1['bang']==0) && ($row1['total']=5)) {
                                                      ?>
                                               <li><span><?php  echo $sepdate; ?></span> <?php  echo "Bungalow is Reserved"; ?></li>
                                               <li> <p></p></li>
                                                     <?php
                                                     
                                                    //echo $sepdate."Bungalow is Reserved"."<br>";
                                                }  else {
                                                    ?>
                                                <li><span><?php  echo $sepdate; ?></span><?php  echo $row1['total']."rooms Available"; ?></li>
                                                <li> <p></p></li>
                                                     <?php
                                                //echo $sepdate."-".$row1['total']."rooms Available"."<br>";    
                                                }
                                            }
                                                                                }
                                        
                                        
                                        ?>
                                        
                                        
					</ul>
				</div>
				
			</div>
			
			<div class="booking-side-wrapper">
				
				<div class="booking-side">
				
					<h4 class="title-style4">Your Reservation<span class="title-block"></span></h4>
					
					<form class="booking-form" name="bookroom" action="booking2.html" method="post" />
						
						<div class="clearfix">
							
							<div class="one-half-form">
                                                            
                                                           
						
					
                                                            
								<label for="open_date_from">Check In</label>
								<input name="open_date_from" type="text" id="open_date_from" size="10" class="datepicker" 
                                                                       value="<?php echo $from  ?>" />
							</div>
						
							<div class="one-half-form last-col">
								<label for="open_date_to">Check Out</label>
								<input name="open_date_to" type="text" id="open_date_to" size="10" class="datepicker" 
                                                                       value="<?php echo $to  ?>"/>
							</div>
						
						</div>
						
						<hr class="space8" />
						
						<label for="book_room">Rooms</label>
						<div class="select-wrapper">
							<select name="book_room" id="book_room">
								<option value="1" />1
								<option value="2" />2
								<option value="3" />3
								<option value="4" />4
								<option value="5" />5
							</select>
						</div>
						
						<!-- BEGIN .rooms-wrapper -->
						<div class="rooms-wrapper">
						
							<!-- BEGIN .room-0 -->
							<div class="room-0 clearfix">
								<hr class="space8" />
								<div class="one-third-form">
									<label for="book_room_adults">Adults</label>
									<div class="select-wrapper">
										<select name="book_room_adults" id="book_room_adults">
											<option value="0" />0
											<option value="1" />1
											<option value="2" />2
											<option value="3" />3
											<option value="4" />4
											<option value="5" />5
										</select>
									</div>
								</div>
								<div class="one-third-form last-col">
									<label for="book_room_children">Children</label>
									<div class="select-wrapper">
										<select name="book_room_children" id="book_room_children">
											<option value="0" />0
											<option value="1" />1
											<option value="2" />2
											<option value="3" />3
											<option value="4" />4
											<option value="5" />5
										</select>
									</div>
								</div>
							<!-- BEGIN .room-0 -->
							</div>

							<!-- BEGIN .room-1 -->
							<div class="room-1 clearfix">
								<hr class="space8" />
								<p class="label">Room 1</p>
								<div class="one-third-form">
									<label for="book_room_adults_1">Adults</label>
									<div class="select-wrapper">
										<select name="book_room_adults_1" id="book_room_adults_1">
											<option value="0" />0
											<option value="1" />1
											<option value="2" />2
											<option value="3" />3
											<option value="4" />4
											<option value="5" />5
										</select>
									</div>
								</div>
								<div class="one-third-form last-col">
									<label for="book_room_children_1">Children</label>
									<div class="select-wrapper">
										<select name="book_room_children_1" id="book_room_children_1">
											<option value="0" />0
											<option value="1" />1
											<option value="2" />2
											<option value="3" />3
											<option value="4" />4
											<option value="5" />5
										</select>
									</div>
								</div>
							<!-- BEGIN .room-1 -->
							</div>

							<!-- BEGIN .room-2 -->
							<div class="room-2 clearfix">
								<hr class="space8" />
								<p class="label">Room 2</p>
								<div class="one-third-form">
									<label for="book_room_adults_2">Adults</label>
									<div class="select-wrapper">
										<select name="book_room_adults_2" id="book_room_adults_2">
											<option value="0" />0
											<option value="1" />1
											<option value="2" />2
											<option value="3" />3
											<option value="4" />4
											<option value="5" />5
										</select>
									</div>
								</div>
								<div class="one-third-form last-col">
									<label for="book_room_children_2">Children</label>
									<div class="select-wrapper">
										<select name="book_room_children_2" id="book_room_children_2">
											<option value="0" />0
											<option value="1" />1
											<option value="2" />2
											<option value="3" />3
											<option value="4" />4
											<option value="5" />5
										</select>
									</div>
								</div>
							<!-- BEGIN .room-2 -->
							</div>
							
							<!-- BEGIN .room-3 -->
							<div class="room-3 clearfix">
								<hr class="space8" />
								<p class="label">Room 3</p>
								<div class="one-third-form">
									<label for="book_room_adults_3">Adults</label>
									<div class="select-wrapper">
										<select name="book_room_adults_3" id="book_room_adults_3">
											<option value="0" />0
											<option value="1" />1
											<option value="2" />2
											<option value="3" />3
											<option value="4" />4
											<option value="5" />5
										</select>
									</div>
								</div>
								<div class="one-third-form last-col">
									<label for="book_room_children_3">Children</label>
									<div class="select-wrapper">
										<select name="book_room_children_3" id="book_room_children_3">
											<option value="0" />0
											<option value="1" />1
											<option value="2" />2
											<option value="3" />3
											<option value="4" />4
											<option value="5" />5
										</select>
									</div>
								</div>
							<!-- BEGIN .room-3 -->
							</div>
							
							<!-- BEGIN .room-4 -->
							<div class="room-4 clearfix">
								<hr class="space8" />
								<p class="label">Room 4</p>
								<div class="one-third-form">
									<label for="book_room_adults_4">Adults</label>
									<div class="select-wrapper">
										<select name="book_room_adults_4" id="book_room_adults_4">
											<option value="0" />0
											<option value="1" />1
											<option value="2" />2
											<option value="3" />3
											<option value="4" />4
											<option value="5" />5
										</select>
									</div>
								</div>
								<div class="one-third-form last-col">
									<label for="book_room_children_4">Children</label>
									<div class="select-wrapper">
										<select name="book_room_children_4" id="book_room_children_4">
											<option value="0" />0
											<option value="1" />1
											<option value="2" />2
											<option value="3" />3
											<option value="4" />4
											<option value="5" />5
										</select>
									</div>
								</div>
							<!-- BEGIN .room-4 -->
							</div>
							
							<!-- BEGIN .room-5 -->
							<div class="room-5 clearfix">
								<hr class="space8" />
								<p class="label">Room 5</p>
								<div class="one-third-form">
									<label for="book_room_adults_5">Adults</label>
									<div class="select-wrapper">
										<select name="book_room_adults_5" id="book_room_adults_5">
											<option value="0" />0
											<option value="1" />1
											<option value="2" />2
											<option value="3" />3
											<option value="4" />4
											<option value="5" />5
										</select>
									</div>
								</div>
								<div class="one-third-form last-col">
									<label for="book_room_children_5">Children</label>
									<div class="select-wrapper">
										<select name="book_room_children_5" id="book_room_children_5">
											<option value="0" />0
											<option value="1" />1
											<option value="2" />2
											<option value="3" />3
											<option value="4" />4
											<option value="5" />5
										</select>
									</div>
								</div>
							<!-- BEGIN .room-5 -->
							</div>

						<!-- BEGIN .rooms-wrapper -->
						</div>

						<hr class="space8" />
						
						<input class="bookbutton" type="submit" value="Check Availability" />

					</form>
					
				</div>
				
			</div>
			
		<!-- END .content-wrapper -->
		</div>
		
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