<?php
/*

	Template Name: Contact Page	

 */

get_header(); ?>


    <!--  ====================== Header ========================== -->
    

    <div class="contact-header bg-info">

        <div class="container">

            <h1 class="text-center leanFont"><strong><?php the_title(); ?></strong></h1>
 
        </div>

    </div>
    
    
    
    <!--  ====================== Contact form ========================== -->

    <div id="contact-form" class="some-spaces">

        <div class="container">
        
      		<?php while( have_posts() ) : the_post(); ?>  
        
        		<?php the_content(); ?>
        
		<?php endwhile; ?>

          
            

        </div>


    </div>


<?php get_footer(); ?>
