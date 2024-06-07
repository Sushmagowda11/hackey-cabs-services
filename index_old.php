<?php include('include/header.php'); ?>
<style>
   button.gauto-theme-btn {
   float: left;
   width: 150px;
   height: 50px;
   line-height: 50px;
   text-align: center;
   background: #01176e;
   color: #ffffff;
   border: 1px solid transparent;
   /* text-transform: uppercase; */
   -webkit-border-radius: 10px;
   -moz-border-radius: 10px;
   border-radius: 10px;
   }
   button.gauto-theme-btn:hover {
   background: transparent;
   border: 1px solid #01176e;
   color: #01176e;
   }
</style>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCVxtI96mNqpX90GIqOhHgJutRCy6ifibI&libraries=places"></script>
<script>
   function initialize() {
     var input = document.getElementById('searchTextField');
     var autocomplete = new google.maps.places.Autocomplete(input);
       google.maps.event.addListener(autocomplete, 'place_changed', function () {
           var place = autocomplete.getPlace();
           document.getElementById('city2').value = place.name;
           document.getElementById('cityLat').value = place.geometry.location.lat();
           document.getElementById('cityLng').value = place.geometry.location.lng();
       });
   }       
   
   function initialize1() {
       var input1 = document.getElementById('searchTextField1');
       var autocomplete = new google.maps.places.Autocomplete(input1);
       google.maps.event.addListener(autocomplete, 'place_changed', function () {
           var place1 = autocomplete.getPlace();
           document.getElementById('city21').value = place1.name;
           document.getElementById('cityLat1').value = place1.geometry.location.lat();
           document.getElementById('cityLng1').value = place1.geometry.location.lng();
       });
   }
   
   function initialize2() {
       var input1 = document.getElementById('searchTextField2');
       var autocomplete = new google.maps.places.Autocomplete(input1);
       google.maps.event.addListener(autocomplete, 'place_changed', function () {
           var place1 = autocomplete.getPlace();
           document.getElementById('city22').value = place1.name;
           document.getElementById('cityLat2').value = place1.geometry.location.lat();
           document.getElementById('cityLng2').value = place1.geometry.location.lng();
       });
   }
   
   function initialize3() {
       var input1 = document.getElementById('searchTextField3');
       var autocomplete = new google.maps.places.Autocomplete(input1);
       google.maps.event.addListener(autocomplete, 'place_changed', function () {
           var place1 = autocomplete.getPlace();
           document.getElementById('city23').value = place1.name;
           document.getElementById('cityLat3').value = place1.geometry.location.lat();
           document.getElementById('cityLng3').value = place1.geometry.location.lng();
       });
   }
   google.maps.event.addDomListener(window, 'load', initialize);
   google.maps.event.addDomListener(window, 'load', initialize1);
   google.maps.event.addDomListener(window, 'load', initialize2);
   google.maps.event.addDomListener(window, 'load', initialize3);
