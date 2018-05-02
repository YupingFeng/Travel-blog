<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package yuping.co/wp
 
   单个博客页面 博客部分的内容
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
	
		<?php
		
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : 
		
		?>
		
		<div class="entry-meta">
		
    <!--  ====================== insert post-details ========================== -->
    
		        <div class="post-details mt-4">
                
                            <i class="fas fa-user-circle"></i> <?php the_author(); ?>

                            <i class="fas fa-clock"></i> <time><?php the_date(); ?></time>

                            <i class="fas fa-folder-open"></i> <?php the_category(","); ?>

                            <i class="fas fa-tags"></i> <?php the_tags("", ", ", ""); ?>
                            
                            <a href="<?php comments_link(); ?>"><i class="fas fa-comments"></i> <?php comments_number(0, 1, "%" ); ?></a>

                        </div>
		
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->
	

    <!--  ====================== insert post-content ========================== -->
    
    	
	<?php if(has_post_thumbnail()) : ?>
	
	                <div class="mt-4 post-image">

                            <?php the_post_thumbnail( array( 750, 550 ) ); ?>
            
                        </div>
                        
        <?php endif; ?>
        
        <?php if ( is_single() ) : ?>
        
        	<div class="post-content mt-4">
        
        		<?php the_content(); ?>
        
        </div>
        
        <?php else : ?>            
                        <div class="post-excerpt mt-4">
            
                            <?php the_excerpt(); ?>
            
                        </div>
                        
         <?php endif; ?>
                

</article><!-- #post-## -->
