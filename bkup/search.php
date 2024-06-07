<?php 
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
        $resultx = str_replace(',', '', $distance); 
        
        $fl = $_POST['fromlocation'];
        $tl = $_POST['tolocation'];
        $nm = $_POST['name'];
        $em = $_POST['email'];
        $num = $_POST['number'];
        $amt = "-----";
        $rd = $_POST['reservation_date'];
        $rt = $_POST['reservation_time'];
        $cab = "-----";
        $km = $resultx;
        $tm = "-----";
        $ext = "-----";
        
        //mail
	    $fromad=$em;
		$to = "localkingstaxi@gmail.com";
		$subject = 'Taxi Rental';
		
        $message = '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <title>Taxi Rental</title>
            <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
        <style>
            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            
            html,body{
                width: 100%;
                height: 100%;
                background: #ff5722;
                padding: 7px;
            }
            
            p{
                margin-bottom: 3px !important;
            }
            
            .mail_box{
                 background: #e5f8ff;
                color: #000;
                    /*padding: 20px;*/
            }
            
            .head{
                font-size: 1.2rem;
                font-family: "Roboto", sans-serif;
            }
            
            .fa.fa-check{
                color: green;
                background-color: rgb(37, 35, 35);
                padding: 4px;
                border-radius: 500px;
                box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
            }
            
            .fa.fa-times{
                color: red;
                background-color: rgb(37, 35, 35);
                padding: 4px 6px;
                border-radius: 500px;
                box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
            }
            
            .pad-50{
               padding: 20px;
                background: #e5f8ff;
            }
            
            .pad-l{
                padding-left: 200px;
            }
            
            
            .logo_area{
                width: 100%;
                background: #e5f8ff;
                display: flex;
                justify-content: space-between;
                align-items: center;
                flex-wrap: wrap;
                padding:20px 0 0 20px;
            }
            
            .btn{
                border-radius: 0 !important;
                margin-left: 10px !important;
            }
            
            table tr td,table tr th{
                 font-size: larger;
                 text-align:left;
                 color: #fff;
            }
            
            table tr th{
                text-align:left;
                padding-left: 0px !important;
                
            }
            
            @media only screen and (max-width: 650px) {
           
            }
            .prow {
                font-family: "Roboto", sans-serif;
            }
        </style>
        
        </head>
        
        <body>
        <div style="background: #01176e;padding: 10px;">    
        <div class="mail_box">
            
            <div class="logo_area ">
                 <img width="165px" src="https://kingstaxi.in/images/logo.jpeg" alt="">
            </div>
            <div class="pad-50 pb-0">
                <p class="head mb-0" style="font-size:16px">Welcome To <b>Kings Taxi</b></p>
                <p class="head mb-0" style="font-size:16px">Please Note Your Booking Details</p>
                <hr>
            </div>
            <div class="pad-50" style="padding-top:0px">
                <div class="prow">
                    <div class="col-md-3" style="display: inline-block;    padding-bottom: 10px;">
                        Name &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;    padding-bottom: 10px;">
                        '.$nm.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;    padding-bottom: 10px;">
                        Contact No &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;     padding-bottom: 10px;font-weight:600">
                        <b>'.$num.'</b>
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;    padding-bottom: 10px;">
                        Entry Date &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;    padding-bottom: 10px;">
                        '.$dt.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;    padding-bottom: 10px;">
                        Entry Time &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-5" style="display: inline-block;    padding-bottom: 10px;">
                        '.$tm.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;    padding-bottom: 10px;">
                        PickUp Date &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;    padding-bottom: 10px;">
                        '.$rd.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;    padding-bottom: 10px;">
                        Time &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;    padding-bottom: 10px;">
                        '.$rt.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;    padding-bottom: 10px;">
                        Cab &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;    padding-bottom: 10px;">
                        '.$cab.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;    padding-bottom: 10px;">
                        PickUp Place &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;    padding-bottom: 10px;">
                        '.$fl.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;    padding-bottom: 10px;">
                        Drop Place &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;    padding-bottom: 10px;">
                        '.$tl.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;    padding-bottom: 10px;">
                        Trip Type &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;    padding-bottom: 10px;">
                        One Way
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;    padding-bottom: 10px;">
                        KM &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-8" style="display: inline-block;    padding-bottom: 10px;">
                        '.$km.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;    padding-bottom: 10px;">
                        Fare &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;    padding-bottom: 10px;">
                        '.$amt.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;    padding-bottom: 10px;">
                        Extra KM &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-8" style="display: inline-block;    padding-bottom: 10px;">
                        '.$ext.'
                    </div>
                </div>
                
                <br>
                
                <p>Exclude Toll Permit Charge</p>
                <p class="" style="color:#000"><b>Happy Journey</b></p>
                <p>Contact: <a href="#">9900918011</a> Please visit Our Website</p>
                <p class="">https://kingstaxi.in</p>
            </div>
        </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
    </html>';
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
        
        // Additional headers
        
        //$headers = 'To: '.$agent.' <'.$email.'>';   // user nm
        $headers .= 'From:Kings Taxi<no-reply@kingstaxi.in>'; // from
        
        
        
        if(mail($to, $subject, $message, $headers))
        {
        //   echo 'yes';
        //  
        }
        else{
        // echo 'no';
        //   header("Location:processorder.php?st=fail");
        }
    
        
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
                         <h4 class="text-dark mt-top" style=" margin-top: 12px;"><strong>KM</strong> </h4> <h4><i class="fa fa-road" aria-hidden="true"></i> &nbsp; <?php echo $distance // getDistance($_POST['fromlocation'], $_POST['tolocation'], "K"); ?></h4> 
                     </div> 
                     <div class="col-md-4 col-6"  style="margin-top:10px;">
                         <h4 class="text-dark mt-top" style=" margin-top: 12px;"><strong>Duration </strong></h4> <h4><i class="fa fa-clock-o" aria-hidden="true"></i> &nbsp; <?php echo $duration // getDistance($_POST['fromlocation'], $_POST['tolocation'], "K"); ?></h4> 
                     </div> 
                     <div class="col-md-4"  style="margin-top:10px;">
                          <h4 class="text-dark mt-top" style=" margin-top: 12px;"><strong>Date</strong> </h4> <h4><i class="fa fa-calendar" aria-hidden="true"></i> &nbsp; <?php echo $_POST['reservation_date']; ?></h4>
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
											<!--<h6><i class="fa fa-car"></i> Driver charges Rs 400/- per day</h6>-->
											    <h3>Rs <?php if(floatval($result) >='130'){ echo round(($result*13)+400); } else{ echo round((130*13)+400); } ?></h3>
												<!-- 13-->
												<!--<p><br>/ Km</p>-->
											</div>
										</div>
										<div class="x_car_offer_heading float_left">
											<h2><a href="#">Sedan  </a></h2>
											<p>Many more sedan cars.</p>
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
														  <input type="hidden" placeholder="Name" value="<?php if(floatval($result) >='130'){ echo round(($result*13)+400); } else{ echo round((130*13)+400); } ?>" required name="amount" />
														  <input type="hidden" placeholder="Name" value="<?php echo date('H:i'); ?>" required name="time" />
													      <input type="hidden" placeholder="Name" value="Sedan" required name="cab" />
													      <input type="hidden" placeholder="Name" value="Rs 13/km" required name="ext" />
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
											<!--<h6><i class="fa fa-car"></i> Driver charges Rs 400/- per day</h6>-->
											<h3>Rs <?php if(floatval($result) >='130'){ echo round(($result*14)+400); } else{ echo round((130*14)+400); } ?></h3>
												<!--<h3>Rs 14</h3>-->
												<!--<p>-->
												<!--	<br>/ Km</p>-->
											</div>
										</div>
										<div class="x_car_offer_heading float_left">
											<h2><a href="#">Sedan.Etios</a></h2>
											<p>Many more sedan cars.</p>
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
														  <input type="hidden" placeholder="Name" value="<?php if(floatval($result) >='130'){ echo round(($result*14)+400); } else{ echo round((130*14)+400); } ?>" required name="amount" />
														  <input type="hidden" placeholder="Name" value="<?php echo date('H:i'); ?>" required name="time" />
													      <input type="hidden" placeholder="Name" value="Sedan Etios" required name="cab" />
													      <input type="hidden" placeholder="Name" value="Rs 14/km" required name="ext" />
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
											<!--<h6><i class="fa fa-car"></i> Driver charges Rs 400/- per day</h6>-->
											<h3>Rs <?php if(floatval($result) >='130'){ echo round(($result*18)+400); } else{ echo round((130*18)+400); } ?></h3>
												<!--<h3>Rs 17</h3>-->
												<!--<p>-->
												<!--	<br>/ Km</p>-->
											</div>
										</div>
										<div class="x_car_offer_heading float_left">
											<h2><a href="#">SUV   </a></h2>
											<p>Many more innova cars.</p>
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
														  <input type="hidden" placeholder="Name" value="<?php if(floatval($result) >='300'){ echo round(($result*18)+400); } else{ echo round((130*18)+400); } ?>" required name="amount" />
														  <input type="hidden" placeholder="Name" value="<?php echo date('H:i'); ?>" required name="time" />
													      <input type="hidden" placeholder="Name" value="SUV" required name="cab" />
													      <input type="hidden" placeholder="Name" value="Rs 18/km" required name="ext" />
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
											<!--<h6><i class="fa fa-car"></i> Driver charges Rs 400/- per day</h6>-->
											<h3>Rs <?php if(floatval($result) >='130'){ echo round(($result*20)+400); } else{ echo round((130*20)+400); } ?></h3>
												<!--<h3>Rs 18</h3>-->
												<!--<p>-->
												<!--	<br>/ Km</p>-->
											</div>
										</div>
										<div class="x_car_offer_heading float_left">
											<h2><a href="#">SUV.Innova </a></h2>
											<p>Many more SUV cars.</p>
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
														  <input type="hidden" placeholder="Name" value="<?php if(floatval($result) >='130'){ echo round(($result*20)+400); } else{ echo round((130*20)+400); } ?>" required name="amount" />
														  <input type="hidden" placeholder="Name" value="<?php echo date('H:i'); ?>" required name="time" />
													      <input type="hidden" placeholder="Name" value="SUV Innova" required name="cab" />
													      <input type="hidden" placeholder="Name" value="Rs 20/km" required name="ext" />
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
        $rd = $_POST['reservation_date'];
        $rt = $_POST['reservation_time'];
        $cab = "-----";
        $km = $resultx;
        $tm = "-----";
        $ext = "-----";
        $days = $_POST['days'];
        
        //mail
	    $fromad=$em;
		$to = "localkingstaxi@gmail.com";
		$subject = 'Taxi Rental';
		
        $message = '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <title>Taxi Rental</title>
            <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
        <style>
            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            
            html,body{
                width: 100%;
                height: 100%;
                background: #ff5722;
                padding: 7px;
            }
            
            p{
                margin-bottom: 3px !important;
            }
            
            .mail_box{
                 background: #e5f8ff;
                color: #000;
                    /*padding: 20px;*/
            }
            
            .head{
                font-size: 1.2rem;
                font-family: "Roboto", sans-serif;
            }
            
            .fa.fa-check{
                color: green;
                background-color: rgb(37, 35, 35);
                padding: 4px;
                border-radius: 500px;
                box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
            }
            
            .fa.fa-times{
                color: red;
                background-color: rgb(37, 35, 35);
                padding: 4px 6px;
                border-radius: 500px;
                box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
            }
            
            .pad-50{
               padding: 20px;
                background: #e5f8ff;
            }
            
            .pad-l{
                padding-left: 200px;
            }
            
            
            .logo_area{
                width: 100%;
                background: #e5f8ff;
                display: flex;
                justify-content: space-between;
                align-items: center;
                flex-wrap: wrap;
                padding:20px 0 0 20px;
            }
            
            .btn{
                border-radius: 0 !important;
                margin-left: 10px !important;
            }
            
            table tr td,table tr th{
                 font-size: larger;
                 text-align:left;
                 color: #fff;
            }
            
            table tr th{
                text-align:left;
                padding-left: 0px !important;
                
            }
            
            @media only screen and (max-width: 650px) {
           
            }
            .prow {
                font-family: "Roboto", sans-serif;
            }
        </style>
        
        </head>
        
        <body>
        <div style="background: #01176e;padding: 10px;">    
        <div class="mail_box">
            
            <div class="logo_area ">
                 <img width="165px" src="https://kingstaxi.in/images/logo.jpeg" alt="">
            </div>
            <div class="pad-50 pb-0">
                <p class="head mb-0" style="font-size:16px">Welcome To <b>Kings Taxi</b></p>
                <p class="head mb-0" style="font-size:16px">Please Note Your Booking Details</p>
                <hr>
            </div>
            <div class="pad-50" style="padding-top:0px">
                <div class="prow">
                    <div class="col-md-3" style="display: inline-block;    padding-bottom: 10px;">
                        Name &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;    padding-bottom: 10px;">
                        '.$nm.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;    padding-bottom: 10px;">
                        Contact No &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;     padding-bottom: 10px;font-weight:600">
                        <b>'.$num.'</b>
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;    padding-bottom: 10px;">
                        Entry Date &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;    padding-bottom: 10px;">
                        '.$dt.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;    padding-bottom: 10px;">
                        Entry Time &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-5" style="display: inline-block;    padding-bottom: 10px;">
                        '.$tm.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;    padding-bottom: 10px;">
                        PickUp Date &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;    padding-bottom: 10px;">
                        '.$rd.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;    padding-bottom: 10px;">
                        Time &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;    padding-bottom: 10px;">
                        '.$rt.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;    padding-bottom: 10px;">
                        Vehicle Type &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;    padding-bottom: 10px;">
                        '.$cab.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;    padding-bottom: 10px;">
                        PickUp Location &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;    padding-bottom: 10px;">
                        '.$fl.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;    padding-bottom: 10px;">
                        Drop Location &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;    padding-bottom: 10px;">
                        '.$tl.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;    padding-bottom: 10px;">
                        Journey Type &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;    padding-bottom: 10px;">
                        One Way
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;    padding-bottom: 10px;">
                        KM &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-8" style="display: inline-block;    padding-bottom: 10px;">
                        '.$km.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;    padding-bottom: 10px;">
                        Fare &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;    padding-bottom: 10px;">
                        '.$amt.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;    padding-bottom: 10px;">
                        Extra KM &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-8" style="display: inline-block;    padding-bottom: 10px;">
                        '.$ext.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                        Number Of Days &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                        '.$days.'
                    </div>
                </div>
                
                <br>
                
                <p>Toll Gate : Extra</p>
                <p>For customer intimation : Toll Gate, permit, Hill station charges extra</p>
                <p class="" style="color:#000"><b>Happy Journey</b></p>
                <p>Contact: <a href="#">9900918011</a> Please visit Our Website</p>
                <p class="">https://kingstaxi.in</p>
            </div>
        </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
    </html>';
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
        
        // Additional headers
        
        //$headers = 'To: '.$agent.' <'.$email.'>';   // user nm
        $headers .= 'From:Kings Taxi<no-reply@kingstaxi.in	>'; // from
        
        
        
        if(mail($to, $subject, $message, $headers))
        {
        //   echo 'yes';
        //  
        }
        else{
        // echo 'no';
        //   header("Location:processorder.php?st=fail");
        }
    
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
                         <h4 class="text-dark mt-top"><strong>KM</strong> </h4> <h4><i class="fa fa-road" aria-hidden="true"></i> &nbsp; <?php echo $days*300;  // getDistance($_POST['fromlocation'], $_POST['tolocation'], "K"); ?></h4> 
                     </div> 
                     <div class="col-md-4 col-6"  style="margin-top:10px;">
                         <h4 class="text-dark mt-top"><strong>Duration</strong> </h4> <h4><i class="fa fa-clock-o" aria-hidden="true"></i> &nbsp; <?php echo $duration // getDistance($_POST['fromlocation'], $_POST['tolocation'], "K"); ?></h4> 
                     </div> 
                     <div class="col-md-4"  style="margin-top:10px;">
                          <h4 class="text-dark mt-top"><strong>Date</strong> </h4> <h4><i class="fa fa-calendar" aria-hidden="true"></i> &nbsp; <?php echo $_POST['reservation_date']; ?></h4>
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
										    $days = $_POST['days'];
										  //  if((floatval($result)*2) >='300'){ $amt =  round(($result*11*2)); } else{ $amt =  round((300*11)); }
										  //  if($days < 1)
										  //  {
										  //      $tamt = $amt;
										  //  }
										  //  else
										  //  {
										  //      $tamt = $amt + ($days-1)*250*11;
										  //  }
										  $tamt =  round($days*(300*11));
										    
										?>
										<div class="x_car_offer_price float_left">
											<div class="x_car_offer_price_inner">
											<h6><i class="fa fa-car"></i> Driver charges Rs 400/- per day</h6>
											    <h3>Rs <?php echo $tamt; ?></h3>
												<!-- 13-->
												<!--<p><br>/ Km</p>-->
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
        														  <input type="hidden" placeholder="Name" value="<?php echo $_POST['name']; ?>" required name="name" />
        														  <input type="hidden" placeholder="Name" value="<?php echo $tamt; ?>" required name="amount" />
        														  <input type="hidden" placeholder="Name" value="<?php echo date('H:i'); ?>" required name="time" />
        													      <input type="hidden" placeholder="Name" value="Sedan" required name="cab" />
        													      <input type="hidden" placeholder="Name" value="Rs 11/km" required name="ext" />
        													      <input type="hidden" placeholder="Name" value="<?php  echo $days*300; ?>" required name="km" />
        														  <input type="hidden" placeholder="Name" value="<?php echo $_POST['days']; ?>" required name="days" />
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
										    $days = $_POST['days'];
										  //  if((floatval($result)*2) >='250'){ $amt =  round(($result*12*2)); } else{ $amt =  round((250*12)); }
										  //  if($days < 1)
										  //  {
										  //      $tamt = $amt;
										  //  }
										  //  else
										  //  {
										  //      $tamt = $amt + ($days-1)*250*12;
										  //  }
										  $tamt =  round($days*(300*12));
										?>
										<div class="x_car_offer_price float_left">
											<div class="x_car_offer_price_inner">
											<h6><i class="fa fa-car"></i> Driver charges Rs 400/- per day</h6>
											<h3>Rs <?php echo $tamt ?></h3>
												<!--<h3>Rs 14</h3>-->
												<!--<p>-->
												<!--	<br>/ Km</p>-->
											</div>
										</div>
										<div class="x_car_offer_heading float_left">
											<h2><a href="#">Sedan.Etios</a></h2>
											<p>Many more sedan cars.</p>
											<p>Minimum 300km charges need to pay.</p>
										</div>
										<?php 
										    $days = $_POST['days'];
										    if((floatval($result)*2) >='300'){ $amt =  round(($result*12*2)); } else{ $amt =  round((300*12)); }
										    $tamt = $amt + ($days-2)*300*12;
										?>    
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
														  <input type="hidden" placeholder="Name" value="<?php echo $tamt; ?>" required name="amount" />
														  <input type="hidden" placeholder="Name" value="<?php echo date('H:i'); ?>" required name="time" />
													      <input type="hidden" placeholder="Name" value="Sedan Etios" required name="cab" />
													      <input type="hidden" placeholder="Name" value="Rs 12/km" required name="ext" />
													      <input type="hidden" placeholder="Name" value="<?php  echo $days*300; ?>" required name="km" />
													      <input type="hidden" placeholder="Name" value="<?php echo $_POST['days']; ?>" required name="days" />
														  
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
										    $days = $_POST['days'];
										  //  if((floatval($result)*2) >='250'){ $amt =  round(($result*14*2)); } else{ $amt =  round((250*14)); }
										  //  if($days < 1)
										  //  {
										  //      $tamt = $amt;
										  //  }
										  //  else
										  //  {
										  //      $tamt = $amt + ($days-1)*250*14;
										  //  }
										  $tamt =  round($days*(300*14));
										?>
										<div class="x_car_offer_price float_left">
											<div class="x_car_offer_price_inner">
											<h6><i class="fa fa-car"></i> Driver charges Rs 400/- per day</h6>
											<h3>Rs <?php echo $tamt ?></h3>
												<!--<h3>Rs 17</h3>-->
												<!--<p>-->
												<!--	<br>/ Km</p>-->
											</div>
										</div>
										<div class="x_car_offer_heading float_left">
											<h2><a href="#">SUV   </a></h2>
											<p>Many more innova cars.</p>
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
        														  <input type="hidden" placeholder="Name" value="<?php echo $_POST['name']; ?>" required name="name" />
        														  <input type="hidden" placeholder="Name" value="<?php echo $tamt; ?>" required name="amount" />
        														  <input type="hidden" placeholder="Name" value="<?php echo date('H:i'); ?>" required name="time" />
        													      <input type="hidden" placeholder="Name" value="SUV" required name="cab" />
        													      <input type="hidden" placeholder="Name" value="Rs 14/km" required name="ext" />
        													      <input type="hidden" placeholder="Name" value="<?php echo $days*300; ?>" required name="km" />
        													      <input type="hidden" placeholder="Name" value="<?php echo $_POST['days']; ?>" required name="days" />
        														  
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
										    $days = $_POST['days'];
										  //  if((floatval($result)*2) >='250'){ $amt =  round(($result*15*2)); } else{ $amt =  round((250*15)); }
										  //  if($days < 1)
										  //  {
										  //      $tamt = $amt;
										  //  }
										  //  else
										  //  {
										  //      $tamt = $amt + ($days-1)*250*15;
										  //  }
										  $tamt =  round($days*(300*16));
										?>
										<div class="x_car_offer_img float_left">
											<img src="img/c4.png" alt="img" width="220px">
										</div>
										<div class="x_car_offer_price float_left">
											<div class="x_car_offer_price_inner">
											<h6><i class="fa fa-car"></i> Driver charges Rs 400/- per day</h6>
											<h3>Rs <?php echo $tamt; ?></h3>
												<!--<h3>Rs 18</h3>-->
												<!--<p>-->
												<!--	<br>/ Km</p>-->
											</div>
										</div>
										<div class="x_car_offer_heading float_left">
											<h2><a href="#">SUV.Innova </a></h2>
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
														  <input type="hidden" placeholder="Name" value="<?php echo $_POST['name']; ?>" required name="name" />
														  <input type="hidden" placeholder="Name" value="<?php echo $tamt ?>" required name="amount" />
														  <input type="hidden" placeholder="Name" value="<?php echo date('H:i'); ?>" required name="time" />
													      <input type="hidden" placeholder="Name" value="SUV Innova" required name="cab" />
													      <input type="hidden" placeholder="Name" value="Rs 16/km" required name="ext" />
													      <input type="hidden" placeholder="Name" value="<?php echo $days*300; ?>" required name="km" />
														  <input type="hidden" placeholder="Name" value="<?php echo $_POST['days']; ?>" required name="days" />
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