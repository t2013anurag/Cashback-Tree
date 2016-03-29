<!DOCTYPE html>

<html>

    <head>
        
        <!-- Meta Tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Title -->
        <title>Shopping Sense-Online Shop and Get Cashback</title>
        
		<!-- Fonts -->
		 <script src="//code.jquery.com/jquery-1.10.2.js"></script>
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,900,700italic,500italic' rel='stylesheet' type='text/css'>
		<script>

		$(document).ready(function(e){
		$("#accform").submit(function(e) {
    e.preventDefault();
	check();
});
});
		var rand;
		var xmlhttp;
		if (window.XMLHttpRequest)
		{
		xmlhttp=new XMLHttpRequest();
		}
		else
		{
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		function verifyveri()
		{
		if(document.getElementById("verification").value==rand)
		{
		xmlhttp.onreadystatechange=function()
		{
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
		alert("Your account Has been Verified");
		window.location.href="index.php";
		}
		}
		xmlhttp.open("GET","register1.php",true);
		xmlhttp.send();
		}
		else
		{
		alert("Wrong Verification Id.Please Try again");
		}
		}
		function accver()
		{
		return false;
		}
		function check()
		{
		var mail=document.getElementsByName("email")[0].value;
		var username=document.getElementsByName("username")[0].value;
		var dname=document.getElementsByName("dname")[0].value;
		var pwd=document.getElementsByName("pwd")[0].value;
		var cpwd=document.getElementsByName("cpwd")[0].value;
		var title=document.getElementsByName("title")[0].value;
		var fname=document.getElementsByName("fname")[0].value;
		var add1=document.getElementsByName("add1")[0].value;
		var add2=document.getElementsByName("add2")[0].value;
		var zip=document.getElementsByName("zip")[0].value;
		var city=document.getElementsByName("city")[0].value;
		var state=document.getElementsByName("state")[0].value;
		var country=document.getElementsByName("country")[0].value;
		var phone=document.getElementsByName("phone")[0].value;
	//	alert(mail+" "+username+" "+dname+" "+pwd+" "+cpwd+" "+title+" "+fname+" "+zip+" "+city+" "+state+" "+country+" "+phone);
		
		xmlhttp.onreadystatechange=function()
		{

		if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
		if(xmlhttp.response=="1")
		alert("Please Enter All Values");
		else if(xmlhttp.response=="2")
		alert("Passwords dont match");
		else if(xmlhttp.response=="3")
		alert("username already exists!Please choose another name");
		else
		{
		rand=xmlhttp.responseText;
		alert(rand);
		$(".bs-example-modal-lg").modal("show");
		}
		//alert(xmlhttp.response);
		}
		}
		xmlhttp.open("GET","register.php?email="+mail+"&username="+username+"&dname="+dname+"&pwd="+pwd+"&cpwd="+cpwd+"&title="+title+"&fname="+fname+"&add1="+add1+"&add2="+add2+"&zip="+zip+"&city="+city+"&state="+state+"&country="+country+"&phone="+phone,true);
		xmlhttp.send();
		}
		</script>
		
        <!-- Stylesheets -->
        <link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/perfect-scrollbar.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
		<link rel="stylesheet" type="text/css" href="css/settings.css" media="screen" />
		<link rel="stylesheet" href="css/fontello.css">
   		<link rel="stylesheet" href="css/animation.css">
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/owl.theme.css">
		<link rel="stylesheet" href="css/chosen.css">
		<script src="//code.jquery.com/jquery-1.10.2.js"></script>
        
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
			<header class="row">
				
				<div class="col-lg-12 col-md-12 col-sm-12">
					
					<!-- Top Header -->
					<div id="top-header">
						
						<div class="row">
							
														<nav id="top-navigation" class="col-lg-7 col-md-7 col-sm-7">
								<ul class="pull-left">
									<li><a href="create_an_account.php">My Account</a></li>
									
									<li><a href="text_page.php">About Us</a></li>
									<li><a href="contact.php">Contact</a></li>
								</ul>
							</nav>
							
							<nav class="col-lg-5 col-md-5 col-sm-5">
								<ul class="pull-right">
									<li class="purple"><a href="#"><i class="icons icon-user-3"></i> Login</a>
										<ul id="login-dropdown" class="box-dropdown">
											<li>
                                            	<div class="box-wrapper">
                                                    <h4>LOGIN</h4>
                                                    <div class="iconic-input">
                                                        <input type="text" placeholder="Username">
                                                        <i class="icons icon-user-3"></i>
                                                    </div>
                                                    <div class="iconic-input">
                                                        <input type="password" placeholder="Password">
                                                        <i class="icons icon-lock"></i>
                                                    </div>
                                                    <input type="checkbox" id="loginremember"> <label for="loginremember">Remember me</label>
                                                    <br>
                                                    <br>
                                                    <div class="pull-left">
                                                        <input type="submit" class="orange" value="Login">
                                                    </div>
                                                    <div class="pull-right">
                                                        <a href="#">Forgot your password?</a>
														<br>
                                                        <a href="#">Forgot your username?</a>
														<br>
                                                    </div>
                                                    <br class="clearfix">
                                                </div>
												<div class="footer">
													<h4 class="pull-left">NEW CUSTOMER?</h4>
													<a class="button pull-right" href="create_an_account.php">Create an account</a>
												</div>
											</li>
										</ul>
									</li>
									<li><a href="#"><i class="icons icon-lock"></i> Create an Account</a></li>
								</ul>
							</nav>
							
						</div>
						
					</div>
					<!-- /Top Header -->
					
					  <iframe src='http://www.flipkart.com/affiliate/displayWidget?affrid=WRID-139471409497898354' height=55 width=660 scrolling='no' frameborder=0></iframe>
					
					<!-- Main Header -->
					
					<!-- /Main Header -->
					
					
					<!-- Main Navigation -->
					<nav id="main-navigation" class="style1">
						<ul>
							
							<li class="home-green current-item">
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
                    	<p><a href="index.php">Home</a> <i class="icons icon-right-dir"></i> Create an account</p>
                    </div>
                </div>
                
				<!-- Main Content -->
				<section class="main-content col-lg-9 col-md-9 col-sm-9">
                    
                    
                    <div class="row">
                    	
                        <div class="col-lg-12 col-md-12 col-sm-12">
                        	
                            <div class="carousel-heading no-margin">
                               
                            </div>
                            
                           
                            
                    	</div>
                          
                    </div>
                    
                    
                    
                    <div class="row">
                    	
                        <div class="col-lg-12 col-md-12 col-sm-12 register-account">
                        	
                            <div class="carousel-heading no-margin">
                                <h4>Register</h4>
                            </div>
                            
                            <div class="page-content">
                            	<div class="row">
                                	
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                    	<p id="shopper"><strong>Shopper information</strong></p>
                                    </div>
                                <form  id="accform" method="POST">    
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                    	<p>E-Mail*</p>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                    	<input type="text" name="email">
                                    </div>	
                                    
                                </div>
                                
                                <div class="row">
                                    
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                    	<p>Username*</p>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                    	<input type="text" name="username">
                                    </div>	
                                    
                                </div>
                                
                                <div class="row">
                                    
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                    	<p>Displayed name*</p>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                    	<input type="text" name="dname">
                                    </div>	
                                    
                                </div>
                                
                                <div class="row">
                                    
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                    	<p>Password</p>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                    	<input type="password" name="pwd">
                                    </div>	
                                    
                                </div>
                                
                                <div class="row">
                                    
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                    	<p>Confirm Password</p>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                    	<input type="password" name="cpwd">
                                    </div>	
                                    
                                </div>
                                
                              
                                
                              
                                
                                <div class="row">
                                    
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                    	<p>Title</p>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                    	<select class="chosen-select" name="title">
                                        	<option>Mr</option>
                                            <option>Mrs</option>
                                        </select>
                                    </div>	
                                    
                                </div>
                                
                                <div class="row">
                                    
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                    	<p>First name</p>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                    	<input type="text" name="fname">
                                    </div>	
                                    
                                </div>
                                
                                
                                
                                <div class="row">
                                    
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                    	<p>Address 1</p>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8">
										<input type="text" name="add1">
                                    </div>	
                                    
                                </div>
                                
                                <div class="row">
                                    
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                    	<p>Address 2</p>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                    	<input type="text" name="add2">
                                    </div>	
                                    
                                </div>
                                
                                <div class="row">
                                    
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                    	<p>ZIP / Postal Code</p>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                    	<input type="text" name="zip">
                                    </div>	
                                    
                                </div>
                                
                                <div class="row">
                                    
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                    	<p>City</p>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                    	<input type="text" name="city">
                                    </div>	
                                    
                                </div>
                                
                                <div class="row">
                                    
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                    	<p>State / Province / Region</p>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                    	<input type="text" name="state">
                                    </div>	
                                    
                                </div>
							   
							   
							   
							   
							   <div class="row">
                                    
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                    	<p>Country</p>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                    	<input type="text" name="country">
                                    </div>	
                                    
                                </div>
                                
                               
                                
                             
                                
                                <div class="row">
                                    
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                    	<p>Mobile Phone</p>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                    	<input type="text" name="phone">
                                    </div>	

                                </div>
                                
                                <div class="row">
                                    
                                   
                                    <div class="col-lg-12 col-md-12 col-sm-12">
									
								
                                    	<!--<input class="big" type="submit" data-toggle="modal" data-target=".bs-example-modal-lg" value="Register">-->
										<input class="big" type="submit"    value="Register">
                                        <input class="big" type="reset" value="Cancel">
                                    </div>
									                                    </form>
                                </div>
                            </div>
                            
                    	</div>
                          
                    </div>
                        
                    
				</section>
				<!-- /Main Content -->
                
                
                <!-- Sidebar -->
				<aside class="sidebar col-lg-3 col-md-3 col-sm-3 right-sidebar">
					
					<!-- Categories -->
				
					<!-- /Categories -->
                    
                    
                    
                    <!-- Compare Products -->
					
					<!-- /Compare Products -->
					
					
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
					<iframe src="http://www.flipkart.com/affiliate/displayWidget?affrid=WRID-139471344081843589" style="width:120px;height:270px;" scrolling="no" marginwidth="0" marginheight="0" frameborder="1px" ></iframe>
					<!-- Bestsellers -->
					
					<!-- /Bestsellers -->
<iframe src='http://www.flipkart.com/affiliate/displayWidget?affrid=WRID-139446424254184308' frameborder=0 height=250 width=300></iframe>					
					
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
									<li><a href="terms.php"><i class="icons icon-right-dir"></i> Terms &amp; Conditions</a></li>
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
		
		
		<!-- modal -->
		
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Verification</h4>
      </div>
      <div class="modal-body">
	  <p>A E-mail with a unique verification Id has been sent to your mail.Enter it to verify your Registration</p>
        <input type="text" id="verification" placeholder="Verification Id" >
      </div>
      <div class="modal-footer">
		<button type="button" class="btn btn-default" data-dismiss="modal" onclick="verifyveri()">Verify</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>
		
		
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
		
		<!-- modal -->
		<script src="js/modal.js"></script>
		
		<!-- SelectJS -->
        <script src="js/chosen.jquery.min.js" type="text/javascript"></script>
		
		 <script src="bootstrap.js"></script>
		   <script src="holder.js"></script>
			
		  <script src="js/modal.js"></script>
        
        <!-- Main JS -->
        <script defer src="js/bootstrap.min.js"></script>
        <script src="js/main-script.js"></script>

		
    </body>
    
</html>