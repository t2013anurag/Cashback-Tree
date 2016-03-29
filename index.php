<?php
session_start();
?>
<html>

    <head>
        
        <!-- Meta Tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="Keywords" content="Shopping,Sense,Cash,Cashback,Discounts,India,Online,Sales">
        <!-- Title -->
        <title>Shopping Sense-Online Shop and Get Cashback</title>
        <style>
		img
		{
		cursor:pointer;
		}
		
		</style>
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
//		alert("out");
		xmlhttp.open("GET","trackfk.php?trans="+val+"&links="+link,true);
		}
		else if(link.search("omgpm")!=(-1))
		{
	//	alert("in");
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
function a()
{
alert("a");
}
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
		<div class="container">
			
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
									?>
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
								<a>
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
				
				<!-- Main Content -->
				<section class="main-content col-lg-9 col-md-9 col-sm-9 col-lg-push-3 col-md-push-3 col-sm-push-3">
					
					<section class="slider">
						<div class="tp-banner-container">
							<div class="tp-banner" >
								<ul>
									<!-- SLIDE  -->
									<li data-transition="fade" data-slotamount="7" data-masterspeed="1500" >
										<!-- MAIN IMAGE -->
										<img src="img/slide1.jpg"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
										
										<!-- LAYERS -->
									
										
										
									</li>
									<!-- SLIDE  -->
									<li data-transition="zoomout" data-slotamount="7" data-masterspeed="1000" >
										<!-- MAIN IMAGE -->
										<img src="img/slide3.jpg"  alt="darkblurbg"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
										<!-- LAYERS -->
										<div class="tp-caption skewfromrightshort fadeout"
											data-x="40"
											data-y="60"
											data-speed="500"
											data-start="1200"
											data-easing="Power4.easeOut"><h2><strong>The New Studio<br>Headphones</strong></h2>
										</div>
										<div class="tp-caption skewfromrightshort fadeout"
											data-x="40"
											data-y="190"
											data-speed="500"
											data-start="1200"
											data-easing="Power4.easeOut"><h3>With Cashback</h3>
										</div>
										<div class="tp-caption skewfromrightshort fadeout"
											data-x="40"
											data-y="300"
											data-speed="500"
											data-start="1200"
											data-easing="Power4.easeOut"><span>upto<span class="price">7%</span></span>
										</div>
										<div class="tp-caption skewfromrightshort fadeout"
											data-x="40"
											data-y="347"
											data-speed="500"
											data-start="1200"
											data-easing="Power4.easeOut"><a class="button big red" href="#">View Deals</a>
										</div>
									</li>
									<!-- SLIDE  -->
									<li data-transition="zoomout" data-slotamount="7" data-masterspeed="1000" >
										<!-- MAIN IMAGE -->
										<img src="img/slide2.jpg"  alt="darkblurbg"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
										<!-- LAYERS -->
										<div class="tp-caption skewfromrightshort fadeout"
											data-x="40"
											data-y="60"
											data-speed="500"
											data-start="1200"
											data-easing="Power4.easeOut"><h2><strong>The Camera</strong></h2>
										</div>
										<div class="tp-caption skewfromrightshort fadeout"
											data-x="40"
											data-y="140"
											data-speed="500"
											data-start="1200"
											data-easing="Power4.easeOut"><h3>All the power in your hands!</h3>
										</div>
										<div class="tp-caption skewfromrightshort fadeout"
											data-x="40"
											data-y="250"
											data-speed="500"
											data-start="1200"
											data-easing="Power4.easeOut"><span>Upto<span class="price">5%</span></span>
										</div>
										<div class="tp-caption skewfromrightshort fadeout"
											data-x="40"
											data-y="300"
											data-speed="500"
											data-start="1200"
											data-easing="Power4.easeOut"><a class="button big red" href="#">View Deals</a>
										</div>
									</li>
								</ul>
							</div>
						</div>
				  	</section>
					
					
					
					<!-- Featured Products -->
					<div class="products-row row">
						
						<!-- Carousel Heading -->
						<div class="col-lg-12 col-md-12 col-sm-12">
							
							<div class="carousel-heading">
								<h4>Featured Deals</h4>
								<div class="carousel-arrows">
									<i class="icons icon-left-dir"></i>
									<i class="icons icon-right-dir"></i>
								</div>
							</div>
							
						</div>
						<!-- /Carousel Heading -->
						
						<!-- Carousel -->
						<div class="carousel owl-carousel-wrap col-lg-12 col-md-12 col-sm-12">
							
							<div class="owl-carousel" data-max-items="3">
									
									<!-----Is part ki saari images 270*270 px ki hongi hd--->
									
									
									<!-- Slide -->
									<div>
										<!-- Carousel Item -->
										<div class="product">
											
											<div  class="product-image">
												<a href="http://www.flipkart.com/levi-s-men-s-striped-casual-shirt/p/itmdmffvzahb9dph?pid=SHTDMFFVBGYDJ7TF&affid=infoshopp1" target="_blank"><img src="http://track.in.omgpm.com/bs/?CRID=43795&AID=622975&PID=7775&CID=4162766&WID=52220" border="0" width="280" height="645"></a>	
													</div>
											
											<div class="product-info">
												
												<h5><a href="products_page_v1.php"></a></h5>
												<span class="price">Myntra</span>
												<div class="rating readonly-rating" data-score="4"></div>
											</div>
											
											<div class="product-actions">
												<span class="add-to-cart">
													<span class="action-wrapper">
														<i class="icons icon-basket-2"></i>
														<span class="action-name">Shop</span>
													</span >
												</span>
												
											</div>
											
										</div>
										<!-- /Carousel Item -->
									</div>
									<!-- /Slide -->
									
									
									<!-- Slide -->
									<div>
										<!-- Carousel Item -->
										<div class="product">
											
											<div class="product-image">
												
		<a href="http://www.flipkart.com/ncase-flip-cover-motorola-moto-g-xt1032/p/itmdsx67tb6u7zws?pid=ACCDSX65KFNDNB8F&affid=infoshopp1" target="_blank"><img src="img/logo.png" style="height:270px" alt="Product1"></a>
												
											</div>
											
											<div class="product-info">
												<h5><a href="products_page_v1.php"></a></h5>
												<span class="price">Flipkart</span>
												<div class="rating readonly-rating" data-score="4"></div>
											</div>
											
											<div class="product-actions">
												<span class="add-to-cart">
													<span class="action-wrapper">
														<i class="icons icon-basket-2"></i>
														<span class="action-name">Shop</span>
													</span >
												</span>
												
											</div>
											
										</div>
										<!-- /Carousel Item -->
									</div>
									<!-- /Slide -->
									
									
									
									<!-- Slide -->
									<div>
										<!-- Carousel Item -->
										<div class="product">
											
											<div class="product-image">
							<a href="http://track.in.omgpm.com/?AID=622975&MID=304697&PID=9170&CID=4161829&CRID=49195&WID=52220" target="_blank"><img src="http://track.in.omgpm.com/bs/?CRID=49195&AID=622975&PID=9170&CID=4161829&WID=52220" border="0" width="336" height="280"></a>															

												
											</div>
											
											<div class="product-info">
												<h5><a href="products_page_v1.php"></a></h5>
												<span class="price">Ebay</span>
												<div class="rating readonly-rating" data-score="4"></div>
											</div>
											
											<div class="product-actions">
												<span class="add-to-cart">
													<span class="action-wrapper">
														<i class="icons icon-basket-2"></i>
														<span class="action-name">Shop</span>
													</span >
												</span>
											
											
											</div>
											
										</div>
										<!-- /Carousel Item -->
									</div>
									<!-- /Slide -->
									
									
									
									
									<!-- Slide -->
									<div>
										<!-- Carousel Item -->
										<div class="product">
											
											<div class="product-image">
												<img src="img/products/sample4.png" alt="Product1">
												
											</div>
											
											<div class="product-info">
												<h5><a href="products_page_v1.php"></a></h5>
												<span class="price">Jabong</span>
												<div class="rating readonly-rating" data-score="4"></div>
											</div>
											
											<div class="product-actions">
												<span class="add-to-cart">
													<span class="action-wrapper">
														<i class="icons icon-basket-2"></i>
														<span class="action-name">Shop</span>
													</span >
												</span>
												
											</div>
											
										</div>
										<!-- /Carousel Item -->
									</div>
									<!-- /Slide -->
									
									
									
									
									<!-- Slide -->
									<div>
										<!-- Carousel Item -->
										<div class="product">
											
											<div class="product-image">
												<img src="img/products/sample5.png" alt="Product1">
												
											</div>
											
											<div class="product-info">
												<h5><a href="products_page_v1.php"></a></h5>
												<span class="price">IndiaTimes Shopping</span>
												<div class="rating readonly-rating" data-score="4"></div>
											</div>
											
											<div class="product-actions">
												<span class="add-to-cart">
													<span class="action-wrapper">
														<i class="icons icon-basket-2"></i>
														<span class="action-name">Shop</span>
													</span >
												</span>
												
											</div>
											
										</div>
										<!-- /Carousel Item -->
									</div>
									<!-- /Slide -->
									
									
									
									
									
									<!-- Slide -->
									<div>
										<!-- Carousel Item -->
										<div class="product">
											
											<div class="product-image">
												<img src="img/products/sample6.png" alt="Product1">
												
											</div>
											
											<div class="product-info">
												<h5><a href="products_page_v1.php"></a></h5>
												<span class="price">Baby Oye</span>
												<div class="rating readonly-rating" data-score="4"></div>
											</div>
												<div class="product-actions">
												<span class="add-to-cart">
													<span class="action-wrapper">
														<i class="icons icon-basket-2"></i>
														<span class="action-name">Shop</span>
													</span >
												</span>
												
											</div>

										</div>
										<!-- /Carousel Item -->
									</div>
									<!-- /Slide -->
									<!-- Slide -->
									<div>
										<!-- Carousel Item -->
										<div class="product">
											
											<div class="product-image">
												<img src="img/products/sample7.png" alt="Product1">
												
											</div>
											
											<div class="product-info">
												<h5><a href="products_page_v1.php"></a></h5>
												<span class="price">Freecultr</span>
												<div class="rating readonly-rating" data-score="4"></div>
											</div>
											
											<div class="product-actions">
												<span class="add-to-cart">
													<span class="action-wrapper">
														<i class="icons icon-basket-2"></i>
														<span class="action-name">Shop</span>
													</span >
												</span>
												
											</div>
											
										</div>
										<!-- /Carousel Item -->
									</div>
									<!-- /Slide -->
									<!-- Slide -->
									<div>
										<!-- Carousel Item -->
										<div class="product">
											
											<div class="product-image">
												<img src="img/products/sample8.png" alt="Product1">
												
											</div>
											
											<div class="product-info">
												<h5><a href="products_page_v1.php"></a></h5>
												<span class="price">Trend In</span>
												<div class="rating readonly-rating" data-score="4"></div>
											</div>
											
											<div class="product-actions">
												<span class="add-to-cart">
													<span class="action-wrapper">
														<i class="icons icon-basket-2"></i>
														<span class="action-name">Shop</span>
													</span >
												</span>
												
											</div>
											
										</div>
										<!-- /Carousel Item -->
									</div>
									<!-- /Slide -->
							     <!-- Slide -->
									<div>
										<!-- Carousel Item -->
										<div class="product">
											
											<div class="product-image">
												<img src="img/products/sample9.png" alt="Product1">
												
											</div>
											
											<div class="product-info">
												<h5><a href="products_page_v1.php"></a></h5>
												<span class="price">FernsnPetals</span>
												<div class="rating readonly-rating" data-score="4"></div>
											</div>
											
											<div class="product-actions">
												<span class="add-to-cart">
													<span class="action-wrapper">
														<i class="icons icon-basket-2"></i>
														<span class="action-name">Shop</span>
													</span >
												</span>
											
											</div>
											
										</div>
										<!-- /Carousel Item -->
									</div>
									<!-- /Slide -->
							<!-- Slide -->
									<div>
										<!-- Carousel Item -->
										<div class="product">
											
											<div class="product-image">
												<img src="img/products/sample10.png" alt="Product1">
												
											</div>
											
											<div class="product-info">
												<h5><a href="products_page_v1.php"></a></h5>
												<span class="price">Ink Fruit</span>
												<div class="rating readonly-rating" data-score="4"></div>
											</div>
											
											<div class="product-actions">
												<span class="add-to-cart">
													<span class="action-wrapper">
														<i class="icons icon-basket-2"></i>
														<span class="action-name">Shop</span>
													</span >
												</span>
												
											</div>
											
										</div>
										<!-- /Carousel Item -->
									</div>
									<!-- /Slide -->
							
							
							</div>
						</div>
						<!-- /Carousel -->
						
					</div>
					<!-- /Featured Products -->
					
					
					
					
					<!-- New Collection -->
					
					<!-- /New Collection -->
					



					
					<!-- Random Products -->
					<div class="products-row row">
						
						<!-- Carousel Heading -->
						<div class="col-lg-12 col-md-12 col-sm-12">
							
							<div class="carousel-heading">
								<h4>Best Deals</h4>
								<div class="carousel-arrows">
									<i class="icons icon-left-dir"></i>
									<i class="icons icon-right-dir"></i>
								</div>
							</div>
							
						</div>
						<!-- /Carousel Heading -->
						
						<!-- Carousel -->
						<div class="carousel owl-carousel-wrap col-lg-12 col-md-12 col-sm-12">
							
							<div class="owl-carousel" data-max-items="3">
									
									<!-- Slide -->
									<div>
										<!-- Carousel Item -->
										<div class="product">
											
											<div class="product-image">
												<img src="img/products/pro1.jpg" alt="Product1">
												
											</div>
											
											<div class="product-info">
												<h5><a href="products_page_v1.php"></a></h5>
												<span class="price">Clothing</span>
												<div class="rating readonly-rating" data-score="4"></div>
											</div>
											
											<div class="product-actions">
												<span class="add-to-cart">
													<span class="action-wrapper">
														<i class="icons icon-basket-2"></i>
														<span class="action-name">Visit Myntra</span>
													</span >
												</span>
												<span class="add-to-favorites">
													<span class="action-wrapper">
														<i class="icons icon-basket-2"></i>
														<span class="action-name">Visit Flipkart</span>
													</span>
												</span>
												<span class="add-to-compare">
													<span class="action-wrapper">
														<i class="icons icon-basket-2"></i>
														<span class="action-name">Others</span>
													</span>
												</span>
											</div>
											
										</div>
										<!-- /Carousel Item -->
									</div>
									<!-- /Slide -->
									
									
									<!-- Slide -->
									<div>
										<!-- Carousel Item -->
										<div class="product">
											
											<div class="product-image">
												<img src="img/products/pro2.jpg" alt="Product1">
												
											</div>
											
											<div class="product-info">
												<h5><a href="products_page_v1.php"></a></h5>
												<span class="price">Electonics</span>
												<div class="rating readonly-rating" data-score="4"></div>
											</div>
											
												<div class="product-actions">
												<span class="add-to-cart">
													<span class="action-wrapper">
														<i class="icons icon-basket-2"></i>
														<span class="action-name">Visit Myntra</span>
													</span >
												</span>
												<span class="add-to-favorites">
													<span class="action-wrapper">
														<i class="icons icon-basket-2"></i>
														<span class="action-name">Visit Flipkart</span>
													</span>
												</span>
												<span class="add-to-compare">
													<span class="action-wrapper">
														<i class="icons icon-basket-2"></i>
														<span class="action-name">Others</span>
													</span>
												</span>
											</div>
											
										</div>
										<!-- /Carousel Item -->
									</div>
									<!-- /Slide -->
									
									
									
									<!-- Slide -->
									<div>
										<!-- Carousel Item -->
										<div class="product">
											
											<div class="product-image">
												<img src="img/products/pro3.jpg" alt="Product1">
												
											</div>
											
											<div class="product-info">
												<h5><a href="products_page_v1.php"></a></h5>
												<span class="price">Flowers</span>
												<div class="rating readonly-rating" data-score="4"></div>
											</div>
											
											<div class="product-actions">
												<span class="add-to-cart">
													<span class="action-wrapper">
														<i class="icons icon-basket-2"></i>
														<span class="action-name">Visit Ferns n Petals</span>
													</span >
												</span>
												
											</div>
											
										</div>
										<!-- /Carousel Item -->
									</div>
									<!-- /Slide -->
									
									
									
									
									<!-- Slide -->
									<div>
										<!-- Carousel Item -->
										<div class="product">
											
											<div class="product-image">
												<img src="img/products/pro4.jpg" alt="Product1">
												
											</div>
											
											<div class="product-info">
												<h5><a href="products_page_v1.php"></a></h5>
												<span class="price">Accesories</span>
												<div class="rating readonly-rating" data-score="4"></div>
											</div>
											
											<div class="product-actions">
												<span class="add-to-cart">
													<span class="action-wrapper">
														<i class="icons icon-basket-2"></i>
														<span class="action-name">Visit Myntra</span>
													</span >
												</span>
												<span class="add-to-favorites">
													<span class="action-wrapper">
														<i class="icons icon-basket-2"></i>
														<span class="action-name">Visit Flipkart</span>
													</span>
												</span>
												<span class="add-to-compare">
													<span class="action-wrapper">
														<i class="icons icon-basket-2"></i>
														<span class="action-name">Others</span>
													</span>
												</span>
											</div>
											
										</div>
										<!-- /Carousel Item -->
									</div>
									<!-- /Slide -->
									
									
									
									
									<!-- Slide -->
									<div>
										<!-- Carousel Item -->
										<div class="product">
											
											<div class="product-image">
												<img src="img/products/pro5.jpg" alt="Product1">
												
											</div>
											
											<div class="product-info">
												<h5><a href="products_page_v1.php"></a></h5>
												<span class="price">Sport Accesories</span>
												<div class="rating readonly-rating" data-score="4"></div>
											</div>
											
											<div class="product-actions">
												<span class="add-to-cart">
													<span class="action-wrapper">
														<i class="icons icon-basket-2"></i>
														<span class="action-name">Visit Myntra</span>
													</span >
												</span>
												<span class="add-to-favorites">
													<span class="action-wrapper">
														<i class="icons icon-basket-2"></i>
														<span class="action-name">Visit Flipkart</span>
													</span>
												</span>
												<span class="add-to-compare">
													<span class="action-wrapper">
														<i class="icons icon-basket-2"></i>
														<span class="action-name">Others</span>
													</span>
												</span>
											</div>
											
										</div>
										<!-- /Carousel Item -->
									</div>
									<!-- /Slide -->
									
									
									
									
									
									<!-- Slide -->
									<div>
										<!-- Carousel Item -->
										<div class="product">
											
											<div class="product-image">
												<img src="img/products/pro6.jpg" alt="Product1">
												
											</div>
											
											<div class="product-info">
												<h5><a href="products_page_v1.php"></a></h5>
												<span class="price">Watches</span>
												<div class="rating readonly-rating" data-score="4"></div>
											</div>
											
												<div class="product-actions">
												<span class="add-to-cart">
													<span class="action-wrapper">
														<i class="icons icon-basket-2"></i>
														<span class="action-name">Visit Myntra</span>
													</span >
												</span>
												<span class="add-to-favorites">
													<span class="action-wrapper">
														<i class="icons icon-basket-2"></i>
														<span class="action-name">Visit Flipkart</span>
													</span>
												</span>
												<span class="add-to-compare">
													<span class="action-wrapper">
														<i class="icons icon-basket-2"></i>
														<span class="action-name">Others</span>
													</span>
												</span>
											</div>
										</div>
										<!-- /Carousel Item -->
									</div>
									<!-- /Slide -->
									
									
							</div>
						</div>
						<!-- /Carousel -->
						
					</div>
					<!-- /Random Products -->
					
					


					<!-- Product Brands -->
					<div class="products-row row">
						
						<!-- Carousel Heading -->
						<div class="col-lg-12 col-md-12 col-sm-12">
							
							<div class="carousel-heading">
								<h4>Product Brands</h4>
								<div class="carousel-arrows">
									<i class="icons icon-left-dir"></i>
									<i class="icons icon-right-dir"></i>
								</div>
							</div>
							
						</div>
						<!-- /Carousel Heading -->
						
						<!-------- in the above links to sites to be given---->
						
						
						
						
						
						
						<!-- Carousel -->
						<div class="carousel owl-carousel-wrap col-lg-12 col-md-12 col-sm-12">
							
							<div class="owl-carousel" data-max-items="5">
									
									<!-- Slide -->
									<div>
										<div class="product">
											<a href="#"><img src="img/brands/0.png" alt="Brand1"></a>
										</div>
									</div>
									<!-- /Slide -->
									
									<!-- Slide -->
									<div>
										<div class="product">
											<a href="#"><img src="img/brands/2.jpg" alt="Brand1"></a>
										</div>
									</div>
									<!-- /Slide -->
									
									<!-- Slide -->
									<div>
										<div class="product">
											<a href="#"><img src="img/brands/3.png" alt="Brand1"></a>
										</div>
									</div>
									<!-- /Slide -->
									
									<!-- Slide -->
									<div>
										<div class="product">
											<a href="#"><img src="img/brands/4.jpg" alt="Brand1"></a>
										</div>
									</div>
									<!-- /Slide -->
									
									<!-- Slide -->
									<div>
										<div class="product">
											<a href="#"><img src="img/brands/5.jpg" alt="Brand1"></a>
										</div>
									</div>
									<!-- /Slide -->
									
									<!-- Slide -->
									<div>
										<div class="product">
											<a href="#"><img src="img/brands/6.png" alt="Brand1"></a>
										</div>
									</div>
									<!-- /Slide -->
									
									<!-- Slide -->
									<div>
										<div class="product">
											<a href="#"><img src="img/brands/7.gif" alt="Brand1"></a>
										</div>
									</div>
									<!-- /Slide -->
									
									<!-- Slide -->
									<div>
										<div class="product">
											<a href="#"><img src="img/brands/8.jpg" alt="Brand1"></a>
										</div>
									</div>
									<!-- /Slide -->
									
									<!-- Slide -->
									<div>
										<div class="product">
											<a href="#"><img src="img/brands/9.jpg" alt="Brand1"></a>
										</div>
									</div>
									<!-- /Slide -->
									
									<!-- Slide -->
									<div>
										<div class="product">
											<a href="#"><img src="img/brands/10.png" alt="Brand1"></a>
										</div>
									</div>
									<!-- /Slide -->
							
							</div>
							
						</div>
						<!-- /Carousel -->
						
					</div>
					<!-- /Product Brands -->
					
						
				</section>
				<!-- /Main Content -->
				
				
				
				
				<!-- Sidebar -->
				<aside class="sidebar col-lg-3 col-md-3 col-sm-3  col-lg-pull-9 col-md-pull-9 col-sm-pull-9">
					
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
					
					
					<!-- Bestsellers -->
					<div class="row sidebar-box red">
						
						<div class="col-lg-12 col-md-12 col-sm-12">
							
							<div class="sidebar-box-heading">
                            <i class="icons icon-award-2"></i>
								<h4>Bestsellers</h4>
							</div>
							
							<div class="sidebar-box-content">
								<table class="bestsellers-table">
									
									<tr>
										<td class="product-thumbnail"><a href="#"><img src="img/products/sample1.png" alt="Flipkart"></a></td>
										<td class="product-info">
											<p><a href="https://www.flipkart.com">Cashback upto</a></p>
											<span class="price">10%</span>
										</td>
									</tr>
									
									<tr>
										<td class="product-thumbnail"><a href="#"><img src="img/products/sample2.png" alt="Myntra"></a></td>
										<td class="product-info">
											<p><a href="https://www.myntra.com">Cashback upto</a></p>
											<span class="price">10%</span>
										</td>
									</tr>
									
									<tr>
										<td class="product-thumbnail"><a href="#"><img src="img/products/sample3.png" alt="EBAY"></a></td>
										<td class="product-info">
											<p><a href="https://www.ebay.in">EBAY</a></p>
                                            <div class="rating readonly-rating" data-score="4"></div>
											<span class="price"><del>5%</del> 7%</span>
										</td>
									</tr>
									
								</table>
							</div>
							
						</div>
						
					</div>
					<!-- /Bestsellers -->
					
					
					<!-- Tag Cloud -->
					<div class="row sidebar-box green">
						
						<div class="col-lg-12 col-md-12 col-sm-12">
							
							<div class="sidebar-box-heading">
                            	<i class="icons icon-tag-6"></i>
								<h4>Tags Cloud</h4>
							</div>
							
							<div class="sidebar-box-content sidebar-padding-box">
								<a href="#" class="tag-item">CashBack</a>
								<a href="#" class="tag-item">Hot Deals</a>
								
								
								
							</div>
								
						</div>
						
					</div>
					<!-- /Tag Cloud -->
					
					
					<!-- Specials -->
					<div class="row products-row sidebar-box orange">
						 
						<div class="col-lg-12 col-md-12 col-sm-12">
							
							<!-- Carousel Heading -->
							<div class="carousel-heading no-margin">
								
								<h4><i class="icons icon-magic"></i> Specials</h4>
								<div class="carousel-arrows">
									<i class="icons icon-left-dir"></i>
									<i class="icons icon-right-dir"></i>
								</div>
								
							</div>
							<!-- /Carousel Heading -->
							
						</div>
						
						<!-- Carousel -->
						<div class="carousel owl-carousel-wrap col-lg-12 col-md-12 col-sm-12">
							
							<div class="owl-carousel" data-max-items="1">
									
								<!-- Slide -->
								<div>
									<!-- Carousel Item -->
									<div class="product">
										
										<div class="product-image">
											<img src="img/products/spe1.jpg" alt="Product1">
											<a href="products_page_v1.php" class="product-hover">
												<i class="icons icon-eye-1"></i> Clothing
											</a>
										</div>
										
										<div class="product-info">
											<h5><a href="#">Cashback of</a></h5>
											<span class="price">9%</span>
											<div class="rating readonly-rating" data-score="4"></div>
										</div>
										
										<div class="product-actions">
											<span class="add-to-cart">
												<span class="action-wrapper">
													<i class="icons icon-basket-2"></i>
													<span class="action-name">Visit Myntra</span>
												</span >
											</span>
											<span class="add-to-favorites">
												<span class="action-wrapper">
													<i class="icons icon-basket-2"></i>
													<span class="action-name">Visit Flipkart</span>
												</span>
											</span>
											<span class="add-to-compare">
												<span class="action-wrapper">
													<i class="icons icon-basket-2"></i>
													<span class="action-name">Others</span>
												</span>
											</span>
										</div>
										
									</div>
									<!-- /Carousel Item -->
								</div>
								<!-- /Slide -->
								
								
								<!-- Slide -->
								<div>
									<!-- Carousel Item -->
									<div class="product">
										
										<div class="product-image">
											<img src="img/products/spe2.jpg" alt="Product1">
											
										</div>
										
										<div class="product-info">
											<h5><a href="#">Cashback of</a></h5>
											<span class="price">9%</span>
											<div class="rating readonly-rating" data-score="4"></div>
										</div>
										
										<div class="product-actions">
											<span class="add-to-cart">
												<span class="action-wrapper">
													<i class="icons icon-basket-2"></i>
													<span class="action-name">Visit Flipkart</span>
												</span >
											</span>
											<span class="add-to-favorites">
												<span class="action-wrapper">
													<i class="icons icon-basket-2"></i>
													<span class="action-name">Visit EBAY</span>
												</span>
											</span>
											<span class="add-to-compare">
												<span class="action-wrapper">
													<i class="icons icon-basket-2"></i>
													<span class="action-name">Others</span>
												</span>
											</span>
										</div>
										
									</div>
									<!-- /Carousel Item -->
								</div>
								<!-- /Slide -->
								
							</div>
						
						</div>
						<!-- / Carousel -->
						
						
					</div>
					<!-- /Specials -->
					
					
				</aside>
				<!-- /Sidebar -->
				
			</div>
			<!-- /Content -->
			
			
			
<!--------Yahan tak ho gaya hai....aur kuch abhi k lie nai bacha hai.....Only linking part si to be done---->

			<!-- News -->
			<div class="products-row row">
				
				<!-- Carousel Heading -->
				<div class="col-lg-12 col-md-12 col-sm-12">
					
					<div class="carousel-heading">
						<h4>Latest news &amp; Reviews</h4>
						<div class="carousel-arrows">
							<i class="icons icon-left-dir"></i>
							<i class="icons icon-right-dir"></i>
						</div>
					</div>
					
				</div>
				<!-- /Carousel Heading -->
				
				
				<!-- Carousel -->
				<div class="carousel owl-carousel-wrap col-lg-12 col-md-12 col-sm-12">
					
					<div class="owl-carousel" data-max-items="2">
							
						<!-- Slide -->
						<div>
							<!-- Carousel Item -->
							<article class="news">
								
								<div class="news-background">
								
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-6 news-thumbnail">
											<a href="#"><img src="img/news/sample1.jpg" alt="News1"></a>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6 news-content">
											<h5><a href="blog_post.php">Best Website</a></h5>
											<span class="date"><i class="icons icon-clock-1"></i> 5 March, 2014</span>
											<p>Shopping Sense has emeged as the best website provinding cashback upto 10% on all products.</p>
										
											</div>
									</div>
									
								</div>
								
							</article>
							<!-- /Carousel Item -->
						</div>
						<!-- /Slide -->
						
						
						<!-- Slide -->
						<div>
							
							<!-- Carousel Item -->
							<article class="news">
								
								<div class="news-background">
								
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-6 news-thumbnail">
											<a href="#"><img src="img/news/sample2.jpg" alt="News1"></a>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6 news-content">
											<h5><a href="blog_post.php">Cashback</a></h5>
											<span class="date"><i class="icons icon-clock-1"></i> 10 March, 2014</span>
											<p>Shopping Sense is one of the coolest website that provides cashback on all types of shoppings...</p>
										
											</div>
									</div>
								
								</div>
								
							</article>
							<!-- /Carousel Item -->
							
						</div>
						<!-- /Slide -->
						
						
						
						<!-- Slide -->
						<div>
							
							<!-- Carousel Item -->
							<article class="news">
								
								<div class="news-background">
								
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-6 news-thumbnail">
											<a href="#"><img src="img/news/sample2.jpg" alt="News1"></a>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6 news-content">
											<h5><a href="blog_post.php">Cashback</a></h5>
											<span class="date"><i class="icons icon-clock-1"></i> 10 March, 2014</span>
											<p>Shopping Sense is one of the coolest website that provides cashback on all types of shoppings...</p>
										
											</div>
									</div>
								
								</div>
								
							</article>
							<!-- /Carousel Item -->
							
						</div>
						<!-- /Slide -->
						
						
						
						
						<!-- Slide -->
						<div>
							
							<!-- Carousel Item -->
							<article class="news">
								
								<div class="news-background">
								
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-6 news-thumbnail">
											<a href="#"><img src="img/news/sample2.jpg" alt="News1"></a>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6 news-content">
											<h5><a href="blog_post.php">Cashback</a></h5>
											<span class="date"><i class="icons icon-clock-1"></i> 10 March, 2014</span>
											<p>Shopping Sense is one of the coolest website that provides cashback on all types of shoppings...</p>
										
											</div>
									</div>
								
								</div>
								
							</article>
							<!-- /Carousel Item -->
							
						</div>
						<!-- /Slide -->
						
						
						
						
						<!-- Slide -->
						<div>
							
							<!-- Carousel Item -->
							<article class="news">
								
								<div class="news-background">
								
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-6 news-thumbnail">
											<a href="#"><img src="img/news/sample2.jpg" alt="News1"></a>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6 news-content">
											<h5><a href="blog_post.php">Cashback</a></h5>
											<span class="date"><i class="icons icon-clock-1"></i> 10 March, 2014</span>
											<p>Shopping Sense is one of the coolest website that provides cashback on all types of shoppings...</p>
										</div>
									</div>
								
								</div>
								
							</article>
							<!-- /Carousel Item -->
							
						</div>
						<!-- /Slide -->
						
						
					</div>
				
				</div>
				<!-- /Carousel -->
				
			</div>
			<!-- /News -->
			


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
					<p>in 2-3 Weeks</p>
                    <span class="button">Learn more</span>
					<i class="icons icon-money-1"></i>
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
		
		<!-- Cloud Zoom -->
		<script src="js/zoomsl-3.0.min.js"></script>
				<!-- modal -->
		<script src="js/modal.js"></script>
		
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