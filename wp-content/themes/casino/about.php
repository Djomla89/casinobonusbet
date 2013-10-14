<?php
/**
 * The main template file.
 * Template Name: About Us
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * 
 */

get_header(); ?>
<style>
.entry-title{display:none;}
.about img{ width:767px; border:2px solid yellow;}
</style>
					<div class="welcome">

						<h3>About Casino Affiliates</h3>

						<!--<img src="<?php echo get_template_directory_uri(); ?>/images/about.jpg" Alt="About Us" title="About Us">-->

<div class="about"><?php the_post_thumbnail(); ?></div>

						<?php 
                           $id=27; 
                           $post = get_page($id); 
						   $content = apply_filters('the_content', $post->post_content); 
                           echo $content;  
                        ?>
                        <?php while (have_posts()) : the_post(); ?>
						<?php get_template_part( 'content', 'single' ); ?> 
						
					    <?php endwhile; ?>

						<p>&nbsp;</p> 
</div><!-- end welcome -->

			</div>	
		
<?php get_sidebar(); ?>
	
<?php get_footer(); ?>