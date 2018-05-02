<?php
/*

	Template Name: Resources Page
	
 */
 
	$main_slogan = get_post_meta( 8, "main_slogan", true);

get_header(); ?>


    <!--  ====================== Main Image ========================== -->

    <div id="resources-image" class="jumbotron text-center">

        <h1 class="leanFont title"><strong>TRAVEL RESOURCES</strong></h1>
        <h3 class="subtitle mt-3">What kind of stuffs I used in my travels?</h3>

    </div>

    <!--  ====================== Introduction ========================== -->

    <div class="resources-introduction">
        <div class="container">
                <div class=".col-xs-12 .col-sm-6 .col-md-8">        
                    <p class="mt-3 pb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget.</p>
                </div>     
        </div>   
    </div>


    <!--  ======================== Recommends ============================ -->


    <div class="container recommends">
           
            <div class="text-center">
                <h2><strong>Finding Flights</strong></h2>
            </div>

            <div class="row mt-5">

                    <div class="col-xs-12 col-sm-6">
                        <div class="thumbnail">
                            <img src="<?php bloginfo("stylesheet_directory"); ?>/assets/images/finnair.png" alt="finnair" id="airlinelogo">
                        </div>
                        
                        <div class="text-center brand">
                            <h3>Finnair</h3>
                        </div>

                        <div class="brand-intro pt-1">
                            <h4><strong>Good for: Economy Class Flights</strong></h4>

                            <p>Based in Helsinki, many flights connecting within Europe and to Asia. It's shortest distance flight from Helsinki to Asia in Europe.</p>
                        </div>

                        <div class="text-center" id="bookbutton">
                            <a href="https://www.finnair.com/fi/gb/"><button type="button" class="btn btn-info">BOOK WITH FINNAIR</button></a>
                        </div>

                    </div>

                    <div class="col-xs-12 col-sm-6">
                        <div class="thumbnail">
                            <img src="<?php bloginfo("stylesheet_directory"); ?>/assets/images/norwegian.png" alt="norwegian" id="airlinelogo">
                        </div>

                        <div class="text-center brand">
                            <h3>Norwegian</h3>
                        </div>

                        <div class="brand-intro pt-1">
                            <h4><strong>Good for: Economy Class Flights</strong></h4>
    
                            <p>Booking flights with an award-winning, low-cost airline offering you. If you just have carry-on luggage, then the ticket price is very friendly.</p>
                        </div>

                        <div class="text-center" id="bookbutton">
                            <a href="https://www.norwegian.com/"><button type="button" class="btn btn-info">BOOK WITH NORWEGIAN</button></a>
                        </div>

                    </div>

            </div>
                  
            <div class="text-center">
                <h2><strong>Booking Acoomodations</strong></h2>
            </div>

            <div class="row mt-5">

                    <div class="col-xs-12 col-sm-6">
                        <div class="thumbnail">
                            <img src="<?php bloginfo("stylesheet_directory"); ?>/assets/images/airbnb.png" alt="airbnb" id="recommondationlogo">
                        </div>
                        
                        <div class="text-center brand">
                            <h3>Airbnb</h3>
                        </div>

                        <div class="brand-intro pt-1">
                            <h4><strong>Good for: Entire house/ Single room</strong></h4>

                            <p>Sometimes if you like to expericene the local people's life, then Airbnb is a good choice. And if you travel with serveral friends, then the house maybe will suits you.</p>
                        </div>

                        <div class="text-center" id="bookbutton">
                            <a href="https://www.airbnb.com"><button type="button" class="btn btn-info">BOOK WITH AIRBNB</button></a>
                        </div>

                    </div>

                    <div class="col-xs-12 col-sm-6">
                        <div class="thumbnail">
                            <img src="<?php bloginfo("stylesheet_directory"); ?>/assets/images/booking.png" alt="booking" id="recommondationlogo">
                        </div>

                        <div class="text-center brand">
                            <h3>Booking</h3>
                        </div>

                        <div class="brand-intro pt-1">
                            <h4><strong>Good for: Easy to book and cancel</strong></h4>
    
                            <p>Booking.com can cancel the order without charge within the prescribed time, so it is flexible for people who has a uncertained schedule.</p>
                        </div>

                        <div class="text-center" id="bookbutton">
                            <a href="https://booking.com"><button type="button" class="btn btn-info">BOOK WITH BOOKING</button></a>
                        </div>

                    </div>

            </div> 

            <div class="text-center">
                <h2><strong>Searching Food</strong></h2>
            </div>

            <div class="row mt-5">

                    <div class="col-xs-12 col-sm-12 pb-3">
                        <div class="thumbnail">
                            <img src="<?php bloginfo("stylesheet_directory"); ?>/assets/images/tripadvisor.png" alt="tripadvisor" id="foodlogo">
                        </div>
                        
                        <div class="text-center brand">
                            <h3>Tripadvisor</h3>
                        </div>

                        <div class="brand-intro pt-1">
                            <h4><strong>Good for: Seaeching restuarants/ bars</strong></h4>

                            <p>If you don't know where has a nice resturant or a fancy bar in a strange city, then you could searching and browsing by Tripadvisor. It shows rank score and list in different restuarants.</p>
                        </div>

                        <div class="text-center" id="bookbutton">
                            <a href="https://www.tripadvisor.com/"><button type="button" class="btn btn-info">SEARCH TRIPADVISOR</button></a>
                        </div>

                    </div>

            </div>
  
    </div>




<?php get_footer(); ?>