</script> 
<!-- hs Slider Start -->
<!--<div class="slider-area float_left" id="Home">-->
<!--   <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">-->
<!--      <div class="carousel-inner" role="listbox" >-->
<!--         <div class="carousel-item active">-->
<!--            <div class="carousel-captions caption-1">-->
<!--               <div class="container">-->
<!--                  <div class="row">-->
<!--                     <div class="col-md-12">-->
<!--                        <div class="content">-->
<!--                           <h2 data-animation="animated fadeInUp">Kings Taxi Rental<br>-->
<!--                              <span>Are you Looking for car rental for your upcoming trip.</span>-->
<!--                           </h2>-->
<!--                           <div class="clear"></div>-->
<!--                        </div>-->
<!--                     </div>-->
<!--                  </div>-->
<!--               </div>-->
<!--            </div>-->
<!--         </div>-->
<!--         <div class="carousel-item">-->
<!--            <div class="carousel-captions caption-2">-->
<!--               <div class="container">-->
<!--                  <div class="row">-->
<!--                     <div class="col-md-12">-->
<!--                        <div class="content">-->
<!--                           <p data-animation="animated fadeInUp" style="color: #01176e;"><b>Welcome To</b></p>-->
<!--                           <h2 data-animation="animated fadeInUp">Kings Taxi Rental<br>-->
<!--                              <span>Customers most trusted cab service provider in Tamil Nadu.</span>-->
<!--                           </h2>-->
<!--                           <div class="clear"></div>-->
<!--                        </div>-->
<!--                     </div>-->
<!--                  </div>-->
<!--               </div>-->
<!--            </div>-->
<!--         </div>-->
<!--         <ol class="carousel-indicators">-->
<!--            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"><span class="number"></span>-->
<!--            </li>-->
<!--            <li data-target="#carousel-example-generic" data-slide-to="1" class=""><span class="number"></span>-->
<!--            </li>-->
<!--         </ol>-->
<!--         <div class="carousel-nevigation">-->
<!--            <a class="prev" href="#carousel-example-generic" role="button" data-slide="prev">	<i class="fa fa-angle-left"></i>-->
<!--            </a>-->
<!--            <a class="next" href="#carousel-example-generic" role="button" data-slide="next"> <i class="fa fa-angle-right"></i>-->
<!--            </a>-->
<!--         </div>-->
<!--      </div>-->
<!--   </div>-->
<!--</div>-->


