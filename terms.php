<!DOCTYPE html>
<?php
session_start();
?>
<html>

    <head>
        
        <!-- Meta Tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Title -->
         <title>Shopping Sense-Online Shop and Get Cashback</title>
        
		<!-- Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,900,700italic,500italic' rel='stylesheet' type='text/css'>
		
        <!-- Stylesheets -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/perfect-scrollbar.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="css/fontello.css">
   		<link rel="stylesheet" href="css/animation.css">
		<link rel="stylesheet" href="css/chosen.css">
     <script>
		function login()
		{
		var uname=document.getElementById("uname").value;
		var pwd=document.getElementById("pwd").value;
		var xmlhttp;
		if (window.XMLHttpRequest)
		{
		xmlhttp=new XMLHttpRequest();
		}
		else
		{
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function()
		{
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
		if(xmlhttp.responseText==1)
		location.reload();
		else
		alert("Invalid Username or password.Please try again");
		}
		}
		xmlhttp.open("GET","login.php?uname="+uname+"&pwd="+pwd,true);
		xmlhttp.send();
		}
	   </script>
            
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<link rel="stylesheet" href="css/ie.css">
        <![endif]-->
		<!--[if IE 7]>
			<link rel="stylesheet" href="css/fontello-ie7.css">
		<![endif]-->
        
    </head>
    
    
    <body>
		
		<!-- Container -->
		<div class="container">
			
			<!-- Header -->
			<!-- Header -->
			<header class="row">
				
				<div class="col-lg-12 col-md-12 col-sm-12">
					
					<!-- Top Header -->
					<div id="top-header">
						
						<div class="row">
							
							<nav id="top-navigation" class="col-lg-7 col-md-7 col-sm-7">
								<ul class="pull-left">
																	<?php
								if(isset($_SESSION['uname']))
								echo "<li><a href='myaccount.php'>My Account</a></li>";
								?>	
									<li><a href="text_page.php">About Us</a></li>
									<li><a href="contact.php">Contact</a></li>
								</ul>
							</nav>
							
							<nav class="col-lg-5 col-md-5 col-sm-5">
								<ul class="pull-right">
									<?php if(!isset($_SESSION['uname']))
										{
										echo "
									<li class='purple'><a href='#'><i class='icons icon-user-3'></i> Login</a>
										<ul id='login-dropdown' class='box-dropdown'>
											<li>
                                            	<div class='box-wrapper'>
                                                    <h4>LOGIN</h4>
                                                    <div class='iconic-input'>
                                                        <input type='text' id='uname' placeholder='Username'>
                                                        <i class='icons icon-user-3'></i>
                                                    </div>
                                                    <div class='iconic-input'>
                                                        <input type='password' id='pwd' placeholder='Password'>
                                                        <i class='icons icon-lock'></i>
                                                    </div>
                                                    <input type='checkbox' id='loginremember'> <label for='loginremember'>Remember me</label>
                                                    <br>
                                                    <br>
                                                    <div class='pull-left'>
                                                        <input type='submit' onclick='login()'  class='orange' value='Login'>
                                                    </div>
                                                    <div class='pull-right'>
                                                        <a href='#'>Forgot your password?</a>
                                                        <br>
                                                        <a href='#'>Forgot your username?</a>
														<br>
                                                    </div>
                                                    <br class='clearfix'>
                                                </div>
												<div class='footer'>
													<h4 class='pull-left'>NEW CUSTOMER?</h4>
													<a class='button pull-right' href='create_an_account.php'>Create an account</a>
												</div>
											</li>
										</ul>
									</li>
									<li><a href='create_an_account.php'><i class='icons icon-lock'></i> Create an Account</a></li>
									";
									}
									else
									{
									$a=$_SESSION['uname'];
									echo "<li><i class='icons icon-lock'></i>Welcome,$a</li>";
									}
									?>	</ul>
							</nav>
							
						</div>
						
					</div>
					<!-- /Top Header -->
					
					
					
					<!-- Main Header -->
				
					<!-- /Main Header -->
					
					
					<!-- Main Navigation -->
					<nav id="main-navigation" class="style1">
						<ul>
							
							<li class="home-green">
								<a href="index.php">
									<i class="icons icon-shop-1"></i>
									<span class="nav-caption">Home</span>
									<span class="nav-description">Who are we?</span>
								</a>
							
							</li>
							
							<li class="red">
								<a href="category.php">
									<i class="icons icon-camera-7"></i>
									<span class="nav-caption">Categories</span>
									<span class="nav-description"></span>
								</a>
								
								<ul class="wide-dropdown normalAniamtion">
									<li>
										<ul>
											<li><a href="#"><i class="icons icon-right-dir"></i> Fashion</a></li>
											<li><a href="#"><i class="icons icon-right-dir"></i> Mobiles</a></li>
											<li><a href="#"><i class="icons icon-right-dir"></i> Books</a></li>
											<li><a href="#"><i class="icons icon-right-dir"></i> Electronics</a></li>
										</ul>
									</li>
									<li>
										<ul>
											
											<li><a href="#"><i class="icons icon-right-dir"></i> Baby &amp; Kids</a></li>
											<li><a href="#"><i class="icons icon-right-dir"></i> Travel</a></li>
											<li><a href="#"><i class="icons icon-right-dir"></i> Home &amp; Kitchen</a></li>
											<li><a href="#"><i class="icons icon-right-dir"></i> Health &amp; Beauty</a></li>
										</ul>
									</li>
									<li>
										<ul>
											
											
											<li><a href="#"><i class="icons icon-right-dir"></i> Flowers &amp; Gifts</a></li>
											<li><a href="#"><i class="icons icon-right-dir"></i> Earn Per Click</a></li>
											<li><a href="#"><i class="icons icon-right-dir"></i> Brands</a></li>
											<li><a href="#"><i class="icons icon-right-dir"></i> Others</a></li>
										</ul>
									</li>
								</ul>
								
							</li>
							
							<li class="blue">
								<a href="trending.php">
									<i class="icons icon-desktop-3"></i>
									<span class="nav-caption">Trending Offers</span>
									<span class="nav-description">All Categories</span>
								</a>
							</li>
							
							<li class="green">
								<a href="blog.php">
									<i class="icons icon-pencil-7"></i>
									<span class="nav-caption">Blog</span>
									<span class="nav-description">News & Reviews</span>
								</a>
							</li>
							
							<li class="purple">
								<a href="contact.php">
									<i class="icons icon-location-7"></i>
									<span class="nav-caption">Contact</span>
									<span class="nav-description">Tell us!! </span>
								</a>
							</li>
							
							<li class="nav-search">
                                	<i class="icons icon-search-1"></i>
							</li>
							
						</ul>
						
						<div id="search-bar">
							
							<div class="col-lg-12 col-md-12 col-sm-12">
                            	<table id="search-bar-table">
                                    <tr>
                                    	<td class="search-column-1">
                                            <p><span class="grey">Popular Searches:</span> <a href="#">accessories</a>, <a href="#">audio</a>, <a href="#">camera</a>, <a href="#">phone</a>, <a href="#">storage</a>, <a href="#">more</a></p>
                                            <input type="text" placeholder="Enter your keyword">
                                        </td>
                                        <td class="search-column-2">
                                        	<p class="align-right"><a href="#">Advanced Search</a></p>
                                        	<select class="chosen-select-search">
                                                 <option>All Categories</option>
												<option>Fashion</option>
                                                <option>Books</option>
                                                <option>Cell Phones &amp; Accessories</option>
												<option>Electronics</option>
												<option>Baby &amp; Kids</option>
												<option>Travel</option>
												<option>Home &amp; Kitchen</option>
												<option>Health &amp; Beauty</option>
												<option>Others</option>
												
                                            </select>
                                		</td>
                                    </tr>
                                </table>
							</div>
							<div id="search-button">
								<input type="submit" value="">
								<i class="icons icon-search-1"></i>
							</div>
						</div>
						
					</nav>
					<!-- /Main Navigation -->
					
				</div>
				
			</header>
			<!-- /Header -->
			
			
			<!-- Content -->
			<div class="row content">
				
                <div class="col-lg-12 col-md-12 col-sm-12">
                	<div class="breadcrumbs">
                    	<p><a href="index.php">Home</a> <i class="icons icon-right-dir"></i> About us</p>
                    </div>
                </div>
                
				<!-- Main Content -->
				<section class="main-content col-lg-9 col-md-9 col-sm-9">
                    
                    
                    <div class="row">
                    	
                        <div class="col-lg-12 col-md-12 col-sm-12">
                        	
                            <div class="carousel-heading no-margin">
                                <h4>Terms &amp; Conditions </h4>
                            </div>
                            
                            <div class="page-content">
                            	
                                <p></p>
                                
                                <p align="justify">The use of <strong><a href="index.php">www.shoppingsense.in </a></strong>in is subject to the following terms and conditions.
