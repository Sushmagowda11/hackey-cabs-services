<?php 
    if(isset($_POST['oneway']))
    {
        $origin = $_POST['fromlocation'];
        $destination = $_POST['tolocation'];
         // In metric unit. This is default
       $distance_data = file_get_contents('https://maps.googleapis.com/maps/api/distancematrix/json?&origins='.urlencode($origin).'&destinations='.urlencode($destination).'&key=AIzaSyC6tWcabsknEh37cqGir5qPk9zdPhJjY5w');
       $distance_arr = json_decode($distance_data);
    if ($distance_arr->status=='OK') {
        $destination_addresses = $distance_arr->destination_addresses[0];
        $origin_addresses = $distance_arr->origin_addresses[0];
    } else {
      echo "<p>The request was Invalid</p>";
      exit();
    }
       if ($origin_addresses=="" or $destination_addresses=="") {
          echo "<p>Destination or origin address not found</p>";
          exit();
       }
       // Get the elements as array
       $elements = $distance_arr->rows[0]->elements;
       $distance = $elements[0]->distance->text;
       $duration = $elements[0]->duration->text;
    //   echo "From: ".$origin_addresses."<br/> To: ".$destination_addresses."<br/> Distance: <strong>".$distance ."</strong><br/>";
    //   echo "Duration: <strong>".$duration."";
        
?>
<!DOCTYPE html>
<html lang="en-US">
  
<head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="description" content="low cost cab rental, car hire in south India, airport car rental, cheap cab for hire, cheap taxi services">
      <meta name="keyword" content="taxi,car,rent,hire,transport">
      <meta name="author" content="Kings Taxi">
      
	  <!-- Title -->
      <title>Taxi and cabs services -Bangalore cabs, South india cabs | Book Out station Cabs at Best Price online at Kings Taxi</title>
      <!-- Favicon -->
      <link rel="icon" type="image/png" sizes="32x32" href="assets/imgs/favicon.jpeg">
      
	  <!--Bootstrap css-->
      <link rel="stylesheet" href="assets/css/bootstrap.css">
      <!--Font Awesome css-->
      <link rel="stylesheet" href="assets/css/font-awesome.min.css">
      <!--Magnific css-->
      <link rel="stylesheet" href="assets/css/magnific-popup.css">
      <!--Owl-Carousel css-->
      <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
      <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
      <!--Animate css-->
      <link rel="stylesheet" href="assets/css/animate.min.css">
      <!--Datepicker css-->
      <link rel="stylesheet" href="assets/css/jquery.datepicker.css">
      <!--Nice Select css-->
      <link rel="stylesheet" href="assets/css/nice-select.css">
      <!-- Lightgallery css -->
      <link rel="stylesheet" href="assets/css/lightgallery.min.css">
      <!--ClockPicker css-->
      <link rel="stylesheet" href="assets/css/jquery-clockpicker.min.css">
      <!--Slicknav css-->
      <link rel="stylesheet" href="assets/css/slicknav.min.css">
      <!--Site Main Style css-->
      <link rel="stylesheet" href="assets/css/style.css">
      <!--Responsive css-->
      <link rel="stylesheet" href="assets/css/responsive.css">
      
	  
   </head>
   <body>
       <style>
			@media only screen and (max-width: 768px) {
			  .hide_mv {
				display:none;
			  }
			}
			.offer-btn-2
			{
    			display: inline-block;
                text-transform: uppercase;
                padding: 7px 15px;
                font-weight: 500;
                color: #fff;
                font-size: 14px;
                width: 100%;
                transition: all 0.4s ease 0s;
                background: transparent;
                border: none;
			}
	   </style>
	   
       
      <!-- Header Top Area Start -->
      <section class="gauto-header-top-area hide_mv">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="header-top-left">
                     <p><a href="tel:9483220300" style="color:white;">Need Help?: <i class="fa fa-phone"></i> Call: 9483220300</a></p>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="header-top-right">
                     <a href="mailto:bookings@kingstaxi.com">
                     <i class="fa fa-envelope"></i>
                     bookings@kingstaxi.com
                     </a>
                    
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Header Top Area End -->
       
       
      <!-- Main Header Area Start -->
      <header class="gauto-main-header-area">
         <div class="container">
            <div class="row">
               <div class="col-md-3">
                  <div class="site-logo">
                     <a href="index.php">
                     <img src="assets/imgs/logo.png" alt="gauto"  style="width: 130px;"/>
                     </a>
                  </div>
               </div>
               <div class="col-lg-6 col-sm-9">
                  <div class="header-promo">
                     <div class="single-header-promo">
                        <div class="header-promo-icon">
                           <img src="assets/img/globe.png" alt="globe" />
                        </div>
                        <div class="header-promo-info">
                           <h3>Book out station cabs </h3>
                           <p>All Over South india cabs</p>
                        </div>
                     </div>
                     <div class="single-header-promo">
                        <div class="header-promo-icon">
                           <img src="assets/img/clock.png" alt="clock" />
                        </div>
                        <div class="header-promo-info">
                           <h3>SUPPORT 24/7</h3>
                           <p>We are available</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3">
                  <div class="header-action">
                     <a href="tel:9483220300"><i class="fa fa-phone"></i> Request a call</a>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- Main Header Area End -->
       
       
      <!-- Mainmenu Area Start -->
      <section class="gauto-mainmenu-area">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="mainmenu">
                     <nav>
                        <ul id="gauto_navigation">
                           <li class="active"><a href="index.php">home </a></li>
                           <li><a href="#About_Us">about us</a></li>
                           <li><a href="#Our_Tariff">our tariff</a></li>
                           <li><a href="#what_offers">we offer</a></li>
                           <li><a href="#Customer_reviews">testimonials</a></li>
                           <li><a href="#Contact_us">contact us</a></li>
                        </ul>
                     </nav>
                  </div>
               </div>
              
            </div>
         </div>
      </section>
      <!-- Mainmenu Area End -->
       
       
      <!-- Offers Area Start -->
      <section class="gauto-offers-area section_70" id="Our_Tariff">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-12">
                   <div class="site-heading">
                        <h4>Hello <?php echo $_POST['name']; ?></h4>
                   </div>
                  <div class="site-heading">
                     <h2>Your Oneway Trip Search</h2>
                  </div>
                  <div class="site-heading row">
                     <div class="col-md-6">
                         <h4 class="text-dark">From </h4> <h4><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $_POST['fromlocation']; ?></h4> 
                     </div> 
                     <div class="col-md-6">
                          <h4 class="text-dark">To </h4> <h4><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $_POST['tolocation']; ?></h4>
                     </div> 
                     <div class="col-md-4">
                         <h4 class="text-dark">KM </h4> <h4><i class="fa fa-road" aria-hidden="true"></i> <?php echo $distance // getDistance($_POST['fromlocation'], $_POST['tolocation'], "K"); ?></h4> 
                     </div> 
                     <div class="col-md-4">
                         <h4 class="text-dark">Duration </h4> <h4><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo $duration // getDistance($_POST['fromlocation'], $_POST['tolocation'], "K"); ?></h4> 
                     </div> 
                     <div class="col-md-4">
                          <h4 class="text-dark">Date </h4> <h4><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo $_POST['reservation_date']; ?></h4>
                     </div> 
                     
                     <div class="col-md-12 text-center mt-3">
                          <h4 class="text-dark">Note:-  Airport Taxis are not included in this</h4>
                     </div> 
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="offer-tabs">
                    
                     <div class="tab-content" id="offerTabContent">
                        <!-- All Tab Start -->
                        <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                           <div class="row">
                              <div class="col-lg-3">
                                 <div class="single-offers">
                                    <div class="offer-image">
                                       <a href="#">
                                       <img src="assets/img/car/2.png" alt="offer 1" />
                                       </a>
                                    </div>
                                    <div class="offer-text">
                                       <a href="#">
                                          <h3>Maruti swift dzire</h3>
                                       </a>
                                      <?php $result = str_replace(',', '', $distance); ?>
                                       <h4>Rs  <?php echo round(($result*18)+400); ?> </h4>
                                       <ul>
                                          <li><i class="fa fa-car"></i>Driver charges Rs 400/- per day</li>
                                          <li><i class="fa fa-calendar"></i>Waiting charges depends on driver</li>
                                       </ul>
                                       <div class="offer-action text-center">
                                           <div class="">
											  <form action="success.php" method="post">
												 <div class="row">
													<div class="col-md-4">
													   <p>
													        <input  type="hidden" value="<?php echo $_POST['fromlocation']; ?>" name="fromlocation" required size="50" placeholder="Enter a location"  />  
                                                       </p>
													</div>
													<div class="col-md-4">
													   <p>
														    <input type="hidden" value="<?php echo $_POST['tolocation']; ?>" size="50" name="tolocation" required placeholder="Enter a location" />  
                                                       </p>
													</div>
													<div class="col-md-4">
													   <p>
														  <input type="hidden" placeholder="Name" value="<?php echo date('H:i'); ?>" required name="time" />
													      <input type="hidden" placeholder="Name" value="Maruti swift dzire" required name="cab" />
													      <input type="hidden" placeholder="Name" value="<?php echo $result; ?>" required name="km" />
														  <input type="hidden" placeholder="Name" value="<?php echo $_POST['name']; ?>" required name="name" />
														  <input type="hidden" placeholder="Name" value="<?php echo round(($result*18)+400); ?>" required name="amount" />
														 
													   </p>
													</div>
												 </div>
												 
												  <div class="row">
													<div class="col-md-6">
													   <p>
														  <input type="hidden" placeholder="Email Id" required value="<?php echo $_POST['email']; ?>" name="email" />
													   </p>
													</div>
													<div class="col-md-6">
													   <p>
														  <input type="hidden" placeholder="Contact Number" value="<?php echo $_POST['number']; ?>" name="number" required />
													   </p>
													</div>
												</div>
												
												  <div class="row">
													<div class="col-md-4">
													   <p>
														  <input  name="reservation_date" placeholder="Journey Date" value="<?php echo $_POST['reservation_date']; ?>" type="hidden">
													   </p>
													</div>
													<div class="col-md-4">
													   <p>
														  <input type="hidden" class="form-control" value="<?php echo $_POST['reservation_time']; ?>" placeholder="Journey Time" name="reservation_time" />
													   </p>
													</div>
													
														  <button type="submit" name="oneway" class="offer-btn-2">Book Now</button>
													  
												 </div>
											  </form>
										   </div>
                                          <!--<a href="#Reserve_Now" class="offer-btn-1">Book Now</a>-->
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-3">
                                 <div class="single-offers">
                                    <div class="offer-image">
                                       <a href="#">
                                       <img src="assets/img/car/1.png" alt="offer 1" />
                                       </a>
                                    </div>
                                    <div class="offer-text">
                                       <a href="#">
                                          <h3>Toyota Etios</h3>
                                       </a>
                                       <?php // $result = getDistance($_POST['fromlocation'], $_POST['tolocation'], "K"); ?>
                                       <h4>Rs  <?php echo round(($result*19)+400); ?> </h4>
                                       <ul>
                                          <li><i class="fa fa-car"></i>Driver charges Rs 400/- per day</li>
                                          <li><i class="fa fa-calendar"></i>Waiting charges depends on driver</li>
                                       </ul>
                                       <div class="offer-action text-center">
                                           <div class="">
											  <form action="success.php" method="post">
												 <div class="row">
													<div class="col-md-4">
													   <p>
													        <input  type="hidden" value="<?php echo $_POST['fromlocation']; ?>" name="fromlocation" required size="50" placeholder="Enter a location"  />  
                                                       </p>
													</div>
													<div class="col-md-4">
													   <p>
														    <input type="hidden" value="<?php echo $_POST['tolocation']; ?>" size="50" name="tolocation" required placeholder="Enter a location" />  
                                                       </p>
													</div>
													<div class="col-md-4">
													   <p>
														  <input type="hidden" placeholder="Name" value="<?php echo $_POST['name']; ?>" required name="name" />
														  <input type="hidden" placeholder="Name" value="<?php echo round(($result*19)+400); ?>" required name="amount" />
														  <input type="hidden" placeholder="Name" value="<?php echo date('H:i'); ?>" required name="time" />
													      <input type="hidden" placeholder="Name" value="Toyota Etios" required name="cab" />
													      <input type="hidden" placeholder="Name" value="<?php echo $result //= getDistance($_POST['fromlocation'], $_POST['tolocation'], "K"); ?>" required name="km" />
														  
													   </p>
													</div>
												 </div>
												 
												  <div class="row">
													<div class="col-md-6">
													   <p>
														  <input type="hidden" placeholder="Email Id" required value="<?php echo $_POST['email']; ?>" name="email" />
													   </p>
													</div>
													<div class="col-md-6">
													   <p>
														  <input type="hidden" placeholder="Contact Number" value="<?php echo $_POST['number']; ?>" name="number" required />
													   </p>
													</div>
												</div>
												
												  <div class="row">
													<div class="col-md-4">
													   <p>
														  <input  name="reservation_date" placeholder="Journey Date" value="<?php echo $_POST['reservation_date']; ?>" type="hidden">
													   </p>
													</div>
													<div class="col-md-4">
													   <p>
														  <input type="hidden" class="form-control" value="<?php echo $_POST['reservation_time']; ?>" placeholder="Journey Time" name="reservation_time" />
													   </p>
													</div>
													
														  <button type="submit" name="oneway" class="offer-btn-2">Book Now</button>
													  
												 </div>
											  </form>
										   </div>
                                          <!--<a href="#Reserve_Now" class="offer-btn-1">Book Now</a>-->
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-3">
                                 <div class="single-offers">
                                    <div class="offer-image">
                                       <a href="#">
                                       <img src="assets/img/car/3.png" alt="offer 1" />
                                       </a>
                                    </div>
                                    <div class="offer-text">
                                       <a href="#">
                                          <h3>Toyota Innova</h3>
                                       </a>
                                     
                                       <h4>Rs  <?php echo round(($result*26)+400); ?> </h4>
                                       <ul>
                                          <li><i class="fa fa-car"></i>Driver charges Rs 400/- per day</li>
                                          <li><i class="fa fa-calendar"></i>Waiting charges depends on driver</li>
                                       </ul>
                                       <div class="offer-action text-center">
                                           <div class="">
											  <form action="success.php" method="post">
												 <div class="row">
													<div class="col-md-4">
													   <p>
													        <input  type="hidden" value="<?php echo $_POST['fromlocation']; ?>" name="fromlocation" required size="50" placeholder="Enter a location"  />  
                                                       </p>
													</div>
													<div class="col-md-4">
													   <p>
														    <input type="hidden" value="<?php echo $_POST['tolocation']; ?>" size="50" name="tolocation" required placeholder="Enter a location" />  
                                                       </p>
													</div>
													<div class="col-md-4">
													   <p>
														  <input type="hidden" placeholder="Name" value="<?php echo $_POST['name']; ?>" required name="name" />
														  <input type="hidden" placeholder="Name" value="<?php echo round(($result*26)+400); ?>" required name="amount" />
														  <input type="hidden" placeholder="Name" value="<?php echo date('H:i'); ?>" required name="time" />
													      <input type="hidden" placeholder="Name" value="Toyota Innova" required name="cab" />
													      <input type="hidden" placeholder="Name" value="<?php echo $result; ?>" required name="km" />
														  
													   </p>
													</div>
												 </div>
												 
												  <div class="row">
													<div class="col-md-6">
													   <p>
														  <input type="hidden" placeholder="Email Id" required value="<?php echo $_POST['email']; ?>" name="email" />
													   </p>
													</div>
													<div class="col-md-6">
													   <p>
														  <input type="hidden" placeholder="Contact Number" value="<?php echo $_POST['number']; ?>" name="number" required />
													   </p>
													</div>
												</div>
												
												  <div class="row">
													<div class="col-md-4">
													   <p>
														  <input  name="reservation_date" placeholder="Journey Date" value="<?php echo $_POST['reservation_date']; ?>" type="hidden">
													   </p>
													</div>
													<div class="col-md-4">
													   <p>
														  <input type="hidden" class="form-control" value="<?php echo $_POST['reservation_time']; ?>" placeholder="Journey Time" name="reservation_time" />
													   </p>
													</div>
													
														  <button type="submit" name="oneway" class="offer-btn-2">Book Now</button>
													  
												 </div>
											  </form>
										   </div>
                                          <!--<a href="#Reserve_Now" class="offer-btn-1">Book Now</a>-->
                                       </div>
                                    </div>
                                 </div>
                              </div>
							  <div class="col-lg-3">
                                 <div class="single-offers">
                                    <div class="offer-image">
                                       <a href="#">
                                       <img src="assets/img/car/4.png" alt="offer 1" />
                                       </a>
                                    </div>
                                    <div class="offer-text">
                                       <a href="#">
                                          <h3>SUV Innova crysta</h3>
                                       </a>
                                      <h4>Rs  <?php echo round(($result*28)+400); ?> </h4>
                                       <ul>
                                          <li><i class="fa fa-car"></i>Driver charges Rs 400/- per day</li>
                                          <li><i class="fa fa-calendar"></i>Waiting charges depends on driver</li>
                                       </ul>
                                       <div class="offer-action text-center">
                                           <div class="">
											  <form action="success.php" method="post">
												 <div class="row">
													<div class="col-md-4">
													   <p>
													        <input  type="hidden" value="<?php echo $_POST['fromlocation']; ?>" name="fromlocation" required size="50" placeholder="Enter a location"  />  
                                                       </p>
													</div>
													<div class="col-md-4">
													   <p>
														    <input type="hidden" value="<?php echo $_POST['tolocation']; ?>" size="50" name="tolocation" required placeholder="Enter a location" />  
                                                       </p>
													</div>
													<div class="col-md-4">
													   <p>
														  <input type="hidden" placeholder="Name" value="<?php echo $_POST['name']; ?>" required name="name" />
														  <input type="hidden" placeholder="Name" value="<?php echo round(($result*28)+400); ?>" required name="amount" />
														  <input type="hidden" placeholder="Name" value="<?php echo date('H:i'); ?>" required name="time" />
													      <input type="hidden" placeholder="Name" value="SUV Innova crysta" required name="cab" />
													      <input type="hidden" placeholder="Name" value="<?php echo $result; ?>" required name="km" />
														  
													   </p>
													</div>
												 </div>
												 
												  <div class="row">
													<div class="col-md-6">
													   <p>
														  <input type="hidden" placeholder="Email Id" required value="<?php echo $_POST['email']; ?>" name="email" />
													   </p>
													</div>
													<div class="col-md-6">
													   <p>
														  <input type="hidden" placeholder="Contact Number" value="<?php echo $_POST['number']; ?>" name="number" required />
													   </p>
													</div>
												</div>
												
												  <div class="row">
													<div class="col-md-4">
													   <p>
														  <input  name="reservation_date" placeholder="Journey Date" value="<?php echo $_POST['reservation_date']; ?>" type="hidden">
													   </p>
													</div>
													<div class="col-md-4">
													   <p>
														  <input type="hidden" class="form-control" value="<?php echo $_POST['reservation_time']; ?>" placeholder="Journey Time" name="reservation_time" />
													   </p>
													</div>
													
														  <button type="submit" name="oneway" class="offer-btn-2">Book Now</button>
													  
												 </div>
											  </form>
										   </div>
                                          <!--<a href="#Reserve_Now" class="offer-btn-1">Book Now</a>-->
                                       </div>
                                    </div>
                                 </div>
                              </div>
							  
                           </div>
                          
                        </div>
                        <!-- All Tab End -->
                     </div>
                  </div>
               </div>
            </div>
        
		
			
		</div>
      </section>
      <!-- Offers Area End -->


      <!-- Footer Area Start -->
      <footer class="gauto-footer-area">
         <div class="footer-top-area">
            <div class="container">
               <div class="row">
                  <div class="col-lg-4">
                     <div class="single-footer">
						<h3>Head office</h3>
                        <div class="footer-address">
                          <p>We are here to help you call us at any time.</p>
                           <ul>
                              <li><span style="color:#f6ad24;">Phone:</span> 9483220300 </li>
                              <li><span style="color:#f6ad24;">Email:</span> bookings@kingstaxi.com</li>
                              <li><span style="color:#f6ad24;">Address:</span> No.634, 3 Main, 5 cross, HAL, islampur, Bangalore - 560017</li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="single-footer quick_links">
                        <h3>Quick Links</h3>
                        <ul class="quick-links">
                           <li><a href="index.php">Home</a></li>
                           <li><a href="#About_Us">About us</a></li>
                           <li><a href="#Our_Tariff">our tariff</a></li>
                        </ul>
                        <ul class="quick-links">
                           <li><a href="#what_offers">we offer</a></li>
                           <li><a href="#Customer_reviews">testimonials</a></li>
                           <li><a href="#Contact_us">Contact us</a></li>
                        </ul>
                     </div>
                     
                  </div>
                  <div class="col-lg-4">
                     <div class="single-footer">
                        <h3>Subscribe Now</h3>
						<div class="single-footer newsletter_box">
						<form>
                           <input type="email" placeholder="Email Address" />
                           <button type="submit"><i class="fa fa-paper-plane"></i></button>
                        </form>
                     </div>
				   </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="footer-bottom-area">
            <div class="container">
               <div class="row">
                  <div class="col-md-6">
                     <div class="copyright">
                        <p>Copyright © 2021 all rights are reserved | Designed by <a href="www.kingstaxi.com" style="color:#f6ad24;">Kings Taxi.</a></p>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="footer-social">
                        <ul>
                           <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                           <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                           <li><a href="#"><i class="fa fa-google"></i></a></li>
                           <li><a href="#"><i class="fa fa-skype"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- Footer Area End -->
       
       
      <!--Jquery js-->
      <script src="assets/js/jquery.min.js"></script>
      <!-- Popper JS -->
      <script src="assets/js/popper.min.js"></script>
      <!--Bootstrap js-->
      <script src="assets/js/bootstrap.min.js"></script>
      <!--Owl-Carousel js-->
      <script src="assets/js/owl.carousel.min.js"></script>
      <!--Lightgallery js-->
      <script src="assets/js/lightgallery-all.js"></script>
      <script src="assets/js/custom_lightgallery.js"></script>
      <!--Slicknav js-->
      <script src="assets/js/jquery.slicknav.min.js"></script>
      <!--Magnific js-->
      <script src="assets/js/jquery.magnific-popup.min.js"></script>
      <!--Nice Select js-->
      <script src="assets/js/jquery.nice-select.min.js"></script>
      <!-- Datepicker JS -->
      <script src="assets/js/jquery.datepicker.min.js"></script>
      <!--ClockPicker JS-->
      <script src="assets/js/jquery-clockpicker.min.js"></script>
      <!--Main js-->
      <script src="assets/js/main.js"></script>
	  
	  <script>
			// Select all links with hashes
$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });
		</script>
		
		<div id="content-mobile">
    		<a href="tel:9483220300" class="float">
                <i class="fa fa-phone my-float" style="font-size: 20px;"></i>
            </a>
		</div>
	  <style>
		#content-desktop {display: block;}
		#content-mobile {display: none;}

		@media screen and (max-width: 768px) {

		#content-desktop {display: none;}
		#content-mobile {display: block;}

		}
		
