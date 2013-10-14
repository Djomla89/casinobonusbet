<?php
/**
 * The main template file.
 * Template Name: Scratch
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
.entry-header h1{display: none;}
</style>			
					<div class="welcome">

						<h3>SCRATCH BONUS: No Deposit Bonus & Deposit Bonus</h3>

						
						<?php 
                           $id=14; 
                           $post = get_page($id); 
						   $content = apply_filters('the_content', $post->post_content); 
                           echo $content;  
                        ?>
                        <?php while (have_posts()) : the_post(); ?>
						<?php get_template_part( 'content', 'single' ); ?> 
						
					    <?php endwhile; ?>

					</div><!-- end welcome -->

					<div class="goldOffers">

						<ul class="golden">
							<li><a href="<?php echo get_post_meta(14, 'image1_link_value',true); ?>" target="_blank"><img src="<?php echo get_post_meta(14, 'image1_value',true); ?>" Alt="Offers" Title="Offers" width="254" height="128"></a></li>
							<li><a href="<?php echo get_post_meta(14, 'image2_link_value',true); ?>" target="_blank"><img src="<?php echo get_post_meta(14, 'image2_value',true); ?>" Alt="Offers" Title="Offers" width="254" height="128"></a></li>
							<li class="lastOffer"><a href="<?php echo get_post_meta(14, 'image3_link_value',true); ?>" target="_blank"><img src="<?php echo get_post_meta(14, 'image3_value',true); ?>" Alt="Offers" Title="Offers" width="254" height="128"></a></li>
                             
						</ul>

					</div><!-- end goldOffers -->

					<div class=silverOffers>

						<div class="listHolder">

							<ul>
								<?php query_posts('cat=6&showposts=9');?>
			                    <?php while (have_posts($args)) : the_post($args); ?>
								<li>
									<a href="<?php the_permalink() ?>" class="silverLogo">
									      <!--<img src="<?php //echo get_template_directory_uri(); ?>/images/silverOffer.gif" Alt="PKR" Title="PKR">-->
									<?php if ( has_post_thumbnail() ) { 
									       the_post_thumbnail();
							            } 
					                ?>
									</a>
									<a href="<?php the_permalink() ?>" class="silverTitle"><?php the_title(); ?><br/></a>
									<?php
										$chars = 60; 
										$mytext = get_the_content(); 
										$mytext = substr($mytext,0,$chars);  
										$mytext = substr($mytext,0,strrpos($mytext,' '));  
								    ?>
									<p class="silverText"><?php echo $mytext; ?>....</p>
									<a href="<?php the_permalink() ?>" class="silverLink">Click Here</a>
								</li>
								<?php endwhile; ?>
							</ul>

						</div><!-- end listHolder -->

					</div><!-- end silverOffers -->

					<div class="noDepositOffers">

					<h3 class="red">No Deposit Bonus Offers</h3>

						<div class="offerHolder" style="width:764px;">

							<ul>
							    <?php query_posts('cat=30&showposts=10');?>
			                    <?php while (have_posts($args)) : the_post($args); ?>
								<li style="width:360px; margin-right:10px; float:left; border-bottom: 1px solid #D5D5D5;">
								<a href="<?php the_permalink() ?>" class="silverLogo">
									      <!--<img src="<?php //echo get_template_directory_uri(); ?>/images/silverOffer.gif" Alt="PKR" Title="PKR">-->
									<?php if ( has_post_thumbnail() ) { 
									       the_post_thumbnail();
							            } 
					                ?>
									</a>
									<a href="<?php the_permalink() ?>" class="silverTitle"><?php the_title(); ?><br/></a>
									<?php
										$chars = 40; 
										$mytext = get_the_content(); 
										$mytext = substr($mytext,0,$chars);  
										$mytext = substr($mytext,0,strrpos($mytext,' '));  
								    ?>
									<p class="silverText"><?php echo $mytext; ?>....</p>
									<a href="<?php the_permalink() ?>" class="bronzeView">View</a>
								</li>
								<?php endwhile; ?>
								</li>
								
							</ul>

						</div><!-- end offerHolder -->
					</div><!-- end noDepositOffers -->

				</div><!-- end leftContent -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>