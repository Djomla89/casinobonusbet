<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>
		<div class="footer">

			<div class="footHolder">

			    <p>Copyright &copy; 2013 CasinoAffiliates.com. All Rights Reserved</p>

				<ul class="footNav">
				<?php 
					     $args = array(
				        'sort_column' => 'ID',
						'title_li' => '',
				        'hierarchical' => 1,
						'exclude' => '5,6,8,10,12,14,16,18,20,22,27,30,32,256',
						'post_type' => 'page',
						'post_status' => 'publish'
												
						); 
					?>
					
					<?php wp_list_pages($args); ?>
					<!--<li><a href="terms-conditions.html">Terms & Conditions</a></li>
					<li><a href="privacy-policy.html">Privacy policy</a></li>
					<li><a href="site-Map.html">Site Map</a></li>-->
				</ul>

			</div><!-- end footHolder -->

		</div><!-- end footer -->

	    </div><!-- end container -->
<?php wp_footer(); ?>

</body>
</html>