<?php
/*

	Template Name: About Page
	
 */
 
	$main_slogan = get_post_meta( 12, "main_slogan", true);
	$self_introduction = get_field("self_introduction");
	$sub_image_title = get_field("sub_image_title");
	$blog_introduction_title = get_field("blog_introduction_title");
	$blog_introduction_description = get_field("blog_introduction_description");

get_header(); ?>


    <!--  ====================== About Image ========================== -->

    <div id="about-image" class="jumbotron text-center">

        <h1 class="leanFont title"><strong><?php echo $main_slogan ?></strong></h1>

    </div>


    <!-- ============================================= Body ================================================== -->

    <div class="container">
    
        <div id="content" class="col-xs-12 .col-sm-6 .col-md-8">

        <!--  ====================== Self Introduction ========================== -->

            <div class="self-introduction">
            
                    <p class="mt-3 pb-4"><?php echo $self_introduction ?></p>   
            
            </div>

        <!--  ====================== Park Image ========================== -->

            <div class="park">
            
                    <div id="park-image" class="mt-3">
                    
                    </div>
     
                    <div>
                    
                        <p class="mt-3 pb-4"><?php echo $sub_image_title ?></p>
                        
                    </div>
            </div>

        <!--  ====================== Blog Introduction ========================== -->

            <div class="blog-introduction">
            
                <h2 class="mt-3"><strong><?php echo $blog_introduction_title ?></strong></h2>
                
                <p class="mt-3 pb-4"><?php echo $blog_introduction_description ?></p>
            
            </div>

        </div>
        
    </div>


<?php get_footer(); ?>