By entering our site or enrolling, you as a user (referred to as ‘you’ below) are accepting our terms and conditions.
<br></br>
 </br><strong> 1. Site Membership and Termination of Accounts</strong><br>
 </br>One account is allowed per person.</br>

We reserve the right to refuse membership and further, in the event of fraudulent, abusive or other activity we determine to be unfair, we reserve the right to terminate your account. In addition, please note that accounts may be disabled if they are deemed to be dormant accounts.</br>

We reserve the right to terminate a member's account if a serviceable email address is not provided and also if that member marks our emails as abusive, junk or spam.
</br></br>
<strong>2. Cashback Rewards</strong></br></br>
As an enrolled Shopping Sense member you may earn a cash reward, otherwise known as ‘cashback’, from a number of Merchants, as illustrated on the website. Note that all transactions you make are not with us, but with the individual retailer.</br>
We pass on the cashback we earn from merchants and their tracking agencies for your applicable transactions.</br>
From time to time merchants may increase or decrease the commission paid in which case the cashback offer illustrated on our site may be incorrect. We take reasonable care and skill to ensure that the data provided on this site is accurate and up to date. However, we give no warranty of the accuracy of any information on the site and do not accept liability for any errors or omissions, neither do we accept liability for any resulting damage or loss. Further, we take reasonable care and skill to ensure the correct functionality of the website, however we give no warranty of the functionality and do not accept liability for any errors. By default, your applicable transactions will be credited in line with the commission reported to us by the retailer, which may be more or less than the advertised rate. Some retailers pay cashback on the purchase amount inclusive of tax and/or delivery charges and some retailers exclude these values for the purpose of calculating and awarding cashback.</br>
Applicable transactions for cashback can be defined as transactions that fulfill the following criteria:</br>
(a) Transactions which are tracked directly back to your account by means of an identifying tag, as reported to us by the merchants and/or their tracking networks. Please note that you must be logged into our site at the time you click through to the merchant in order to have your transaction tracked by means of the identifying tag.</br>

