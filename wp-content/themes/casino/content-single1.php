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
#content img {
    border: 2px solid yellow;
    float: right;
    height: 223px;
    margin-left: 16px;
    margin-right: 20px;
    margin-top: -73px;
    width: 226px;
	}
</style>

<?php
$id=get_the_ID();
 if (( 'post' == get_post_type() ) && ($id!=207 && $id!=203 && $id!=201 && $id!=199)) : ?>
<div style="clear:both;"></div>
<table width="300" cellspacing="0" cellpadding="0" border="0" style="margin: 15px 0 10px 10px;">
	  <tbody><tr>
	    <td width="80" valign="middle" align="left" class="boldText">Site:</td>
	    <td width="150" valign="middle" align="left" class="lightText">
			<?php 
				$key_1_value = get_post_meta(get_the_ID(), 'Site_value', true); 
				echo $key_1_value;
			
			?>
		</td>
	  </tr>
	  <tr>
	    <td valign="middle" align="left" class="boldText">Bonus:</td>
	    <td valign="middle" align="left" class="lightText">
			<?php 
				$key_2_value = get_post_meta(get_the_ID(), 'Bonus_value', true); 
				echo $key_2_value;
			
			?>
			</td>
	  </tr>
	  <tr>
	    <td valign="middle" align="left" class="boldText">Bonuscode:</td>
	    <td valign="middle" align="left" class="lightText">
			<?php 
				$key_3_value = get_post_meta(get_the_ID(), 'Bonuscode_value', true); 
				echo $key_3_value;
			
			?>		
		</td>
	  </tr>
	</tbody></table>
	<?php endif; ?>	
<?php if ('post' == get_post_type() ) : ?>
		
	<div class="bonusLogo">
		<?php if ( has_post_thumbnail() ) { 
		       the_post_thumbnail('newsizeimg1');
		          } 
		 ?>	
	 
	</div>	
	  
		<?php endif; ?>	
		
	<div class="entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'twentyeleven' ) . '</span>', 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->
<?php 
$id=get_the_ID();
if (( 'post' == get_post_type() )&& ($id!=207 && $id!=203 && $id!=201 && $id!=199)) : ?>	
	<p>&nbsp;</p>
	<h2>Terms and Conditions</h2>	<p style="font-size: 11px;padding: 8px 12px 2px;">
<?php 	
		$key_4_value = get_post_meta(get_the_ID(), 'termscondition_value', true);
		echo $key_4_value;
	
	?>	</p>
	
<p class="getBonus">
<?php 	
		$key_5_value = get_post_meta(get_the_ID(), 'bonuslink_value', true);	
	?>
<a class="getBonusBtn" href="<?php echo $key_5_value; ?>" style="margin: 20px 0;text-align: center;" target="_blank";>Get Bonus Here!
</a>
</p>	
		<?php endif; ?>	