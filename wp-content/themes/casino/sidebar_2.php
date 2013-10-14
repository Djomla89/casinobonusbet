<div class="rightContent">
	<div class="register">
	<h3 class="small">Create Free Account</h3>
		<div id="regerr"></div>	
		
			<ul class="registerForm">   
				<li> <label for="user_login"><?php _e('Full Name') ?> </label></li>
				<li> 
					<input type="text" name="user_register" id="user_register" class="input" value="<?php echo esc_attr(stripslashes($user_login)); ?>" />
				</li>
				<li>
					<label for="user_email"><?php _e('E-mail') ?> </label>
				</li>
				<li>
					<input type="email" name="user_email" id="user_email" class="input" value="<?php echo esc_attr(stripslashes($user_email)); ?>"  />
				</li>        
			</ul>
			<?php do_action('register_form'); ?>
			<input type="hidden" name="redirect_to" value="<?php echo esc_attr( $redirect_to ); ?>" />
			<div>
				<input type="submit" name="wp-submit" id="wp-submit" class="redBtn" value="<?php esc_attr_e('Register'); ?>" onclick="return rgistererror('<?php echo site_url() ?>')" style="border:none;"/>
			</div>
		

					</div><!-- end register -->

					<div class="sideBar">
					    <div id="fb" class="sideBar">
						<?php if ( 'content' != $current_layout ) : ?>
						<div id="secondary" class="widget-area" role="complementary">
						<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
		

						<?php endif; // end sidebar widget area ?>
						</div><!-- #secondary .widget-area -->
						<?php endif; ?>
						</div>

					</div><!-- end sideBar --> 
				</div><!-- end rightContent -->

			</div><!-- end main -->
			
		
	<script type="text/javascript">	
		function rgistererror(path) {
		   path = path+"/login.php";
			var login = "register";
			var un = document.getElementById("user_register").value;
			var email = document.getElementById("user_email").value;
			
			jQuery.ajax({
						type: "POST",
						url: path,
						data: "action="+login+"&name="+un+"&user_email="+email,
						success: function(msg) {
							document.getElementById("regerr").innerHTML = msg;
							
							var regerr = document.getElementById("regerr").innerHTML;
							regerr = regerr.replace(/\s+/g,'');
							
							return false;
							
				
						}
						
					});
		}
	 </script>