.float {
    position: fixed;
    width: 50px;
    z-index: 9999;
    height: 50px;
    bottom: 19px;
    left: 22px;
    background-color: #28c036;
    color: #FFF;
    border-radius: 50px;
    text-align: center;
    box-shadow: 2px 2px 3px #999;
}
.my-float{
	margin-top: 17px;
}
	</style>
	
	<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "+919483220300", // WhatsApp number
            call_to_action: "Message us", // Call to action
            position: "right", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
   </body>
</html>

<?php } 


    if(isset($_POST['round']))
    {
        $origin = $_POST['fromlocation'];
        $destination = $_POST['tolocation'];
         // In metric unit. This is default
       $distance_data = file_get_contents('https://maps.googleapis.com/maps/api/distancematrix/json?&origins='.urlencode($origin).'&destinations='.urlencode($destination).'&key=AIzaSyC6tWcabsknEh37cqGir5qPk9zdPhJjY5w');
       $distance_arr = json_decode($distance_data);
    if ($distance_arr->status=='OK') {
        $destination_addresses = $distance_arr->destination_addresses[0];
        $origin_addresses = $distance_arr->origin_addresses[0];
    } else {
      echo "<p>The request was Invalid</p>";
      exit();
    }
       if ($origin_addresses=="" or $destination_addresses=="") {
          echo "<p>Destination or origin address not found</p>";
          exit();
       }
       // Get the elements as array
       $elements = $distance_arr->rows[0]->elements;
       $distance = $elements[0]->distance->text;
       $duration = $elements[0]->duration->text;
    //   echo "From: ".$origin_addresses."<br/> To: ".$destination_addresses."<br/> Distance: <strong>".$distance ."</strong><br/>";
    //   echo "Duration: <strong>".$duration."";
      $result = str_replace(',', '', $distance); 
?>
<!DOCTYPE html>
<html lang="en-US">
  
<head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="description" content="low cost cab rental, car hire in south India, airport car rental, cheap cab for hire, cheap taxi services">
      <meta name="keyword" content="taxi,car,rent,hire,transport">
      <meta name="author" content="Kings Taxi">
      
	  <!-- Title -->
      <title>Taxi and cabs services -Bangalore cabs, South india cabs | Book Out station Cabs at Best Price online at Kings Taxi</title>
      <!-- Favicon -->
      <link rel="icon" type="image/png" sizes="32x32" href="assets/imgs/favicon.jpeg">
      
	  <!--Bootstrap css-->
      <link rel="stylesheet" href="assets/css/bootstrap.css">
      <!--Font Awesome css-->
      <link rel="stylesheet" href="assets/css/font-awesome.min.css">
      <!--Magnific css-->
      <link rel="stylesheet" href="assets/css/magnific-popup.css">
      <!--Owl-Carousel css-->
      <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
      <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
      <!--Animate css-->
      <link rel="stylesheet" href="assets/css/animate.min.css">
      <!--Datepicker css-->
      <link rel="stylesheet" href="assets/css/jquery.datepicker.css">
      <!--Nice Select css-->
      <link rel="stylesheet" href="assets/css/nice-select.css">
      <!-- Lightgallery css -->
      <link rel="stylesheet" href="assets/css/lightgallery.min.css">
      <!--ClockPicker css-->
      <link rel="stylesheet" href="assets/css/jquery-clockpicker.min.css">
      <!--Slicknav css-->
      <link rel="stylesheet" href="assets/css/slicknav.min.css">
      <!--Site Main Style css-->
      <link rel="stylesheet" href="assets/css/style.css">
      <!--Responsive css-->
      <link rel="stylesheet" href="assets/css/responsive.css">
      
	  
   </head>
   <body>
       <style>
			@media only screen and (max-width: 768px) {
			  .hide_mv {
				display:none;
			  }
			}
			.offer-btn-2
			{
    			display: inline-block;
                text-transform: uppercase;
                padding: 7px 15px;
                font-weight: 500;
                color: #fff;
                font-size: 14px;
                width: 100%;
                transition: all 0.4s ease 0s;
                background: transparent;
                border: none;
			}
	   </style>
	   
       
      <!-- Header Top Area Start -->
      <section class="gauto-header-top-area hide_mv">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="header-top-left">
                     <p><a href="tel:9483220300" style="color:white;">Need Help?: <i class="fa fa-phone"></i> Call: 9483220300</a></p>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="header-top-right">
                     <a href="mailto:bookings@kingstaxi.com">
                     <i class="fa fa-envelope"></i>
                     bookings@kingstaxi.com
                     </a>
                    
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Header Top Area End -->
       
       
      <!-- Main Header Area Start -->
      <header class="gauto-main-header-area">
         <div class="container">
            <div class="row">
               <div class="col-md-3">
                  <div class="site-logo">
                     <a href="index.php">
                     <img src="assets/imgs/logo.png" alt="gauto"  style="width: 130px;"/>
                     </a>
                  </div>
               </div>
               <div class="col-lg-6 col-sm-9">
                  <div class="header-promo">
                     <div class="single-header-promo">
                        <div class="header-promo-icon">
                           <img src="assets/img/globe.png" alt="globe" />
                        </div>
                        <div class="header-promo-info">
                           <h3>Book out station cabs </h3>
                           <p>All Over South india cabs</p>
                        </div>
                     </div>
                     <div class="single-header-promo">
                        <div class="header-promo-icon">
                           <img src="assets/img/clock.png" alt="clock" />
                        </div>
                        <div class="header-promo-info">
                           <h3>SUPPORT 24/7</h3>
                           <p>We are available</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3">
                  <div class="header-action">
                     <a href="tel:9483220300"><i class="fa fa-phone"></i> Request a call</a>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- Main Header Area End -->
       
       
      <!-- Mainmenu Area Start -->
      <section class="gauto-mainmenu-area">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="mainmenu">
                     <nav>
                        <ul id="gauto_navigation">
                           <li class="active"><a href="index.php">home </a></li>
                           <li><a href="#About_Us">about us</a></li>
                           <li><a href="#Our_Tariff">our tariff</a></li>
                           <li><a href="#what_offers">we offer</a></li>
                           <li><a href="#Customer_reviews">testimonials</a></li>
                           <li><a href="#Contact_us">contact us</a></li>
                        </ul>
                     </nav>
                  </div>
               </div>
              
            </div>
         </div>
      </section>
      <!-- Mainmenu Area End -->
       
       
      <!-- Offers Area Start -->
      <section class="gauto-offers-area section_70" id="Our_Tariff">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-12">
                   <div class="site-heading">
                        <h4>Hello <?php echo $_POST['name']; ?></h4>
                   </div>
                  <div class="site-heading">
                     <h2>Your Round Trip Search</h2>
                  </div>
                  <div class="site-heading row">
                     <div class="col-md-6">
                         <h4 class="text-dark">From </h4> <h4><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $_POST['fromlocation']; ?></h4> 
                     </div> 
                     <div class="col-md-6">
                          <h4 class="text-dark">To </h4> <h4><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $_POST['tolocation']; ?></h4>
                     </div> 
                     <div class="col-md-4">
                         <h4 class="text-dark">KM </h4> <h4><i class="fa fa-road" aria-hidden="true"></i> <?php echo ($result*2); //echo $distance = getDistance($_POST['fromlocation'], $_POST['tolocation'], "K");  ?></h4> 
                     </div> 
                     <div class="col-md-4">
                         <h4 class="text-dark">Duration </h4> <h4><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo $duration // getDistance($_POST['fromlocation'], $_POST['tolocation'], "K"); ?></h4> 
                     </div> 
                     <div class="col-md-4">
                          <h4 class="text-dark">Date </h4> <h4><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo $_POST['reservation_date']; ?></h4>
                     </div> 
                     
                     <div class="col-md-12 text-center mt-3">
                          <h4 class="text-dark">Note:-  Airport Taxis are not included in this</h4>
                     </div> 
                     
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="offer-tabs">
                    
                     <div class="tab-content" id="offerTabContent">
                        <!-- All Tab Start -->
                        <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                           <div class="row">
                              <div class="col-lg-3">
                                 <div class="single-offers">
                                    <div class="offer-image">
                                       <a href="#">
                                       <img src="assets/img/car/2.png" alt="offer 1">
                                       </a>
                                    </div>
                                    <div class="offer-text">
                                       <a href="#">
                                          <h3>Sedan Shift </h3>
                                       </a>
                                       <h4>Rs <?php echo round($result*10*2); ?> </h4>
                                       <ul>
                                          <li><i class="fa fa-car"></i>Driver charges <strong>Rs 400/- per day</strong></li>
                                          <li><i class="fa fa-calendar"></i>Waiting charges depends on driver</li>
                                       </ul>
                                       <div class="offer-action text-center">
                                           <div class="">
											  <form action="success.php" method="post">
												 <div class="row">
													<div class="col-md-4">
													   <p>
													        <input  type="hidden" value="<?php echo $_POST['fromlocation']; ?>" name="fromlocation" required size="50" placeholder="Enter a location"  />  
                                                       </p>
													</div>
													<div class="col-md-4">
													   <p>
														    <input type="hidden" value="<?php echo $_POST['tolocation']; ?>" size="50" name="tolocation" required placeholder="Enter a location" />  
                                                       </p>
													</div>
													<div class="col-md-4">
													   <p>
														  <input type="hidden" placeholder="Name" value="<?php echo $_POST['name']; ?>" required name="name" />
														  <input type="hidden" placeholder="Name" value="<?php echo round($result*10*2); ?>" required name="amount" />
														  <input type="hidden" placeholder="Name" value="<?php echo date('H:i'); ?>" required name="time" />
													      <input type="hidden" placeholder="Name" value="Sedan Shift" required name="cab" />
													      <input type="hidden" placeholder="Name" value="<?php echo $result // = getDistance($_POST['fromlocation'], $_POST['tolocation'], "K"); ?>" required name="km" />
														  
													   </p>
													</div>
												 </div>
												 
												  <div class="row">
													<div class="col-md-6">
													   <p>
														  <input type="hidden" placeholder="Email Id" required value="<?php echo $_POST['email']; ?>" name="email" />
													   </p>
													</div>
													<div class="col-md-6">
													   <p>
														  <input type="hidden" placeholder="Contact Number" value="<?php echo $_POST['number']; ?>" name="number" required />
													   </p>
													</div>
												</div>
												
												  <div class="row">
													<div class="col-md-4">
													   <p>
														  <input  name="reservation_date" placeholder="Journey Date" value="<?php echo $_POST['reservation_date']; ?>" type="hidden">
													   </p>
													</div>
													<div class="col-md-4">
													   <p>
														  <input type="hidden" class="form-control" value="<?php echo $_POST['reservation_time']; ?>" placeholder="Journey Time" name="reservation_time" />
													   </p>
													</div>
													
														  <button type="submit" name="round" class="offer-btn-2">Book Now</button>
													  
												 </div>
											  </form>
										   </div>
                                          <!--<a href="#Reserve_Now" class="offer-btn-1">Book Now</a>-->
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-3">
                                 <div class="single-offers">
                                    <div class="offer-image">
                                       <a href="#">
                                       <img src="assets/img/car/1.png" alt="offer 1">
                                       </a>
                                    </div>
                                    <div class="offer-text">
                                       <a href="#">
                                          <h3>Sedan Etios </h3>
                                       </a>
                                       <h4>Rs <?php echo round($result*11*2); ?> </h4>
                                       <ul>
                                          <li><i class="fa fa-car"></i>Driver charges <strong>Rs 400/- per day</strong></li>
                                          <li><i class="fa fa-calendar"></i>Waiting charges depends on driver</li>
                                       </ul>
                                       <div class="offer-action text-center">
                                           <div class="">
											  <form action="success.php" method="post">
												 <div class="row">
													<div class="col-md-4">
													   <p>
													        <input  type="hidden" value="<?php echo $_POST['fromlocation']; ?>" name="fromlocation" required size="50" placeholder="Enter a location"  />  
                                                       </p>
													</div>
													<div class="col-md-4">
													   <p>
														    <input type="hidden" value="<?php echo $_POST['tolocation']; ?>" size="50" name="tolocation" required placeholder="Enter a location" />  
                                                       </p>
													</div>
													<div class="col-md-4">
													   <p>
														  <input type="hidden" placeholder="Name" value="<?php echo $_POST['name']; ?>" required name="name" />
														  <input type="hidden" placeholder="Name" value="<?php echo round($result*11*2); ?>" required name="amount" />
														  <input type="hidden" placeholder="Name" value="<?php echo date('H:i'); ?>" required name="time" />
													      <input type="hidden" placeholder="Name" value="Sedan Etios" required name="cab" />
													      <input type="hidden" placeholder="Name" value="<?php echo $result //= getDistance($_POST['fromlocation'], $_POST['tolocation'], "K"); ?>" required name="km" />
														  
													   </p>
													</div>
												 </div>
												 
												  <div class="row">
													<div class="col-md-6">
													   <p>
														  <input type="hidden" placeholder="Email Id" required value="<?php echo $_POST['email']; ?>" name="email" />
													   </p>
													</div>
													<div class="col-md-6">
													   <p>
														  <input type="hidden" placeholder="Contact Number" value="<?php echo $_POST['number']; ?>" name="number" required />
													   </p>
													</div>
												</div>
												
												  <div class="row">
													<div class="col-md-4">
													   <p>
														  <input  name="reservation_date" placeholder="Journey Date" value="<?php echo $_POST['reservation_date']; ?>" type="hidden">
													   </p>
													</div>
													<div class="col-md-4">
													   <p>
														  <input type="hidden" class="form-control" value="<?php echo $_POST['reservation_time']; ?>" placeholder="Journey Time" name="reservation_time" />
													   </p>
													</div>
													
														  <button type="submit" name="round" class="offer-btn-2">Book Now</button>
													  
												 </div>
											  </form>
										   </div>
                                          <!--<a href="#Reserve_Now" class="offer-btn-1">Book Now</a>-->
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-3">
                                 <div class="single-offers">
                                    <div class="offer-image">
                                       <a href="#">
                                       <img src="assets/img/car/3.png" alt="offer 1">
                                       </a>
                                    </div>
                                    <div class="offer-text">
                                       <a href="#">
                                          <h3>SUV Innova </h3>
                                       </a>
                                       <h4>Rs <?php echo round($result*14*2); ?> </h4>
                                       <ul>
                                          <li><i class="fa fa-car"></i>Driver charges <strong>Rs 400/- per day</strong></li>
                                          <li><i class="fa fa-calendar"></i>Waiting charges depends on driver</li>
                                       </ul>
                                       <div class="offer-action text-center">
                                           <div class="">
											  <form action="success.php" method="post">
												 <div class="row">
													<div class="col-md-4">
													   <p>
													        <input  type="hidden" value="<?php echo $_POST['fromlocation']; ?>" name="fromlocation" required size="50" placeholder="Enter a location"  />  
                                                       </p>
													</div>
													<div class="col-md-4">
													   <p>
														    <input type="hidden" value="<?php echo $_POST['tolocation']; ?>" size="50" name="tolocation" required placeholder="Enter a location" />  
                                                       </p>
													</div>
													<div class="col-md-4">
													   <p>
														  <input type="hidden" placeholder="Name" value="<?php echo $_POST['name']; ?>" required name="name" />
														  <input type="hidden" placeholder="Name" value="<?php echo round($result*14*2); ?>" required name="amount" />
														  <input type="hidden" placeholder="Name" value="<?php echo date('H:i'); ?>" required name="time" />
													      <input type="hidden" placeholder="Name" value="SUV Innova" required name="cab" />
													      <input type="hidden" placeholder="Name" value="<?php echo $result //= getDistance($_POST['fromlocation'], $_POST['tolocation'], "K"); ?>" required name="km" />
														  
													   </p>
													</div>
												 </div>
												 
												  <div class="row">
													<div class="col-md-6">
													   <p>
														  <input type="hidden" placeholder="Email Id" required value="<?php echo $_POST['email']; ?>" name="email" />
													   </p>
													</div>
													<div class="col-md-6">
													   <p>
														  <input type="hidden" placeholder="Contact Number" value="<?php echo $_POST['number']; ?>" name="number" required />
													   </p>
													</div>
												</div>
												
												  <div class="row">
													<div class="col-md-4">
													   <p>
														  <input  name="reservation_date" placeholder="Journey Date" value="<?php echo $_POST['reservation_date']; ?>" type="hidden">
													   </p>
													</div>
													<div class="col-md-4">
													   <p>
														  <input type="hidden" class="form-control" value="<?php echo $_POST['reservation_time']; ?>" placeholder="Journey Time" name="reservation_time" />
													   </p>
													</div>
													
														  <button type="submit" name="round" class="offer-btn-2">Book Now</button>
													  
												 </div>
											  </form>
										   </div>
                                          <!--<a href="#Reserve_Now" class="offer-btn-1">Book Now</a>-->
                                       </div>
                                    </div>
                                 </div>
                              </div>
							  <div class="col-lg-3">
                                 <div class="single-offers">
                                    <div class="offer-image">
                                       <a href="#">
                                       <img src="assets/img/car/4.png" alt="offer 1">
                                       </a>
                                    </div>
                                    <div class="offer-text">
                                       <a href="#">
                                          <h3>SUV Innova Crista </h3>
                                       </a>
                                       <h4>Rs <?php echo round($result*16*2); ?> </h4>
                                       <ul>
                                          <li><i class="fa fa-car"></i>Driver charges <strong>Rs 400/- per day</strong></li>
                                          <li><i class="fa fa-calendar"></i>Waiting charges depends on driver</li>
                                       </ul>
                                       <div class="offer-action text-center">
                                           <div class="">
											  <form action="success.php" method="post">
												 <div class="row">
													<div class="col-md-4">
													   <p>
													        <input  type="hidden" value="<?php echo $_POST['fromlocation']; ?>" name="fromlocation" required size="50" placeholder="Enter a location"  />  
                                                       </p>
													</div>
													<div class="col-md-4">
													   <p>
														    <input type="hidden" value="<?php echo $_POST['tolocation']; ?>" size="50" name="tolocation" required placeholder="Enter a location" />  
                                                       </p>
													</div>
													<div class="col-md-4">
													   <p>
														  <input type="hidden" placeholder="Name" value="<?php echo $_POST['name']; ?>" required name="name" />
														  <input type="hidden" placeholder="Name" value="<?php echo round($result*16*2); ?>" required name="amount" />
														  <input type="hidden" placeholder="Name" value="<?php echo date('H:i'); ?>" required name="time" />
													      <input type="hidden" placeholder="Name" value="SUV Innova Crista" required name="cab" />
													      <input type="hidden" placeholder="Name" value="<?php echo $result //= getDistance($_POST['fromlocation'], $_POST['tolocation'], "K"); ?>" required name="km" />
														  
													   </p>
													</div>
												 </div>
												 
												  <div class="row">
													<div class="col-md-6">
													   <p>
														  <input type="hidden" placeholder="Email Id" required value="<?php echo $_POST['email']; ?>" name="email" />
													   </p>
													</div>
													<div class="col-md-6">
													   <p>
														  <input type="hidden" placeholder="Contact Number" value="<?php echo $_POST['number']; ?>" name="number" required />
													   </p>
													</div>
												</div>
												
												  <div class="row">
													<div class="col-md-4">
													   <p>
														  <input  name="reservation_date" placeholder="Journey Date" value="<?php echo $_POST['reservation_date']; ?>" type="hidden">
													   </p>
													</div>
													<div class="col-md-4">
													   <p>
														  <input type="hidden" class="form-control" value="<?php echo $_POST['reservation_time']; ?>" placeholder="Journey Time" name="reservation_time" />
													   </p>
													</div>
													
														  <button type="submit" name="round" class="offer-btn-2">Book Now</button>
													  
												 </div>
											  </form>
										   </div>
                                          <!--<a href="#Reserve_Now" class="offer-btn-1">Book Now</a>-->
                                       </div>
                                    </div>
                                 </div>
                              </div>
							  
                           </div>
                          
                        </div>
                        <!-- All Tab End -->
                     </div>
                  </div>
               </div>
            </div>
        
		
			
		</div>
      </section>
      <!-- Offers Area End -->


      <!-- Footer Area Start -->
      <footer class="gauto-footer-area">
         <div class="footer-top-area">
            <div class="container">
               <div class="row">
                  <div class="col-lg-4">
                     <div class="single-footer">
						<h3>Head office</h3>
                        <div class="footer-address">
                          <p>We are here to help you call us at any time.</p>
                           <ul>
                              <li><span style="color:#f6ad24;">Phone:</span> 9483220300 </li>
                              <li><span style="color:#f6ad24;">Email:</span> bookings@kingstaxi.com</li>
                              <li><span style="color:#f6ad24;">Address:</span> No.634, 3 Main, 5 cross, HAL, islampur, Bangalore - 560017</li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="single-footer quick_links">
                        <h3>Quick Links</h3>
                        <ul class="quick-links">
                           <li><a href="index.php">Home</a></li>
                           <li><a href="#About_Us">About us</a></li>
                           <li><a href="#Our_Tariff">our tariff</a></li>
                        </ul>
                        <ul class="quick-links">
                           <li><a href="#what_offers">we offer</a></li>
                           <li><a href="#Customer_reviews">testimonials</a></li>
                           <li><a href="#Contact_us">Contact us</a></li>
                        </ul>
                     </div>
                     
                  </div>
                  <div class="col-lg-4">
                     <div class="single-footer">
                        <h3>Subscribe Now</h3>
						<div class="single-footer newsletter_box">
						<form>
                           <input type="email" placeholder="Email Address" />
                           <button type="submit"><i class="fa fa-paper-plane"></i></button>
                        </form>
                     </div>
				   </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="footer-bottom-area">
            <div class="container">
               <div class="row">
                  <div class="col-md-6">
                     <div class="copyright">
                        <p>Copyright © 2021 all rights are reserved | Designed by <a href="www.kingstaxi.com" style="color:#f6ad24;">Kings Taxi.</a></p>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="footer-social">
                        <ul>
                           <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                           <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                           <li><a href="#"><i class="fa fa-google"></i></a></li>
                           <li><a href="#"><i class="fa fa-skype"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- Footer Area End -->
       
       
      <!--Jquery js-->
      <script src="assets/js/jquery.min.js"></script>
      <!-- Popper JS -->
      <script src="assets/js/popper.min.js"></script>
      <!--Bootstrap js-->
      <script src="assets/js/bootstrap.min.js"></script>
      <!--Owl-Carousel js-->
      <script src="assets/js/owl.carousel.min.js"></script>
      <!--Lightgallery js-->
      <script src="assets/js/lightgallery-all.js"></script>
      <script src="assets/js/custom_lightgallery.js"></script>
      <!--Slicknav js-->
      <script src="assets/js/jquery.slicknav.min.js"></script>
      <!--Magnific js-->
      <script src="assets/js/jquery.magnific-popup.min.js"></script>
      <!--Nice Select js-->
      <script src="assets/js/jquery.nice-select.min.js"></script>
      <!-- Datepicker JS -->
      <script src="assets/js/jquery.datepicker.min.js"></script>
      <!--ClockPicker JS-->
      <script src="assets/js/jquery-clockpicker.min.js"></script>
      <!--Main js-->
      <script src="assets/js/main.js"></script>
	  
	  <script>
			// Select all links with hashes
$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });
		</script>
		
		<div id="content-mobile">
    		<a href="tel:9483220300" class="float">
                <i class="fa fa-phone my-float" style="font-size: 20px;"></i>
            </a>
		</div>
	  <style>
		#content-desktop {display: block;}
		#content-mobile {display: none;}

		@media screen and (max-width: 768px) {

		#content-desktop {display: none;}
		#content-mobile {display: block;}

		}
		
.float {
    position: fixed;
    width: 50px;
    z-index: 9999;
    height: 50px;
    bottom: 19px;
    left: 22px;
    background-color: #28c036;
    color: #FFF;
    border-radius: 50px;
    text-align: center;
    box-shadow: 2px 2px 3px #999;
}
.my-float{
	margin-top: 17px;
}
	</style>
	
	<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "+919483220300", // WhatsApp number
            call_to_action: "Message us", // Call to action
            position: "right", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
   </body>
</html>

<?php } 





?>