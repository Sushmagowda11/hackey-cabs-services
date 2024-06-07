<?php $dt = date("Y-m-d");
    if(isset($_POST['oneway']))
    {
        $fl = $_POST['fromlocation'];
        $tl = $_POST['tolocation'];
        $nm = $_POST['name'];
        $em = $_POST['email'];
        $num = $_POST['number'];
        $amt = $_POST['amount'];
        $rd = $_POST['reservation_date'];
        $rt = $_POST['reservation_time'];
        $cab = $_POST['cab'];
        $km = $_POST['km'];
        $tm = $_POST['time'];
        
        //mail
	    $fromad=$em;
		$to = "kingstaxibangalore4@gmail.com";
		$subject = 'Booking Confirmation';
		
        $message = '
        <html>
        <head>
        
        <title>Booking Confirmation</title>
        
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,600,600i,700&display=swap" rel="stylesheet">
        
        <style>
        body{
        margin: 0;
        padding: 0;
        width: 100%;
        font-family: "Source Sans Pro", sans-serif;
        color: #5d5d5d;
        }
        
        .order{
        width: 50%;
        height: auto;
        padding: 20px;
        text-align: center;
        margin: 50px auto;
        color: #333;
        }
        .order img{
        display: block;
        margin: 20px auto;
        width: 25%;
        }
        
        
        .order h4{
        position: relative;
        margin: 30px 0px;
        font-size: 1.2em;
        color: #5A2985;
        }
        
        .order a.shopmore{
        color: #5A2985;
        border: 1px solid #5A2985;
        border-radius: 5px;
        padding: 6px 15px;
        text-decoration: none;
        }
        
        .order p{
        margin: 30px 0px;
        color: #4d4d4d;
        font-size: .75em;
        }
        
        h2{
        margin: 0px auto;
        position: relative;
        top: 10px;
        font-size: .8em;
        text-align: center;
        display: block;
        clear: both;
        }
        
        
        @media screen and (device-width: 360px) and (device-height: 640px){
        
        .order{
        width: 80%;
        }
        
        .order img{
        width: 50%;
        }
        
        }
        </style>
        
        </head>
        
        <body>
        <div class="order">
            
            <center><img src="http://theworking.in/kings_taxi/assets/imgs/logo.png" /></center>
        	
        		<h3 style="color:inherit;font-family:Helvetica,Arial,Verdana,sans-serif;font-size:42px;font-weight:bold;line-height:1.2;padding:0;text-align:left;word-wrap:normal; text-align: center">Welcome To Kings Taxi Services</h3>
        			<hr style="border: 1px solid lightgrey;">
        			<p style="font-weight: bold;  font-size: 16px;">Hello Admin, </p>
        			<p style="font-size: 14px; text-align: justify; margin: 0%; margin-right: 10%">
        			Please Note Booking Details</p>
        			
        			<p style="font-size: 14px; text-align: justify; margin: 0%;">Name : '.$nm.' </p>
        			<p style="font-size: 14px; text-align: justify; margin: 0%;">Contact No : '.$num.'</p>
        			<p style="font-size: 14px; text-align: justify; margin: 0%;">Entry Date : '.$dt.' </p>
        			<p style="font-size: 14px; text-align: justify; margin: 0%;">Entry Time : '.$tm.' </p>
        			<p style="font-size: 14px; text-align: justify; margin: 0%;">Pickup Date : '.$rd.' </p>
        			<p style="font-size: 14px; text-align: justify; margin: 0%;">Time  : '.$rt.' </p>
        			<p style="font-size: 14px; text-align: justify; margin: 0%;">Cab  : '.$cab.' </p>
        			<p style="font-size: 14px; text-align: justify; margin: 0%;">PicUp Place : '.$fl.' </p>
        			<p style="font-size: 14px; text-align: justify; margin: 0%;">Drop Place : '.$tl.' </p>
        			<p style="font-size: 14px; text-align: justify; margin: 0%;">Trip Type : One Way </p>
        			<p style="font-size: 14px; text-align: justify; margin: 0%;">Km : '.$km.' </p>
        			<p style="font-size: 14px; text-align: justify; margin: 0%;">Fare  : Rs. '.$amt.'/- </p>
        			<p style="font-size: 14px; text-align: justify; margin: 0%;">Extra Km  : 12 </p>
        			<p style="font-size: 14px; text-align: justify; margin: 0%;">Exclude Toll Permit Charge</p>
        			<p style="font-size: 14px; text-align: justify; margin: 0%;">Happy Journey.</p>
        			
        			<p style="font-size: 14px; text-align: justify; margin: 0%;">Kings Taxi</p>
                    <p style="font-size: 14px; text-align: justify; margin: 0%;">Contact 7550075770 Please visit our website <a href="http://kingstaxiservice.com">http://kingstaxiservice.com</a></p>
        </div>
        
        </body>
        </html>
        ';
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
        
        // Additional headers
        
        //$headers = 'To: '.$agent.' <'.$email.'>';   // user nm
        $headers .= 'From: Kings Taxi <no-reply@theworking.in>'; // from
        
        
        
        if(mail($to, $subject, $message, $headers))
        {
        //   echo 'yes';
        //  
        }
        else{
        // echo 'no';
        //   header("Location:processorder.php?st=fail");
        }
        
        
        //mail
	    $fromad="no-reply@theworking.in";
		$to = $em;
		$subject = 'Booking Confirmation';
		
        $message = '
        <html>
        <head>
        
        <title>Booking Confirmation</title>
        
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,600,600i,700&display=swap" rel="stylesheet">
        
        <style>
        body{
        margin: 0;
        padding: 0;
        width: 100%;
        font-family: "Source Sans Pro", sans-serif;
        color: #5d5d5d;
        }
        
        .order{
        width: 50%;
        height: auto;
        padding: 20px;
        text-align: center;
        margin: 50px auto;
        color: #333;
        }
        .order img{
        display: block;
        margin: 20px auto;
        width: 25%;
        }
        
        
        .order h4{
        position: relative;
        margin: 30px 0px;
        font-size: 1.2em;
        color: #5A2985;
        }
        
        .order a.shopmore{
        color: #5A2985;
        border: 1px solid #5A2985;
        border-radius: 5px;
        padding: 6px 15px;
        text-decoration: none;
        }
        
        .order p{
        margin: 30px 0px;
        color: #4d4d4d;
        font-size: .75em;
        }
        
        h2{
        margin: 0px auto;
        position: relative;
        top: 10px;
        font-size: .8em;
        text-align: center;
        display: block;
        clear: both;
        }
        
        
        @media screen and (device-width: 360px) and (device-height: 640px){
        
        .order{
        width: 80%;
        }
        
        .order img{
        width: 50%;
        }
        
        }
        </style>
        
        </head>
        
        <body>
        <div class="order">
            
            <center><img src="http://theworking.in/kings_taxi/assets/imgs/logo.png" /></center>
        	
        		<h3 style="color:inherit;font-family:Helvetica,Arial,Verdana,sans-serif;font-size:42px;font-weight:bold;line-height:1.2;padding:0;text-align:left;word-wrap:normal; text-align: center">Welcome To Kings Taxi Services</h3>
        			<hr style="border: 1px solid lightgrey;">
        			<p style="font-weight: bold;  font-size: 16px;">Hello Admin, </p>
        			<p style="font-size: 14px; text-align: justify; margin: 0%; margin-right: 10%">
        			Please Note Your Booking Details</p>
        			
        			<p style="font-size: 14px; text-align: justify; margin: 0%;">Name : '.$nm.' </p>
        			<p style="font-size: 14px; text-align: justify; margin: 0%;">Contact No : '.$num.'</p>
        			<p style="font-size: 14px; text-align: justify; margin: 0%;">Entry Date : '.$dt.' </p>
        			<p style="font-size: 14px; text-align: justify; margin: 0%;">Entry Time : '.$tm.' </p>
        			<p style="font-size: 14px; text-align: justify; margin: 0%;">Pickup Date : '.$rd.' </p>
        			<p style="font-size: 14px; text-align: justify; margin: 0%;">Time  : '.$rt.' </p>
        			<p style="font-size: 14px; text-align: justify; margin: 0%;">Cab  : '.$cab.' </p>
        			<p style="font-size: 14px; text-align: justify; margin: 0%;">PicUp Place : '.$fl.' </p>
        			<p style="font-size: 14px; text-align: justify; margin: 0%;">Drop Place : '.$tl.' </p>
        			<p style="font-size: 14px; text-align: justify; margin: 0%;">Trip Type : One Way </p>
        			<p style="font-size: 14px; text-align: justify; margin: 0%;">Km : '.$km.' </p>
        			<p style="font-size: 14px; text-align: justify; margin: 0%;">Fare  : Rs. '.$amt.'/- </p>
        			<p style="font-size: 14px; text-align: justify; margin: 0%;">Extra Km  : 12 </p>
        			<p style="font-size: 14px; text-align: justify; margin: 0%;">Exclude Toll Permit Charge</p>
        			<p style="font-size: 14px; text-align: justify; margin: 0%;">Happy Journey.</p>
        			
        			<p style="font-size: 14px; text-align: justify; margin: 0%;">Kings Taxi</p>
                    <p style="font-size: 14px; text-align: justify; margin: 0%;">Contact 7550075770 </p>
                    <p style="font-size: 14px; text-align: justify; margin: 0%;">Please visit our website <a href="http://kingstaxiservice.com/">http://kingstaxiservice.com/</a></p>
        </div>
        
        </body>
        </html>
        ';
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
        
        // Additional headers
        
        //$headers = 'To: '.$agent.' <'.$email.'>';   // user nm
        $headers .= 'From: Kings Taxi <no-reply@theworking.in>'; // from
        
        
        
        if(mail($to, $subject, $message, $headers))
        {
        //   echo 'yes';
        //  
        }
        else{
        // echo 'no';
        //   header("Location:processorder.php?st=fail");
        }
        
}


    if(isset($_POST['round']))
    {
        $fl = $_POST['fromlocation'];
        $tl = $_POST['tolocation'];
        $nm = $_POST['name'];
        $em = $_POST['email'];
        $num = $_POST['number'];
        $amt = $_POST['amount'];
        $rd = $_POST['reservation_date'];
        $rt = $_POST['reservation_time'];
        $cab = $_POST['cab'];
        $km = $_POST['km'];
        $tm = $_POST['time'];
        
        //mail
	    $fromad=$em;
		$to = "kingstaxibangalore4@gmail.com";
		$subject = 'Booking Confirmation';
		
        $message = '
        <html>
        <head>
        
        <title>Booking Confirmation</title>
        
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,600,600i,700&display=swap" rel="stylesheet">
        
        <style>
        body{
        margin: 0;
        padding: 0;
        width: 100%;
        font-family: "Source Sans Pro", sans-serif;
        color: #5d5d5d;
        }
        
        .order{
        width: 50%;
        height: auto;
        padding: 20px;
        text-align: center;
        margin: 50px auto;
        color: #333;
        }
        .order img{
        display: block;
        margin: 20px auto;
        width: 25%;
        }
        
        
        .order h4{
        position: relative;
        margin: 30px 0px;
        font-size: 1.2em;
        color: #5A2985;
        }
        
        .order a.shopmore{
        color: #5A2985;
        border: 1px solid #5A2985;
        border-radius: 5px;
        padding: 6px 15px;
        text-decoration: none;
        }
        
        .order p{
        margin: 30px 0px;
        color: #4d4d4d;
        font-size: .75em;
        }
        
        h2{
        margin: 0px auto;
        position: relative;
        top: 10px;
        font-size: .8em;
        text-align: center;
        display: block;
        clear: both;
        }
        
        
        @media screen and (device-width: 360px) and (device-height: 640px){
        
        .order{
        width: 80%;
        }
        
        .order img{
        width: 50%;
        }
        
        }
        </style>
        
        </head>
        
        <body>
        <div class="order">
            
            <center><img src="http://theworking.in/kings_taxi/assets/imgs/logo.png" /></center>
        	
        		<h1 style="color:inherit;font-family:Helvetica,Arial,Verdana,sans-serif;font-size:42px;font-weight:bold;line-height:1.2;padding:0;text-align:left;word-wrap:normal; text-align: center">Welcome To Kings Taxi Services</h1>
        			<hr style="border: 1px solid lightgrey;">
        			<p style="font-weight: bold;  font-size: 16px;">Hello Admin, </p>
        			<p style="font-size: 14px; text-align: justify; margin: 0%; margin-right: 10%">
        			Please Note Booking Details</p>
        			
        			<p style="font-size: 14px; text-align: justify; margin: 0%;">Name : '.$nm.' </p>
        			<p style="font-size: 14px; text-align: justify; margin: 0%;">Contact No : '.$num.'</p>
        			<p style="font-size: 14px; text-align: justify; margin: 0%;">Entry Date : '.$dt.' </p>
        			<p style="font-size: 14px; text-align: justify; margin: 0%;">Entry Time : '.$tm.' </p>
        			<p style="font-size: 14px; text-align: justify; margin: 0%;">Pickup Date : '.$rd.' </p>
        			<p style="font-size: 14px; text-align: justify; margin: 0%;">Time  : '.$rt.' </p>
        			<p style="font-size: 14px; text-align: justify; margin: 0%;">Cab  : '.$cab.' </p>
        			<p style="font-size: 14px; text-align: justify; margin: 0%;">PicUp Place : '.$fl.' </p>
        			<p style="font-size: 14px; text-align: justify; margin: 0%;">Drop Place : '.$tl.' </p>
        			<p style="font-size: 14px; text-align: justify; margin: 0%;">Trip Type : Round Trip </p>
        			<p style="font-size: 14px; text-align: justify; margin: 0%;">Km : '.$km.' </p>
        			<p style="font-size: 14px; text-align: justify; margin: 0%;">Fare  : Rs. '.$amt.'/- </p>
        			<p style="font-size: 14px; text-align: justify; margin: 0%;">Extra Km  : 12 </p>
        			<p style="font-size: 14px; text-align: justify; margin: 0%;">Exclude Toll Permit Charge</p>
        			<p style="font-size: 14px; text-align: justify; margin: 0%;">Happy Journey.</p>
        			
        			<p style="font-size: 14px; text-align: justify; margin: 0%;">Kings Taxi</p>
                    <p style="font-size: 14px; text-align: justify; margin: 0%;">Contact 7550075770 </p>
                    <p style="font-size: 14px; text-align: justify; margin: 0%;">Please visit our website <a href="http://kingstaxiservice.com/">http://kingstaxiservice.com/</a></p>
        </div>
        
        </body>
        </html>
        ';
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
        
        // Additional headers
        
        //$headers = 'To: '.$agent.' <'.$email.'>';   // user nm
        $headers .= 'From: Kings Taxi <no-reply@theworking.in>'; // from
        
        
        
        if(mail($to, $subject, $message, $headers))
        {
        //   echo 'yes';
        //  
        }
        else{
        // echo 'no';
        //   header("Location:processorder.php?st=fail");
        }
        
        
        //mail
	    $fromad="no-reply@theworking.in";
		$to = $em;
		$subject = 'Booking Confirmation';
		
        $message = '
        <html>
        <head>
        
        <title>Booking Confirmation</title>
        
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,600,600i,700&display=swap" rel="stylesheet">
        
        <style>
        body{
        margin: 0;
        padding: 0;
        width: 100%;
        font-family: "Source Sans Pro", sans-serif;
        color: #5d5d5d;
        }
        
        .order{
        width: 50%;
        height: auto;
        padding: 20px;
        text-align: center;
        margin: 50px auto;
        color: #333;
        }
        .order img{
        display: block;
        margin: 20px auto;
        width: 25%;
        }
        
        
        .order h4{
        position: relative;
        margin: 30px 0px;
        font-size: 1.2em;
        color: #5A2985;
        }
        
        .order a.shopmore{
        color: #5A2985;
        border: 1px solid #5A2985;
        border-radius: 5px;
        padding: 6px 15px;
        text-decoration: none;
        }
        
        .order p{
        margin: 30px 0px;
        color: #4d4d4d;
        font-size: .75em;
        }
        
        h2{
        margin: 0px auto;
        position: relative;
        top: 10px;
        font-size: .8em;
        text-align: center;
        display: block;
        clear: both;
        }
        
        
        @media screen and (device-width: 360px) and (device-height: 640px){
        
        .order{
        width: 80%;
        }
        
        .order img{
        width: 50%;
        }
        
        }
        </style>
        
        </head>
        
        <body>
        <div class="order">
            
            <center><img src="http://theworking.in/kings_taxi/assets/imgs/logo.png" /></center>
        	
        		<h1 style="color:inherit;font-family:Helvetica,Arial,Verdana,sans-serif;font-size:42px;font-weight:bold;line-height:1.2;padding:0;text-align:left;word-wrap:normal; text-align: center">Welcome To Kings Taxi Services</h1>
        			<hr style="border: 1px solid lightgrey;">
        			<p style="font-weight: bold;  font-size: 16px;">Hello Admin, </p>
        			<p style="font-size: 14px; text-align: justify; margin: 0%; margin-right: 10%">
        			Please Note Your Booking Details</p>
        			
        			<p style="font-size: 14px; text-align: justify; margin: 0%;">Name : '.$nm.' </p>
        			<p style="font-size: 14px; text-align: justify; margin: 0%;">Contact No : '.$num.'</p>
        			<p style="font-size: 14px; text-align: justify; margin: 0%;">Entry Date : '.$dt.' </p>
        			<p style="font-size: 14px; text-align: justify; margin: 0%;">Entry Time : '.$tm.' </p>
        			<p style="font-size: 14px; text-align: justify; margin: 0%;">Pickup Date : '.$rd.' </p>
        			<p style="font-size: 14px; text-align: justify; margin: 0%;">Time  : '.$rt.' </p>
        			<p style="font-size: 14px; text-align: justify; margin: 0%;">Cab  : '.$cab.' </p>
        			<p style="font-size: 14px; text-align: justify; margin: 0%;">PicUp Place : '.$fl.' </p>
        			<p style="font-size: 14px; text-align: justify; margin: 0%;">Drop Place : '.$tl.' </p>
        			<p style="font-size: 14px; text-align: justify; margin: 0%;">Trip Type : Round Trip </p>
        			<p style="font-size: 14px; text-align: justify; margin: 0%;">Km : '.$km.' </p>
        			<p style="font-size: 14px; text-align: justify; margin: 0%;">Fare  : Rs. '.$amt.'/- </p>
        			<p style="font-size: 14px; text-align: justify; margin: 0%;">Extra Km  : 12 </p>
        			<p style="font-size: 14px; text-align: justify; margin: 0%;">Exclude Toll Permit Charge</p>
        			<p style="font-size: 14px; text-align: justify; margin: 0%;">Happy Journey.</p>
        			
        			<p style="font-size: 14px; text-align: justify; margin: 0%;">Kings Taxi</p>
                    <p style="font-size: 14px; text-align: justify; margin: 0%;">Contact 7550075770 Please visit our website <a href="http://kingstaxiservice.com">http://kingstaxiservice.com</a></p>
        </div>
        
        </body>
        </html>
        ';
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
        
        // Additional headers
        
        //$headers = 'To: '.$agent.' <'.$email.'>';   // user nm
        $headers .= 'From: Kings Taxi <no-reply@theworking.in>'; // from
        
        
        
        if(mail($to, $subject, $message, $headers))
        {
        //   echo 'yes';
        //  
        }
        else{
        // echo 'no';
        //   header("Location:processorder.php?st=fail");
        }
        
}
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
                     <p>
                         <img class="img-fluid mb-5" src="assets/img/thanks.png" alt="404">
                     </p>
                     <p style="font-size: 18px;">
                         Your Booking Is Register Successfully. Our Team will be contact As soon as possible. Our Team will be sent your Trip Details Please Check Your Mail Inbox and Spam
                     </p>
                     <a class="gauto-btn cv" href="index.php" style="color:#000">Return to Home :)</a>
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


