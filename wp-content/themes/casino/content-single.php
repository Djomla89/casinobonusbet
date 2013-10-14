<?php
/**
 * The template for displaying content in the single.php template
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>
<style>
.bonusLogo h1{ width:425px; padding-bottom:5px; float:left; margin-top:18px;}
.entry-content{ padding-left:10px; padding-right:6px; text-align:justify;}
#content img{border: 2px solid yellow; float: left;height: 250px;margin-left: 16px;margin-right: 20px;margin-top: 20px;margin-bottom: 5px;width: 300px;}

</style>	
	<?php if ('post' == get_post_type() ) : ?>
		
	<div class="bonusLogo">
		<?php if ( has_post_thumbnail() ) { 
		       the_post_thumbnail('newsizeimg1');
		          } 
		 ?>	
		 <h1 class="entry-title"><?php the_title(); ?></h1>
		  <small><b>Posted on <?php the_time('D, F j, Y'); ?> by <?php the_author(); ?></b></small>
		<div class="entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'twentyeleven' ) . '</span>', 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->
	</div>	
	  
		<?php endif; ?>	

	


