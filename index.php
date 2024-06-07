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
        text-transform: uppercase;
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
        var input = document.getElementById("searchTextField");
        var autocomplete = new google.maps.places.Autocomplete(input);
        google.maps.event.addListener(autocomplete, "place_changed", function () {
            var place = autocomplete.getPlace();
            document.getElementById("city2").value = place.name;
            document.getElementById("cityLat").value = place.geometry.location.lat();
            document.getElementById("cityLng").value = place.geometry.location.lng();
        });
    }

    function initialize1() {
        var input1 = document.getElementById("searchTextField1");
        var autocomplete = new google.maps.places.Autocomplete(input1);
        google.maps.event.addListener(autocomplete, "place_changed", function () {
            var place1 = autocomplete.getPlace();
            document.getElementById("city21").value = place1.name;
            document.getElementById("cityLat1").value = place1.geometry.location.lat();
            document.getElementById("cityLng1").value = place1.geometry.location.lng();
        });
    }

    function initialize2() {
        var input1 = document.getElementById("searchTextField2");
        var autocomplete = new google.maps.places.Autocomplete(input1);
        google.maps.event.addListener(autocomplete, "place_changed", function () {
            var place1 = autocomplete.getPlace();
            document.getElementById("city22").value = place1.name;
            document.getElementById("cityLat2").value = place1.geometry.location.lat();
            document.getElementById("cityLng2").value = place1.geometry.location.lng();
        });
    }

    function initialize3() {
        var input1 = document.getElementById("searchTextField3");
        var autocomplete = new google.maps.places.Autocomplete(input1);
        google.maps.event.addListener(autocomplete, "place_changed", function () {
            var place1 = autocomplete.getPlace();
            document.getElementById("city23").value = place1.name;
            document.getElementById("cityLat3").value = place1.geometry.location.lat();
            document.getElementById("cityLng3").value = place1.geometry.location.lng();
        });
    }
    google.maps.event.addDomListener(window, "load", initialize);
    google.maps.event.addDomListener(window, "load", initialize1);
    google.maps.event.addDomListener(window, "load", initialize2);
    google.maps.event.addDomListener(window, "load", initialize3);
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

