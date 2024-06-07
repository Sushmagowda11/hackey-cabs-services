<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <title>Booking Confirmation</title>
            <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <style>
            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            
            html,body{
                width: 100%;
                height: 100%;
                background: rgba(4,220,5,255);
                padding: 7px;
            }
            
            p{
                margin-bottom: 3px !important;
            }
            
            .mail_box{
                 background: rgba(199,254,197,255);
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
                   background: rgba(199,254,197,255);
            }
            
            .pad-l{
                padding-left: 200px;
            }
            
            
            .logo_area{
                width: 100%;
                background: rgba(199,254,197,255);
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
        <div style="background: rgba(4,220,5,255);padding: 10px;">    
        <div class="mail_box">
            
            <div class="logo_area ">
                 <img width="250px" src="https://friendscabservice.com/images/logo.jpeg" alt="">
            </div>
            <div class="pad-50 pb-0">
                <p class="head mb-0" style="font-size:16px">Welcome To <b>Friends Cab Service</b></p>
                <p class="head mb-0" style="font-size:16px">Please Note Your Booking Details</p>
                <hr>
            </div>
            <div class="pad-50" style="padding-top:0px">
                <div class="prow">
                    <div class="col-md-3" style="display: inline-block;">
                        Name &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;">
                        '.$nm.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;">
                        Contact No &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block; font-weight:600">
                        <b>'.$num.'</b>
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;">
                        Entry Date &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;">
                        '.$dt.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;">
                        Entry Time &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;">
                        '.$tm.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;">
                        PickUp Date &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;">
                        '.$rd.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;">
                        Time &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;">
                        '.$rt.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;">
                        Cab &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;">
                        '.$cab.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;">
                        PickUp Place &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;">
                        '.$fl.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;">
                        Drop Place &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;">
                        '.$tl.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;">
                        Trip Type &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;">
                        One Way
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;">
                        KM &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-8" style="display: inline-block;">
                        '.$km.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;">
                        Fare &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;">
                        '.$amt.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;">
                        Extra KM &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-8" style="display: inline-block;">
                        '.$ext.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;">
                        Note &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;">
                        '.$note.'
                    </div>
                </div>
                
                <br>
                
                <p>Exclude Toll Permit Charge</p>
                <p class="" style="color:#000"><b>Happy Journey</b></p>
                <p>Contact: 75500 75770 Please visit Our Website</p>
                <p class="">https://friendscabservice.com/</p>
            </div>
        </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
    </html>