<?php
/**
 * The main template file.
 * Template Name: Privacy Policy
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * 
 */

get_header(); ?><style>.entry-header h1{ display:none;}</style>
			<div class="welcome">					
			<h3>Privacy Policy</h3>					
			                     <?php 
									$id=358; 
									$post = get_page($id); 
									$content = apply_filters('the_content', $post->post_content); 
									echo $content;  
                               ?> 
							   <?php while (have_posts()) : the_post(); ?>		
							   <?php get_template_part( 'content', 'single' ); ?>
							   <?php endwhile; ?>	
			<p>&nbsp;</p> 				
			</div><!-- end welcome -->
			</div><!-- end leftContent -->	
			<?php get_sidebar(); ?>		
			</div><!-- end main -->
			<?php get_footer(); ?>
			