<div class="x_responsive_form_wrapper float_left" id="booking" style="padding-bottom: 60px; margin-top: 0px;">
    <section>
        <div class="banner" style="background-image: url(images/bg_body1.jpg); width: 100%; */height: 574px;">
            <div class="container" style="height: 470px;">
                <h4 style="color: white; font-size: 24px; text-shadow: 0px 1px 1px black; text-align: center; padding-top: 129px; font-weight: 700; margin-top: 0px; margin-bottom: 54px;">
                    Reliable taxi and cab services in Bangalore and South India - Book affordable outstation cabs for the best travel experience.
                </h4>
                <div class="x_slider_form_main_wrapper float_left" style="margin-top: 180px; margin-bottom: 32px;">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="x_offer_tabs_wrapper" style="color: black;     margin-top: -40px">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#menu1" style="text-transform: capitalize;"> Oneway Trip</a></li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#menu2" style="text-transform: capitalize;"> Round Trip</a></li>
                                </ul>
                            </div>
                            <div class="tab-content">
                                <div id="menu1" class="tab-pane active">
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
                                                    <h3>Phone No.</h3>
                                                    <input type="tel" placeholder="Enter Contact No" maxlength="10" value="" required name="number" />
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
                                                    <input type="time" placeholder="Enter Pick Up Hour" required name="reservation_time" />
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
                                                    <input type="tel" placeholder="Enter Contact No" maxlength="10" value="" name="number" required />
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
                                                    <input type="time" placeholder="Enter Pick Up Hour" name="reservation_time" required />
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
        </div>
        <!-- xs offer car tabs Start -->

        <!-- xs offer car tabs Start -->

        <div class="x_why_main_wrapper" id="About" style="padding-bottom: 100px;">
            <div class="x_why_img_overlay"></div>
            <div class="container">
                <div class="x_why_left_main_wrapper" style="-webkit-animation: movebounce 0s linear infinite; animation: movebounce 0s linear infinite;">
                    <img src="images/taxi-app-concept.jpg" alt="car_img" style="margin-left: 500px; height: 300px; width: 450px;" />
                </div>
                <div class="x_why_right_main_wrapper">
                    <h3 style="text-transform: capitalize;">About</h3>
                    <br />
                    <p>
                        Empowered by an experienced team well-versed in the nuances of car rental services, we at Hackey taxi excel in resolving any car rental-related concerns, ensuring a seamless experience for your bookings and transport
                        needs. In Bangalore, a city adorned with numerous achievements, reliable transportation is paramount. Embrace the convenience of our taxi service in Indore, proudly offered by Hackey Taxi, a leading cab booking
                        provider in Karnataka state. The distinct and trustworthy quality assurance provided by Hackey Taxi in Bangalore is unmatched, and our unwavering commitment to customer trust and comfort sets us apart. Choose us for
                        the best cars at the most reasonable prices, placing your satisfaction at the heart of our service.
                    </p>
                    <br />
                    <br />
                </div>
            </div>
        </div>

        <div class="x_offer_car_main_wrapper float_left padding_tb_100" id="Tariff">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="x_offer_car_heading_wrapper float_left">
                            <!-- <h4>Our Tariff</h4> -->
                            <h3 style="text-transform: capitalize; font-size: 20px; backgroun-color: #d95a0c;">ONEWAY TRIP</h3>
                        </div>
                    </div>
                    <div class="col-md-12" style="margin-top: 50px;">
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
                                                <i class="fa fa-star-half-o" aria-hidden="true"></i> &nbsp; 4.2 | 1059 Reviews
                                            </div>
                                            <div class="x_car_offer_img float_left">
                                                <img src="img/c1.png" alt="img" width="220px" />
                                            </div>
                                            <div class="x_car_offer_price float_left">
                                                <div class="x_car_offer_price_inner">
                                                    <!--<h6><i class="fa fa-car"></i> Driver charges Rs 400/- per day</h6>-->
                                                    <h3>Rs 14</h3>
                                                    <p>
                                                        <br />
                                                        / Km
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="x_car_offer_heading float_left">
                                                <h2><a href="#">Sedan </a></h2>
                                                <p>Many more sedan cars.</p>
                                                <!--<p>Minimum 130km charges need to pay.</p>-->
                                            </div>
                                            <div class="x_car_offer_bottom_btn float_left">
                                                <ul>
                                                    <li><a href="#booking" style="background: #d95a0c;">Book now</a></li>
                                                    <li><a href="tel:+91 7868806083">Call Now</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="x_car_offer_main_boxes_wrapper float_left">
                                            <div class="x_car_offer_starts float_left">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o" aria-hidden="true"></i> &nbsp; 4.5 | 1758 Reviews
                                            </div>
                                            <div class="x_car_offer_img float_left">
                                                <img src="img/c2.png" alt="img" width="220px" />
                                            </div>
                                            <div class="x_car_offer_price float_left">
                                                <div class="x_car_offer_price_inner">
                                                    <!--<h6><i class="fa fa-car"></i> Driver charges Rs 400/- per day</h6>-->
                                                    <h3>Rs 14</h3>
                                                    <p>
                                                        <br />
                                                        / Km
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
                                                    <li><a href="#booking" style="background: #d95a0c;">Book now</a></li>
                                                    <li><a href="tel:+91 7868806083">Call Now</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="x_car_offer_main_boxes_wrapper float_left">
                                            <div class="x_car_offer_starts float_left">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o" aria-hidden="true"></i> &nbsp; 4.7 | 2564 Reviews
                                            </div>
                                            <div class="x_car_offer_img float_left">
                                                <img src="img/c3.png" alt="img" width="220px" />
                                            </div>
                                            <div class="x_car_offer_price float_left">
                                                <div class="x_car_offer_price_inner">
                                                    <!--<h6><i class="fa fa-car"></i> Driver charges Rs 400/- per day</h6>-->
                                                    <h3>Rs 19</h3>
                                                    <p>
                                                        <br />
                                                        / Km
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="x_car_offer_heading float_left">
                                                <h2><a href="#">SUV </a></h2>
                                                <p>Many more innova cars.</p>
                                                <!--<p>Minimum 130km charges need to pay.</p>-->
                                            </div>
                                            <div class="x_car_offer_bottom_btn float_left">
                                                <ul>
                                                    <li><a href="#booking" style="background: #d95a0c;">Book now</a></li>
                                                    <li><a href="tel:+91 7868806083">Call Now</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="x_car_offer_main_boxes_wrapper float_left">
                                            <div class="x_car_offer_starts float_left">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> &nbsp; 5.0 | 1658 Reviews
                                            </div>
                                            <div class="x_car_offer_img float_left">
                                                <img src="img/c4.png" alt="img" width="220px" />
                                            </div>
                                            <div class="x_car_offer_price float_left">
                                                <div class="x_car_offer_price_inner">
                                                    <!--<h6><i class="fa fa-car"></i> Driver charges Rs 400/- per day</h6>-->
                                                    <h3>Rs 22</h3>
                                                    <p>
                                                        <br />
                                                        / Km
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
                                                    <li><a href="#booking" style="background: #d95a0c;">Book now</a></li>
                                                    <li><a href="tel:+91 7868806083">Call Now</a></li>
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
        <div class="x_offer_car_main_wrapper float_left" style="padding-bottom: 100px;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="x_offer_car_heading_wrapper float_left">
                            <!-- <h4>Our Tariff</h4> -->
                            <h3 style="font-size: 20px;">Round TRIP</h3>
                        </div>
                    </div>
                    <div class="col-md-12" style="margin-top: 50px;">
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
                                                <i class="fa fa-star-half-o" aria-hidden="true"></i> &nbsp; 4.2 | 1059 Reviews
                                            </div>
                                            <div class="x_car_offer_img float_left">
                                                <img src="img/c1.png" alt="img" width="220px" />
                                            </div>
                                            <div class="x_car_offer_price float_left">
                                                <div class="x_car_offer_price_inner">
                                                    <h6><i class="fa fa-car"></i> Driver charges Rs 400/- per day</h6>
                                                    <h3>Rs 12</h3>
                                                    <p>
                                                        <br />
                                                        / Km
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="x_car_offer_heading float_left">
                                                <h2><a href="#">Sedan </a></h2>
                                                <p>Many more sedan cars.</p>
                                                <p>Minimum 300 km charges need to pay.</p>
                                            </div>
                                            <div class="x_car_offer_bottom_btn float_left">
                                                <ul>
                                                    <li><a href="#booking" style="background: #d95a0c;">Book now</a></li>
                                                    <li><a href="tel:+91 7868806083">Call Now</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="x_car_offer_main_boxes_wrapper float_left">
                                            <div class="x_car_offer_starts float_left">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o" aria-hidden="true"></i> &nbsp; 4.5 | 1758 Reviews
                                            </div>
                                            <div class="x_car_offer_img float_left">
                                                <img src="img/c2.png" alt="img" width="220px" />
                                            </div>
                                            <div class="x_car_offer_price float_left">
                                                <div class="x_car_offer_price_inner">
                                                    <h6><i class="fa fa-car"></i> Driver charges Rs 400/- per day</h6>
                                                    <h3>Rs 12</h3>
                                                    <p>
                                                        <br />
                                                        / Km
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
                                                    <li><a href="#booking" style="background: #d95a0c;">Book now</a></li>
                                                    <li><a href="tel:+91 7868806083">Call Now</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="x_car_offer_main_boxes_wrapper float_left">
                                            <div class="x_car_offer_starts float_left">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o" aria-hidden="true"></i> &nbsp; 4.7 | 2564 Reviews
                                            </div>
                                            <div class="x_car_offer_img float_left">
                                                <img src="img/c3.png" alt="img" width="220px" />
                                            </div>
                                            <div class="x_car_offer_price float_left">
                                                <div class="x_car_offer_price_inner">
                                                    <h6><i class="fa fa-car"></i> Driver charges Rs 400/- per day</h6>
                                                    <h3>Rs 17</h3>
                                                    <p>
                                                        <br />
                                                        / Km
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="x_car_offer_heading float_left">
                                                <h2><a href="#">SUV </a></h2>
                                                <p>Many more SUV cars.</p>
                                                <p>Minimum 300 km charges need to pay.</p>
                                            </div>
                                            <div class="x_car_offer_bottom_btn float_left">
                                                <ul>
                                                    <li><a href="#booking" style="background: #d95a0c;">Book now</a></li>
                                                    <li><a href="tel:+91 7868806083">Call Now</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="x_car_offer_main_boxes_wrapper float_left">
                                            <div class="x_car_offer_starts float_left">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> &nbsp; 5.0 | 1658 Reviews
                                            </div>
                                            <div class="x_car_offer_img float_left">
                                                <img src="img/c4.png" alt="img" width="220px" />
                                            </div>
                                            <div class="x_car_offer_price float_left">
                                                <div class="x_car_offer_price_inner">
                                                    <h6><i class="fa fa-car"></i> Driver charges Rs 400/- per day</h6>
                                                    <h3>Rs 20</h3>
                                                    <p>
                                                        <br />
                                                        / Km
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
                                                    <li><a href="#booking" style="background: #d95a0c;">Book now</a></li>
                                                    <li><a href="tel:+91 7868806083">Call Now</a></li>
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

        <!-- xs Slider bottom title Start -->

        <!-- x counter Wrapper Start -->
        <div class="x_counter_main_wrapper" id="Offer">
            <div class="x_counter_img_overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="x_counter_car_heading_wrapper float_left">
                            <h4>Work Process</h4>
                            <h3>What We Offer?</h3>
                            <p></p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12" style="margin-top: 25px;">
                        <div class="btc_team_slider_cont_main_wrapper">
                            <div class="btc_ln_img_cont_wrapper float_left" style="border-radius: 10px;">
                                <h4><a href="#">Oneway Trip</a></h4>
                                <p>
                                    Discover seamless one-way trips with our reliable car rental service, your go-to for affordable and dependable drop services. Effortlessly book a one-way taxi for a hassle-free journey, ensuring comfort
                                    and safety with our well-maintained fleet and professional drivers. For bookings and inquiries, call +91 7868806083.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12" style="margin-top: 25px;">
                        <div class="btc_team_slider_cont_main_wrapper">
                            <div class="btc_ln_img_cont_wrapper float_left" style="border-radius: 10px;">
                                <h4><a href="#">Round Trip</a></h4>
                                <p>
                                    Explore a seamless travel experience with Hackey Taxi Rental, offering the best car rental platform for affordable Round Trip services. Choose flexibility by booking one-way or round trips at reasonable
                                    rates. Contact us at +91 7868806083 and enjoy the convenience of tailored travel solutions.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12" style="margin-top: 25px;">
                        <div class="btc_team_slider_cont_main_wrapper">
                            <div class="btc_ln_img_cont_wrapper float_left" style="border-radius: 10px;">
                                <h4><a href="#">Airport Transfer</a></h4>
                                <p>
                                Elevate your travel with our premium airport transfer service, prioritizing safety, reliability, and comfort. Our air conditioned cabs guarantee a secure and convenient journey, ensuring your destination is our top priority. Experience exceptional assistance for worry-free airport transfers.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12" style="margin-top: 25px;">
            <div class="btc_team_slider_cont_main_wrapper">
               <div class="btc_ln_img_cont_wrapper float_left" style="
                  border-radius: 10px;">
                  <h4><a href="#">Employee Transportation</a></h4>
                  <p>We Deliver cost effective, safe, secure and comfortable rides to our clients. You can also book Employee Transportation Solutions by calling at +91 9483220300.</p>
               </div>
            </div>
         </div>
         <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12" style="margin-top: 25px;">
            <div class="btc_team_slider_cont_main_wrapper">
               <div class="btc_ln_img_cont_wrapper float_left" style="
                  border-radius: 10px;">
                  <h4><a href="#">Corporate Car Rental</a></h4>
                  <p>We have special packages for Corporates. Be it First time service or for Company Cars, we can customize our package to suit your requirements. Call Us at +91 9483220300.</p>
               </div>
            </div>
         </div>
         <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12" style="margin-top: 25px;">
            <div class="btc_team_slider_cont_main_wrapper">
               <div class="btc_ln_img_cont_wrapper float_left" style="
                  border-radius: 10px;">
                  <h4><a href="#">Outstation Taxi</a></h4>
                  <p>Would you like to make your every outstation ride pleasant? If yes, Kings Taxi Rental are here to offer you the best with its most reliable Outstation Cabs Service in Tamil Nadu..</p>
               </div>
            </div>
         </div> -->
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
                            <h3>Top Reviews</h3>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="screenshot">
                            <div class="owl-carousel screen nplr screen-loop">
                                <div>
                                    <div class="card valign-wrapper">
                                        <!-- Client's image -->
                                        <div class="card-image">
                                            <img src="img/2.jpg" alt="img" />
                                        </div>
                                        <!-- /Client's image -->
                                        <div class="card-content center-align valign">
                                            <!-- Client's Feedback -->
                                            <p>
                                                “ "In the dynamic city of Bangalore, where achievements abound, reliable transportation is essential. Choose Our Taxi for a unique and trustworthy taxi service in Indore. We are proud to be
                                                among the leading cab booking providers in Karnataka state. ”
                                            </p>
                                            <!-- /Client's Feedback -->
                                            <!-- Client's Name -->
                                            <p class="card-title">Maghana B<span></span></p>
                                            <!-- /Client's Name -->
                                            <div class="testi_slide_star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="card valign-wrapper">
                                        <!-- Client's image -->
                                        <div class="card-image">
                                            <img src="img/1.jpg" alt="img" />
                                        </div>
                                        <!-- /Client's image -->
                                        <div class="card-content center-align valign">
                                            <!-- Client's Feedback -->
                                            <p>
                                                “ At Our Taxi, we redefine the standards of quality assurance in taxi services. Our commitment to excellence is reflected in every aspect, making taxi booking in Bangalore with us a
                                                distinctive and dependable choice ”
                                            </p>
                                            <!-- /Client's Feedback -->
                                            <!-- Client's Name -->
                                            <p class="card-title">Bargavi S P<span></span></p>
                                            <!-- /Client's Name -->
                                            <div class="testi_slide_star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="card valign-wrapper">
                                        <!-- Client's image -->
                                        <div class="card-image">
                                            <img src="img/3.jpg" alt="img" />
                                        </div>
                                        <!-- /Client's image -->
                                        <div class="card-content center-align valign">
                                            <!-- Client's Feedback -->
                                            <p>
                                                “ Step into the world of trustworthy taxi services with Our Taxi. In the vibrant city of Bangalore, our experienced team ensures that your car rental experience is not only seamless but also
                                                the best in terms of quality and affordability. ”
                                            </p>
                                            <!-- /Client's Feedback -->
                                            <!-- Client's Name -->
                                            <p class="card-title">Manvith N<span></span></p>
                                            <!-- /Client's Name -->
                                            <div class="testi_slide_star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="card valign-wrapper">
                                        <!-- Client's image -->
                                        <div class="card-image">
                                            <img src="img/4.jpg" alt="img" />
                                        </div>
                                        <!-- /Client's image -->
                                        <div class="card-content center-align valign">
                                            <!-- Client's Feedback -->
                                            <p>
                                                “ Absolutely - definitely - I will be recommending your services.Thank you for a wonderful journey! " "I was so pleased with the trip. Our driver were outstanding : knowledgeable and friendly.
                                                ”
                                            </p>
                                            <!-- /Client's Feedback -->
                                            <!-- Client's Name -->
                                            <p class="card-title">Prem Sagar<span></span></p>
                                            <!-- /Client's Name -->
                                            <div class="testi_slide_star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
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
        <!-- x counter Wrapper Start -->
        <div class="x_counter_main_wrapper">
            <div class="x_counter_img_overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="x_counter_car_heading_wrapper float_left">
                            <h4>Work Process</h4>
                            <h3>How it works?</h3>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="x_cou_main_box_wrapper">
                            <div class="x_icon"><i class="flaticon-calendar"></i></div>
                            <h5><span></span> <a href="#">Receive Calls</a></h5>
                            <p>Our Service will be 24x7</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="x_cou_main_box_wrapper">
                            <div class="x_icon"><i class="flaticon-sedan-car-front"></i></div>
                            <h5><span></span> <a href="#"> Book Now</a></h5>
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
                    <div class="col-xl-4 col-lg-4">
                        <div class="x_cou_main_box_wrapper x_cou_main_box_wrapper_last">
                            <div class="x_icon"><i class="flaticon-emoticon-square-smiling-face-with-closed-eyes"></i></div>
                            <h5><span></span> <a href="#">Travels</a></h5>
                            <p>Drivers at Hackey Taxi Rental are professional, friendly, reliable, and punctual.</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- x counter Wrapper End -->
        <!-- xs offer car tabs Start -->
        <div class="x_contact_title_main_wrapper float_left padding_tb_100" id="Contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="x_offer_car_heading_wrapper x_offer_car_heading_wrapper_contact float_left">
                            <h4>get in touch</h4>
                            <h3>Contact Us</h3>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="contect_form1">
                                    <input type="text" placeholder=" Name *" />
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="contect_form2">
                                    <input type="email" placeholder="Email *" />
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="contect_form2">
                                    <input type="text" placeholder="Phone *" maxlength="15" value="+91" />
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="contect_form4">
                                    <textarea rows="4" placeholder="Write Comment"></textarea>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="contect_btn contect_btn_contact">
                                    <ul>
                                        <li>
                                            <a href="#">Send Message <i class="fa fa-arrow-right"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 full_width">
                                <div class="x_contact_title_icon_cont_main_box">
                                    <div class="x_contact_title_icon"><i class="flaticon-phone-call"></i></div>
                                    <div class="x_contact_title_icon_cont">
                                        <h3><a href="#">phone Number</a></h3>
                                        <p><a href="tel:+91 7868806083">+91 7868806083</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 full_width">
                                <div class="x_contact_title_icon_cont_main_box">
                                    <div class="x_contact_title_icon"><i class="flaticon-mail-send"></i></div>
                                    <div class="x_contact_title_icon_cont">
                                        <h3><a href="#">Email Address</a></h3>
                                        <p><a href="#">info@hackeycabs.in</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 full_width">
                                <div class="x_contact_title_icon_cont_main_box">
                                    <div class="x_contact_title_icon"><i class="fa fa-map-marker"></i></div>
                                    <div class="x_contact_title_icon_cont">
                                        <h3><a href="#">address</a></h3>
                                        <p>2/13  K.Poosaripatti Village  Karadiguri Post Krishnagiri - 635001</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--<section class="gauto-testimonial-area section_70">-->
        <!--        <div class="container">-->
        <!--           <div class="row">-->
        <!--             <div class="col-lg-3">-->
        <!--                    <div class="single-footer quick_links">-->
        <!--                       <h3>Quick Links</h3>-->
        <!--                       <ul class="quick-links">-->
        <!--                          <li><a href="Bangalore-to-Anantapur-Cabs.php" target="_blank">Bangalore to Anantapur</a></li>-->
        <!--                          <li><a href="Bangalore-to-Belgaum-Cabs.php" target="_blank">Bangalore to Belgaum</a></li>-->
        <!--                          <li><a href="Bangalore-to-Bellary-Cabs.php" target="_blank">Bangalore to Bellary</a></li>-->
        <!--                          <li><a href="Bangalore-to-Chitradurga-Cabs.php" target="_blank">Bangalore to Chitradurga</a></li>-->
        <!--                          <li><a href="Saleem-to-Bangalore-Cabs.php" target="_blank">Saleem to Bangalore</a></li>-->
        <!--                          <li><a href="Bangalore-to-Coimbatore-Cabs.php" target="_blank">Bangalore to Coimbatore</a></li>-->
        <!--                          <li><a href="Bangalore-to-Davangere-Cabs.php" target="_blank">Bangalore to Davangere</a></li>-->
        <!--                          <li><a href="Munnar-to-Bangalore-Cabs.php" target="_blank">Munnar to Bangalore</a></li>-->
        <!--                       </ul>-->
        <!--                    </div>-->

        <!--                 </div>-->
        <!--                 <div class="col-lg-3">-->
        <!--                    <div class="single-footer quick_links">-->
        <!--                       <h3>Quick Links</h3>-->
        <!--                       <ul class="quick-links">-->
        <!--                          <li><a href="Bangalore-to-Eroad-Cabs.php" target="_blank">Bangalore to Eroad</a></li>-->
        <!--                          <li><a href="Bangalore-to-Goa-Cabs.php" target="_blank">Bangalore to Goa</a></li>-->
        <!--                          <li><a href="Bangalore-to-Hampi-Cabs.php" target="_blank">Bangalore to Hampi</a></li>-->
        <!--                          <li><a href="Bangalore-to-Hospet-Cabs.php" target="_blank">Bangalore to Hospet</a></li>-->
        <!--                          <li><a href="Bangalore-to-Hubli-Cabs.php" target="_blank">Bangalore to Hubli</a></li>-->
        <!--                          <li><a href="Bangalore-to-Hyderabad-Cabs.php" target="_blank">Bangalore to Hyderabad</a></li>-->
        <!--                          <li><a href="Bangalore-to-Kanjipuram-Cabs.php" target="_blank">Bangalore to Kanjipuram</a></li>-->
        <!--                          <li><a href="Bangalore-to-Kochi-Cabs.php" target="_blank">Bangalore to Kochi</a></li>-->

        <!--                       </ul>-->
        <!--                    </div>-->

        <!--                 </div>-->
        <!--                 <div class="col-lg-3">-->
        <!--                    <div class="single-footer quick_links">-->
        <!--                       <h3>Quick Links</h3>-->
        <!--                       <ul class="quick-links">-->
        <!--                           <li><a href="Bangalore-to-Kodaikanal-Cabs.php" target="_blank">Bangalore to Kodaikanal</a></li>-->
        <!--                          <li><a href="Trichy-to-Chennai-Cabs.php" target="_blank">Trichy to Chennai</a></li>-->
        <!--                          <li><a href="Bangalore-to-kurnool-Cabs.php" target="_blank">Bangalore to kurnool</a></li>-->
        <!--                          <li><a href="Bangalore-to-Madurai-Cabs.php" target="_blank">Bangalore to Madurai</a></li>-->
        <!--                          <li><a href="Bangalore-to-Mumbai-Cabs.php" target="_blank">Bangalore to Mumbai</a></li>-->
        <!--                          <li><a href="Wayanad-to-Bangalore-Cabs.php" target="_blank">Wayanad to Bangalore</a></li>-->
        <!--                          <li><a href="Bangalore-to-Mysore-Cabs.php" target="_blank">Bangalore to Mysore</a></li>-->
        <!--                          <li><a href="Bangalore-to-Namakkal-Cabs.php" target="_blank">Bangalore to Namakkal</a></li>-->

        <!--                       </ul>-->
        <!--                    </div>-->

        <!--                 </div>-->
        <!--                 <div class="col-lg-3">-->
        <!--                    <div class="single-footer quick_links">-->
        <!--                       <h3>Quick Links</h3>-->
        <!--                       <ul class="quick-links">-->
        <!--                           <li><a href="Bangalore-to-Nellore-Cabs.php" target="_blank">Bangalore to Nellore</a></li>-->
        <!--                          <li><a href="Bangalore-to-Ooty-Cabs.php" target="_blank">Bangalore to Ooty</a></li>-->
        <!--                          <li><a href="Bangalore-to-Palakkad-Cabs.php" target="_blank">Bangalore to Palakkad</a></li>-->
        <!--                          <li><a href="Bangalore-to-Saleem-Cabs.php" target="_blank">Bangalore to Saleem</a></li>-->
        <!--                           <li><a href="Bangalore-to-Tanjore-Cabs.php" target="_blank">Bangalore to Tanjore</a></li>-->
        <!--                          <li><a href="Bangalore-to-Tirchur-Cabs.php" target="_blank">Bangalore to Tirchur</a></li>-->
        <!--                          <li><a href="Bangalore-to-Tirupati-Cabs.php" target="_blank">Bangalore to Tirupati</a></li>-->
        <!--                            <li><a href="Chennai-to-Bangalore-Cabs.php" target="_blank">Chennai to Bangalore</a></li>-->
        <!--                       </ul>-->
        <!--                    </div>-->

        <!--                 </div>-->

        <!--                  <div class="col-lg-3">-->
        <!--                    <div class="single-footer quick_links">-->
        <!--                       <h3>Quick Links</h3>-->
        <!--                       <ul class="quick-links">-->
        <!--                          <li><a href="Thanjavur-to-Coimbatore-Cabs.php" target="_blank">Thanjavur to Coimbatore</a></li>-->
        <!--                          <li><a href="Bangalore-to-Trichy-Cabs.php" target="_blank">Bangalore to Trichy</a></li>-->
        <!--                          <li><a href="Bangalore-to-Trivandrum-Cabs.php" target="_blank">Bangalore to Trivandrum</a></li>-->
        <!--                          <li><a href="Bangalore-to-Vellore-Cabs.php" target="_blank">Bangalore to Vellore</a></li>-->
        <!--                          <li><a href="Bangalore-to-Vijayawada-Cabs.php" target="_blank">Bangalore to Vijayawada</a></li>-->
        <!--                          <li><a href="Bangalore-to-Wayanad-Cabs.php" target="_blank">Bangalore to Wayanad</a></li> -->
        <!--                           <li><a href="Belgaum-to-Bangalore-Cabs.php" target="_blank">Belgaum to Bangalore</a></li>-->
        <!--                             <li><a href="Bellary-to-Bangalore-Cabs.php" target="_blank">Bellary to Bangalore</a></li>-->
        <!--                       </ul>-->
        <!--                    </div>-->

        <!--                 </div>-->

        <!--                  <div class="col-lg-3">-->
        <!--                    <div class="single-footer quick_links">-->
        <!--                       <h3>Quick Links</h3>-->
        <!--                       <ul class="quick-links">-->
        <!--                           <li><a href="Chennai-to-Coimbatore-Cabs.php" target="_blank">Chennai to Coimbatore</a></li>-->
        <!--                            <li><a href="Chennai-to-Cuddalore-Cabs.php" target="_blank">Chennai to Cuddalorep</a></li>-->
        <!--                             <li><a href="Chennai-to-Kanyakumari-Cabs.php" target="_blank">Chennai to Kanyakumari</a></li>-->
        <!--                              <li><a href="Chennai-to-Kodaikanal-Cabs.php" target="_blank">Chennai to Kodaikanal</a></li>-->
        <!--                               <li><a href="Chennai-to-Kumbakonam-Cabs.php" target="_blank">Chennai to Kumbakonam</a></li>-->
        <!--                                <li><a href="Chennai-to-Madurai-Cabs.php" target="_blank">Chenna to Madurai</a></li>-->
        <!--                                 <li><a href="Chennai-to-Pondicherry-Cabs.php" target="_blank">Chennai to Pondicherry</a></li>-->
        <!--                                   <li><a href="Chennai-to-Thanjavur-Cabs.php" target="_blank">Chennai to Thanjavur</a></li>-->
        <!--                       </ul>-->
        <!--                    </div>-->

        <!--                 </div>-->

        <!--                  <div class="col-lg-3">-->
        <!--                    <div class="single-footer quick_links">-->
        <!--                       <h3>Quick Links</h3>-->
        <!--                       <ul class="quick-links">-->
        <!--                          <li><a href="Chennai-to-Trichy-Cabs.php" target="_blank">Chennai to Trichy</a></li>-->
        <!--                          <li><a href="Chitradurga-to-Bangalore-Cabs.php" target="_blank">Chitradurga to Bangalore</a></li>-->
        <!--                          <li><a href="Coimbatore-to-Bangalore-Cabs.php" target="_blank">Coimbatore to Bangalore</a></li>-->
        <!--                          <li><a href="Coimbatore-to-Chennai-Cabs.php" target="_blank">Coimbatore to Chennai</a></li>-->
        <!--                          <li><a href="Coimbatore-to-Cuddalore-Cabs.php" target="_blank">Coimbatore to Cuddalore</a></li>-->
        <!--                          <li><a href="Coimbatore-to-Kanyakumari-Cabs.php" target="_blank">Coimbatore to Kanyakumari</a></li>-->
        <!--                          <li><a href="Coimbatore-to-Kodaikanal-Cabs.php" target="_blank">Coimbatore to Kodaikanal</a></li>-->
        <!--                               <li><a href="Dharwad-to-Bangalore-Cabs.php" target="_blank">Dharwad to Bangalore</a></li>-->
        <!--                       </ul>-->
        <!--                    </div>-->

        <!--                 </div>-->

        <!--                  <div class="col-lg-3">-->
        <!--                    <div class="single-footer quick_links">-->
        <!--                       <h3>Quick Links</h3>-->
        <!--                       <ul class="quick-links">-->
        <!--                          <li><a href="Coimbatore-to-Kumbakonam-Cabs.php" target="_blank">Coimbatore to Kumbakonam</a></li>-->
        <!--                          <li><a href="Coimbatore-to-Madurai-Cabs.php" target="_blank">Coimbatore to Madurai</a></li>-->
        <!--                          <li><a href="Coimbatore-to-Pondicherry-Cabs.php" target="_blank">Coimbatore to Pondicherry</a></li>-->
        <!--                           <li><a href="Coimbatore-to-Thanjavur-Cabs.php" target="_blank">Coimbatore to Thanjavur</a></li>-->
        <!--                          <li><a href="Coimbatore-to-Trichy-Cabs.php" target="_blank">Coimbatore to Trichy</a></li>-->
        <!--                           <li><a href="Cuddalore-to-Chennai-Cabs.php" target="_blank">Cuddalore to Chennai</a></li>-->
        <!--                          <li><a href="Cuddalore-to-Coimbatore-Cabs.php" target="_blank">Cuddalore to Coimbatore</a></li>-->
        <!--                           <li><a href="Davangere-to-Bangalore-Cabs.php" target="_blank">Davangere to Bangalore</a></li>-->

        <!--                       </ul>-->
        <!--                    </div>-->

        <!--                 </div>-->
        <!--           </div>-->
        <!--        </div>-->
        <!--     </section> -->

        <!-- xs offer car tabs Start -->
        <?php include('include/footer.php'); ?>
    </section>
</div>
