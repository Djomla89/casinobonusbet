<?php
/**
 * The main template file.
 * Template Name: Free Gift
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
			
<div class="welcome">
<style>
.entry-header h1{display: none;}
.offerHolderLong ul li a img{width:29px; height:29px;}
</style>
						<h3>Free Gifts</h3>

						<span><img src="<?php echo get_template_directory_uri(); ?>/images/money-backet.png" Alt="Gifts" Title="Gifts"></span>

						<?php 
                           $id=22; 
                           $post = get_page($id); 
						   $content = apply_filters('the_content', $post->post_content); 
                           echo $content;  
                        ?>
                        <?php while (have_posts()) : the_post(); ?>
						<?php get_template_part( 'content', 'single' ); ?> 
						
					    <?php endwhile; ?>

					</div><!-- end welcome -->

					<div class="noDepositOffers">

					<h3 class="red">Free Gifts - Deposit Offers</h3>

						<div class="offerHolderLong">

							<ul>
							<?php query_posts('cat=18'); ?>

                                <?php while (have_posts()) : the_post(); ?>
								<li style="margin-top:15px;">
								
									<a href="<?php the_permalink() ?>" class="silverLogo">
									<?php   if ( has_post_thumbnail() ) { 
			                                     the_post_thumbnail('adminpost');
												} 
                                     ?>
									</a>
									<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>" class="silverTitle">
									<?php the_title(); ?>
									</a>
									<p class="silverText">
									<?php $content = get_the_content();
										  $content = strip_tags($content);
										  echo substr($content, 0, 100);
                                    ?>
									....</p>
									
									<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>" style="float:right; margin-right:35px;" class="longView">View</a>
								</li>
								<?php endwhile; ?>
												
							</ul>

						</div><!-- end offerHolder -->

					</div><!-- end noDepositOffers -->

				</div><!-- end leftContent -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>