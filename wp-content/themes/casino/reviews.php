<?php
/**
 * The main template file.
 * Template Name: Reviews
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
<style>.entry-header h1{display: none;}
.offerHolderLong a img{width:29px; height:29px;}</style>
<script>$(document).ready(function() {<?php $url = site_url(); ?>  
  var loc = window.location;
  if(loc == '<?php echo $url; ?>/?page_id=16')
    {	
	 $("#act21").attr("checked", "");	
    }
  if(loc == '<?php echo $url; ?>/?page_id=16&cat=31' )
   {	 
    $("#act21").attr("checked", "");	
   }
  if(loc == '<?php echo $url; ?>/?page_id=16&cat=32' )
   {	
    $("#act22").attr("checked", "");	
   }
  if(loc == '<?php echo $url; ?>/?page_id=16&cat=33' )
   {	 
    $("#act23").attr("checked", "");	
   }	
  if(loc == '<?php echo $url; ?>/?page_id=16&cat=34' )
   {	
    $("#act24").attr("checked", "");	
   }	
  if(loc == '<?php echo $url; ?>/?page_id=16&cat=35' )
   {	 
    $("#act25").attr("checked", "");	
   }	 							
 });
 function url(change){
 var ChangeUr = change;
 window.location.href = ChangeUr;
 }
 
 </script>			<div class="welcome">		
							   <h3>Free No Deposit & Deposit Bonus Bankrolls</h3>				
							   <?php 
									$id=16; 
									$post = get_page($id); 
									$content = apply_filters('the_content', $post->post_content); 
									echo $content;  
                               ?> 
							   <?php while (have_posts()) : the_post(); ?>		
							   <?php get_template_part( 'content', 'single' ); ?>
							   <?php endwhile; ?>					
					   <div class="offers">						
							   <ul> <li>Choose Here: </li>				
							      <li><input name="offer" type="radio" value="" id="act21" onclick="url('<?php echo site_url();?>/?page_id=16&cat=31')"/>Casino</li>
								  <li><input name="offer" type="radio" value="" id="act22" onclick="url('<?php echo site_url();?>/?page_id=16&cat=32')";/>Poker</li>								
								  <li><input name="offer" type="radio" value="" id="act23" onclick="url('<?php echo site_url();?>/?page_id=16&cat=33')";/>Lottery</li>
								  <li><input name="offer" type="radio" value="" id="act24" onclick="url('<?php echo site_url();?>/?page_id=16&cat=34')";/>Bingo</li>	
								  <li><input name="offer" type="radio" value="" id="act25" onclick="url('<?php echo site_url();?>/?page_id=16&cat=35')";/>All</li>
								</ul>					
			            </div><!-- end offers -->		
			        </div><!-- end welcome -->

					<div class="noDepositOffers">

						<div class="offerHolderLong">

							<table border="0" width="755" cellspacing="0" cellpadding="0">
							    <tr height="30" bgcolor="#ef0d16">
							        <td class="headerTitleWhite" colspan="2">
									<?php 
									 $cat = $_GET['cat'];
																	
									if($cat == ''){ echo "BEST CASINO BONUS REVIEWS";}
									if($cat == 31){ echo "BEST CASINO BONUS REVIEWS";}
									if($cat == 32){ echo "POKER ROOM REVIEWS";} 
									if($cat == 33){ echo "LOTTERY REVIEWS";}
									if($cat == 34){ echo "BINGO REVIEWS";}
									if($cat == 35){ echo "All REVIEWS";}								
									?>
																		
									</td>
							        <td class="headerTitleWhite" colspan="2"></td>
							        <td class="headerTitleWhite" align="center" width="86">Rating</td>
							        <td class="headerTitleWhite" align="center" width="141">Free Bonus</td>
							        <td class="headerTitleWhite" align="center" width="155">Max Bonus</td>
							        <td class="headerTitleWhite" align="center" width="70">Rakeback</td>
							        <td class="headerTitleWhite" align="center" width="100"></td>
							    </tr>
							    <?php	
								$url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
								$url1 = explode('&',$url);
								if($url1[0] == $url) {	
								    $id = '31';	
								 }
								else{	
								$id = $_GET['cat'];
								}?>	
								<?php //wp_reset_query(); ?>
								<?php //query_posts('cat=31');?>
								<?php query_posts("cat='<?php echo $id; ?>'");?>
								<?php while (have_posts()) : the_post(); ?>
									
									<?php $rurl = get_permalink(); ?> 
								    <tr height="40" onmouseover="this.style.background='#eeeeee';" onmouseout="this.style.background='none'">							 
									<td style="border-bottom: 1px dashed silver;" width="40" align="center">
									<a href="<?php echo $rurl; ?>" class="silverLogo">
									<?php   if ( has_post_thumbnail() ) { 		
									the_post_thumbnail();					
									}                                    
									?>								
									</a>
						
									</td>
							        <td style="border-bottom: 1px dashed silver;" width="150">
									<a href="<?php echo $rurl; ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>" class="silverTitle">				
									<?php the_title(); ?>								
									</a>
									</td>
							        <td width="4" style="border-bottom: 1px dashed silver;"></td>
							        <td width="9" style="border-bottom: 1px dashed silver;"></td>
		
										
					<?php $meta_values1 = get_post_meta($post->ID, 'rating_value', true); ?>
					<?php $meta_values2 = get_post_meta($post->ID, 'freebonus_value', true); ?>
					<?php $meta_values3 = get_post_meta($post->ID, 'maxbonus_value', true); ?>
					<?php $meta_values4 = get_post_meta($post->ID, 'rakeback_value', true); ?>
					
					
							        <td style="border-bottom: 1px dashed silver;" align="center" width="86" class="sFont"><?php echo $meta_values1; ?></td>
							        <td style="border-bottom: 1px dashed silver;" align="center" width="141" class="sFont"><?php echo $meta_values2; ?></td>
							        <td style="border-bottom: 1px dashed silver;" align="center" width="155"><?php echo $meta_values3; ?></td>
							        <td style="border-bottom: 1px dashed silver;" align="center" width="70" class="sFont"><?php echo $meta_values4; ?></td>
							        <td style="border-bottom: 1px dashed silver;" align="center" width="100">
									<a href="<?php echo $rurl; ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><b>Review & bonus</b> &raquo;</a>
									</td>
							    </tr>
								<?php endwhile; ?>
							    

							</table>

						</div><!-- end offerHolderLong -->

					</div><!-- end noDepositOffers -->

				</div><!-- end leftContent -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>