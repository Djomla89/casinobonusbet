<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

		<div id="primary">
			<div id="content" role="main" class="welcome">
               <?php while ( have_posts() ) : the_post(); ?>
					<div class="welcome">
					<h3 class="entry-title"><?php the_title(); ?></h3>
					</div>
					

				<?php endwhile; // end of the loop. ?>
				
<?php
$categories = get_the_category(); //get all categories for this post
$cat = $categories[0]->cat_ID;
//echo $cat;

if ( in_category( array( '19', '20', '21', '22', '23', '24' ) )){
get_template_part( 'content', 'single' );
}
 else {
get_template_part( 'content', 'single1' );
}
?>
				
				<div>
					<?php
					$post = $_GET['p'];
					$result = mysql_query("select meta_value from wp_postmeta where (post_id=$post and meta_key='price_value')");
					$row = mysql_fetch_array($result);
					echo $row['meta_value'];
					?>
				</div>
			</div><!-- #content -->
		</div><!-- #primary --><div style="clear:both;"></div>
</div>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>