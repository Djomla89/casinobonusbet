<?php
/**
 * The main template file.
 * Template Name: No-Deposit-Bonues
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
.offerHolderLong ul li a img{width:29px; height:29px;}
</style>
<script>
$(document).ready(function() {<?php $url = site_url(); ?>
    var loc = window.location;
	if(loc == '<?php echo $url; ?>/?page_id=18'){
	$("#act1").attr("checked", "");
	}
	if(loc == '<?php echo $url; ?>/?page_id=18&cat=9' ){
	 $("#act1").attr("checked", "");
	 }
	 if(loc == '<?php echo $url; ?>/?page_id=18&cat=10' ){
	 $("#act2").attr("checked", "");
	 }
	 if(loc == '<?php echo $url; ?>/?page_id=18&cat=11' ){
	 $("#act3").attr("checked", "");
	 }
	 if(loc == '<?php echo $url; ?>/?page_id=18&cat=12' ){
	 $("#act4").attr("checked", "");
	 }
	 if(loc == '<?php echo $url; ?>/?page_id=18&cat=14' ){
	 $("#act5").attr("checked", "");
	 }
	 if(loc == '<?php echo $url; ?>/?page_id=18&cat=13' ){
	 $("#act6").attr("checked", "");
	 }								
});
 function url(change){
 var ChangeUr = change;
 window.location.href = ChangeUr;
 }
 
</script>

					<div class="welcome">

						<h3>Free No Deposit & Deposit Bonus Bankrolls</h3>

						<?php 
                           $id=18; 
                           $post = get_page($id); 
						   $content = apply_filters('the_content', $post->post_content); 
                           echo $content;  
                        ?>
                        <?php while (have_posts()) : the_post(); ?>
						<?php get_template_part( 'content', 'single' ); ?> 
					    <?php endwhile; ?>

						<div class="offers">
							<ul>
								<li><input name="offer" type="radio" value="" id="act1" onclick="url('<?php echo site_url();?>/?page_id=18&cat=9')" />Casino</li>
								<li><input name="offer" type="radio" value="" id="act2" onclick="url('<?php echo site_url();?>/?page_id=18&cat=10')"/>Poker</li>
								<li><input name="offer" type="radio" value="" id="act3" onclick="url('<?php echo site_url();?>/?page_id=18&cat=11')"/>Lottery</li>
								<li><input name="offer" type="radio" value="" id="act4" onclick="url('<?php echo site_url();?>/?page_id=18&cat=12')"/>Bingo</li>
								<li><input name="offer" type="radio" value="" id="act5" onclick="url('<?php echo site_url();?>/?page_id=18&cat=14')"/>Skillgames</li>
								<li><input name="offer" type="radio" value="" id="act6" onclick="url('<?php echo site_url();?>/?page_id=18&cat=13')"/>All</li>
							</ul>

						</div><!-- end offers -->

					</div><!-- end welcome -->

					<div class="noDepositOffers">

					<h3 class="red">
					                <?php 
									 $cat = $_GET['cat'];
																	
									if($cat == ''){ echo "CASINO BANKROLLS";}
									if($cat == 9){ echo "CASINO BANKROLLS";}
									if($cat == 10){ echo "POKER BANKROLLS";} 
									if($cat == 11){ echo "LOTTERY BANKROLLS";}
									if($cat == 12){ echo "BINGO BANKROLLS";}
									if($cat == 13){ echo "All BANKROLLS";}
                                    if($cat == 14){ echo "SKILLGAMES BANKROLLS";}									
									?>
					</h3>

						<div class="offerHolderLong">
                            <ul>
							<?php
								$url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
								$url1 = explode('&',$url);
								if($url1[0] == $url) {
								 $id = '9';
								 }
								else{
									$id = $_GET['cat'];
								  }
 
							?>	
									<?php query_posts("cat='<?php echo $id; ?>'");?>

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
					    </div>

						</div><!-- end offerHolder -->

					</div><!-- end noDepositOffers -->
<?php get_sidebar(); ?>
				</div><!-- end leftContent -->


<?php get_footer(); ?>