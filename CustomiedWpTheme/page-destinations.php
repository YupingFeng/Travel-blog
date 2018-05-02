<?php
/*

	Template Name: Destinations Page
	
 */
 
	$main_slogan = get_post_meta( 15, "main_slogan", true);
	$destinations_description = get_field("destinations_description");
	
	$country1 = get_field("country1");
	$country2 = get_field("country2");
	$country3 = get_field("country3");
	$country4 = get_field("country4");
	$country5 = get_field("country5");
	$country6 = get_field("country6");
	$country7 = get_field("country7");
	$country8 = get_field("country8");
	
	$country1_title = get_field("country1_title");
	$country2_title = get_field("country2_title");
	$country3_title = get_field("country3_title");
	$country4_title = get_field("country4_title");
	$country5_title = get_field("country5_title");
	$country6_title = get_field("country6_title");
	$country7_title = get_field("country7_title");
	$country8_title = get_field("country8_title");
	

get_header(); ?>


    <!--  ====================== Destinations Image ========================== -->

    <div id="destinations-image" class="jumbotron text-center">

        <h1 class="leanFont title"><strong><?php echo $main_slogan ?></strong></h1>

    </div>

    <!--  ====================== Page Introduction ========================== -->

    <div class="brief-introduction">
        <div class="container">
                <div>        
                    <h4 class="mt-3 pb-4 text-center"><?php echo $destinations_description ?></h4>
                </div>     
        </div>   
    </div>

    <!--  ====================== Countries ========================== -->

        <div class="countries container">

            <div class="row mt-3">
                
                <div class="col-xs-12 col-md-3">
                
                  <?php if( !empty($country1) ) : ?>
                  
                    <div class="img-thumbnail">
                        <a href="finland-2"><img src="<?php echo $country1["url"]; ?>" alt="<?php echo $country1["alt"]; ?>"></a>      
                    </div>
                    
                  <?php endif; ?>

                    <div class="text-center">
                        <a href="/"><h3><strong><?php echo $country1_title ?></strong></h3></a> 
                    </div> 
                </div>

                <div class="col-xs-12 col-md-3">
                    
                  <?php if( !empty($country2) ) : ?>
                  
                    <div class="img-thumbnail">
                        <a href="/"><img src="<?php echo $country2["url"]; ?>" alt="<?php echo $country2["alt"]; ?>"></a>      
                    </div>
                    
                  <?php endif; ?>

                    <div class="text-center">
                        <a href="/"><h3><strong><?php echo $country2_title ?></strong></h3></a> 
                    </div> 
                </div>

                <div class="col-xs-12 col-md-3">
                
                  <?php if( !empty($country3) ) : ?>
                  
                    <div class="img-thumbnail">
                        <a href="/"><img src="<?php echo $country3["url"]; ?>" alt="<?php echo $country3["alt"]; ?>"></a>      
                    </div>
                    
                  <?php endif; ?>

                    <div class="text-center">
                        <a href="/"><h3><strong><?php echo $country3_title ?></strong></h3></a> 
                    </div> 
                </div>

                <div class="col-xs-12 col-md-3">
                
                  <?php if( !empty($country4) ) : ?>
                  
                    <div class="img-thumbnail">
                        <a href="/"><img src="<?php echo $country4["url"]; ?>" alt="<?php echo $country4["alt"]; ?>"></a>      
                    </div>
                    
                  <?php endif; ?>

                    <div class="text-center">
                        <a href="/"><h3><strong><?php echo $country4_title ?></strong></h3></a> 
                    </div>
                </div>

            </div>

            <div class="row mt-5 pb-4">
                
                    <div class="col-xs-12 col-md-3">
                    
		      <?php if( !empty($country5) ) : ?>
                  
                    	<div class="img-thumbnail">
                        	<a href="/"><img src="<?php echo $country5["url"]; ?>" alt="<?php echo $country5["alt"]; ?>"></a>      
                    	</div>
                    
                      <?php endif; ?>
    
                        <div class="text-center">
                            <a href="/"><h3><strong><?php echo $country5_title ?></strong></h3></a> 
                        </div> 
                    </div>
    
                    <div class="col-xs-12 col-md-3">
                    
	              <?php if( !empty($country6) ) : ?>
                  
                    	<div class="img-thumbnail">
                        	<a href="/"><img src="<?php echo $country6["url"]; ?>" alt="<?php echo $country6["alt"]; ?>"></a>      
                    	</div>
                    
                      <?php endif; ?>
    
                        <div class="text-center">
                            <a href="/"><h3><strong><?php echo $country6_title ?></strong></h3></a> 
                        </div> 
                    </div>
    
                    <div class="col-xs-12 col-md-3">
                    
	              <?php if( !empty($country7) ) : ?>
                  
                    	<div class="img-thumbnail">
                        	<a href="/"><img src="<?php echo $country7["url"]; ?>" alt="<?php echo $country7["alt"]; ?>"></a>      
                    	</div>
                    
                      <?php endif; ?>
    
                        <div class="text-center">
                            <a href="/"><h3><strong><?php echo $country7_title ?></strong></h3></a> 
                        </div> 
                    </div>
    
                    <div class="col-xs-12 col-md-3">
                    
                      <?php if( !empty($country8) ) : ?>
                  
                    	<div class="img-thumbnail">
                        	<a href="/"><img src="<?php echo $country8["url"]; ?>" alt="<?php echo $country8["alt"]; ?>"></a>      
                    	</div>
                    
                      <?php endif; ?>
    
                        <div class="text-center">
                            <a href="/"><h3><strong><?php echo $country8_title ?></strong></h3></a> 
                        </div>
                        
                    </div>

            </div>

        </div>

<?php get_footer(); ?>