<div class="x_responsive_form_wrapper float_left" id="booking" style="padding-bottom:60px; margin-top:0px">
  <section>
      <div class="banner" style="background-image: url(images/bg_body1.jpg); width: 100%; */height: 574px; ">
         
         <div class="container" style=" height: 470px;">
         <h4 style="color: white; font-size: 24px;  text-shadow: 0px 1px 1px black;text-align: center; padding-top: 129px; font-weight: 700;  margin-top: 0px; margin-bottom: 54px;">Reliable taxi and cab services in Bangalore and South India - Book affordable outstation cabs for the best travel experience. </h4>
         <div class="x_slider_form_main_wrapper float_left" style="margin-top:  180px ;">
         <div class="row">
            <div class="col-md-12">
               <div class="x_offer_tabs_wrapper" >
                  <ul class="nav nav-tabs">
                     <li class="nav-item" ><a class="nav-link active" data-toggle="tab" href="#menu1" style="background: #101313; text-transform: capitalize;"> Oneway Trip</a></li>
                     <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#menu2" style=" text-transform: capitalize;"> Round Trip</a></li>
                  </ul>
               </div>
               <div class="tab-content">
                  <div id="menu1" class="tab-pane active">
                     <form action="search.php" method="post">
                        <div class="row">
                           <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                              <div class="x_slider_form_input_wrapper float_left">
                                 <h3>Name</h3>
                                 <input type="text" placeholder="Enter Name" name="name" required/>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                              <div class="x_slider_form_input_wrapper float_left">
                                 <h3>Phone No.</h3>
                                 <input type="tel" placeholder="Enter Contact No" maxlength="10" value="" required name="number"/>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                              <div class="x_slider_form_input_wrapper float_left">
                                 <h3>Email Id</h3>
                                 <input type="text" placeholder="Enter Email Id" name="email" required/>
                              </div>
                           </div>
                           <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                              <div class="x_slider_form_input_wrapper float_left">
                                 <h3>Pick Up Location</h3>
                                 <input id="searchTextField" type="text" name="fromlocation" required size="50" placeholder="Enter a location" autocomplete="on" runat="server" />  
                                 <input type="hidden" id="city2" name="city2" />
                                 <input type="hidden" id="cityLat" name="cityLat" />
                                 <input type="hidden" id="cityLng" name="cityLng" />
                              </div>
                           </div>
                           <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                              <div class="x_slider_form_input_wrapper float_left">
                                 <h3>Drop Location</h3>
                                 <input id="searchTextField1" type="text" size="50" name="tolocation" required placeholder="Enter a location" autocomplete="on" runat="server" />  
                                 <input type="hidden" id="city21" name="city21" />
                                 <input type="hidden" id="cityLat1" name="cityLat1" />
                                 <input type="hidden" id="cityLng1" name="cityLng1" />
                              </div>
                           </div>
                           <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                              <div class="x_slider_form_input_wrapper float_left">
                                 <h3>Pick Up Date</h3>
                                 <input type="date" placeholder="Enter Pick Up Date" required name="reservation_date" />
                              </div>
                           </div>
                           <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                              <div class="x_slider_form_input_wrapper float_left">
                                 <h3>Pick Up Hour</h3>
                                 <input type="time" placeholder="Enter Pick Up Hour" required name="reservation_time"/>
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="x_slider_checkbox_bottom float_left">
                                 <div class="x_slider_checout_right">
                                    <ul>
                                       <li>
                                          <button type="submit" name="oneway" class="gauto-theme-btn">Submit Now <i class="fa fa-arrow-right"></i></button>
                                          <!--<a href="#">Submit <i class="fa fa-arrow-right"></i></a>-->
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
                  <div id="menu2" class="tab-pane fade">
                     <form action="search.php" method="post">
                        <div class="row">
                           <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                              <div class="x_slider_form_input_wrapper float_left">
                                 <h3>Name</h3>
                                 <input type="text" placeholder="Enter Name" name="name" required />
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                              <div class="x_slider_form_input_wrapper float_left">
                                 <h3>Contact No</h3>
                                 <input type="tel" placeholder="Enter Contact No" maxlength="10" value="" name="number" required/>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                              <div class="x_slider_form_input_wrapper float_left">
                                 <h3>Email Id</h3>
                                 <input type="text" placeholder="Enter Email Id" name="email" required />
                              </div>
                           </div>
                           <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                              <div class="x_slider_form_input_wrapper float_left">
                                 <h3>Pick Up Location</h3>
                                 <input id="searchTextField2" type="text" name="fromlocation" required size="50" placeholder="Enter a location" autocomplete="on" runat="server" />  
                                 <input type="hidden" id="city22" name="city2" />
                                 <input type="hidden" id="cityLat2" name="cityLat" />
                                 <input type="hidden" id="cityLng2" name="cityLng" />
                              </div>
                           </div>
                           <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                              <div class="x_slider_form_input_wrapper float_left">
                                 <h3>Drop Location</h3>
                                 <input id="searchTextField3" type="text" size="50" name="tolocation" required placeholder="Enter a location" autocomplete="on" runat="server" />  
                                 <input type="hidden" id="city23" name="city21" />
                                 <input type="hidden" id="cityLat3" name="cityLat1" />
                                 <input type="hidden" id="cityLng3" name="cityLng1" />
                              </div>
                           </div>
                           <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                              <div class="x_slider_form_input_wrapper float_left">
                                 <h3>Pick Up Date</h3>
                                 <input type="date" placeholder="Enter Pick Up Date" name="reservation_date" required />
                              </div>
                           </div>
                           <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                              <div class="x_slider_form_input_wrapper float_left">
                                 <h3>Pick Up Hour</h3>
                                 <input type="time" placeholder="Enter Pick Up Hour"  name="reservation_time" required />
                              </div>
                           </div>
                           <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                              <div class="x_slider_form_input_wrapper float_left">
                                 <h3>Number Of Days</h3>
                                 <input type="text" placeholder="Number Of Days" required name="days" />
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="x_slider_checkbox_bottom float_left">
                                 <div class="x_slider_checout_right">
                                    <ul>
                                       <li>
                                          <button type="submit" name="round" class="gauto-theme-btn">Submit Now <i class="fa fa-arrow-right"></i></button>
                                          <!--<a href="#">Submit <i class="fa fa-arrow-right"></i></a>-->
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      </div>
</section>
   </div>
   
