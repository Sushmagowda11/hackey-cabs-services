<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';

$datePart = date('dmy');
$randomNumber = mt_rand(100000, 999999);
$bookingId = $datePart . $randomNumber;

$dt = date("d-m-Y");
    if(isset($_POST['oneway']))
    {
        $fl = $_POST['fromlocation'];
        $tl = $_POST['tolocation'];
        $nm = $_POST['name'];
        $em = $_POST['email'];
        $num = $_POST['number'];
        $amt = $_POST['amount'];

        $FormattingDateTime = new DateTime($_POST['reservation_date']);
        $rd = $FormattingDateTime->format('d-m-Y');

        $rt = $_POST['reservation_time'];
        $cab = $_POST['cab'];
        $km = $_POST['km'];
        $tm = $_POST['time'];
        $duration = $_POST['duration'];
        $ext = $_POST['ext'];
        
        // $ext = $km-130;
        
        // if($ext > "0")
        // {
        //     $ext = "13Rs / Km";
        // }
        // else
        // {
        //     $ext ="13Rs / Km";
        // }
        
        // if($km > "130 km")
        // {
        //     $note = "";
        // }
        // else
        // {
        //     $note =  "Minimum Charges you need to pay for 130 Kms";
        // }
        
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
			
			$message = "*Booking* \r\n \r\n BookingId: $bookingId \r\n Name : $nm \r\n Phone : +91$num \r\n Pickup : $fl \r\n Drop : $tl \r\n Pickup Date : $rd \r\n Pickup Time  : $rt \r\n Cab  : $cab \r\n Trip Type : One Way \r\n Km : $km \r\n Fare  : Rs. $amt \r\n Extra Km  : $ext \r\n Email: $email";
			
			$httpClient = new GuzzleHttp\Client();
			
			$response = $httpClient->post($apiUrl . 'sendMessage', [
				'json' => [
					'chat_id' => $chatId,
					'text' => $message,
				],
			]);
			
			$telegram_result = json_decode($response->getBody(), true);
			
			if ($telegram_result['ok']) {
				// echo 'Message sent successfully! ';
			} else {
				// echo 'Error sending message: ' . $telegram_result['description'];
			}

		// TELEGRAM MESSAGE(ONE WAY) ENDS
        
        // SMTP MAILER(ONE WAY) STARTS

        $mail = new PHPMailer(true);

        try {
           //Server settings
           $mail->isSMTP();
           $mail->Host       = 'kingstaxiservice.com';  // Specify your SMTP server
           $mail->SMTPAuth   = true;
           $mail->Username   = 'no-reply@kingstaxiservice.com';     // SMTP username
           $mail->Password   = 'lQt!9qU8bfaT';     // SMTP password
           $mail->SMTPSecure = 'ssl';
           $mail->Port       = 465;

           //Recipients
           $mail->setFrom('no-reply@kingstaxiservice.com', 'Kings Taxi');
           $mail->addAddress($em, $nm);  // Add a recipient

           // Content
           $mail->isHTML(true);
           $mail->Subject = 'Booking Confirmation';
           $mail->Body    = '
           <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <title>Taxi Rental</title>
        
        <style>
            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            
            html,body{
                width: 100%;
                height: 100%;
                background: #e5f8ff;
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
                <p class="head mb-0" style="font-size:16px">Enquire Booking Details</p>
                <hr>
            </div> 
            <div class="pad-50" style="padding-top:0px">
                <div class="prow">
                <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                    Booking ID &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                        '.$bookingId.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                        Name &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                        '.$nm.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                        Email ID &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                        '.$em.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                        Contact No &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;padding-bottom: 10px; font-weight:600">
                        <b>'.$num.'</b>
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                        PickUp Location &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                        '.$fl.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                        Drop Location &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                        '.$tl.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                        Vehicle Type &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                        '.$cab.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                        Journey Type &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                        Oneway Trip
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                        Travel Date & Time &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                        '.$rd.' '.$rt.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                        Trip Distance &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                        '.$km.' Km
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                        Trip Duration &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                        '.$duration.'(Approx)
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                        Trip Estimation &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                        Rs.'.$amt.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                        Extra per KM &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                        '.$ext.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                        Driver Allowance &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                        INCLUDED
                    </div>
                    <br>
                </div>
                
                <br>
                
                <p>For Customer Intimation: Toll Gate, Permit, Parking ,Hill Station Charges extra</p>
                <p class="" style="color:#000"><b>Happy Journey</b></p>
                <p>Contact: <a href="#">9483220300</a> Please visit Our Website</p>
                <p class="">https://kingstaxi.in</p>
            </div>
        </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
    </html>';
           // $mail->SMTPDebug = 2;  // Enable verbose debug output

           // Send the email
           $mail->send();
        //    echo 'Mail has been sent ';
        } catch (Exception $e) {
        //    echo "Mail could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }

        // SMTP MAILER(ONE WAY) ENDS

        
        
}


    if(isset($_POST['round']))
    {
        $fl = $_POST['fromlocation'];
        $tl = $_POST['tolocation'];
        $nm = $_POST['name'];
        $em = $_POST['email'];
        $num = $_POST['number'];
        $amt = $_POST['amount'];
        
        $FormattingDateTime = new DateTime($_POST['reservation_date']);
        $rd = $FormattingDateTime->format('d-m-Y');

        $rt = $_POST['reservation_time'];
        $cab = $_POST['cab'];
        $km = $_POST['km'];
        $tm = $_POST['time'];
        $days = $_POST['days'];
        $duration = $_POST['duration'];
        //  $ext = $km-250;
         
        // if($ext > "0")
        // {
        //     $ext = "13Rs / Km";
        // }
        // else
        // {
        //     $ext ="13Rs / Km";
        // }
        $ext = $_POST['ext'];
        
        // if($km > "250 km")
        // {
        //     $note = "";
        // }
        // else
        // {
        //     $note =  "Minimum Charges you need to pay for 130 Kms";
        // }
        
        // TELEGRAM MESSAGE(ROUND TRIP) STARTS
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
			
			$message = "*Booking* \r\n \r\n Round Trip($days days) \r\n BookingId: $bookingId \r\n Name : $nm \r\n Phone : +91$num \r\n Pickup : $fl \r\n Drop : $tl \r\n Pickup Date : $rd \r\n Pickup Time : $rt \r\n Cab : $cab \r\n Trip Type : Round Trip \r\n Km : $km \r\n Fare : Rs. $amt \r\n Extra Km  : $ext \r\n Email : $email";
			
			$httpClient = new GuzzleHttp\Client();
			
			$response = $httpClient->post($apiUrl . 'sendMessage', [
				'json' => [
					'chat_id' => $chatId,
					'text' => $message,
				],
			]);
			
			$telegram_result = json_decode($response->getBody(), true);
			
			if ($telegram_result['ok']) {
				// echo 'Message sent successfully! ';
			} else {
				// echo 'Error sending message: ' . $telegram_result['description'];
			}

		// TELEGRAM MESSAGE(ROUND TRIP) ENDS

        // SMTP MAILER(ROUND TRIP) STARTS

        $mail = new PHPMailer(true);

        try {
           //Server settings
           $mail->isSMTP();
           $mail->Host       = 'kingstaxiservice.com';  // Specify your SMTP server
           $mail->SMTPAuth   = true;
           $mail->Username   = 'no-reply@kingstaxiservice.com';     // SMTP username
           $mail->Password   = 'lQt!9qU8bfaT';     // SMTP password
           $mail->SMTPSecure = 'ssl';
           $mail->Port       = 465;

           //Recipients
           $mail->setFrom('no-reply@kingstaxiservice.com', 'Kings Taxi');
           $mail->addAddress($em, $nm);  // Add a recipient

           // Content
           $mail->isHTML(true);
           $mail->Subject = 'Booking Confirmation';
           $mail->Body    = '
           <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <title>Taxi Rental</title>
        
        <style>
            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            
            html,body{
                width: 100%;
                height: 100%;
                background: #e5f8ff;
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
                <p class="head mb-0" style="font-size:16px">Enquire Booking Details</p>
                <hr>
            </div> 
            <div class="pad-50" style="padding-top:0px">
                <div class="prow">
                <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                    Booking ID &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                        '.$bookingId.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                        Name &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                        '.$nm.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                        Email ID &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                        '.$em.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                        Contact No &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;padding-bottom: 10px; font-weight:600">
                        <b>'.$num.'</b>
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                        PickUp Location &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                        '.$fl.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                        Drop Location &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                        '.$tl.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                        Vehicle Type &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                        '.$cab.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                        Journey Type &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                        Round Trip
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                        No of Days &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                        '.$days.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                        Travel Date & Time &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                        '.$rd.' '.$rt.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                        Trip Distance &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                        '.$km.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                        Trip Duration &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                        '.$duration.'(Approx)
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                        Trip Estimation &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                        '.$amt.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                        Extra per KM &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                        '.$ext.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                        Driver Allowance &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                        INCLUDED
                    </div>
                    <br>
                </div>
                
                <br>
                
                <p>For Customer Intimation: Toll Gate, Permit, Parking ,Hill Station Charges extra</p>
                <p class="" style="color:#000"><b>Happy Journey</b></p>
                <p>Contact: <a href="#">9483220300</a> Please visit Our Website</p>
                <p class="">https://kingstaxi.in</p>
            </div>
        </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
    </html>';
           // $mail->SMTPDebug = 2;  // Enable verbose debug output

           // Send the email
           $mail->send();
         //   echo 'Mail has been sent ';
        } catch (Exception $e) {
         //   echo "Mail could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }

        // SMTP MAILER(ROUND TRIP) ENDS
        
}
?>

<?php include('include/header.php'); ?>
          
      <!-- Offers Area Start -->
      <section class="x_offer_car_main_wrapper float_left padding_tb_100" id="Our_Tariff">
         <div class="container">
            <div class="row text-center">
               <div class="col-md-12">
                   <div class="site-heading">
                        <h3 style="font-size: 16px; font-weight:600">Hello <?php echo $_POST['name']; ?></h4>
                   </div>
                  <div class="site-heading">
                     <p>
                         <img class="img-fluid mb-5" src="images/thanks.png" alt="404" style="width: 127px; margin-bottom: 2rem!important; margin-top: 2rem!important;">
                     </p>
                     <p style="font-size: 16px;">
                         Your booking is register successfully. Our team will be contact As soon as possible. Trip Details sent to your Email.
                     </p>
                     <p class="x_car_offer_bottom_btn float_left">
                        <ul>
							<li><a href="index.php">Return to Home</a></li>
							<!--<li><a href="tel:+91 75500 75770">Call Now</a></li>-->
						</ul>
                     </p>
                     
                  </div>
               </div>
            </div>
		</div>
      </section>
      <!-- Offers Area End -->

	<?php include('include/footer.php'); ?>