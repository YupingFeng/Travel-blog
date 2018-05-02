
	<?php
	
	/*
	
		Template Name: Start here Page
		
	 */
	 
		$main_slogan = get_post_meta( 8, "main_slogan", true);
		$start_introduction = get_field("start_introduction");
		$thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID) );
	
	get_header(); ?>


    <!--  ====================== Image ========================== -->

    <?php if( has_post_thumbnail() ) : ?>

	    <div class="jumbotron text-center" style="background: url('<?php echo $thumbnail_url ?>'); background-size: cover; " >
	
	        <h1 class="leanFont title"><strong><?php echo $main_slogan ?></strong></h1>
	
	    </div>
    
    <?php else : ?> 
    
    	    <div class="jumbotron text-center">
	
	        <h1 class="leanFont title"><strong><?php echo $main_slogan ?></strong></h1>
		
	    </div>
	    
    <?php endif; ?>
    
    

    <!--  ====================== Introduction ========================== -->

    <div class="introduction">
    
        <div class="container">
        
                <div class=".col-xs-12 .col-sm-6 .col-md-8">      
                  
                    <p class="mt-3 pb-4"><?php echo $start_introduction ?></p>
                    
                </div>     
                
        </div>
           
    </div>


<?php get_footer(); ?>