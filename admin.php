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
        <script>
	   var xmlhttp;
	   var link;
	   if (window.XMLHttpRequest)
		{
		xmlhttp=new XMLHttpRequest();
		}
		else
		{
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
	   function checktrans()
	   {
	   var val=document.getElementById('transaction').value;
	   xmlhttp.onreadystatechange=function()
		{
				if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
		alert("Your response has been logged.You will be contacted shortly");
		}
		}
		if(link.search("flipkart")!=(-1))
		{
		xmlhttp.open("GET","trackfk.php?trans="+val+"&links="+link,true);
		}
		else if(link.search("omgpm")!=(-1))
		{
		xmlhttp.open("GET","trackomgpm.php?trans="+val+"&links="+link,true);
		}
		xmlhttp.send();
	   }
		var logcheck="<?php if (session_status() == PHP_SESSION_NONE) { session_start();} if(isset($_SESSION['uname']))echo '1'; else echo '0';?>"; 
	   	$(document).ready(function(e){
		$("a img").click(function(e) {
		if(logcheck==0)
		e.preventDefault();
		 link=jQuery(this).parent().attr("href");
		if(logcheck==0)
		alert("please Login First");
		else
		$(".bs-example-modal-lg").modal("show");
});
});
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
        <script type="text/javascript">
		function filter(str)
		{
		var a=document.getElementById("products").getElementsByTagName("div")[0].getAttribute("class");
		var i=0;
		for(i=0;i<150;i++)
		{
		if((document.getElementById("products").getElementsByTagName("div")[i].getAttribute("class")==a) && !(document.getElementById("products").getElementsByTagName("div")[i].getAttribute("name")==str))
		document.getElementById("products").getElementsByTagName("div")[i].style.visibility="hidden";
		}
		}
		
		</script>
		
    </head>
    
    
    <body>
		
		<!-- Container -->
		<div class="container">
			
			<!-- Header -->
			<header class="row">
				
				<div class="col-lg-12 col-md-12 col-sm-12">
					
					<!-- Top Header -->
					<div id="top-header" class="style4">
						
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
								</ul>
							</nav>
							
						</div>
						
					</div>
					<!-- /Top Header -->
					
					
					
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
											<li onmouseover="filter('myntra')"><a href="#"><i class="icons icon-right-dir"></i> Fashion</a></li>
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
                    	<p><a href="index.php">Home</a> <i class="icons icon-right-dir"></i> Categories</p>
                    </div>
                </div>
                
				
				
				
				
				
				
				
				
				
				
				<!-- Main Content -->
				
				
				<section class="main-content col-lg-9 col-md-9 col-sm-9 col-lg-push-3 col-md-push-3 col-sm-push-3">
                        
                    <div class="row">
                    
                    	<!-- Heading -->
						<div class="col-lg-12 col-md-12 col-sm-12">
							
							
							
						</div>
						<!-- /Heading -->
                        
                       
                    </div>
                     
					
                   <?php 
				   $con=mysqli_connect("localhost","siddarth_kunal","fearisnotreal25","siddarth_shoppingsense"); /*---------------------------------------------------*/
					$exp="select * from links";
					$res=mysqli_query($con,$exp);
					while($row=mysqli_fetch_array($res))
					{
				   echo "Enter Username and Password";
						}
						?>
                        <!-- Product Item -->
                                           <div class='row' id='products'> 
                        <!-- Product Item -->
						
                        <div class='col-lg-4 col-md-4 col-sm-4 product' >
                            

                            
                        </div>
						
                        
                        
					
					
					
					</div>
					
					
						
				</section>
				<!-- /Main Content -->
				
				
				
				
				
				
				
				
				
				
				
				
				<!-- Sidebar -->
				<aside class="sidebar col-lg-3 col-md-3 col-sm-3  col-lg-pull-9 col-md-pull-9 col-sm-pull-9">
					
					<!-- Categories -->
					<div class="row sidebar-box purple">
						
						<div class="col-lg-12 col-md-12 col-sm-12">
							
							<div class="sidebar-box-heading">
								<i class="icons icon-folder-open-empty"></i>
								<h4>Categories</h4>
							</div>
							
							<div class="sidebar-box-content">
								<ul>
									<li onmouseover="filter('myntra')"><a href="#">Fashion <i class="icons icon-right-dir"></i></a>
									<ul class="sidebar-dropdown">
                                        	<li>
                                            	<ul>
                                                	<li><a href="#"><i class="icons icon-right-dir"></i>Clothing</a></li>
                                                    <li><a href="#"><i class="icons icon-right-dir"></i>Watches</a></li>
                                                    <li><a href="#"><i class="icons icon-right-dir"></i>Accessories</a></li>
                                                   
                                                </ul>
                                            </li>
                                           
                                        </ul>
										</li>
									<li><a href="#">Books<i class="icons icon-right-dir"></i></a>
									<ul class="sidebar-dropdown">
                                        	<li>
                                            	<ul>
                                                	<li><a href="#"><i class="icons icon-right-dir"></i>Books</a></li>
                                                    <li><a href="#"><i class="icons icon-right-dir"></i>E-Books</a></li>
                                                    
                                                </ul>
                                            </li>
                                           
                                        </ul>
										</li>
									<li><a href="#">Cell Phones &amp; Accessories <i class="icons icon-right-dir"></i></a>
                                    	<ul class="sidebar-dropdown">
                                        	<li>
                                            	<ul>
                                                	<li><a href="#"><i class="icons icon-right-dir"></i>Cell phones &amp; </br>  &nbsp;&nbsp;&nbsp;&nbsp; Smartphones</a></li>
                                                    <li><a href="#"><i class="icons icon-right-dir"></i>Cell Phone Accessories</a></li>
                                                   <li><a href="#"><i class="icons icon-right-dir"></i>Tablets</a></li>
                                                    <li><a href="#"><i class="icons icon-right-dir"></i>Others</a></li>
                                                </ul>
                                            </li>
                                          
                                        </ul>
                                    </li>
									<li><a href="#">Electronics <i class="icons icon-right-dir"></i></a>
									<ul class="sidebar-dropdown">
                                        	<li>
                                            	<ul>
                                                	<li><a href="#"><i class="icons icon-right-dir"></i>Cameras &amp; Accesories </a></li>
                                                    <li><a href="#"><i class="icons icon-right-dir"></i>Computers &amp; Laptops</a></li>
                                                   <li><a href="#"><i class="icons icon-right-dir"></i>Televisions</a></li>
                                                    <li><a href="#"><i class="icons icon-right-dir"></i>Appliances</a></li>
													 <li><a href="#"><i class="icons icon-right-dir"></i>Other Accessories</a></li>
                                                </ul>
                                            </li>
                                          
                                        </ul>
										</li>
									<li><a href="#">Baby &amp; Kids <i class="icons icon-right-dir"></i></a>
									<ul class="sidebar-dropdown">
                                        	<li>
                                            	<ul>
                                                	<li><a href="#"><i class="icons icon-right-dir"></i>Diapering </a></li>
                                                    <li><a href="#"><i class="icons icon-right-dir"></i>Kids Wear</a></li>
                                                   <li><a href="#"><i class="icons icon-right-dir"></i>Toys &amp; Gaming </a></li>
                                                    <li><a href="#"><i class="icons icon-right-dir"></i>Baby Healthcare</a></li>
                                                </ul>
                                            </li>
                                          
                                        </ul>
									</li>
									<li><a href="#">Travel <i class="icons icon-right-dir"></i></a>
									
									<ul class="sidebar-dropdown">
                                        	<li>
                                            	<ul>
                                                	<li><a href="#"><i class="icons icon-right-dir"></i>Holidays </a></li>
                                                    <li><a href="#"><i class="icons icon-right-dir"></i>Hotels</a></li>
                                                   
                                                    
                                                </ul>
                                            </li>
                                          <li>
                                            	<ul>
                                                	<li><a href="#"><i class="icons icon-right-dir"></i>Domestic Flights</a></li>
                                                    <li><a href="#"><i class="icons icon-right-dir"></i>International Flights</a></li>
                                                    <li><a href="#"><i class="icons icon-right-dir"></i>Railway &amp; Bus Tickets</a></li>
													
                                                </ul>
                                            </li>
                                        </ul>
										</li>
										
										<li><a href="#">Home &amp; Kitchen <i class="icons icon-right-dir"></i></a>
									
									<ul class="sidebar-dropdown">
                                        	<li>
                                            	<ul>
                                                	<li><a href="#"><i class="icons icon-right-dir"></i>Home Furnishing</a></li>
                                                    <li><a href="#"><i class="icons icon-right-dir"></i>Home Decor</a></li>
													<li><a href="#"><i class="icons icon-right-dir"></i>Home Appliances</a></li>
                                                   
                                                    
                                                </ul>
                                            </li>
                                          <li>
                                            	<ul>
                                                	<li><a href="#"><i class="icons icon-right-dir"></i>Dining &amp; Cutlery</a></li>
                                                    <li><a href="#"><i class="icons icon-right-dir"></i>Tools Home Improvement</a></li>
                                                    
                                                </ul>
                                            </li>
                                        </ul>
										</li>
										
										<li><a href="#">Health &amp; Beauty<i class="icons icon-right-dir"></i></a>
									
									<ul class="sidebar-dropdown">
                                        	<li>
                                            	<ul>
                                                	<li><a href="#"><i class="icons icon-right-dir"></i>Beauty &amp; Personal Care</a></li>
                                                    <li><a href="#"><i class="icons icon-right-dir"></i>Fragrances</a></li>
													<li><a href="#"><i class="icons icon-right-dir"></i>Grooming Instruments</a></li>
                                                   
                                                    
                                                </ul>
                                            </li>
                                          <li>
                                            	<ul>
                                                	<li><a href="#"><i class="icons icon-right-dir"></i>Health Supplements</a></li>
                                                    <li><a href="#"><i class="icons icon-right-dir"></i>Glasses &amp; Eyecare</a></li>
                                                    <li><a href="#"><i class="icons icon-right-dir"></i>Others</a></li>
                                                    
                                                </ul>
                                            </li>
                                        </ul>
										</li>
									
										<li><a href="#">Flowers &amp; Gifts<i class="icons icon-right-dir"></i></a>
									
									<ul class="sidebar-dropdown">
                                        	<li>
                                            	<ul>
                                                	<li><a href="#"><i class="icons icon-right-dir"></i>Flowers</a></li>
                                                    <li><a href="#"><i class="icons icon-right-dir"></i>Gifts</a></li>
													<li><a href="#"><i class="icons icon-right-dir"></i>Chocolates &amp; Sweets</a></li>
                                                   
                                                    
                                                </ul>
                                            </li>
                                         
                                        </ul>
										</li>
									
									<li><a href="#">Others<i class="icons icon-right-dir"></i></a>
									
									<ul class="sidebar-dropdown">
                                        	<li>
                                            	<ul>
                                                	<li><a href="#"><i class="icons icon-right-dir"></i>Luggage Equipments</a></li>
                                                    <li><a href="#"><i class="icons icon-right-dir"></i>Earn Per Clicks</a></li>
													<li><a href="#"><i class="icons icon-right-dir"></i>Restaurants</a></li>
                                                   
                                                    
                                                </ul>
                                            </li>
                                          <li>
                                            	<ul>
                                                	<li><a href="#"><i class="icons icon-right-dir"></i>Stationary</a></li>
                                                    <li><a href="#"><i class="icons icon-right-dir"></i>Domains &amp; Hosting</a></li>
                                                    
                                                    
                                                </ul>
                                            </li>
                                        </ul>
										</li>
									
									
									
									
									<li><a href="#">Shop by Brands <i class="icons icon-right-dir"></i></a>
									<ul class="sidebar-dropdown">
                                        	<li>
                                            	<ul>
                                                	<li><a href="#"><i class="icons icon-right-dir"></i>Nike </a></li>
                                                    <li><a href="#"><i class="icons icon-right-dir"></i>Adidas</a></li>
                                                   <li><a href="#"><i class="icons icon-right-dir"></i>Puma</a></li>
												   
                                                    
                                                </ul>
                                            </li>
                                          <li>
                                            	<ul>
                                                	<li><a href="#"><i class="icons icon-right-dir"></i>Roadster</a></li>
                                                    <li><a href="#"><i class="icons icon-right-dir"></i>Wrangler</a></li>
                                                    <li><a href="#"><i class="icons icon-right-dir"></i>Wildcraft</a></li>
													
                                                </ul>
                                            </li>
                                        </ul>
									
									
									
									
									</li>
									
									
									
									
									
									
									</ul>
							</div>
							
						</div>
							
					</div>
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
					
					
					<!-- Bestsellers -->
					
					<!-- /Bestsellers -->
					
					
					<!-- Tag Cloud -->
					
					<!-- /Tag Cloud -->
					
					
					<!-- Specials -->
					
					<!-- /Specials -->
					
					
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
					
					<div id="upper-footer" class="no-border">
					
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
		<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Transaction Id</h4>
      </div>
      <div class="modal-body">
	  <p>Enter the transaction ID of your purchase</p>
        <input type="text" id="transaction" placeholder="transaction Id" >
      </div>
      <div class="modal-footer">
		<button type="button" class="btn btn-default" data-dismiss="modal" onclick="checktrans()">Verify</button>
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
		
				<script src="js/modal.js"></script>
		
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