</div>
<!-- xs offer car tabs Start -->
 
 <div class="x_why_main_wrapper" id="About"  style="padding-bottom: 125px; "  >
 
   <div class="x_why_img_overlay"></div>
   <div class="container">
      <div class="x_why_left_main_wrapper" style="-webkit-animation: movebounce 0s linear infinite; ">
         <img src="images/taxi-app-concept.jpg" alt="car_img" style="margin-left: 500px; height: 300px; width: 450px;" >
      </div>
      <div class="x_why_right_main_wrapper"  >
         <h3 style="text-transform: capitalize;" >About</h3>
         <br />
         <p>Empowered by a skilled team well-versed in the nuances of car rental services, we excel in resolving any concerns related to renting a car, ensuring a seamless experience for your bookings and transport needs. In Bangalore, a city adorned with numerous achievements, reliable transportation is paramount. Embrace the convenience of our taxi service in Indore, proudly offered by a leading cab booking provider in Karnataka state. The distinct and trustworthy quality assurance provided is unmatched, and our unwavering commitment to customer trust and comfort sets us apart. Choose us for the best cars at the most reasonable prices, placing your satisfaction at the heart of our service.</p>
         <br/><br/>
      </div>
   </div>
</div> 
 


<div class="x_offer_car_main_wrapper float_left padding_tb_100" id="Tariff" >
<!-- <img src="images/t_bg.jpg"  > -->
   <div class="container-fluid" >
       
      <div class="row">
         
         <div class="col-md-12">
            <div class="x_offer_car_heading_wrapper float_left">
               <!-- <h4>Our Tariff</h4> -->
               <h3 style="text-transform: capitalize; font-size: 20px; ">Oneway Trip</h3>
            </div>
         </div>
         <div class="col-md-12" style="margin-top:50px;">
            <div class="tab-content">
               <div id="home" class="tab-pane active">
                  <div class="row">
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
                                 <h3>Rs 14</h3>
                                 <p>
                                    <br>/ Km
                                 </p>
                              </div>
                           </div>
                           <div class="x_car_offer_heading float_left">
                              <h2><a href="#">Sedan  </a></h2>
                              <p>Many more sedan cars.</p>
                              <!--<p>Minimum 130km charges need to pay.</p>-->
                           </div>
                           <div class="x_car_offer_bottom_btn float_left">
                              <ul>
                                 <li><a href="#booking" style="background: #d95a0c;">Book now</a>
                                 </li>
                                 <li><a href="tel:+91 9483220300">Call Now</a></li>
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
                           <div class="x_car_offer_price float_left">
                              <div class="x_car_offer_price_inner">
                                 <!--<h6><i class="fa fa-car"></i> Driver charges Rs 400/- per day</h6>-->
                                 <h3>Rs 14</h3>
                                 <p>
                                    <br>/ Km
                                 </p>
                              </div>
                           </div>
                           <div class="x_car_offer_heading float_left">
                              <h2><a href="#">Sedan Etios</a></h2>
                              <p>Many more sedan cars.</p>
                              <!--<p>Minimum 130km charges need to pay.</p>-->
                           </div>
                           <div class="x_car_offer_bottom_btn float_left">
                              <ul>
                                 <li><a href="#booking" style="background: #d95a0c;">Book now</a>
                                 </li>
                                 <li><a href="tel:+91 9483220300">Call Now</a></li>
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
                              <i class="fa fa-star-half-o" aria-hidden="true"></i> &nbsp;    4.7 | 2564 Reviews
                           </div>
                           <div class="x_car_offer_img float_left">
                              <img src="img/c3.png" alt="img" width="220px">
                           </div>
                           <div class="x_car_offer_price float_left">
                              <div class="x_car_offer_price_inner">
                                 <!--<h6><i class="fa fa-car"></i> Driver charges Rs 400/- per day</h6>-->
                                 <h3>Rs 19</h3>
                                 <p>
                                    <br>/ Km
                                 </p>
                              </div>
                           </div>
                           <div class="x_car_offer_heading float_left">
                              <h2><a href="#">SUV   </a></h2>
                              <p>Many more innova cars.</p>
                              <!--<p>Minimum 130km charges need to pay.</p>-->
                           </div>
                           <div class="x_car_offer_bottom_btn float_left">
                              <ul>
                                 <li><a href="#booking" style="background: #d95a0c;">Book now</a>
                                 </li>
                                 <li><a href="tel:+91 9483220300">Call Now</a></li>
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
                                 <h3>Rs 22</h3>
                                 <p>
                                    <br>/ Km
                                 </p>
                              </div>
                           </div>
                           <div class="x_car_offer_heading float_left">
                              <h2><a href="#">SUV Innova Crysta</a></h2>
                              <p>Many more SUV cars.</p>
                              <!--<p>Minimum 130km charges need to pay.</p>-->
                           </div>
                           <div class="x_car_offer_bottom_btn float_left">
                              <ul>
                                 <li><a href="#booking" style="background: #d95a0c;">Book now</a>
                                 </li>
                                 <li><a href="tel:+91 9483220300">Call Now</a></li>
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
</div>
<!-- xs offer car tabs End -->
<!-- xs offer car tabs Start -->
<div class="x_offer_car_main_wrapper float_left" style="padding-bottom:100px;">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-12">
            <div class="x_offer_car_heading_wrapper float_left">
               <!-- <h4>Our Tariff</h4> -->
               <h3 style="font-size: 20px; text-transform:capitalize; font-size: 20px;">Round Trip</h3>
            </div>
         </div>
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
                           <div class="x_car_offer_price float_left">
                              <div class="x_car_offer_price_inner">
                                 <h6><i class="fa fa-car"></i> Driver charges Rs 400/- per day</h6>
                                 <h3>Rs 12</h3>
                                 <p>
                                    <br>/ Km
                                 </p>
                              </div>
                           </div>
                           <div class="x_car_offer_heading float_left">
                              <h2><a href="#">Sedan  </a></h2>
                              <p>Many more sedan cars.</p>
                              <p>Minimum 300 km charges need to pay.</p>
                           </div>
                           <div class="x_car_offer_bottom_btn float_left">
                              <ul>
                                 <li><a href="#booking" style="background: #d95a0c;">Book now</a>
                                 </li>
                                 <li><a href="tel:+91 9483220300">Call Now</a></li>
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
                           <div class="x_car_offer_price float_left">
                              <div class="x_car_offer_price_inner">
                                 <h6><i class="fa fa-car"></i> Driver charges Rs 400/- per day</h6>
                                 <h3>Rs 12</h3>
                                 <p>
                                    <br>/ Km
                                 </p>
                              </div>
                           </div>
                           <div class="x_car_offer_heading float_left">
                              <h2><a href="#">Sedan Etios </a></h2>
                              <p>Many more sedan cars.</p>
                              <p>Minimum 300 km charges need to pay.</p>
                           </div>
                           <div class="x_car_offer_bottom_btn float_left">
                              <ul>
                                 <li><a href="#booking" style="background: #d95a0c;">Book now</a>
                                 </li>
                                 <li><a href="tel:+91 9483220300">Call Now</a></li>
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
                           <div class="x_car_offer_price float_left">
                              <div class="x_car_offer_price_inner">
                                 <h6><i class="fa fa-car"></i> Driver charges Rs 400/- per day</h6>
                                 <h3>Rs 17</h3>
                                 <p>
                                    <br>/ Km
                                 </p>
                              </div>
                           </div>
                           <div class="x_car_offer_heading float_left">
                              <h2><a href="#">SUV  </a></h2>
                              <p>Many more SUV cars.</p>
                              <p>Minimum 300 km charges need to pay.</p>
                           </div>
                           <div class="x_car_offer_bottom_btn float_left">
                              <ul>
                                 <li><a href="#booking" style="background: #d95a0c;">Book now</a>
                                 </li>
                                 <li><a href="tel:+91 9483220300">Call Now</a></li>
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
                              <i class="fa fa-star"></i>  &nbsp;  5.0 | 1658 Reviews
                           </div>
                           <div class="x_car_offer_img float_left">
                              <img src="img/c4.png" alt="img" width="220px">
                           </div>
                           <div class="x_car_offer_price float_left">
                              <div class="x_car_offer_price_inner">
                                 <h6><i class="fa fa-car"></i> Driver charges Rs 400/- per day</h6>
                                 <h3>Rs 20</h3>
                                 <p>
                                    <br>/ Km
                                 </p>
                              </div>
                           </div>
                           <div class="x_car_offer_heading float_left">
                              <h2><a href="#">SUV Innova Crysta</a></h2>
                              <p>Many more SUV cars.</p>
                              <p>Minimum 300 km charges need to pay.</p>
                           </div>
                           <div class="x_car_offer_bottom_btn float_left">
                              <ul>
                                 <li><a href="#booking" style="background: #d95a0c;">Book now</a>
                                 </li>
                                 <li><a href="tel:+91 9483220300">Call Now</a></li>
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
</div>
<!-- xs offer car tabs End -->

