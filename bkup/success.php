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
        
        
        //mail
	    $fromad="no-reply@kingstaxi.in";
		$to = $em;
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
            
            .prow {
                
                font-family: "Roboto", sans-serif;
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
              table tr td,table tr th{
                 font-size: 16px; 
              }
            
              /*table tr th{*/
              /*  padding-left: 1.5rem !important; */
              /*}*/
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
                    <div class="col-md-9" style="display: inline-block;    padding-bottom: 10px; font-weight:600">
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
        $days = $_POST['days'];
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
                <p class="head mb-0" style="font-size:16px">Please Note Your Booking Details</p>
                <hr>
            </div>
            <div class="pad-50" style="padding-top:0px">
                <div class="prow">
                    <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                        Name &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                        '.$nm.'
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
                        Entry Date &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                        '.$dt.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                        Entry Time &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                        '.$tm.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                        PickUp Date &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                        '.$rd.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                        Time &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                        '.$rt.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                        Cab &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                        '.$cab.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                        PickUp Place &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                        '.$fl.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                        Drop Place &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                        '.$tl.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                        Trip Type &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                        Round Trip
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                        KM &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                        '.$km.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                        Fare &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                        '.$amt.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                        Extra KM &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
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
        
        
        //mail
	    $fromad="no-reply@kingstaxi.in";
		$to = $em;
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
                 background: #ecedfa;
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
                    <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                        Name &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                        '.$nm.'
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
                        Entry Date &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                        '.$dt.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                        Entry Time &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                        '.$tm.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                        PickUp Date &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                        '.$rd.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                        Time &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                        '.$rt.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                        Cab &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                        '.$cab.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                        PickUp Place &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                        '.$fl.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                        Drop Place &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                        '.$tl.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                        Trip Type &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                        Round Trip
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                        KM &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                        '.$km.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                        Fare &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                        '.$amt.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                        Extra KM &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
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
        
}
?>

<?php include('include/header.php'); ?>
          
      <!-- Offers Area Start -->
      <section class="x_offer_car_main_wrapper float_left padding_tb_100" id="Our_Tariff">
         <div class="container">
            <div class="row text-center">
               <div class="col-md-12">
                   <div class="site-heading">
                        <h4>Hello <?php echo $_POST['name']; ?></h4>
                   </div>
                  <div class="site-heading">
                     <p>
                         <img class="img-fluid mb-5" src="images/thanks.png" alt="404">
                     </p>
                     <p style="font-size: 18px;">
                         Your Booking Is Register Successfully. Our Team will be contact As soon as possible. Our Team will be sent your Trip Details Please Check Your Mail Inbox and Spam
                     </p>
                     <p class="x_car_offer_bottom_btn float_left">
                        <ul>
							<li><a href="index.php">Return to Home :)</a></li>
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