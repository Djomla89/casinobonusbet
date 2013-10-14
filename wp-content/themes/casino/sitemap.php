<?php

/**

 * The main template file.

 * Template Name: site map

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
.welcome li{ list-style-type:none; margin-left:26px; padding-top:10px;}
.welcome li a{ font-size:15px; font-weight:bold; text-transform: uppercase;}

</style>
				<div class="welcome">

						<h3>Site Map</h3>
 <?php 
					     $args = array(
				        'sort_column' => 'ID',
						'title_li' => '',
				        'hierarchical' => 1,
						'exclude' => '',
						'post_type' => 'page',
						'post_status' => 'publish'
												
						); 
					?>
					
					<?php wp_list_pages($args); ?>
						<p>&nbsp;</p> 

					</div><!-- end welcome -->

				</div><!-- end leftContent -->

				<?php get_sidebar(); ?>

			</div><!-- end main -->

<?php get_footer(); ?>