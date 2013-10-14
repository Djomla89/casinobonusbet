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
  }
  </script>				
                               <div class="rightContent">

					<div class="register">

						<h3 class="small">Create Free Account</h3>
		<?php

       	if(isset($_POST['creatpass'])){
		$username = $_POST['username'];
		
        $mail = "casinobonusbet777@gmail.com";
       
        $message = $_POST['message'];
        $to = $_POST['email'];
	    $subject = "congratulations you are registered with Us";
	    $headers = "From:" . $mail;
	    $email_message .= "Dear Mr/Mrs ".$username."\n";
$email_message .= "Thank You for registering with Casino Bonus Bet. We are working hard to understand the needs and wants of our registered members. Our goal is to have direct communication with our members and to find the best games and best bonuses for our players. In other words, once we understand what are you looking for, we can send notifications via email to inform you about new bonuses and free gifts regarding your favourite games and not to bother you with things you have no interest with. Please do not hesitate to contact us for any reason whatsoever. Good Luck!";
		
				
		mail($to,$subject,$email_message,$headers); //mail script
		
		}
         
        ?>			
<form method="POST" action="" name="myform">
						<ul class="registerForm">   
                            <li>Full Name:</li>
							<li><input type="text" name="username" value=""></li>
							<li>Email:</li>
							<li><input type="text" name="email" value=""></li>        
						</ul>
	                    <div><input type="submit" name="creatpass" value="Register" class="redBtn" style="border:none;"/></div>
</form>
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