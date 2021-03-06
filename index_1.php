<?php
include 'connection.php';


?>

<!DOCTYPE html>
<!--[if lt IE 7]> <html dir="ltr" lang="en-US" class="ie6"> <![endif]-->
<!--[if IE 7]>    <html dir="ltr" lang="en-US" class="ie7"> <![endif]-->
<!--[if IE 8]>    <html dir="ltr" lang="en-US" class="ie8"> <![endif]-->
<!--[if gt IE 8]><!--> <html dir="ltr" lang="en-US"> <!--<![endif]-->

<!-- BEGIN head -->
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
		
	<!-- Title -->
	<title>Krish Bungalow - A Luxury Bungalow</title>
        
<?php include 'header.php'; ?>
</head>

<!-- BEGIN body -->
<body class="loading">
	
	<!-- BEGIN DEMO ONLY -->
<!--	<div id="style_picker">

		<h3 class="picker_title">Pick a Colour</h3>

		<ul class="style_list">
			<li><a href="style.php?c=goldblack">Gold &amp; Black</a></li>
			<li><a href="style.php?c=creamgreen">Cream &amp; Green</a></li>
			<li><a href="style.php?c=creamred">Cream &amp; Red</a></li>
			<li><a href="style.php?c=blueblack">Blue &amp; Black</a></li>
		</ul>

		<div class="style_picker_toggle_wrapper">
			<a href="#" class="style_picker_toggle"></a>
		</div>
		
	</div>-->
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

		<div id="slider">
			
			<!-- BEGIN .slider -->
			<div class="slider">
				<ul class="slides">
					
					<li>
						<img src="images/demo_image_05.jpg" alt="" />
						<div class="slider-caption-wrapper">
							<div class="slider-caption">
								<p class="colour-caption medium-caption">100% Responsive &amp; Mobile Ready</p>
								<div class="clearboth"></div>
								<p class="dark-caption large-caption">Room Availability Checker and Booking</p>
							</div>
						</div>
					</li>
					
					<li>
						<img src="images/demo_image_03.jpg" alt="" />
						<div class="slider-caption-wrapper">
							<div class="slider-caption">
								<p class="colour-caption medium-caption">5 Fantastic Home Pages to Choose From</p>
								<div class="clearboth"></div>
								<p class="dark-caption large-caption">Customer Testimonials &amp; Event Management</p>
							</div>
						</div>
					</li>
					
					<li>
						<img src="images/demo_image_04.jpg" alt="" />
						<div class="slider-caption-wrapper">
							<div class="slider-caption">
								<p class="colour-caption medium-caption">Fully Customizable Colour Scheme</p>
								<div class="clearboth"></div>
								<p class="dark-caption large-caption">4 Pre Configured Colour Schemes Available</p>
							</div>
						</div>
					</li>
					
				</ul>
			<!-- END .slider -->
			</div>
			
			<!-- BEGIN .home-reservation-box -->
			<div class="home-reservation-box clearfix">
				
				<form class="booking-form" name="bookroom" action="" method="post" />
						
					<input type="text" id="datefrom" name="book_date_from" value="Check In" class="datepicker" />
					<input type="text" id="dateto" name="book_date_to" value="Check Out" class="datepicker" />
						
					<div class="select-wrapper">
						<select id="adults" name="book_room_adults">
							<option value="none" />Adults
							<option value="0" />0
							<option value="1" />1
							<option value="2" />2
							<option value="3" />3
							<option value="4" />4
							<option value="5" />5
						</select>
					</div>
					
					<div class="select-wrapper">
						<select id="children" name="book_room_children">
							<option value="none" />Children
							<option value="0" />0
							<option value="1" />1
							<option value="2" />2
							<option value="3" />3
							<option value="4" />4
							<option value="5" />5
						</select>
					</div>
					
                                            <input class="bookbutton" name="check" type="submit" value="Check Availability" />
                                        
					

				</form>
				
			<!-- END .home-reservation-box -->
			</div>
			
		</div>

                <?php
                                                                       if (isset($_POST['check'])) {
                                                                           $datefrom = $_POST['book_date_from'];
                                                                           $dateto = $_POST['book_date_to'];
                                                                           
                                                                           if ($datefrom=="") {
                                                                               $fromer = "Please select the Starting Date";
                                                                           }elseif ($dateto=="") {
                                                                                    $toer = "Please select the Ending Date";
                                                                                }  else {
                                        
                                            $begin = new DateTime( '2012-08-01' );
                                            $end = new DateTime( '2012-08-15' );
                                            $end = $end->modify( '+1 day' ); 

                                            $interval = new DateInterval('P1D');
                                            $daterange = new DatePeriod($begin, $interval ,$end);

                                            foreach($daterange as $date){
                                               // echo $date->format("Y-m-d") . "<br>";
                                               $sepdate =$date->format("Y-m-d");


                                                $result1 = mysql_query("select SUM(`room1`= '') + SUM(`room2`= '') + SUM(`room3` = '') + SUM(`room4` = '') + SUM(`room5` = '') as total,
                                                    sum(`banglow` = '') as bang FROM resereved where date = '$sepdate'");
                                                 $row1 = mysql_fetch_array($result1);

                                                 if (($row1['total']==NULL)&& ($row1['bang']==NULL)) {
                                                    echo $sepdate."- 5 rooms OR Bungalow is Available"."<br>";

                                                 }elseif (($row1['bang']==0) && ($row1['total']=5)) {
                                                     echo $sepdate."Bungalow is Reserved"."<br>";
                                                }  else {
                                                  echo $sepdate."-".$row1['total']."rooms Available"."<br>";    
                                                }


                                            }?>
                <meta http-equiv="refresh" content="0;URL=#prettyPhoto[inline]/0/" rel="prettyPhoto[inline]"/>     
                                              <?php
                                                                               }
                                                                           
                                                                       }
                                                                            
                                                                                ?>
                                                                                            
                           



                
                
                
                
                
                
                
                
                
                
                
                
                                                                 <div class="room-price">
									<!-- BEGIN #price_break_hotel_room_1 -->
									<div id="price_break_hotel_room_1" class="hide">
                                                                          
                                                                            
										
										<div class="lightbox-title"><h4 class="title-style4">Price Breakdown<span class="title-block"></span></h4></div>
										<div class="page-content">
										<table>
											<tbody>
                                                                                             
												<tr>
													<td data-title="Column 1"><?php  echo "inside";  ?></td>
													<td data-title="Column 1">$270</td>
												</tr>
												<tr>
													<td data-title="Column 2">Tuesday, 2nd July, 2013</td>
													<td data-title="Column 2">$270</td>
												</tr>
												<tr>
													<td data-title="Column 3">Wednesday, 3rd July, 2013</td>
													<td data-title="Column 3">$270</td>
												</tr>
												<tr>
													<td data-title="Column 4">Thursday, 4th July, 2013</td>
													<td data-title="Column 4">$270</td>
												</tr>
												<tr>
													<td data-title="Column 5">Friday, 5th July, 2013</td>
													<td data-title="Column 5">$350</td>
												</tr>
											</tbody>
										</table>
                                                                                    <form method="post" action="reservation.php">
                                                                                        <input class="bookbutton" name="Book" type="submit" value="Book" /> 
                                                                                    </form>
										</div>
									
									<!-- END #price_break_hotel_room_1 -->
									</div>
									
								</div>
        <!-- begin show hide-->
      
			
			<!-- BEGIN .clearfix -->
	
        <!-- End show hide-->
        
        
        
        
		<!-- BEGIN .content-wrapper -->
		<div class="content-wrapper clearfix">
			
			<!-- BEGIN .clearfix -->
			<div class="clearfix">
				
				<!-- BEGIN .one-third -->
				<div class="one-third clearfix">
					<h3 class="title-style1">Soho Hotel<span class="title-block"></span></h3>
					<img src="images/demo_image_01.jpg" alt="" class="image-style1 respond-img" />
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac tortor at tellus feugiat congue quis ut nunc.</p>
					<p><a href="#" class="button1">Read More</a></p>
				<!-- END .one-third -->	
				</div>
				
				<!-- BEGIN .one-third -->
				<div class="one-third clearfix">
					<h3 class="title-style1">Hotel Overview<span class="title-block"></span></h3>
					<ul class="list-style1">
						<li>99 luxury guest rooms</li>
						<li>Michelin star restaurant</li>
						<li>Rooftop cocktail bar</li>
						<li>Infinity pool</li>
						<li>24 hour front desk staff</li>
						<li>Free airport pick up/drop off service</li>
					</ul>
					<p><a href="#" class="button1">Read More</a></p>
				<!-- END .one-third -->	
				</div>
				
				<!-- BEGIN .one-third -->
				<div class="one-third last-col clearfix">
					<h3 class="title-style1">Location<span class="title-block"></span></h3>
					
					<div id="google-map" style="height: 175px;"></div>

					<script type="text/javascript">

						var latlng = new google.maps.LatLng(51.523728,-0.079336);
						var myOptions = {
							zoom: 14,
							center: latlng,
							scrollwheel: true,
							scaleControl: false,
							disableDefaultUI: false,
							mapTypeId: google.maps.MapTypeId.ROADMAP
						};

						mapContent = new google.maps.Map(document.getElementById("google-map"),myOptions);
						var contentStringContent = '<div class="gmap-content"><h2>Soho Hotel</h2><p>1 Main Road, London, UK</p></div>';
						var infowindowContent = new google.maps.InfoWindow({
							content: contentStringContent
						});

						var markerContent = new google.maps.Marker({
							position: latlng, 
							map: mapContent
						});

						google.maps.event.addListener(markerContent, 'click', function() {
							infowindowContent.open(mapContent,markerContent);
						});
	
					</script>

					<p><a href="#" class="button1">Directions</a></p>
					
				<!-- END .one-third -->	
				</div>
				
			<!-- END .clearfix -->
			</div>
			
			<hr class="space1" />

			<h3 class="title-style1">Testimonials<span class="title-block"></span></h3>

			<div class="text-slider-wrapper">

				<!-- BEGIN .slider -->
				<div class="text-slider">
					<ul class="slides">

						<li>
							
							<!-- BEGIN .clearfix -->
							<div class="clearfix">		
				
								<!-- BEGIN .one-half -->
								<div class="one-half testimonial-one-half">
					
									<div class="testimonial-wrapper clearfix">
										<div class="testimonial-image">
											<img src="images/user.png" alt="" />
										</div>
										<p class="testimonial-text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse feugiat neque vitae quam consectetur mattis"</p>
										<div class="testimonial-speech"></div>
									</div>
									<p class="testimonial-author"><span>John Smith -</span> Double Ensuite Room</p>
					
								<!-- END .one-half -->	
								</div>
				
								<!-- BEGIN .one-half -->
								<div class="one-half last-col testimonial-one-half">
					
									<div class="testimonial-wrapper clearfix">
										<div class="testimonial-image">
											<img src="images/user.png" alt="" />
										</div>
										<p class="testimonial-text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse feugiat neque vitae quam consectetur mattis"</p>
										<div class="testimonial-speech"></div>
									</div>
									<p class="testimonial-author"><span>Jack Daniels -</span> Double Ensuite Room</p>
					
								<!-- END .one-half -->	
								</div>

							<!-- END .clearfix -->
							</div>
			
						</li>
						
						<li>
							
							<!-- BEGIN .clearfix -->
							<div class="clearfix">		
				
								<!-- BEGIN .one-half -->
								<div class="one-half testimonial-one-half">
					
									<div class="testimonial-wrapper clearfix">
										<div class="testimonial-image">
											<img src="images/user.png" alt="" />
										</div>
										<p class="testimonial-text">"Nulla pellentesque orci enim. Etiam a urna condimentum, euismod mauris luctus, accumsan turpis. Vestibulum pharetra"</p>
										<div class="testimonial-speech"></div>
									</div>
									<p class="testimonial-author"><span>Johnnie Walker -</span> Double Ensuite Room</p>
					
								<!-- END .one-half -->	
								</div>
				
								<!-- BEGIN .one-half -->
								<div class="one-half last-col testimonial-one-half">
					
									<div class="testimonial-wrapper clearfix">
										<div class="testimonial-image">
											<img src="images/user.png" alt="" />
										</div>
										<p class="testimonial-text">"Nulla pellentesque orci enim. Etiam a urna condimentum, euismod mauris luctus, accumsan turpis. Vestibulum pharetra"</p>
										<div class="testimonial-speech"></div>
									</div>
									<p class="testimonial-author"><span>John Smith -</span> Double Ensuite Room</p>
					
								<!-- END .one-half -->	
								</div>

							<!-- END .clearfix -->
							</div>
			
						</li>
			
					</ul>
					
				<!-- END .text-slider -->
				</div>
				
			<!-- END .text-slider -->
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