<?php
/**
 * The main template file.
 * Template Name: News
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
#awe{font-family: Tahoma,Verdana,Arial;
    font-size: 21px;
    font-weight: bold;
    text-align: left;
	color:black;}
.entry-header h1{display: none;}
.newsArticle a img{width:300px; height:250px; border-img:3px solid yellow;}
.newsArticle ul li {list-style-type: none;}
</style>
<script>
$(document).ready(function() {    <?php $url = site_url(); ?>
    var loc = window.location;
	if(loc == '<?php echo $url; ?>/?page_id=20'){
	$("#act11").attr("checked", "");
	}
	if(loc == '<?php echo $url; ?>/?page_id=20&cat=19' ){
	 $("#act11").attr("checked", "");
	 }
	 if(loc == '<?php echo $url; ?>/?page_id=20&cat=20' ){
	 $("#act21").attr("checked", "");
	 }
	 if(loc == '<?php echo $url; ?>/?page_id=20&cat=21' ){
	 $("#act31").attr("checked", "");
	 }
	 if(loc == '<?php echo $url; ?>/?page_id=20&cat=22' ){
	 $("#act41").attr("checked", "");
	 }
	 if(loc == '<?php echo $url; ?>/?page_id=20&cat=24' ){
	 $("#act51").attr("checked", "");
	 }
	 if(loc == '<?php echo $url; ?>/?page_id=20&cat=23' ){
	 $("#act61").attr("checked", "");
	 }
});
 function url(change){
 var ChangeUr = change;
 window.location.href = ChangeUr;
 }
</script>
			
					<div class="welcome">

						<h3>News</h3>

						<?php 
                           $id=20; 
                           $post = get_page($id); 
						   $content = apply_filters('the_content', $post->post_content); 
                           echo $content;  
                        ?>
                        <?php while (have_posts()) : the_post(); ?>
						<?php get_template_part( 'content', 'single' ); ?> 
						
					    <?php endwhile; ?>

						<div class="offers">

						    <ul>
								<li><input name="offer" type="radio" value="" id="act11" onclick="url('<?php echo site_url();?>/?page_id=20&cat=19')"/>Casino</li>
								<li><input name="offer" type="radio" value="" id="act21" onclick="url('<?php echo site_url();?>/?page_id=20&cat=20')"/>Poker</li>
								<li><input name="offer" type="radio" value="" id="act31" onclick="url('<?php echo site_url();?>/?page_id=20&cat=21')"/>Lottery</li>
								<li><input name="offer" type="radio" value="" id="act41" onclick="url('<?php echo site_url();?>/?page_id=20&cat=22')"/>Bingo</li>
								<li><input name="offer" type="radio" value="" id="act51" onclick="url('<?php echo site_url();?>/?page_id=20&cat=24')"/>Skillgames</li>
								<li><input name="offer" type="radio" value="" id="act61" onclick="url('<?php echo site_url();?>/?page_id=20&cat=23')"/>All</li>
							</ul>

						</div><!-- end offers -->

					</div><!-- end welcome -->

					<div class="noDepositOffers">

					<h3 class="red">
					                <?php 
									 $cat = $_GET['cat'];
																	
									if($cat == ''){ echo "BEST CASINO NEWS";}
									if($cat == 19){ echo "BEST CASINO NEWS";}
									if($cat == 20){ echo "POKER NEWS";} 
									if($cat == 21){ echo "LOTTERY NEWS";}
									if($cat == 22){ echo "BINGO NEWS";}
									if($cat == 23){ echo "All NEWS";}
                                    if($cat == 24){ echo "SKILLGAMES NEWS";}									
									?>
					
					</h3>

						<div class="offerHolderLong">

							
<?php
								$url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
								//echo $url;
								$url1 = explode('&',$url);
								if($url1[0] == $url) {
								 $id = '19';
								 }
								else{
									$id = $_GET['cat'];
								  }
 
								   // echo '<br>'; 
								 // echo $url1[0];
								  //echo '<br>';  
								  //echo $id;
							?>	
									<?php query_posts('cat='.$id.'&showposts=4');?>
                                     
                                <?php while (have_posts()) : the_post(); ?>
								<div class="newsArticle">
								<li style="margin-top:-10px;">
								
									<a href="<?php the_permalink() ?>" class="silverLogo">
									<?php   if ( has_post_thumbnail() ) { 
			                                     the_post_thumbnail('adminpost');
												} 
                                     ?>
									</a>
									
									<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>" class="silverTitle" id="awe">
									<?php the_title(); ?>
									</a></h2>
									<small><b>Posted on <?php the_time('D, F j, Y'); ?> by <?php the_author(); ?></b></small>
									<p class="pNews">
									<?php $content = get_the_content();
										  $content = strip_tags($content);
										  echo substr($content, 0, 1400);
                                    ?>
									....</p>
									
									<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>" style="float:right; margin-right:13px; margin-top:3px;" class="blackBtn">View</a>
								</li></br>
								</div><!-- end newsArticle -->
								<?php endwhile; ?>

							

							<!--<div class="newsArticle">

								<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/dummyNews.jpg" alt="News" title="News"></a>

								<h2><a href="#">News Title Comes Here</a></h2>

								<small><b>Posted on Tuesday, February 19, 2013 by "T".</b></small>

								<p class="pNews">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed viverra ornare ante, adipiscing luctus mi aliquam imperdiet. Etiam quis augue vel nulla sollicitudin aliquet vel eget felis. Suspendisse eget mauris massa, sed suscipit est. Aenean lectus neque, condimentum vel mollis sed, fringilla id magna.
								</p>

								<p class="pNews">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed viverra ornare ante, adipiscing luctus mi aliquam imperdiet. Etiam quis augue vel nulla sollicitudin aliquet vel eget felis. Suspendisse eget mauris massa, sed suscipit est. 
								</p>
								
								<p class="pNews">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed viverra ornare ante, adipiscing luctus mi aliquam imperdiet. Etiam quis augue vel nulla sollicitudin aliquet vel eget felis. Suspendisse eget mauris massa, sed suscipit est. Aenean lectus neque, condimentum vel mollis sed, fringilla id magna.	
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed viverra ornare ante, adipiscing luctus mi aliquam imperdiet.
								</p>

								<a href="news_full.html" class="blackBtn"> Read More </a>

							</div>
							
							<div class="newsArticle">

								<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/dummyNews.jpg" alt="News" title="News"></a>

								<h2><a href="#">News Title Comes Here</a></h2>

								<small><b>Posted on Tuesday, February 19, 2013 by "T".</b></small>

								<p class="pNews">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed viverra ornare ante, adipiscing luctus mi aliquam imperdiet. Etiam quis augue vel nulla sollicitudin aliquet vel eget felis. Suspendisse eget mauris massa, sed suscipit est. Aenean lectus neque, condimentum vel mollis sed, fringilla id magna.
								</p>

								<p class="pNews">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed viverra ornare ante, adipiscing luctus mi aliquam imperdiet. Etiam quis augue vel nulla sollicitudin aliquet vel eget felis. Suspendisse eget mauris massa, sed suscipit est. 
								</p>
								
								<p class="pNews">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed viverra ornare ante, adipiscing luctus mi aliquam imperdiet. Etiam quis augue vel nulla sollicitudin aliquet vel eget felis. Suspendisse eget mauris massa, sed suscipit est. Aenean lectus neque, condimentum vel mollis sed, fringilla id magna.	
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed viverra ornare ante, adipiscing luctus mi aliquam imperdiet.
								</p>

								<a href="news_full.html" class="blackBtn"> Read More </a>

							</div>
							
							<div class="newsArticle">

								<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/dummyNews.jpg" alt="News" title="News"></a>

								<h2><a href="#">News Title Comes Here</a></h2>

								<small><b>Posted on Tuesday, February 19, 2013 by "T".</b></small>

								<p class="pNews">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed viverra ornare ante, adipiscing luctus mi aliquam imperdiet. Etiam quis augue vel nulla sollicitudin aliquet vel eget felis. Suspendisse eget mauris massa, sed suscipit est. Aenean lectus neque, condimentum vel mollis sed, fringilla id magna.
								</p>

								<p class="pNews">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed viverra ornare ante, adipiscing luctus mi aliquam imperdiet. Etiam quis augue vel nulla sollicitudin aliquet vel eget felis. Suspendisse eget mauris massa, sed suscipit est. 
								</p>
								
								<p class="pNews">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed viverra ornare ante, adipiscing luctus mi aliquam imperdiet. Etiam quis augue vel nulla sollicitudin aliquet vel eget felis. Suspendisse eget mauris massa, sed suscipit est. Aenean lectus neque, condimentum vel mollis sed, fringilla id magna.	
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed viverra ornare ante, adipiscing luctus mi aliquam imperdiet.
								</p>

								<a href="news_full.html" class="blackBtn"> Read More </a>

							</div>--><!-- end newsArticle -->

						</div><!-- end offerHolder -->

					</div><!-- end noDepositOffers -->

				</div><!-- end leftContent -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>