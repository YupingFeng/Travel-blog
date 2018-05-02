<?php
/*

	Template Name: Finland Page
	
 */

get_header(); ?>

    <!--  ====================== Main Image ========================== -->

    <div id="finland-image" class="jumbotron text-center">

        <h1 class="leanFont title"><strong>Finland</strong></h1>

    </div>

    <!--  ====================== Posts ========================== -->

    <div class="container post">
           
            <div class="row mt-3">

                    <div class="col-sm-6 col-md-4">
                        <a class="thumbnail" data-toggle="modal" data-target=".bs-example-modal-lg">
                            <img src="<?php bloginfo("stylesheet_directory"); ?>/assets/images/sibelius.jpg" alt="post1" id="finlandpost">
                        </a>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <a class="thumbnail">
                            <img src="<?php bloginfo("stylesheet_directory"); ?>/assets/images/finsnow.jpg" alt="post2" id="finlandpost">
                        </a>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <a class="thumbnail">
                            <img src="<?php bloginfo("stylesheet_directory"); ?>/assets/images/icehockey.jpg" alt="post3" id="finlandpost">
                        </a>
                    </div>

            </div>                
  
    </div>

    <!--  ====================== Modal Sibelius ========================== -->

    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">

        <div class="modal-dialog modal-lg" role="document">

            <div class="modal-content">

                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal">

                        <span>&times;</span>

                    </button>

                    <div>
                        <ul class="list-inline">
                            <li><span class="glyphicon glyphicon-user" aria-hidden="true"></span></li>
                            <li><h4 class="modal-title"><strong>Yuping Feng</strong></h4></li>
                            <li><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span></li>
                            <li><h3 class="modal-title"><h6>Helsinki</h6></li>
                        </ul>
                    </div>


                </div>

                <div class="modal-body">

                            <div class="center-block">
                                <img src="<?php bloginfo("stylesheet_directory"); ?>/assets/images/sibelius.jpg">
                            </div>

                </div>

                <div class="modal-footer">

                    <div>
                        <p>The Sibelius Monument is located in the capital of Finland, Helsinki. I was went there in the Autumn of 2017. It's a quiet and fancy block, not so far from city center.</p>
                    </div>

                </div>

            </div>

        </div>

    </div>

<?php get_footer(); ?>