<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package yuping.co
 */

?>



<?php wp_footer(); ?>

    <!--  ====================== Footer ========================== -->

    <footer>

        <div class="comtainer text-center">

            <div class="row">

                    <P>&copy; Storymaker 2018 </P>                

	            <?php
	            
                	wp_nav_menu(array(
                	
                		"theme_location" => "footer",
                		"container" => "nav",
                		"menu_class" => "list-inline col-xs-12",          		
                	
                	));
                     ?>


            </div>

        </div>

    </footer>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>

</body>
</html>
