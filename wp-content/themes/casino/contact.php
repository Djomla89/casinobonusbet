<?php
/**
 * The main template file.
 * Template Name: Contact
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

<script>
function validateForm()
{
var x=document.forms["myForm"]["username"].value;
if (x==null || x=="")
  {
  alert("Name must be filled out");
  return false;
  }
  var x=document.forms["myForm"]["email"].value;
  var atpos=x.indexOf("@");
  var dotpos=x.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  {
  alert("Not a valid e-mail address");
  return false;
  }
  var x=document.forms["myForm"]["message"].value;
if (x==null || x=="")
  {
  alert("Message must be filled out");
  return false;
  }
  }
  </script>
  <?php 
if(isset($_POST['send'])){
    $name = $_POST['username'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $to = "casinobonusbet777@gmail.com";
	$subject = "Customer mail";
	$headers = "From:" . $email;
	    $email_message .= "Full Name: ".$name."\n";
		$email_message .= "Email: ".$email."\n";
		$email_message .= "Message: ".$message."\n";
				
		mail($to,$subject,$email_message,$headers); //mail script
		}
?>
			
										<div class="welcome">

						<h3>Contact Us</h3>
<form method="POST" name="myForm" action="" onsubmit="return validateForm()">
						<div class="contactUs">

							<ul class="contactForm">

								<li>Full Name:</li>
								<li><input type="text" name="username" value=""></li>
								<li>Email:</li>
								<li><input type="email" name="email" value="" ></li>
								<li>Message::</li>
								<li><textarea name="message" cols="41" rows="10"></textarea></li>

							</ul>

	                    <!--<a href="#" class="redBtn" name="sendrr">Send</a> <a href="#" class="redBtn">Reset</a>-->
						<input type="submit" name="send" value="Send" class="redBtn" />
                        <input type="reset" name="send" value="Reset" class="redBtn" />
						</div><!-- end contactUs -->
</form>
					</div><!-- end welcome -->

				</div><!-- end leftContent -->

				

<?php get_sidebar(); ?>
<?php get_footer(); ?>