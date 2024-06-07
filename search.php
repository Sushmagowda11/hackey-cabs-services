<?php 
	require 'vendor/autoload.php';
    if(isset($_POST['oneway']))
    {
        $origin = $_POST['fromlocation'];
         $destination = $_POST['tolocation'];
         // In metric unit. This is default
        //  echo 'https://maps.googleapis.com/maps/api/distancematrix/json?&origins='.urlencode($origin).'&destinations='.urlencode($destination).'&key=AIzaSyCVxtI96mNqpX90GIqOhHgJutRCy6ifibI';
       $distance_data = file_get_contents('https://maps.googleapis.com/maps/api/distancematrix/json?&origins='.urlencode($origin).'&destinations='.urlencode($destination).'&key=AIzaSyDkZ5uIR0UKffQOmfPbIR6j0iEPe1BrOSA');
       $distance_arr = json_decode($distance_data);
       $distance_arr->status;
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
        
        $fl = $_POST['fromlocation'];
        $tl = $_POST['tolocation'];
        $nm = $_POST['name'];
        $em = $_POST['email'];
        $num = $_POST['number'];
        $amt = "-----";
        
		$FormattingDateTime = new DateTime($_POST['reservation_date']);
        $rd = $FormattingDateTime->format('d-m-Y');

        $rt = $_POST['reservation_time'];
        $cab = "-----";
        $km = $result;
        $tm = "-----";
        $ext = "-----";
        
		// TELEGRAM MESSAGE(ONE WAY) STARTS
		$pickup = $fl;
		$drop = $tl;
		$fname = $nm;
		$email = $em;
		$phone = $num;
		$date = $rd;
		$time = $rt;
		$distance = $km;
		
		$botToken = '6987778414:AAEp1IewRu5Wz2e9HgUbXHXA5qQ5ASqsYn8'; // 6428147943:AAG8OLmpquUHQjQiTi6FgpW4O6bNb-Lw9aA
		$apiUrl = "https://api.telegram.org/bot{$botToken}/";
		
		$chatId = '6558904742'; // 6474203810
		
		$message = "*Enquiry* \r\n \r\n Pickup: $pickup \r\n Drop: $drop \r\n Name: $fname \r\n Phone: +91$phone \r\n Reservation Date: $date \r\n Reservation Time: $time \r\n Distance: $distance \r\n Email: $email";
		
		$httpClient = new GuzzleHttp\Client();
		
		$response = $httpClient->post($apiUrl . 'sendMessage', [
			'json' => [
				'chat_id' => $chatId,
				'text' => $message,
			],
		]);
		
		$telegram_result = json_decode($response->getBody(), true);
		
		if ($telegram_result['ok']) {
			// echo 'Message sent successfully!';
		} else {
			// echo 'Error sending message: ' . $telegram_result['description'];
		}

	// TELEGRAM MESSAGE(ONE WAY) ENDS
        
?>

<?php include('include/header.php'); ?>
       
       <style>
        .x_offer_car_heading_wrapper h4 {
            font-size: 14px;
            font-family: 'Lato', sans-serif;
            color: #01176e;
            text-transform: capitalize;
        }
        .mt-top{
             margin-bottom: 10px;
             
        }
        .padding_tb_100 {
            padding-top: 44px;
            padding-bottom: 75px;
        }
       </style>
      <!-- Offers Area Start -->
      <section class="x_offer_car_main_wrapper float_left padding_tb_100" id="Our_Tariff">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-12">
                   <div class="x_offer_car_heading_wrapper float_left">
						<h2 style="font-weight: 700; text-transform: uppercase; font-size: 1.2rem;">Hello <?php echo $_POST['name']; ?></h2>
					</div>
                  
                  <div class="x_offer_car_heading_wrapper float_left">
                     <h2 style="font-weight: 600; margin-top:12px; margin-bottom:20px; font-size: 21px;">Your Oneway Trip Search</h2>
                  </div>
                  <div class="x_offer_car_heading_wrapper float_left row">
                     <div class="col-md-6">
                         <h4 class="text-dark mt-top"><strong>Pickup From</strong> </h4> <h4><i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; <?php echo $_POST['fromlocation']; ?></h4> 
                     </div> 
                     <div class="col-md-6"  style="margin-top:10px;">
                          <h4 class="text-dark mt-top" style="margin-top: 12px;"><strong>Drop At</strong> </h4> <h4><i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; <?php echo $_POST['tolocation']; ?></h4>
                     </div> 
                     <div class="col-md-4 col-6"  style="margin-top:10px;">
                         <h4 class="text-dark mt-top" style=" margin-top: 12px;"><strong>KM</strong> </h4> <h4><i class="fa fa-road" aria-hidden="true"></i> &nbsp; <?php echo $distance; ?></h4> 
                     </div> 
                     <div class="col-md-4 col-6"  style="margin-top:10px;">
                         <h4 class="text-dark mt-top" style=" margin-top: 12px;"><strong>Duration </strong></h4> <h4><i class="fa fa-clock-o" aria-hidden="true"></i> &nbsp; <?php echo $duration; ?></h4> 
                     </div> 
                     <div class="col-md-4"  style="margin-top:10px;">
                          <h4 class="text-dark mt-top" style=" margin-top: 12px;"><strong>Date</strong> </h4> <h4><i class="fa fa-calendar" aria-hidden="true"></i> &nbsp; <?php echo $rd; ?></h4>
                     </div> 
                     
                     <div class="col-md-12 text-center mt-3"  style="margin-top:30px;">
                          <h4 class="text-dark mt-top"><strong>Note:-  Airport Taxis are not included in this</strong></h4>
                     </div> 
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12" style="margin-top:50px;">
					<div class="tab-content">
						<div id="home" class="tab-pane active">
							<div class="row">
							    <?php  $result = str_replace(',', '', $distance); ?>
								<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
									<div class="x_car_offer_main_boxes_wrapper float_left">
										<div class="x_car_offer_starts float_left">	
										    <i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										    <i class="fa fa-star-half-o" aria-hidden="true"></i> &nbsp;  4.2 | 1059 Reviews
										</div>
									
										<div class="x_car_offer_img float_left">
											<img src="img/c1.png" alt="img" width="220px">
										</div>
										<div class="x_car_offer_price float_left">
											<div class="x_car_offer_price_inner">
											<h6><i class="fa fa-car"></i> Driver charges Rs 400/- per day</h6>
											    <h3>Rs <?php $int_res=intval($result); if($int_res >= 130){ echo round(($int_res*14)+400); } else{ echo round((130*14)+400); } ?></h3>
												<br><p> Rs 14 / Km</p>
											</div>
										</div>
										<div class="x_car_offer_heading float_left">
											<h2><a href="#">Sedan  </a></h2>
											<p>Many more Sedan Cars.</p>
											<!--<p>Minimum 130km charges need to pay.</p>-->
										</div>
										
										<div class="x_car_offer_bottom_btn float_left">
											<ul>
												<li>
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
														  <input type="hidden" placeholder="Name" value="<?php $int_res=intval($result); if($int_res >= 130){ echo round(($int_res*14)+400); } else{ echo round((130*14)+400); } ?>" required name="amount" />
														  <input type="hidden" placeholder="Name" value="<?php echo date('H:i'); ?>" required name="time" />
													      <input type="hidden" placeholder="Name" value="Sedan" required name="cab" />
													      <input type="hidden" placeholder="Name" value="Rs 14/km" required name="ext" />
													      <input type="hidden" placeholder="Name" value="<?php echo $result; ?>" required name="km" />
														  <input type="hidden" placeholder="Name" value="<?php echo $duration; ?>" required name="duration" />
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
													
														  
												 </div>
												 <button type="submit" name="oneway" class="offer-btn-2 booning">Book Now</button>
											  </form>
												    <!--<a href="#booking">Book now</a>-->
												</li>
												<!--<li><a href="tel:+91 9900918011">Call Now</a></li>-->
											</ul>
										</div>
									</div>
								</div>
								
									<style>
                                        .booning{
                                    	    background: #fa6108;
                                            color: #fff;
                                            padding: 4px 19px;
                                            border: 1px solid #fa6108;
                                            border-radius: 12px;
                                       }
                                    </style>
								
								<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
									<div class="x_car_offer_main_boxes_wrapper float_left">
										<div class="x_car_offer_starts float_left">	<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										 <i class="fa fa-star-half-o" aria-hidden="true"></i> &nbsp; 4.5 | 1758 Reviews
										</div>
										<div class="x_car_offer_img float_left">
											<img src="img/c2.png" alt="img" width="220px">
										</div>
										<div class="x_car_offer_price float_left">
											<div class="x_car_offer_price_inner">
											<h6><i class="fa fa-car"></i> Driver charges Rs 400/- per day</h6>
											<h3>Rs <?php $int_res=intval($result); if($int_res >= 130){ echo round(($int_res*14)+400); } else{ echo round((130*14)+400); } ?></h3>
											<br><p> Rs 14 / Km</p>
											</div>
										</div>
										<div class="x_car_offer_heading float_left">
											<h2><a href="#">Sedan Etios</a></h2>
											<p>Many more Sedan Cars.</p>
											<!--<p>Minimum 130km charges need to pay.</p>-->
										</div>
										
										<div class="x_car_offer_bottom_btn float_left">
											<ul>
												<li>
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
														  <input type="hidden" placeholder="Name" value="<?php $int_res=intval($result); if($int_res >= 130){ echo round(($int_res*14)+400); } else{ echo round((130*14)+400); } ?>" required name="amount" />
														  <input type="hidden" placeholder="Name" value="<?php echo date('H:i'); ?>" required name="time" />
													      <input type="hidden" placeholder="Name" value="Sedan Etios" required name="cab" />
													      <input type="hidden" placeholder="Name" value="Rs 14/km" required name="ext" />
													      <input type="hidden" placeholder="Name" value="<?php echo $result; ?>" required name="km" />
														  <input type="hidden" placeholder="Name" value="<?php echo $duration; ?>" required name="duration" />
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
													
														  <button type="submit" name="oneway" class="offer-btn-2 booning">Book Now</button>
													  
												 </div>
											  </form>
												</li>
												<!--<li><a href="tel:+91 9900918011">Call Now</a></li>-->
											</ul>
										</div>
									</div>
								</div>
								
								<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
									<div class="x_car_offer_main_boxes_wrapper float_left">
										<div class="x_car_offer_starts float_left">	<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-half-o" aria-hidden="true"></i> &nbsp;  4.7 | 2564 Reviews
										</div>
										<div class="x_car_offer_img float_left">
											<img src="img/c3.png" alt="img" width="220px">
										</div>
										<div class="x_car_offer_price float_left">
											<div class="x_car_offer_price_inner">
											<h6><i class="fa fa-car"></i> Driver charges Rs 400/- per day</h6>
											<h3>Rs <?php $int_res=intval($result); if($int_res >= 130){ echo round(($int_res*19)+400); } else{ echo round((130*19)+400); } ?></h3>
											<br><p> Rs 19 / Km</p>
											</div>
										</div>
										<div class="x_car_offer_heading float_left">
											<h2><a href="#">SUV   </a></h2>
											<p>Many more SUV Cars.</p>
											<!--<p>Minimum 130km charges need to pay.</p>-->
										</div>
										
										<div class="x_car_offer_bottom_btn float_left">
											<ul>
												<li>
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
														  <input type="hidden" placeholder="Name" value="<?php $int_res=intval($result); if($int_res >= 130){ echo round(($int_res*19)+400); } else{ echo round((130*19)+400); } ?>" required name="amount" />
														  <input type="hidden" placeholder="Name" value="<?php echo date('H:i'); ?>" required name="time" />
													      <input type="hidden" placeholder="Name" value="SUV" required name="cab" />
													      <input type="hidden" placeholder="Name" value="Rs 19/km" required name="ext" />
													      <input type="hidden" placeholder="Name" value="<?php echo $result; ?>" required name="km" />
														  <input type="hidden" placeholder="Name" value="<?php echo $duration; ?>" required name="duration" />
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
													
														  <button type="submit" name="oneway" class="offer-btn-2 booning">Book Now</button>
													  
												 </div>
											  </form>
												</li>
												<!--<li><a href="tel:+91 9900918011">Call Now</a></li>-->
											</ul>
										</div>
									</div>
								</div>
								
								<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
									<div class="x_car_offer_main_boxes_wrapper float_left">
										<div class="x_car_offer_starts float_left">	<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i> &nbsp; 5.0 | 1658 Reviews
											
										</div>
										<div class="x_car_offer_img float_left">
											<img src="img/c4.png" alt="img" width="220px">
										</div>
										<div class="x_car_offer_price float_left">
											<div class="x_car_offer_price_inner">
											<h6><i class="fa fa-car"></i> Driver charges Rs 400/- per day</h6>
											<h3>Rs <?php $int_res=intval($result); if($int_res >= 130){ echo round(($int_res*22)+400); } else{ echo round((130*22)+400); } ?></h3>
											<br><p> Rs 22 / Km</p>
											</div>
										</div>
										<div class="x_car_offer_heading float_left">
											<h2><a href="#">SUV Innova Crysta</a></h2>
											<p>Many more Innova Cars.</p>
											<!--<p>Minimum 130km charges need to pay.</p>-->
										</div>
										
										<div class="x_car_offer_bottom_btn float_left">
											<ul>
												<li>
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
														  <input type="hidden" placeholder="Name" value="<?php $int_res=intval($result); if($int_res >= 130){ echo round(($int_res*22)+400); } else{ echo round((130*22)+400); } ?>" required name="amount" />
														  <input type="hidden" placeholder="Name" value="<?php echo date('H:i'); ?>" required name="time" />
													      <input type="hidden" placeholder="Name" value="SUV Innova" required name="cab" />
													      <input type="hidden" placeholder="Name" value="Rs 22/km" required name="ext" />
													      <input type="hidden" placeholder="Name" value="<?php echo $result; ?>" required name="km" />
														  <input type="hidden" placeholder="Name" value="<?php echo $duration; ?>" required name="duration" />
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
													
														  <button type="submit" name="oneway" class="offer-btn-2 booning">Book Now</button>
													  
												 </div>
											  </form>
												</li>
												<!--<li><a href="tel:+91 9900918011">Call Now</a></li>-->
											</ul>
										</div>
									</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
            </div>
        
		
			
		</div>
      </section>
      <!-- Offers Area End -->


     	<?php include('include/footer.php'); ?>
<?php } 


    if(isset($_POST['round']))
    {
        $origin = $_POST['fromlocation'];
        $destination = $_POST['tolocation'];
         // In metric unit. This is default
       $distance_data = file_get_contents('https://maps.googleapis.com/maps/api/distancematrix/json?&origins='.urlencode($origin).'&destinations='.urlencode($destination).'&key=AIzaSyDkZ5uIR0UKffQOmfPbIR6j0iEPe1BrOSA');
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
      
        $fl = $_POST['fromlocation'];
        $tl = $_POST['tolocation'];
        $nm = $_POST['name'];
        $em = $_POST['email'];
        $num = $_POST['number'];
        $amt = "-----";
        
		$FormattingDateTime = new DateTime($_POST['reservation_date']);
        $rd = $FormattingDateTime->format('d-m-Y');

        $rt = $_POST['reservation_time'];
        $cab = "-----";
        $km = $result;
        $tm = "-----";
        $ext = "-----";
        $days = $_POST['days'];
        
		// TELEGRAM MESSAGE(ROUND TRIP) STARTS
		$pickup = $fl;
		$drop = $tl;
		$fname = $nm;
		$email = $em;
		$phone = $num;
		$date = $rd;
		$time = $rt;
		$distance = $km;
		$telegram_km = intval($km)*2;
		$numOfDays = $days;
		
		$botToken = '6987778414:AAEp1IewRu5Wz2e9HgUbXHXA5qQ5ASqsYn8'; // 6428147943:AAG8OLmpquUHQjQiTi6FgpW4O6bNb-Lw9aA
		$apiUrl = "https://api.telegram.org/bot{$botToken}/";
		
		$chatId = '6558904742'; // 6474203810
		
		$message = "*Enquiry* \r\n \r\n Round Trip($numOfDays days) \r\n Pickup: $pickup \r\n Drop: $drop \r\n Name: $fname \r\n Phone: +91$phone \r\n Reservation Date: $date \r\n Reservation Time: $time \r\n Distance: $telegram_km \r\n Email: $email";
		
		$httpClient = new GuzzleHttp\Client();
		
		$response = $httpClient->post($apiUrl . 'sendMessage', [
			'json' => [
				'chat_id' => $chatId,
				'text' => $message,
			],
		]);
		
		$telegram_result = json_decode($response->getBody(), true);
		
		if ($telegram_result['ok']) {
			// echo 'Message sent successfully!';
		} else {
			// echo 'Error sending message: ' . $telegram_result['description'];
		}

	// TELEGRAM MESSAGE(ROUND TRIP) ENDS
    
?>
<?php include('include/header.php'); ?>
      <style>
        
        .padding_tb_100 {
            padding-top: 44px;
            padding-bottom: 75px;
        }
        .mt-top {
            margin-bottom: 10px;
        }
        .x_offer_car_heading_wrapper h4 {
            font-size: 14px;
            font-family: 'Lato', sans-serif;
            color: #01176e;
            text-transform: capitalize;
        }

      </style>
       <!--if(($result*2) < 250  ){}else{ echo ($result*2); } -->
      <!-- Offers Area Start -->
      <section class="x_offer_car_main_wrapper float_left padding_tb_100" id="Our_Tariff">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-12">
                   <div class="x_offer_car_heading_wrapper float_left">
						<h2 style="font-weight: 700; text-transform: uppercase;">Hello <?php echo $_POST['name']; ?></h2>
					</div>
                  
                  <div class="x_offer_car_heading_wrapper float_left">
                     <h2 style="font-weight: 600; margin-top: 12px; margin-bottom: 20px; font-size: 28px;">Your Round Trip Search</h2>
                  </div>
                  
                  <div class="x_offer_car_heading_wrapper float_left row">
                     <div class="col-md-6">
                         <h4 class="text-dark mt-top"><strong>Pickup From </strong></h4> <h4><i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; <?php echo $_POST['fromlocation']; ?></h4> 
                     </div> 
                     <div class="col-md-6"  style="margin-top:10px;">
                          <h4 class="text-dark mt-top"><strong>Drop At</strong> </h4> <h4><i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; <?php echo $_POST['tolocation']; ?></h4>
                     </div> 
                     <div class="col-md-4 col-6"  style="margin-top:10px;">
                         <h4 class="text-dark mt-top"><strong>KM</strong> </h4> <h4><i class="fa fa-road" aria-hidden="true"></i> &nbsp; <?php echo $distance;  // getDistance($_POST['fromlocation'], $_POST['tolocation'], "K"); ?></h4> 
                     </div> 
                     <div class="col-md-4 col-6"  style="margin-top:10px;">
                         <h4 class="text-dark mt-top"><strong>Duration</strong> </h4> <h4><i class="fa fa-clock-o" aria-hidden="true"></i> &nbsp; <?php echo $duration // getDistance($_POST['fromlocation'], $_POST['tolocation'], "K"); ?></h4> 
                     </div> 
                     <div class="col-md-4"  style="margin-top:10px;">
                          <h4 class="text-dark mt-top"><strong>Date</strong> </h4> <h4><i class="fa fa-calendar" aria-hidden="true"></i> &nbsp; <?php echo $rd; ?></h4>
                     </div> 
                     
                     <div class="col-md-12 text-center mt-3">
                          <h4 class="text-dark mt-top"><strong>Note:-  Airport Taxis are not included in this</strong></h4>
                     </div> 
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12" style="margin-top:50px;">
					<div class="tab-content">
						<div id="home" class="tab-pane active">
							<div class="row">
								<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
									<div class="x_car_offer_main_boxes_wrapper float_left">
										<div class="x_car_offer_starts float_left">	<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										    <i class="fa fa-star-half-o" aria-hidden="true"></i> &nbsp;  4.2 | 1059 Reviews
										</div>
										<div class="x_car_offer_img float_left">
											<img src="img/c1.png" alt="img" width="220px">
										</div>
										<?php 
										//     $days = $_POST['days'];
										// 	$int_res = intval($result); if($int_res >= 300){ $amt = round(($int_res*12*2)+400); } else{ $amt = round((300*12*2)+400); }
										//    if($days <= 1)
										//    {
										//        $tamt = $amt;
										//    }
										//    else
										//    {
										//        $tamt = $amt + (($days-1)*400);
										//    }

										$int_res = intval($result);
										$rate = 12;
										$baseCharge = 400;
										$numberOfDays = $_POST['days'];
										$numberOfKms = intval($result);
									
										if ($numberOfKms <= 300) {
											$totalCost = (300 * $numberOfDays * $rate) + ($baseCharge * $numberOfDays);
										} else {
											$totalCost = ($numberOfKms * $numberOfDays * $rate) + ($baseCharge * $numberOfDays);
										}
										    
										?>
										<div class="x_car_offer_price float_left">
											<div class="x_car_offer_price_inner">
											<h6><i class="fa fa-car"></i> Driver charges Rs 400/- per day</h6>
											    <h3>Rs <?php echo $totalCost; ?></h3>
												<br><p> Rs 12 / Km</p>
											</div>
										</div>
										<div class="x_car_offer_heading float_left">
											<h2><a href="#">Sedan  </a></h2>
											<p>Many more sedan cars.</p>
											<p>Minimum 300km charges need to pay.</p>
										</div>
										
										<div class="x_car_offer_bottom_btn float_left">
											<ul>
												<li>
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
        														  <input type="hidden" value="<?php echo $_POST['name']; ?>" required name="name" />
        														  <input type="hidden" value="<?php echo $totalCost; ?>" required name="amount" />
        														  <input type="hidden" value="<?php echo date('H:i'); ?>" required name="time" />
        													      <input type="hidden" value="Sedan" required name="cab" />
        													      <input type="hidden" value="Rs 12/km" required name="ext" />
        													      <input type="hidden" value="<?php  echo $int_res*2; ?>" required name="km" />
        														  <input type="hidden" value="<?php echo $_POST['days']; ?>" required name="days" />
																  <input type="hidden" value="<?php echo $duration; ?>" required name="duration" />
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
        													
        														  <button type="submit" name="round" class="offer-btn-2 booning">Book Now</button>
        													  
        												 </div>
        											  </form>
												</li>
												<!--<li><a href="tel:+91 9900918011">Call Now</a></li>-->
											</ul>
										</div>
									</div>
								</div>
								
								<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
									<div class="x_car_offer_main_boxes_wrapper float_left">
										<div class="x_car_offer_starts float_left">	<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										<i class="fa fa-star-half-o" aria-hidden="true"></i> &nbsp;  4.5 | 1758 Reviews
										</div>
										<div class="x_car_offer_img float_left">
											<img src="img/c2.png" alt="img" width="220px">
										</div>
										<?php 
										//     $days = $_POST['days'];
										// 	$int_res = intval($result); if($int_res >= 300){ $amt = round(($int_res*12*2)+400); } else{ $amt = round((300*12*2)+400); }
										//    if($days <= 1)
										//    {
										//        $tamt = $amt;
										//    }
										//    else
										//    {
										//        $tamt = $amt + (($days-1)*400);
										//    }

										$int_res = intval($result);    
										$rate = 12;
										$baseCharge = 400;
										$numberOfDays = $_POST['days'];
										$numberOfKms = intval($result);
									
										if ($numberOfKms <= 300) {
											$totalCost = (300 * $numberOfDays * $rate) + ($baseCharge * $numberOfDays);
										} else {
											$totalCost = ($numberOfKms * $numberOfDays * $rate) + ($baseCharge * $numberOfDays);
										}
										?>
										<div class="x_car_offer_price float_left">
											<div class="x_car_offer_price_inner">
											<h6><i class="fa fa-car"></i> Driver charges Rs 400/- per day</h6>
											<h3>Rs <?php echo $totalCost ?></h3>
											<br><p> Rs 12 / Km</p>
											</div>
										</div>
										<div class="x_car_offer_heading float_left">
											<h2><a href="#">Sedan Etios</a></h2>
											<p>Many more Sedan Cars.</p>
											<p>Minimum 300km charges need to pay.</p>
										</div>   
										<div class="x_car_offer_bottom_btn float_left">
											<ul>
												<li>
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
														  <input type="hidden" value="<?php echo $_POST['name']; ?>" required name="name" />
														  <input type="hidden" value="<?php echo $totalCost; ?>" required name="amount" />
														  <input type="hidden" value="<?php echo date('H:i'); ?>" required name="time" />
													      <input type="hidden" value="Sedan Etios" required name="cab" />
													      <input type="hidden" value="Rs 12/km" required name="ext" />
													      <input type="hidden" value="<?php  echo $int_res*2; ?>" required name="km" />
													      <input type="hidden" value="<?php echo $_POST['days']; ?>" required name="days" />
														  <input type="hidden" value="<?php echo $duration; ?>" required name="duration" />
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
													
														  <button type="submit" name="round" class="offer-btn-2 booning">Book Now</button>
													  
												 </div>
											  </form>
												</li>
												<!--<li><a href="tel:+91 9900918011">Call Now</a></li>-->
											</ul>
										</div>
									</div>
								</div>
								
								<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
									<div class="x_car_offer_main_boxes_wrapper float_left">
										<div class="x_car_offer_starts float_left">	<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										<i class="fa fa-star-half-o" aria-hidden="true"></i> &nbsp;   4.7 | 2564 Reviews
										</div>
										<div class="x_car_offer_img float_left">
											<img src="img/c3.png" alt="img" width="220px">
										</div>
										<?php 
										//     $days = $_POST['days'];
										// 	$int_res = intval($result); if($int_res >= 300){ $amt = round(($int_res*17*2)+400); } else{ $amt = round((300*17*2)+400); }
										//    if($days <= 1)
										//    {
										//        $tamt = $amt;
										//    }
										//    else
										//    {
										//        $tamt = $amt + (($days-1)*400);
										//    }
										
										$int_res = intval($result);
										$rate = 17;
										$baseCharge = 400;
										$numberOfDays = $_POST['days'];
										$numberOfKms = intval($result);
									
										if ($numberOfKms <= 300) {
											$totalCost = (300 * $numberOfDays * $rate) + ($baseCharge * $numberOfDays);
										} else {
											$totalCost = ($numberOfKms * $numberOfDays * $rate) + ($baseCharge * $numberOfDays);
										}
										?>
										<div class="x_car_offer_price float_left">
											<div class="x_car_offer_price_inner">
											<h6><i class="fa fa-car"></i> Driver charges Rs 400/- per day</h6>
											<h3>Rs <?php echo $totalCost; ?></h3>
											<br><p> Rs 17 / Km</p>
											</div>
										</div>
										<div class="x_car_offer_heading float_left">
											<h2><a href="#">SUV   </a></h2>
											<p>Many more SUV Cars.</p>
											<p>Minimum 300km charges need to pay.</p>
										</div>
										
										<div class="x_car_offer_bottom_btn float_left">
											<ul>
												<li>
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
        														  <input type="hidden" value="<?php echo $_POST['name']; ?>" required name="name" />
        														  <input type="hidden" value="<?php echo $totalCost; ?>" required name="amount" />
        														  <input type="hidden" value="<?php echo date('H:i'); ?>" required name="time" />
        													      <input type="hidden" value="SUV" required name="cab" />
        													      <input type="hidden" value="Rs 17/km" required name="ext" />
        													      <input type="hidden" value="<?php echo $int_res*2; ?>" required name="km" />
        													      <input type="hidden" value="<?php echo $_POST['days']; ?>" required name="days" />
        														  <input type="hidden" value="<?php echo $duration; ?>" required name="duration" />
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
        													
        														  <button type="submit" name="round" class="offer-btn-2 booning">Book Now</button>
        													  
        												 </div>
        											  </form>
												</li>
												<!--<li><a href="tel:+91 9900918011">Call Now</a></li>-->
											</ul>
										</div>
									</div>
								</div>
								
								<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
									<div class="x_car_offer_main_boxes_wrapper float_left">
										<div class="x_car_offer_starts float_left">	<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i> &nbsp; 5.0 | 1658 Reviews
										</div>
										<?php 
										//     $days = $_POST['days'];
										// 	$int_res = intval($result); if($int_res >= 300){ $amt = round(($int_res*20*2)+400); } else{ $amt = round((300*20*2)+400); }
										//    if($days <= 1)
										//    {
										//        $tamt = $amt;
										//    }
										//    else
										//    {
										//        $tamt = $amt + (($days-1)*400);
										//    }

										$int_res = intval($result);	
										$rate = 20;
										$baseCharge = 400;
										$numberOfDays = $_POST['days'];
										$numberOfKms = intval($result);
									
										if ($numberOfKms <= 300) {
											$totalCost = (300 * $numberOfDays * $rate) + ($baseCharge * $numberOfDays);
										} else {
											$totalCost = ($numberOfKms * $numberOfDays * $rate) + ($baseCharge * $numberOfDays);
										}
										    
										?>
										<div class="x_car_offer_img float_left">
											<img src="img/c4.png" alt="img" width="220px">
										</div>
										<div class="x_car_offer_price float_left">
											<div class="x_car_offer_price_inner">
											<h6><i class="fa fa-car"></i> Driver charges Rs 400/- per day</h6>
											<h3>Rs <?php echo $totalCost; ?></h3>
												<br><p> Rs 20 / Km</p>
											</div>
										</div>
										<div class="x_car_offer_heading float_left">
											<h2><a href="#">SUV Innova Crysta</a></h2>
											<p>Many more SUV cars.</p>
											<p>Minimum 300km charges need to pay.</p>
										</div>
										
										<div class="x_car_offer_bottom_btn float_left">
											<ul>
												<li>
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
														  <input type="hidden" value="<?php echo $_POST['name']; ?>" required name="name" />
														  <input type="hidden" value="<?php echo $totalCost; ?>" required name="amount" />
														  <input type="hidden" value="<?php echo date('H:i'); ?>" required name="time" />
													      <input type="hidden" value="SUV Innova" required name="cab" />
													      <input type="hidden" value="Rs 20/km" required name="ext" />
													      <input type="hidden" value="<?php echo $int_res*2; ?>" required name="km" />
														  <input type="hidden" value="<?php echo $_POST['days']; ?>" required name="days" />
														  <input type="hidden" value="<?php echo $duration; ?>" required name="duration" />
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
													
														  <button type="submit" name="round" class="offer-btn-2 booning">Book Now</button>
													  
												 </div>
											  </form>
												</li>
												<!--<li><a href="tel:+91 9900918011">Call Now</a></li>-->
													<style>
                                        .booning{
                                    	    background: #fa6108;
                                            color: #fff;
                                            padding: 4px 19px;
                                            border: 1px solid #fa6108;
                                            border-radius: 12px;
                                       }
                                    </style>
											</ul>
										</div>
									</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
            </div>
        
		
			
		</div>
      </section>
      <!-- Offers Area End -->


     	<?php include('include/footer.php'); ?>

<?php } 

?>