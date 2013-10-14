<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width." />
<title>Casino Affiliates</title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.1.1.min.js"></script>

<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php	wp_head();  ?>
		<script language="JavaScript" type="Text/Javascript">
		var urlAddress = "http://www.casinoaffiliates.com"; 
		var pageName = "Casino Bet Bonuses"; 
		function addToFavorites() 
		{ 
			if (window.external) { window.external.AddFavorite(urlAddress,pageName) 
		} 
			else { alert("Sorry! Your browser doesn't support this function."); 
		} 
		}
		</script>
<script type="text/javascript">
  
function AddFavorites()
{
var title = document.title;
var url = window.location.href;
if(window.external){ window.external.AddFavorite( url, title); return false; } // IE
}
</script>
</head>

<body <?php body_class(); ?>>
	    <div class="container">

		    <div class="topMenu">

		    	<ul class ="topLeft">
					<!--<li><a href="about.php">About us</a></li>
					<li><a href="contact.php">Contact us</a></li>
					<li><a href="javascript:addToFavorites()">Bookmark this page</a></li>-->
					<?php 
					     $args = array(
				        'sort_column' => 'ID',
				        'hierarchical' => 1,
						'exclude' => '5,6,8,10,12,14,16,18,20,22,32,256,258,262,356,358,360',
						'post_type' => 'page',
						'post_status' => 'publish'
						); 
					?>
					<?php
						$pages = get_pages($args); 
						foreach ( $pages as $page ) {
					?> <li><a href="<?php echo get_page_link( $page->ID ); ?>">  
					<?php echo " $page->post_title "; ?> </a> </li>
					<?php } ?>
					<li><a id="bookmarkme"  rel="sidebar" title="bookmark this page" href="javascript:addToFavorites();" onclick="AddFavorites();">Bookmark this page</a></li>
		    	</ul>

		    	<ul class ="topLeftIcons">
<?php if (function_exists('sociable_html')) {
                                       echo sociable_html(); } 
                            ?>
					<!--<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook_btn.png" Alt="Facebook" Title="Facebook"></a></li>
					<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter_btn.png" Alt="Twitter" Title="Twitter"></a></li>
					<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/linkedin_btn.png" Alt="LinkedIn" Title="LinkedIn"></a></li>-->
		    	</ul>

		    	<ul class="topRight">
		    		<li><a href="#" class="forgotPass">Forgot Password?</a></li>
		    		<li>&nbsp;</li>
					<li>Username:</li>
					<li><input type="text" name="username" value=""></li>
					<li>Password:</li>
					<li><input type="password" name="password" value=""></li>
					<li><a href="#" class="redBtnLogin">Login</a></li>
		    	</ul>

		    </div><!-- end topMenu -->

			<div class="header">

				<h1><a href="http://casinobonusbet.com/">
				      <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" Alt="Logo" Title="Logo">
				   </a>
				</h1>

<script>
$(document).ready(function(){
   $("#menuid li:eq(0) a").addClass("home");
    $("#menuid li:eq(1) a").addClass("casino");
	$("#menuid li:eq(2) a").addClass("poker");
	$("#menuid li:eq(3) a").addClass("lottery");
	$("#menuid li:eq(4) a").addClass("bingo");
	$("#menuid li:eq(5) a").addClass("scratch");
	$(".subNav li:eq(1) a").attr('id', 'er');
	//attr("disabled", "disabled");
});
</script>

				<ul class="nav" id="menuid">
					<!--<li><a href="index.php" class="selectedHome">Home</a></li>
					<li><a href="casino.php" class="casino">Casino</a></li>
					<li><a href="poker.php" class="poker">Poker</a></li>
					<li><a href="lottery.php" class="lottery">Lottery</a></li>
					<li><a href="bingo.php" class="bingo">Bingo</a></li>
					<li><a href="scratch.php" class="scratch">Scratch</a></li>-->
					<?php 
					     $args = array(
				        'sort_column' => 'ID',
						'title_li' => '',
				        'hierarchical' => 1,
						'exclude' => '16,18,20,22,27,30,32,256,258,262,356,358,360',
						'post_type' => 'page',
						'post_status' => 'publish'
												
						); 
					?>
					
					<?php wp_list_pages($args); ?>
					
				</ul>

				<span><a href="#">Support!</a></span>

			</div><!-- end header -->

			<div class="main">

				<div class="leftContent">

					<div class="subMenu">

					<ul class="subNav">
						<!--<li><a href="reviews.php">Reviews</a></li>
						<li><a href="no-deposit-bonuses.php">Bankrolls</a></li>
						<li><a href="news.php">News</a></li>
						<li><a href="free-Gifts.php">Free Gifts</a></li>-->
						<?php 
					     $args = array(
				        'sort_column' => 'ID',
						'title_li' => '',
				        'hierarchical' => 1,
						'exclude' => '5,6,8,10,12,14,27,30,32,256,258,262,356,358,360',
						'post_type' => 'page',
						'post_status' => 'publish'
						); 
					?>
					<?php wp_list_pages($args); ?>
					</ul>

					<span><a href="#">Betting Tips</a></span>

					</div><!-- end subMenu -->