We will, however, take reasonable measures to warn you if you are clicking through to a merchant whilst not logged into the Top CashBack website.</br>
(b) Certain repeat purchases also may not qualify for cashback and you must purchase for genuine reasons. You must complete your transaction after clicking directly through to the merchant from whom you wish to purchase (not via any other third party sites).</br>
(c) If your account is terminated or disabled for any other reason, then your cashback will be forfeit and any further transactions which might otherwise become credited to your account will not be deemed to be applicable.</br>
Please note that you can maximize your chances of earning commission over several purchases if you click through to the merchant site from Shopping Sense directly before each purchase.</br>
We cannot be held responsible if the merchant fails to report your sale to us. Merchants have their own rules upon which they determine transactions to be genuine. For example an attempt to simply earn money by clicking/registering with no intention to continue to use/buy from their website could be deemed as non-genuine. These rules may or may not be advertised by ourselves or the merchant and may be discretionary.</br>
Whilst we will endeavour to recuperate non-payments from the retailer, the decision of ourselves, the retailer or retailer’s tracking agent is final. Whilst we will try and recover missing cashback, at any point we reserve the right not to chase missing cashback claims, particularly where no purchase has been made.</br>

Shopping Sense reserves the right to reclaim or make balance adjustments accordingly where it has been established that any credit has been applied in error. This will include, but is not limited to, transactions where the credit is not genuinely due or payment for any credited transaction has not been received from a merchant or its agencies.
</br>
Where a coupon code (also known as discount code or voucher code or other variations) has been advertised on the Shopping Sense website, either posted by Shopping Sense itself or by another member, Shopping Sense cannot be held responsible for the validity of the coupon code. The benefit implied by the coupon code cannot retrospectively be applied.</br>
For the avoidance of doubt and notwithstanding any other provision of this Agreement or the Website, you agree that in all circumstances payment of Cashback is at our sole discretion and further we may refuse to make payment of Cashback to you for any reason including but not limited to non-payment or late payment by the Merchant.</br>
</br></br><strong>3. Payment Schedule</strong></br></br>
Cashback payments will be issued at your request. You will be able to request a cashback payment once you have any PAYABLE funds in your account. Once a payment has been made there will be a small period before you can request your next payment. Commission payments received by ourselves are held as our funds until such time as they are sent in the form of cashback to our members.</br>
Should a retailer delay payment or cease trading then we will make every reasonable effort to recover your cashback but we cannot guarantee to pay any affected funds until they have been received from the retailer or their agents.</br>
Individual payment methods may be limited or withdrawn on a discretionary basis to ensure only localized payment methods are made as per our membership terms. You must keep payment details accurate to avoid losing any due payments. Payments made to incorrect destinations are not always recoverable and may be subject to a recovery fee. We will not be held liable for any delays, or consequences of delays, in payment. At any point we reserve the right to put payment requests on hold pending any investigation; this may be the case where unusual account activity is detected and verification is therefore required in order to deem transactions as genuine.</br>
It is your responsibility to ensure that any tax that may be due is paid accordingly.</br>
</br></br>
4.Dormant Accounts In order to minimize our administration overhead, or for any other reason, we reserve the right to terminate dormant accounts. In order to keep an account active and ensure it doesn’t get marked as dormant, we do not require purchase transactions, but we do require you to simply log into your account at least once every six months.</br>
</br></br>
<strong>5. Modification of Agreement</strong></br></br>
We may modify any of the terms and conditions contained in this Agreement, at any time and at our sole discretion for any reason. We will post the revised agreement on this website. The new terms will come into effect no later than 30 days after the modification.</br>
</br>
<strong>6. Miscellaneous</strong></br></br>
Our failure to enforce your strict performance of any provision of this Agreement will not constitute a waiver of our right to subsequently enforce such provision or any other provision of this Agreement.</br></br>
<strong>7. Privacy Policy</strong></br></br>
Our Privacy Policy outlines exactly how we handle your account information and the steps we take to ensure your privacy.</br><br>
<strong>8. Copyright</strong></br></br>
<strong><a href="index.php">www.shoppingsense.in </a></strong>is protected by copyright. The site, in whole or in part, is for your personal use only. You may not reproduce, or make available any part of the site, with or without amendments, other than for your own private use. Nor may you reproduce or make available any of the data contained within the site without our express written consent.
</br>
You may not distribute or commercially exploit this site, without the express written consent of <a href="www.shoppingsense.in">ShoppingSense</a>. We reserve all other rights.
</br></br>
<strong>9. Linking from External Websites</strong>
</br></br>
<strong><a href="index.php">www.shoppingsense.in </a></strong> is happy for other websites to link to it; however, it does not permit pages to be loaded into frames on other sites. It does not permit links from any websites that contain material which could be construed as offensive.
</br></br>
<strong>10. Links to External Websites</strong>
</br></br>
<strong><a href="index.php">www.shoppingsense.in </a></strong>links to many other websites for information and as a service to our users. The external websites are not under our control and we are not responsible for the content of any linked site. By listing or linking to another site, we are not making any kind of endorsement and we accept no liability in respect of the content.
</br>
We do not guarantee that links will work all of the time and cannot control the availability of the linked pages. If you deem any link inappropriate or offensive, or find any link to not work, then please let us know so that we may remove the link.
</br></br>
<strong>11. Virus Disclaimer</strong>
</br></br>
We take all reasonable effort to test material before placing on our website. In the very unlikely event of any loss, disruption or damage, we cannot be held responsible for any loss, disruption or damage to your data or computer system which may occur whilst using material derived from this website.
</p>
                                
                                   
                            </div>
                            
                    	</div>
                          
                    </div>
                        
                    
				</section>
				<!-- /Main Content -->
                
                
                <!-- Sidebar -->
				<aside class="sidebar col-lg-3 col-md-3 col-sm-3 right-sidebar">
					
					<!-- Categories -->
					
					<!-- /Categories -->
                    
                    
					<!-- Carousel -->
					<div class="row sidebar-box">
						
						<div class="col-lg-12 col-md-12 col-sm-12 sidebar-carousel">
							
							<!-- Slider -->
							<section class="sidebar-slider">
								<div class="sidebar-flexslider">
									<ul class="slides">
										<li>
											<a href="#"><img src="img/sidebar-slide1.jpg" alt="Slide1"/></a>
										</li>
										<li>
											<a href="#"><img src="img/sidebar-slide2.jpg" alt="Slide1"/></a>
										</li>
										<li>
											<a href="#"><img src="img/sidebar-slide3.jpg" alt="Slide1"/></a>
										</li>
									</ul>
								</div>
								<div class="slider-nav"></div>
							</section>
							<!-- /Slider -->
                            
						</div>
						
					</div>
					<!-- /Carousel -->
                    
				</aside>
                <!-- /Sidebar -->
                
			</div>
			<!-- /Content -->
			
			
			


			
			<!-- Banner -->
			<section class="banner">
				
				<div class="left-side-banner banner-item icon-on-right gray">
					<h4>962977120</h4>
					<p>Monday - Saturday: 8am - 5pm IST</p>
					<i class="icons icon-phone-outline"></i>
				</div>
				
				<a href="#">
				<div class="middle-banner banner-item icon-on-left light-blue">
					<h4>Cashback  </h4>
					<p>in  2-3 Weeks</p>
                    <span class="button">Learn more</span>
					<i class="icons icon-money"></i>
				</div>
				</a>
				
				<a href="trending.php">
				<div class="right-side-banner banner-item orange">
					<h4>Cool Discounts</h4>
					<p>on selected items</p>
                    <span class="button">Shop now</span>
				</div>
				</a>
				
			</section>
			<!-- /Banner -->
			
			

			
			<!-- Footer -->
			<footer id="footer" class="row">
				
				<!-- Upper Footer -->
				<div class="col-lg-12 col-md-12 col-sm-12">
					
					<div id="upper-footer">
					
						<div class="row">
							
							<!-- Newsletter -->
							<div class="col-lg-7 col-md-7 col-sm-7">
								<form id="newsletter" action="http://inthe7heaven.com/homeshop-html/php/newsletter.php">
									<h4>Newsletter Sign Up</h4>
									<input type="text" name="newsletter-email" placeholder="Enter your email address">
									<input type="submit" name="newsletter-submit" value="Submit">
								</form>
							</div>
							<!-- /Newsletter -->
							
							
							<!-- Social Media -->
							<div class="col-lg-5 col-md-5 col-sm-5 social-media">
								<h4>Stay Connected</h4>
								<ul>
									<li class="social-googleplus tooltip-hover" data-toggle="tooltip" data-placement="top" title="Google+"><a href="#"></a></li>
									<li class="social-facebook tooltip-hover" data-toggle="tooltip" data-placement="top" title="Facebook"><a href="https://www.facebook.com/cashbackstore"></a></li>
									<li class="social-twitter tooltip-hover" data-toggle="tooltip" data-placement="top" title="Twitter"><a href="#"></a></li>
									<li class="social-youtube tooltip-hover" data-toggle="tooltip" data-placement="top" title="Youtube"><a href="#"></a></li>
									</ul>
							</div>
							<!-- /Social Media -->
							
						</div>
					
					</div>
					
				</div>
				<!-- /Upper Footer -->
				
				
				
				<!-- Main Footer -->
				<div class="col-lg-12 col-md-12 col-sm-12">
					
					<div id="main-footer">
					
						<div class="row">
							
							<!-- Like us on Twitter -->
							<div class="col-lg-3 col-md-3 col-sm-6 twitter-widget">
								<h4>From Twitter</h4>
								<div id="twitter-widget">
                                
								</div>
                                <a href="#" class="button blue small">Follow us</a>
							</div>
							<!-- /Like us on Twitter -->
							
							
							<!-- Like us on Facebook -->
							<div class="col-lg-3 col-md-3 col-sm-6 facebook-iframe">
								<h4>Like us on Facebook</h4>
								<iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fcashbackstore&amp;width=270&amp;height=250&amp;colorscheme=light&amp;header=false&amp;show_faces=true&amp;stream=false&amp;show_border=false" style="border:none; overflow:hidden; width:100%; height:290px;"></iframe>
							</div>
							<!-- /Like us on Facebook -->
							
							
							<!-- Information -->
							<div class="col-lg-3 col-md-3 col-sm-6">
								<h4>Information</h4>
								<ul>
									<li><a href="text_page.php"><i class="icons icon-right-dir"></i> About Us</a></li>
									<li><a href="faq.php"><i class="icons icon-right-dir"></i> FAQ's</a></li>
									<li><a href="privacy.php"><i class="icons icon-right-dir"></i> Privacy Policy</a></li>
									<li><a href="#"><i class="icons icon-right-dir"></i> Terms &amp; Conditions</a></li>
								</ul>
							</div>
							<!-- /Information -->
							
							
							<!-- Contact Us -->
							<div class="col-lg-3 col-md-3 col-sm-6 contact-footer-info">
								<h4>Contact Us</h4>
								<ul>
									<li><i class="icons icon-location"></i> Shopping Sense<br>Vellore</li>
                                    <li><i class="icons icon-phone"></i> 9629771207</li>
									<li><i class="icons icon-mail-alt"></i><a href="mailto:info@shoppingsense.in"> info@shoppingsense.in</a></li>
									
								</ul>
							</div>
							<!-- /Contact Us -->
							
						</div>
						
					</div>
					
				</div>
				<!-- /Main Footer -->
				
				
				
				<!-- Lower Footer -->
				<div class="col-lg-12 col-md-12 col-sm-12">
					
					<div id="lower-footer">
					
						<div class="row">
							
							<div class="col-lg-6 col-md-6 col-sm-6">
								<p class="copyright">Copyright 2014 <a href="#">Shopping Sense</a>. All Rights Reserved.</p>
								</div>
							
							<div class="col-lg-6 col-md-6 col-sm-6">
								<ul class="payment-list">
									<li class="payment1"></li>
									<li class="payment2"></li>
									<li class="payment3"></li>
									<li class="payment4"></li>
									<li class="payment5"></li>
								</ul>
							</div>
							
						</div>
						
					</div>
					
				</div>
				<!-- /Lower Footer -->
				
			</footer>
			<!-- Footer -->
			
            
            <div id="back-to-top">
            	<i class="icon-up-dir"></i>
            </div>
            
		</div>
    	<!-- Container -->
		
		
		
		<!-- JavaScript -->
		<script src="js/modernizr.min.js"></script>
		<script src="js/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/jquery.raty.min.js"></script>
		
		<!-- Scroll Bar -->
		<script src="js/perfect-scrollbar.min.js"></script>
		
		<!-- Cloud Zoom -->
		<script src="js/zoomsl-3.0.min.js"></script>
		
		<!-- FancyBox -->
		<script src="js/jquery.fancybox.pack.js"></script>
		
		<!-- jQuery REVOLUTION Slider  -->
		<script type="text/javascript" src="js/jquery.themepunch.plugins.min.js"></script>
		<script type="text/javascript" src="js/jquery.themepunch.revolution.min.js"></script>

		<!-- FlexSlider -->
		<script defer src="js/flexslider.min.js"></script>
		
		<!-- IOS Slider -->
		<script src = "js/jquery.iosslider.min.js"></script>
		
		<!-- noUi Slider -->
		<script src="js/jquery.nouislider.min.js"></script>
		
		<!-- Owl Carousel -->
		<script src="js/owl.carousel.min.js"></script>
		
		<!-- Cloud Zoom -->
		<script src="js/zoomsl-3.0.min.js"></script>
		
		<!-- SelectJS -->
        <script src="js/chosen.jquery.min.js" type="text/javascript"></script>
        
        <!-- Main JS -->
        <script defer src="js/bootstrap.min.js"></script>
        <script src="js/main-script.js"></script>

		
    </body>
    
</html>