<!-- xs offer car tabs End -->
<!-- x counter Wrapper Start -->
<div class="x_counter_main_wrapper" id="Offer">
   <div class="x_counter_img_overlay"></div>
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="x_counter_car_heading_wrapper float_left">
               <h4 style="text-transform: capitalize;">Work Process</h4>
               <h3 style="text-transform: capitalize;">What We Offer?</h3>
               <p></p>
            </div>
         </div>
         <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12" style="margin-top: 25px;">
            <div class="btc_team_slider_cont_main_wrapper">
               <div class="btc_ln_img_cont_wrapper float_left" style="
                  border-radius: 10px;">
                  <h4><a href="#">Oneway Trip</a></h4>
                  <p>Discover seamless one-way trips with our reliable car rental service, your go-to for affordable and dependable drop services. Effortlessly book a one-way taxi for a hassle-free journey, ensuring comfort and safety with our well-maintained fleet and professional drivers. For bookings and inquiries, call +91 9483220300.</p>
               </div>
            </div>
         </div>
         <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12" style="margin-top: 25px;">
            <div class="btc_team_slider_cont_main_wrapper">
               <div class="btc_ln_img_cont_wrapper float_left" style="
                  border-radius: 10px;">
                  <h4><a href="#">Round Trip</a></h4>
                  <p>Explore a seamless travel experience with Kings Taxi Rental, offering the best car rental platform for affordable Round Trip services. Choose flexibility by booking one-way or round trips at reasonable rates. Contact us at +91 9483220300 and enjoy the convenience of tailored travel solutions.</p>
               </div>
            </div>
         </div>
         <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12" style="margin-top: 25px;">
            <div class="btc_team_slider_cont_main_wrapper" >
               <div class="btc_ln_img_cont_wrapper float_left" style="
                  border-radius: 10px;">
                  <h4><a href="#">Airport Transfer</a></h4>
                  <p>Experience worry-free Airport Transfers with our commitment to safety, reliability, and comfort. Our premium air-conditioned cabs ensure a secure and convenient journey, making your destination our top priority. We're here to provide assistance and make your travel experience exceptional.</p>
               </div>
            </div>
         </div>
        
      </div>
   </div>
</div>
<!-- x counter Wrapper End -->
<!-- xs offer car tabs Start -->
<div class="x_offer_car_main_wrapper float_left padding_tb_100" id="Testimonials">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="x_offer_car_heading_wrapper float_left">
               <h4>Testimonials</h4>
               <h3 style="text-transform: capitalize;">Top Reviews</h3>
            </div>
         </div>
         <div class="col-md-12">
            <div class="screenshot">
               <div class="owl-carousel screen nplr screen-loop">
                  <div>
                     <div class="card  valign-wrapper">
                        <!-- Client's image -->
                        <div class="card-image">
                           <img src="img/2.jpg" alt="img">
                        </div>
                        <!-- /Client's image -->
                        <div class="card-content center-align valign">
                           <div class="testi_slide_star">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                           </div>
                           <!-- Client's Feedback -->
                           <p>“ Exceptional service from this cab company! Highly recommend for a delightful journey. Skilled and friendly drivers made the trip thoroughly enjoyable.”</p>
                           <!-- /Client's Feedback -->
                           <!-- Client's Name -->
                           <p class="card-title">Mamata B<span>Our Customer</span>
                           </p>
                           <!-- /Client's Name -->
                        </div>
                     </div>
                  </div>
                  <div>
                     <div class="card  valign-wrapper">
                        <!-- Client's image -->
                        <div class="card-image">
                           <img src="img/1.jpg" alt="img">
                        </div>
                        <!-- /Client's image -->
                        <div class="card-content center-align valign">
                           <div class="testi_slide_star">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                           </div>
                           <!-- Client's Feedback -->
                           <p>“  Exceptional journey with this cab service! I will definitely be recommending it to friends and family. The drivers were not only skilled but also friendly, making the trip enjoyable and stress-free. ”</p>
                           <!-- /Client's Feedback -->
                           <!-- Client's Name -->
                           <p class="card-title">Bargavi S P<span>Our Customer</span>
                           </p>
                           <!-- /Client's Name -->
                        </div>
                     </div>
                  </div>
                  <div>
                     <div class="card  valign-wrapper">
                        <!-- Client's image -->
                        <div class="card-image">
                           <img src="img/3.jpg" alt="img">
                        </div>
                        <!-- /Client's image -->
                        <div class="card-content center-align valign">
                           <div class="testi_slide_star">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                           </div>
                           <!-- Client's Feedback -->
                           <p>“ Outstanding experience with this cab service! I'll be recommending it to all my friends. The journey was a joy, thanks to the knowledgeable and friendly drivers. ”</p>
                           <!-- /Client's Feedback -->
                           <!-- Client's Name -->
                           <p class="card-title">Mahesh N<span>Our Customer</span>
                           </p>
                           <!-- /Client's Name -->
                        </div>
                     </div>
                  </div>
                  <div>
                     <div class="card  valign-wrapper">
                        <!-- Client's image -->
                        <div class="card-image">
                           <img src="img/4.jpg" alt="img">
                        </div>
                        <!-- /Client's image -->
                        <div class="card-content center-align valign">
                           <div class="testi_slide_star">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                           </div>
                           <!-- Client's Feedback -->
                           <p>“Highly impressed with the top-notch service! I wholeheartedly recommend this cab company for an excellent journey. The drivers were not only knowledgeable but also incredibly friendly, adding to the overall positive experience.
                              ”
                           </p>
                           <!-- /Client's Feedback -->
                           <!-- Client's Name -->
                           <p class="card-title">Prem Sagar<span>Our Customer</span>
                           </p>
                           <!-- /Client's Name -->
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- x counter Wrapper Start -->
<div class="x_counter_main_wrapper">
   <div class="x_counter_img_overlay"></div>
   <div class="container">
      <div class="row" >
         <div class="col-md-12">
            <div class="x_counter_car_heading_wrapper float_left">
               <h4>Work Process</h4>
               <h3>How it works?</h3>
            </div>
         </div>
         <div class="col-xl-4 col-lg-4 ">
            <div class="x_cou_main_box_wrapper">
               <div class="x_icon"> <i class="flaticon-calendar"></i> 
               </div>
               <h5><span></span> <a href="#">Book Now</a></h5>
               <p>Our Service will be 24x7</p>
            </div>
         </div>
         <div class="col-xl-4 col-lg-4 ">
            <div class="x_cou_main_box_wrapper">
               <div class="x_icon"> <i class="flaticon-sedan-car-front"></i> 
               </div>
               <h5><span></span> <a href="#">Receive Calls</a></h5>
               <p>Our Customer Booking Details will not be share any one</p>
            </div>
         </div>
         
         <!-- <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
            <div class="x_cou_main_box_wrapper">
               <div class="x_icon"> <i class="flaticon-airplane-shape"></i> 
               </div>
               <h5><span></span> <a href="#">Low Price</a></h5>
               <p>We charge the lowest price for your commute</p>
            </div>
         </div> -->
         <div class="col-xl-4 col-lg-4 ">
            <div class="x_cou_main_box_wrapper x_cou_main_box_wrapper_last">
               <div class="x_icon"> <i class="flaticon-emoticon-square-smiling-face-with-closed-eyes"></i> 
               </div>
               <h5><span></span> <a href="#">Travels</a></h5>
               <p>Drivers at Kings Taxi Rental are professional, friendly, reliable, and punctual.</p>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- x counter Wrapper End -->
<!-- xs offer car tabs Start --><div class="x_contact_title_main_wrapper float_left padding_tb_100" id="Contact">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="x_offer_car_heading_wrapper x_offer_car_heading_wrapper_contact float_left">
               <h4 style="text-transform: capitalize;">get in touch</h4>
               <h3 style="text-transform: capitalize;">Contact Us</h3>
            </div>
         </div>
         <div class="col-xl-6  col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="row">
               <div class="col-xl-12  col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="contect_form1">
                     <input type="text" placeholder=" Name *">
                  </div>
               </div>
               <div class="col-xl-12  col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="contect_form2">
                     <input type="email" placeholder="Email *">
                  </div>
               </div>
               <div class="col-xl-12  col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="contect_form2">
                     <input type="text" placeholder="Phone *" maxlength="15" value="+91">
                  </div>
               </div>
               <div class="col-xl-12  col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="contect_form4">
                     <textarea rows="4" placeholder="Write Comment"></textarea>
                  </div>
               </div>
               <div class="col-xl-12  col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="contect_btn contect_btn_contact">
                     <ul>
                        <li><a href="#">Send Message <i class="fa fa-arrow-right"></i></a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-xl-6  col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="row">
               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 full_width">
                  <div class="x_contact_title_icon_cont_main_box">
                     <div class="x_contact_title_icon">	<i class="flaticon-phone-call"></i>
                     </div>
                     <div class="x_contact_title_icon_cont">
                        <h3><a href="#">phone Number</a></h3>
                        <p><a href="tel:+91 9483220300" >+91 9483220300</a></p>
                     </div>
                  </div>
               </div>
               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 full_width">
                  <div class="x_contact_title_icon_cont_main_box">
                     <div class="x_contact_title_icon">	<i class="flaticon-mail-send"></i>
                     </div>
                     <div class="x_contact_title_icon_cont">
                        <h3><a href="#">Email Address</a></h3>
                        <p><a href="#">info@hackeycabs.in</a></p>
                     </div>
                  </div>
               </div>
               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 full_width">
                  <div class="x_contact_title_icon_cont_main_box">
                     <div class="x_contact_title_icon">	<i class="fa fa-map-marker"></i>
                     </div>
                     <div class="x_contact_title_icon_cont">
                        <h3><a href="#">address</a></h3>
                        <p>No.634, 3 Main, 5 cross, HAL, islampur, Bangalore - 560017</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
 
<!-- xs offer car tabs Start -->
<?php include('include/footer.php'); ?>