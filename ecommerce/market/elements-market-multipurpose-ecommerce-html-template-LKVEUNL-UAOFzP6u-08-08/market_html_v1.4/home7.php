
<!DOCTYPE html>
<html lang="en">
<head>
    
    <!-- Basic page needs
	============================================ -->
	<title>Market - Premium Multipurpose HTML5/CSS3 Theme</title>
	<meta charset="utf-8">
    <meta name="keywords" content="boostrap, responsive, html5, css3, jquery, theme, multicolor, parallax, retina, business" />
    <meta name="author" content="Magentech">
    <meta name="robots" content="index, follow" />
   
	<!-- Mobile specific metas
	============================================ -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	
	<!-- Favicon
	============================================ -->
    <link rel="shortcut icon" href="ico/favicon.png">
	
	<!-- Google web fonts
	============================================ -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
	
    <!-- Libs CSS
	============================================ -->
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
	<link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="js/datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
	<link href="css/themecss/lib.css" rel="stylesheet">
	<link href="js/jquery-ui/jquery-ui.min.css" rel="stylesheet">
	<link href="js/minicolors/miniColors.css" rel="stylesheet">
	<!-- Theme CSS
	============================================ -->
   	<link href="css/themecss/so_megamenu.css" rel="stylesheet">
    <link href="css/themecss/so-categories.css" rel="stylesheet">
	<link href="css/themecss/so-listing-tabs.css" rel="stylesheet">
	<link href="css/header7.css" rel="stylesheet">
	<link href="css/footer4.css" rel="stylesheet">
	<link id="color_scheme" href="css/home7.css" rel="stylesheet">
	
	<link href="css/responsive.css" rel="stylesheet">
	

</head>

<body class="common-home res layout-home7 ">

	
		
    <div id="wrapper" class="wrapper-full banners-effect-7">
	
	
	<!-- Header Container  -->
	<header id="header" class="variantleft type_7">
		
		<!-- Header Top -->
		<div class="header-top compact-hidden">
			<div class="container">
				<div class="row">
					<div class="header-top-left form-inline col-sm-5 col-xs-12 compact-hidden">
						<div class="form-group languages-block ">
							<form action="index.html" method="post" enctype="multipart/form-data" id="bt-language">
								<a class="btn btn-xs dropdown-toggle" data-toggle="dropdown">
									<img src="image/demo/flags/gb.png" alt="English" title="English">
									<span class="">English</span>
									<span class="fa fa-angle-down"></span>
								</a>
								<ul class="dropdown-menu">
									<li><a href="index.html"><img class="image_flag" src="image/demo/flags/gb.png" alt="English" title="English" /> English </a></li>
									<li> <a href="index.html"> <img class="image_flag" src="image/demo/flags/lb.png" alt="Arabic" title="Arabic" /> Arabic </a> </li>
								</ul>
							</form>
						</div>

						<div class="form-group currencies-block">
							<form action="index.html" method="post" enctype="multipart/form-data" id="currency">
								<a class="btn btn-xs dropdown-toggle" data-toggle="dropdown">
									<span class="icon icon-credit "></span> US Dollar <span class="fa fa-angle-down"></span>
								</a>
								<ul class="dropdown-menu btn-xs">
									<li> <a href="#">(€)&nbsp;Euro</a></li>
									<li> <a href="#">(£)&nbsp;Pounds	</a></li>
									<li> <a href="#">($)&nbsp;US Dollar	</a></li>
								</ul>
							</form>
						</div>
					</div>
					<div class="header-top-right collapsed-block text-right  col-sm-7 col-xs-12 compact-hidden">
						<h5 class="tabBlockTitle visible-xs">More<a class="expander " href="#TabBlock-1"><i class="fa fa-angle-down"></i></a></h5>
						<div class="tabBlock" id="TabBlock-1">
							<ul class="top-link list-inline">
								<li class="account" id="my_account"><a href="my-account.html" title="My Account" class="btn btn-xs dropdown-toggle" > <i class="fa fa-user" ></i> My Account </a></li>
								<li class="wishlist"><a href="wishlist.html" class="top-link-wishlist" title="wishlist"><i class="fa fa-heart" ></i> My Wish List</a></li>
								<li class="checkout"><a href="checkout.html" class="top-link-checkout" title="Checkout"><i class="fa fa-check-square-o" ></i> Checkout</a></li>
								<li class="signin"><a href="login.html" class="top-link-checkout" title="login"><i class="fa fa-lock" ></i> Sign In</a></li>
								
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- //Header Top -->

		<!-- Header center -->
		<div class="header-center">
			<div class="container">
				<div class="row">
					<!-- Logo -->
					<div class="navbar-logo col-md-3 col-sm-12 col-xs-12">
						<a href="index.html"><img src="image/demo/logos/logo.png" title="Your Store" alt="Your Store"></a>
					</div>
					<!-- //end Logo -->
					
					<!-- Search -->
					<div id="sosearchpro" class="col-md-5 col-sm-7 search-pro">
						<form method="GET" action="index.html">
							<div id="search0" class="search input-group">
								<div class="select_category filter_type icon-select">
									<select class="no-border" name="category_id">
										<option value="0">All Categories</option>
										<option value="78">Apparel</option>
										<option value="77">Cables &amp; Connectors</option>
										<option value="82">Cameras &amp; Photo</option>
										<option value="80">Flashlights &amp; Lamps</option>
										<option value="81">Mobile Accessories</option>
										<option value="79">Video Games</option>
										<option value="20">Jewelry &amp; Watches</option>
										<option value="76">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Earings</option>
										<option value="26">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Wedding Rings</option>
										<option value="27">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Men Watches</option>
									</select>
								</div>

								<input class="autosearch-input form-control" type="text" value="" size="50" autocomplete="off" placeholder="Enter keywords to search..." name="search">
								<span class="input-group-btn">
								<button type="submit" class="button-search btn btn-primary" name="submit_search"><i class="fa fa-search"></i></button>
								</span>
							</div>
							<input type="hidden" name="route" value="product/search">
						</form>
					</div>
					<!-- //Search -->
					
					<!-- Main Menu -->
					<div class="phone-contact col-md-2  hidden-md hidden-sm hidden-xs">
							<div class="inner-info">
								<strong>Call us Now:</strong><br>
								<span>Toll free:  0123-456-789</span>
							</div>
					</div>
					<!-- //Main Menu -->

					<!-- Shopping Cart -->
					<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12 shopping_cart pull-right">
						<!--cart-->
						<div id="cart" class="btn-group btn-shopping-cart">
							<a data-loading-text="Loading..." class="top_cart dropdown-toggle" data-toggle="dropdown">
								<div class="shopcart">
									<span class="handle pull-left"></span>
									<span class="title">Shopping Cart</span>
									<p class="text-shopping-cart cart-total-full">2 item(s) - $1,262.00 </p>
								</div>
							</a>

							<ul class="tab-content content dropdown-menu pull-right shoppingcart-box" role="menu">
								<li>
									<table class="table table-striped">
										<tbody>
											<tr>
												<td class="text-center" style="width:70px">
													<a href="product.html"> <img src="image/demo/shop/product/resize/2.jpg" style="width:70px" alt="Filet Mign" title="Filet Mign" class="preview"> </a>
												</td>
												<td class="text-left"> <a class="cart_product_name" href="product.html">Filet Mign</a> </td>
												<td class="text-center"> x1 </td>
												<td class="text-center"> $1,202.00 </td>
												<td class="text-right">
													<a href="product.html" class="fa fa-edit"></a>
												</td>
												<td class="text-right">
													<a onclick="cart.remove('2');" class="fa fa-times fa-delete"></a>
												</td>
											</tr>
											<tr>
												<td class="text-center" style="width:70px">
													<a href="product.html"> <img src="image/demo/shop/product/resize/3.jpg" style="width:70px" alt="Canon EOS 5D" title="Canon EOS 5D" class="preview"> </a>
												</td>
												<td class="text-left"> <a class="cart_product_name" href="product.html">Canon EOS 5D</a> </td>
												<td class="text-center"> x1 </td>
												<td class="text-center"> $60.00 </td>
												<td class="text-right">
													<a href="product.html" class="fa fa-edit"></a>
												</td>
												<td class="text-right">
													<a onclick="cart.remove('1');" class="fa fa-times fa-delete"></a>
												</td>
											</tr>
										</tbody>
									</table>
								</li>
								<li>
									<div>
										<table class="table table-bordered">
											<tbody>
												<tr>
													<td class="text-left"><strong>Sub-Total</strong>
													</td>
													<td class="text-right">$1,060.00</td>
												</tr>
												<tr>
													<td class="text-left"><strong>Eco Tax (-2.00)</strong>
													</td>
													<td class="text-right">$2.00</td>
												</tr>
												<tr>
													<td class="text-left"><strong>VAT (20%)</strong>
													</td>
													<td class="text-right">$200.00</td>
												</tr>
												<tr>
													<td class="text-left"><strong>Total</strong>
													</td>
													<td class="text-right">$1,262.00</td>
												</tr>
											</tbody>
										</table>
										<p class="text-right"> <a class="btn view-cart" href="cart.html"><i class="fa fa-shopping-cart"></i>View Cart</a>&nbsp;&nbsp;&nbsp; <a class="btn btn-mega checkout-cart" href="checkout.html"><i class="fa fa-share"></i>Checkout</a> </p>
									</div>
								</li>
							</ul>
						</div>
						<!--//cart-->
					</div>
					<!-- //Shopping Cart -->
				</div>

			</div>
		</div>
		<!-- //Header center -->

		<!-- Header Bottom -->
		<div class="header-bottom">
			<div class="container">
				<div class="header-bottom__content">
				<div class="row">
					<!-- Sidebar menu -->
					<div class="sidebar-menu col-md-3 col-sm-6 col-xs-12  ">
						<div class="responsive so-megamenu ">
							<div class="so-vertical-menu no-gutter compact-hidden">
								<nav class="navbar-default">
									<div class="container-megamenu vertical">
										<div id="menuHeading">
											<div class="megamenuToogle-wrapper">
												<div class="megamenuToogle-pattern">
													<div class="container">
														<div>
															<span></span>
															<span></span>
															<span></span>
														</div>
														All Categories							
														
													</div>
												</div>
											</div>
										</div>
										<div class="navbar-header">
											<button type="button" id="show-verticalmenu" data-toggle="collapse" class="navbar-toggle fa fa-list-alt">
											
											</button>
											All Categories		
										</div>
										<div class="vertical-wrapper" style="display: none;">
											<span id="remove-verticalmenu" class="fa fa-times"></span>
											<div class="megamenu-pattern">
												<div class="container">
													<ul class="megamenu">
														<li class="item-vertical style1 with-sub-menu hover">
															<p class="close-menu"></p>
															<a href="#" class="clearfix">
																<img src="image/theme/icons/9.png" alt="icon">
																<span>Automotive &amp; Motocrycle</span>
																<b class="caret"></b>
															</a>
															<div class="sub-menu" data-subwidth="100" style="width: 900px; display: none; right: 0px;">
																<div class="content" style="display: none;">
																	<div class="row">
																		<div class="col-sm-12">
																			<div class="row">
																				<div class="col-md-4 static-menu">
																					<div class="menu">
																						<ul>
																							<li>
																								<a href="#" class="main-menu">Apparel</a>
																								<ul>
																									<li><a href="#">Accessories for Tablet PC</a></li>
																									<li><a href="#">Accessories for i Pad</a></li>
																									<li><a href="#">Accessories for iPhone</a></li>
																									<li><a href="#">Bags, Holiday Supplies</a></li>
																									<li><a href="#">Car Alarms and Security</a></li>
																									<li><a href="#">Car Audio &amp; Speakers</a></li>
																								</ul>
																							</li>
																							<li>
																								<a href="#" class="main-menu">Cables &amp; Connectors</a>
																								<ul>
																									<li><a href="#">Cameras &amp; Photo</a></li>
																									<li><a href="#">Electronics</a></li>
																									<li><a href="#">Outdoor &amp; Traveling</a></li>
																								</ul>
																							</li>
																						</ul>
																					</div>
																				</div>
																				<div class="col-md-4 static-menu">
																					<div class="menu">
																						<ul>
																							<li>
																								<a href="#" class="main-menu">Camping &amp; Hiking</a>
																								<ul>
																									<li><a href="#">Earings</a></li>
																									<li><a href="#">Shaving &amp; Hair Removal</a></li>
																									<li><a href="#">Salon &amp; Spa Equipment</a></li>
																								</ul>
																							</li>
																							<li>
																								<a href="#" class="main-menu">Smartphone &amp; Tablets</a>
																								<ul>
																									<li><a href="#">Sports &amp; Outdoors</a></li>
																									<li><a href="#">Bath &amp; Body</a></li>
																									<li><a href="#">Gadgets &amp; Auto Parts</a></li>
																								</ul>
																							</li>
																						</ul>
																					</div>
																				</div>
																				<div class="col-md-4 static-menu">
																					<div class="menu">
																						<ul>
																							<li>
																								<a href="#" class="main-menu">Bags, Holiday Supplies</a>
																								<ul>
																									<li><a href="#" onclick="window.location = '18_46';">Battereries &amp; Chargers</a></li>
																									<li><a href="#" onclick="window.location = '24_64';">Bath &amp; Body</a></li>
																									<li><a href="#" onclick="window.location = '18_45';">Headphones, Headsets</a></li>
																									<li><a href="#" onclick="window.location = '18_30';">Home Audio</a></li>
																								</ul>
																							</li>
																						</ul>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</li>
														<li class="item-vertical">
															<p class="close-menu"></p>
															<a href="#" class="clearfix">
																<img src="image/theme/icons/10.png" alt="icon">
																<span>Electronic</span>
																
															</a>
														</li>
														<li class="item-vertical with-sub-menu hover">
															<p class="close-menu"></p>
															<a href="#" class="clearfix">
																<span class="label"></span>
																<img src="image/theme/icons/3.png" alt="icon">
																<span>Sports &amp; Outdoors</span>
																<b class="caret"></b>
															</a>
															<div class="sub-menu" data-subwidth="60" style="width: 540px; display: none; right: 0px;">
																<div class="content" style="display: none;">
																	<div class="row">
																		<div class="col-md-6">
																			<div class="row">
																				<div class="col-md-12 static-menu">
																					<div class="menu">
																						<ul>
																							<li>
																								<a href="#" onclick="window.location = '81';" class="main-menu">Mobile Accessories</a>
																								<ul>
																									<li><a href="#" onclick="window.location = '33_63';">Gadgets &amp; Auto Parts</a></li>
																									<li><a href="#" onclick="window.location = '24_64';">Bath &amp; Body</a></li>
																									<li><a href="#" onclick="window.location = '17';">Bags, Holiday Supplies</a></li>
																								</ul>
																							</li>
																							<li>
																								<a href="#" onclick="window.location = '18_46';" class="main-menu">Battereries &amp; Chargers</a>
																								<ul>
																									<li><a href="#" onclick="window.location = '25_28';">Outdoor &amp; Traveling</a></li>
																									<li><a href="#" onclick="window.location = '80';">Flashlights &amp; Lamps</a></li>
																									<li><a href="#" onclick="window.location = '24_66';">Fragrances</a></li>
																								</ul>
																							</li>
																							<li>
																								<a href="#" onclick="window.location = '25_31';" class="main-menu">Fishing</a>
																								<ul>
																									<li><a href="#" onclick="window.location = '57_73';">FPV System &amp; Parts</a></li>
																									<li><a href="#" onclick="window.location = '18';">Electronics</a></li>
																									<li><a href="#" onclick="window.location = '20_76';">Earings</a></li>
																									<li><a href="#" onclick="window.location = '33_60';">More Car Accessories</a></li>
																								</ul>
																							</li>
																						</ul>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="col-md-6">
																			<div class="row banner">
																				<a href="#">
																					<img src="image/demo/cms/menu_bg2.jpg" alt="banner1">
																					</a>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</li>
															<li class="item-vertical with-sub-menu hover">
																<p class="close-menu"></p>
																<a href="#" class="clearfix">
																	<img src="image/theme/icons/2.png" alt="icon">
																	<span>Health &amp; Beauty</span>
																	<b class="caret"></b>
																</a>
																<div class="sub-menu" data-subwidth="100" style="width: 900px; display: none;">
																	<div class="content" style="display: none;">
																		<div class="row">
																			<div class="col-md-12">
																				<div class="row">
																					<div class="col-md-4 static-menu">
																						<div class="menu">
																							<ul>
																								<li>
																									<a href="#" class="main-menu">Car Alarms and Security</a>
																									<ul>
																										<li><a href="#">Car Audio &amp; Speakers</a></li>
																										<li><a href="#">Gadgets &amp; Auto Parts</a></li>
																										<li><a href="#">Gadgets &amp; Auto Parts</a></li>
																										<li><a href="#">Headphones, Headsets</a></li>
																									</ul>
																								</li>
																								<li>
																									<a href="24" onclick="window.location = '24';" class="main-menu">Health &amp; Beauty</a>
																									<ul>
																										<li>
																											<a href="#">Home Audio</a>
																										</li>
																										<li>
																											<a href="#">Helicopters &amp; Parts</a>
																										</li>
																										<li>
																											<a href="#">Outdoor &amp; Traveling</a>
																										</li>
																										<li>
																											<a href="#">Toys &amp; Hobbies</a>
																										</li>
																									</ul>
																								</li>
																							</ul>
																						</div>
																					</div>
																					<div class="col-md-4 static-menu">
																						<div class="menu">
																							<ul>
																								<li>
																									<a href="#" class="main-menu">Electronics</a>
																									<ul>
																										<li>
																											<a href="#">Earings</a>
																										</li>
																										<li>
																											<a href="#">Salon &amp; Spa Equipment</a>
																										</li>
																										<li>
																											<a href="#">Shaving &amp; Hair Removal</a>
																										</li>
																										<li>
																											<a href="#">Smartphone &amp; Tablets</a>
																										</li>
																									</ul>
																								</li>
																								<li>
																									<a href="#" class="main-menu">Sports &amp; Outdoors</a>
																									<ul>
																										<li>
																											<a href="#">Flashlights &amp; Lamps</a>
																										</li>
																										<li>
																											<a href="#">Fragrances</a>
																										</li>
																										<li>
																											<a href="#">Fishing</a>
																										</li>
																										<li>
																											<a href="#">FPV System &amp; Parts</a>
																										</li>
																									</ul>
																								</li>
																							</ul>
																						</div>
																					</div>
																					<div class="col-md-4 static-menu">
																						<div class="menu">
																							<ul>
																								<li>
																									<a href="#" class="main-menu">More Car Accessories</a>
																									<ul>
																										<li>
																											<a href="#">Lighter &amp; Cigar Supplies</a>
																										</li>
																										<li>
																											<a href="#">Mp3 Players &amp; Accessories</a>
																										</li>
																										<li>
																											<a href="#">Men Watches</a>
																										</li>
																										<li>
																											<a href="#">Mobile Accessories</a>
																										</li>
																									</ul>
																								</li>
																								<li>
																									<a href="#" class="main-menu">Gadgets &amp; Auto Parts</a>
																									<ul>
																										<li>
																											<a href="#">Gift &amp; Lifestyle Gadgets</a>
																										</li>
																										<li>
																											<a href="#">Gift for Man</a>
																										</li>
																										<li>
																											<a href="#">Gift for Woman</a>
																										</li>
																										<li>
																											<a href="#">Gift for Woman</a>
																										</li>
																									</ul>
																								</li>
																							</ul>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</li>
															<li class="item-vertical css-menu with-sub-menu hover">
																<p class="close-menu"></p>
																<a href="#" class="clearfix">
																	
																	<img src="image/theme/icons/2.png" alt="icon">
																	<span>Smartphone &amp; Tablets</span>
																	<b class="caret"></b>
																</a>
																<div class="sub-menu" data-subwidth="30" style="width: 270px; display: none; right: 0px;">
																	<div class="content" style="display: none;">
																		<div class="row">
																			<div class="col-sm-12">
																				<div class="row">
																					<div class="col-sm-12 hover-menu">
																						<div class="menu">
																							<ul>
																								<li>
																									<a href="#" class="main-menu">Headphones, Headsets</a>
																								</li>
																								<li>
																									<a href="#" class="main-menu">Home Audio</a>
																								</li>
																								<li>
																									<a href="#" class="main-menu">Health &amp; Beauty</a>
																								</li>
																								<li>
																									<a href="#" class="main-menu">Helicopters &amp; Parts</a>
																								</li>
																								<li>
																									<a href="#" class="main-menu">Helicopters &amp; Parts</a>
																								</li>
																							</ul>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</li>
															<li class="item-vertical">
																<p class="close-menu"></p>
																<a href="#" class="clearfix">
																	<img src="image/theme/icons/11.png" alt="icon">
																	<span>Flashlights &amp; Lamps</span>
																	
																</a>
															</li>
															<li class="item-vertical">
																<p class="close-menu"></p>
																<a href="#" class="clearfix">
																	<img src="image/theme/icons/4.png" alt="icon">
																	<span>Camera &amp; Photo</span>
																</a>
															</li>
															<li class="item-vertical">
																<p class="close-menu"></p>
																<a href="#" class="clearfix">
																	<img src="image/theme/icons/5.png" alt="icon">
																	<span>Smartphone &amp; Tablets</span>
																</a>
															</li>
															<li class="item-vertical">
																<p class="close-menu"></p>
																<a href="#" class="clearfix">
																	<img src="image/theme/icons/7.png" alt="icon">
																	<span>Outdoor &amp; Traveling Supplies</span>
																</a>
															</li>
															<li class="item-vertical" style="display: none;">
																<p class="close-menu"></p>
																
																<a href="#" class="clearfix">
																	<img src="image/theme/icons/6.png" alt="icon">
																	<span>Health &amp; Beauty</span>
																</a>
															</li>
															<li class="item-vertical">
																<p class="close-menu"></p>
																<a href="#" class="clearfix">
																	<img src="image/theme/icons/8.png" alt="icon">
																	<span>Toys &amp; Hobbies </span>
																</a>
															</li>
															<li class="item-vertical">
																<p class="close-menu"></p>
																<a href="#" class="clearfix">
																	<img src="image/theme/icons/12.png" alt="icon">
																	<span>Jewelry &amp; Watches</span>
																</a>
															</li>
															<li class="item-vertical">
																<p class="close-menu"></p>
																<a href="#" class="clearfix">
																	<img src="image/theme/icons/13.png" alt="icon">
																	<span>Bags, Holiday Supplies</span>
																</a>
															</li>
															<li class="item-vertical">
																<p class="close-menu"></p>
																
																<a href="#" class="clearfix">
																	<img src="image/theme/icons/13.png" alt="icon">
																	<span>More Car Accessories</span>
																</a>
															</li>
															<li class="loadmore">
																<i class="fa fa-plus-square-o"></i>
																<span class="more-view">More Categories</span>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</nav>
							</div>
						</div>

					</div>
					
					<!-- Main menu -->
					<div class="megamenu-hori col-md-9 col-sm-6 col-xs-12 ">
						<div class="responsive so-megamenu ">
								<nav class="navbar-default">
									<div class=" container-megamenu  horizontal">
										<div class="navbar-header">
											<button type="button" id="show-megamenu" data-toggle="collapse" class="navbar-toggle">
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
											</button>
											Navigation		
										</div>
										
										<div class="megamenu-wrapper">
											<span id="remove-megamenu" class="fa fa-times"></span>
											<div class="megamenu-pattern">
												<div class="container">
													<ul class="megamenu " data-transition="slide" data-animationtime="250">
														<li class="home hover">
															<a href="index.html">Home <b class="caret"></b></a>
															<div class="sub-menu" style="width:100%;" >
																<div class="content" >
																	<div class="row">
																		<div class="col-md-15">
																			<a href="index.html" class="image-link"> 
																				<span class="thumbnail">
																					<img class="img-responsive img-border" src="image/demo/feature/home-1.jpg" alt="">
																					<span class="btn btn-default">Read More</span>
																				</span> 
																				<h3 class="figcaption">Home page - (Default)</h3> 
																			</a> 
																			
																		</div>
																		<div class="col-md-15">
																			<a href="home2.html" class="image-link"> 
																				<span class="thumbnail">
																					<img class="img-responsive img-border" src="image/demo/feature/home-2.jpg" alt="">
																					<span class="btn btn-default">Read More</span>
																				</span> 
																				<h3 class="figcaption">Home page - Layout 2</h3> 
																			</a> 
																			
																		</div>
																		<div class="col-md-15">
																			<a href="home3.html" class="image-link"> 
																				<span class="thumbnail">
																					<img class="img-responsive img-border" src="image/demo/feature/home-3.jpg" alt="">
																					<span class="btn btn-default">Read More</span>
																				</span> 
																				<h3 class="figcaption">Home page - Layout 3</h3> 
																			</a> 
																			
																		</div>
																		<div class="col-md-15">
																			<a href="home4.html" class="image-link"> 
																				<span class="thumbnail">
																					<img class="img-responsive img-border" src="image/demo/feature/home-4.jpg" alt="">
																					<span class="btn btn-default">Read More</span>
																				</span> 
																				<h3 class="figcaption">Home page - Layout 4</h3> 
																			</a> 
																			
																		</div>
																		<div class="col-md-15">
																			<a href="home5.html" class="image-link"> 
																				<span class="thumbnail">
																					<img class="img-responsive img-border" src="image/demo/feature/home-5.jpg" alt="">
																					<span class="btn btn-default">Read More</span>
																				</span> 
																				<h3 class="figcaption">Home page - Layout 5</h3> 
																			</a> 
																			
																		</div>
																		<div class="col-md-15">
																			<a href="home6.html" class="image-link"> 
																				<span class="thumbnail">
																					<img class="img-responsive img-border" src="image/demo/feature/home-6.jpg" alt="">
																					<span class="btn btn-default">Read More</span>
																				</span> 
																				<h3 class="figcaption">Home page - Layout 6</h3> 
																			</a> 
																			
																		</div>
																		<div class="col-md-15">
																			<a href="home7.html" class="image-link"> 
																				<span class="thumbnail">
																					<img class="img-responsive img-border" src="image/demo/feature/home-7.jpg" alt="">
																					<span class="btn btn-default">Read More</span>
																				</span> 
																				<h3 class="figcaption">Home page - Layout 7</h3> 
																			</a> 
																			
																		</div>
																		<div class="col-md-15">
																			<a href="home8.html" class="image-link"> 
																				<span class="thumbnail">
																					<img class="img-responsive img-border" src="image/demo/feature/home-8.jpg" alt="">
																					<span class="btn btn-default">Read More</span>
																				</span> 
																				<h3 class="figcaption">Home page - Layout 8</h3> 
																			</a> 
																			
																		</div>
																		<div class="col-md-15">
																			<a href="html_width_RTL/index.html" class="image-link"> 
																				<span class="thumbnail">
																					<img class="img-responsive img-border" src="image/demo/feature/home-rtl.jpg" alt="">
																					<span class="btn btn-default">Read More</span>
																				</span> 
																				<h3 class="figcaption">Home page - Layout RTL</h3> 
																			</a> 
																			
																		</div>
																		<div class="col-md-15">
																			<a href="#" class="image-link"> 
																				<span class="thumbnail">
																					<img class="img-responsive img-border" src="image/demo/feature/comming-soon.png" alt="">
																					
																				</span> 
																				<h3 class="figcaption">Comming soon</h3> 
																			</a> 
																			
																		</div>
																	</div>
																</div>
															</div>
														</li>
														<li class="with-sub-menu hover">
															<p class="close-menu"></p>
															<a href="#" class="clearfix">
																<strong>Features</strong>
																<img class="label-hot" src="image/theme/icons/hot-icon.png" alt="icon items">
																<b class="caret"></b>
															</a>
															<div class="sub-menu" style="width: 100%; right: auto;">
																<div class="content" >
																	<div class="row">
																		<div class="col-md-3">
																			<div class="column">
																				<a href="#" class="title-submenu">Listing pages</a>
																				<div>
																					<ul class="row-list">
																						<li><a href="category.html">Category Page 1 </a></li>
																						<li><a href="category-v2.html">Category Page 2</a></li>
																						<li><a href="category-v3.html">Category Page 3</a></li>
																					</ul>
																					
																				</div>
																			</div>
																		</div>
																		<div class="col-md-3">
																			<div class="column">
																				<a href="#" class="title-submenu">Product pages</a>
																				<div>
																					<ul class="row-list">
																						<li><a href="product.html">Image size - big</a></li>
																						<li><a href="product-v2.html">Image size - medium</a></li>
																						<li><a href="product-v3.html">Image size - small</a></li>
																					</ul>
																				</div>
																			</div>
																		</div>
																		<div class="col-md-3">
																			<div class="column">
																				<a href="#" class="title-submenu">Shopping pages</a>
																				<div>
																					<ul class="row-list">
																						<li><a href="cart.html">Shopping Cart Page</a></li>
																						<li><a href="checkout.html">Checkout Page</a></li>
																						<li><a href="compare.html">Compare Page</a></li>
																						<li><a href="wishlist.html">Wishlist Page</a></li>
																					
																					</ul>
																				</div>
																			</div>
																		</div>
																		<div class="col-md-3">
																			<div class="column">
																				<a href="#" class="title-submenu">My Account pages</a>
																				<div>
																					<ul class="row-list">
																						<li><a href="login.html">Login Page</a></li>
																						<li><a href="register.html">Register Page</a></li>
																						<li><a href="my-account.html">My Account</a></li>
																						<li><a href="order-history.html">Order History</a></li>
																						<li><a href="order-information.html">Order Information</a></li>
																						<li><a href="return.html">Product Returns</a></li>
																						<li><a href="gift-voucher.html">Gift Voucher</a></li>
																					</ul>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</li>
														<li class="with-sub-menu hover">
															<p class="close-menu"></p>
															<a href="#" class="clearfix">
																<strong>Pages</strong>
																<img class="label-hot" src="image/theme/icons/hot-icon.png" alt="icon items">
																<b class="caret"></b>
															</a>
															<div class="sub-menu" style="width: 40%; ">
																<div class="content" >
																	<div class="row">
																		<div class="col-md-6">
																			<ul class="row-list">
																				<li><a class="subcategory_item" href="faq.html">FAQ</a></li>
																				<li><a class="subcategory_item" href="sitemap.html">Site Map</a></li>
																				<li><a class="subcategory_item" href="contact.html">Contact us</a></li>
																				<li><a class="subcategory_item" href="banner-effect.html">Banner Effect</a></li>
																			</ul>
																		</div>
																		<div class="col-md-6">
																			<ul class="row-list">
																				<li><a class="subcategory_item" href="about-us.html">About Us 1</a></li>
																				<li><a class="subcategory_item" href="about-us-2.html">About Us 2</a></li>
																				<li><a class="subcategory_item" href="about-us-3.html">About Us 3</a></li>
																				<li><a class="subcategory_item" href="about-us-4.html">About Us 4</a></li>
																			</ul>
																		</div>
																	</div>
																</div>
															</div>
														</li>
														<li class="with-sub-menu hover">
															<p class="close-menu"></p>
															<a href="#" class="clearfix">
																<strong>Categories</strong>
																<span class="label"></span>
																<b class="caret"></b>
															</a>
															<div class="sub-menu" style="width: 100%; display: none;">
																<div class="content">
																	<div class="row">
																		<div class="col-sm-12">
																			<div class="row">
																				<div class="col-md-3 img img1">
																					<a href="#"><img src="image/demo/cms/img1.jpg" alt="banner1"></a>
																				</div>
																				<div class="col-md-3 img img2">
																					<a href="#"><img src="image/demo/cms/img2.jpg" alt="banner2"></a>
																				</div>
																				<div class="col-md-3 img img3">
																					<a href="#"><img src="image/demo/cms/img3.jpg" alt="banner3"></a>
																				</div>
																				<div class="col-md-3 img img4">
																					<a href="#"><img src="image/demo/cms/img4.jpg" alt="banner4"></a>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="row">
																		<div class="col-md-3">
																			<a href="#" class="title-submenu">Automotive</a>
																			<div class="row">
																				<div class="col-md-12 hover-menu">
																					<div class="menu">
																						<ul>
																							<li><a href="#"  class="main-menu">Car Alarms and Security</a></li>
																							<li><a href="#"  class="main-menu">Car Audio &amp; Speakers</a></li>
																							<li><a href="#"  class="main-menu">Gadgets &amp; Auto Parts</a></li>
																							<li><a href="#"  class="main-menu">More Car Accessories</a></li>
																						</ul>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="col-md-3">
																			<a href="#" class="title-submenu">Electronics</a>
																			<div class="row">
																				<div class="col-md-12 hover-menu">
																					<div class="menu">
																						<ul>
																							<li><a href="#"  class="main-menu">Battereries &amp; Chargers</a></li>
																							<li><a href="#"  class="main-menu">Headphones, Headsets</a></li>
																							<li><a href="#"  class="main-menu">Home Audio</a></li>
																							<li><a href="#"  class="main-menu">Mp3 Players &amp; Accessories</a></li>
																						</ul>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="col-md-3">
																			<a href="#" class="title-submenu">Jewelry &amp; Watches</a>
																			<div class="row">
																				<div class="col-md-12 hover-menu">
																					<div class="menu">
																						<ul>
																							<li><a href="#"  class="main-menu">Earings</a></li>
																							<li><a href="#"  class="main-menu">Wedding Rings</a></li>
																							<li><a href="#"  class="main-menu">Men Watches</a></li>
																						</ul>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="col-md-3">
																			<a href="#" class="title-submenu">Bags, Holiday Supplies</a>
																			<div class="row">
																				<div class="col-md-12 hover-menu">
																					<div class="menu">
																						<ul>
																							<li><a href="#"  class="main-menu">Gift &amp; Lifestyle Gadgets</a></li>
																							<li><a href="#"  class="main-menu">Gift for Man</a></li>
																							<li><a href="#"  class="main-menu">Gift for Woman</a></li>
																							<li><a href="#"  class="main-menu">Lighter &amp; Cigar Supplies</a></li>
																						</ul>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</li>
														
														<li class="with-sub-menu hover">
															<p class="close-menu"></p>
															<a href="#" class="clearfix">
																<strong>Accessories</strong>
																
																<b class="caret"></b>
															</a>
															<div class="sub-menu" style="width: 100%; display: none;">
																<div class="content" style="display: none;">
																	<div class="row">
																		<div class="col-md-8">
																			<div class="row">
																				<div class="col-md-6 static-menu">
																					<div class="menu">
																						<ul>
																							<li>
																								<a href="#"  class="main-menu">Automotive</a>
																								<ul>
																									<li><a href="#">Car Alarms and Security</a></li>
																									<li><a href="#" >Car Audio &amp; Speakers</a></li>
																									<li><a href="3#" >Gadgets &amp; Auto Parts</a></li>
																								</ul>
																							</li>
																							<li>
																								<a href="#"  class="main-menu">Smartphone &amp; Tablets</a>
																								<ul>
																									<li><a href="#" >Accessories for i Pad</a></li>
																									<li><a href="#" >Apparel</a></li>
																									<li><a href="#" >Accessories for iPhone</a></li>
																								</ul>
																							</li>
																						</ul>
																					</div>
																				</div>
																				<div class="col-md-6 static-menu">
																					<div class="menu">
																						<ul>
																							<li>
																								<a href="#" class="main-menu">Sports &amp; Outdoors</a>
																								<ul>
																									<li><a href="#" >Camping &amp; Hiking</a></li>
																									<li><a href="#" >Cameras &amp; Photo</a></li>
																									<li><a href="#" >Cables &amp; Connectors</a></li>
																								</ul>
																							</li>
																							<li>
																								<a href="#"  class="main-menu">Electronics</a>
																								<ul>
																									<li><a href="#" >Battereries &amp; Chargers</a></li>
																									<li><a href="#" >Bath &amp; Body</a></li>
																									<li><a href="#" >Outdoor &amp; Traveling</a></li>
																								</ul>
																							</li>
																						</ul>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="col-md-4">
																			<span class="title-submenu">Bestseller</span>
																			<div class="col-sm-12 list-product">
																				<div class="product-thumb">
																					<div class="image pull-left">
																						<a href="#"><img src="image/demo/shop/product/35.jpg" width="80" alt="Filet Mign" title="Filet Mign" class="img-responsive"></a>
																					</div>
																					<div class="caption">
																						<h4><a href="#">Filet Mign</a></h4>
																						<div class="rating-box">
																							<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																						   <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																						   <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																						   <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																						   <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																						</div>
																						<p class="price">$1,202.00</p>
																					</div>
																				</div>
																			</div>
																			<div class="col-sm-12 list-product">
																				<div class="product-thumb">
																					<div class="image pull-left">
																						<a href="#"><img src="image/demo/shop/product/W1.jpg" width="80" alt="Dail Lulpa" title="Dail Lulpa" class="img-responsive"></a>
																					</div>
																					<div class="caption">
																						<h4><a href="#">Dail Lulpa</a></h4>
																						<div class="rating-box">
																							<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																						   <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																						   <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																						   <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																						   <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
																						</div>
																						<p class="price">$78.00</p>
																					</div>
																				</div>
																			</div>
																			<div class="col-sm-12 list-product">
																				<div class="product-thumb">
																					<div class="image pull-left">
																						<a href="#"><img src="image/demo/shop/product/141.jpg" width="80" alt="Canon EOS 5D" title="Canon EOS 5D" class="img-responsive"></a>
																					</div>
																					<div class="caption">
																						<h4><a href="#">Canon EOS 5D</a></h4>
																						
																						<div class="rating-box">
																							<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
																							<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
																							<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
																							<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
																							<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
																						</div>
																						<p class="price">
																							<span class="price-new">$60.00</span>
																							<span class="price-old">$145.00</span>
																							
																						</p>
																					</div>
																				</div>
																			</div>
																			
																		</div>
																	</div>
																</div>
															</div>
														</li>
														<li class="">
															<p class="close-menu"></p>
															<a href="blog-page.html" class="clearfix">
																<strong>Blog</strong>
																<span class="label"></span>
															</a>
														</li>
														
														<li class="hidden-md">
															<p class="close-menu"></p>
															<a href="#" class="clearfix">
																<strong>Buy Theme!</strong>
																
															</a>
														</li>
														<li class="pull-right"><a href="#" title="Special Offer!"><strong>Special Offer!</strong></a></li>
													</ul>
													
												</div>
											</div>
										</div>
									</div>
								</nav>
							</div>
						</div>
					<!-- //end Main menu -->
					
				</div>
				</div>
			</div>

		</div>

	<!-- Navbar switcher -->
	<!-- //end Navbar switcher -->
	</header>
	<!-- //Header Container  -->
	
	<!-- Block slideshow  -->
	<section class="so-slideshow">
		<div id="so-slideshow">
			<div class="module  no-margin">
				<div class="yt-content-slider yt-content-slider--arrow1"  data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="0" data-items_column0="1" data-items_column1="1" data-items_column2="1"  data-items_column3="1" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="no" data-hoverpause="yes">
					<div class="yt-content-slide">
						<a href="#"><img src="image/demo/slider/home7/slider-1.jpg" alt="slider1" class="img-responsive"></a>
					</div>
					<div class="yt-content-slide">
						<a href="#"><img src="image/demo/slider/home7/slider-2.jpg" alt="slider2" class="img-responsive"></a>
					</div>
					<div class="yt-content-slide">
						<a href="#"><img src="image/demo/slider/home7/slider-3.jpg" alt="slider3" class="img-responsive"></a>
					</div>
				</div>
				<div class="loadeding"></div>
			</div>
		</div>
			
	</section>
	<!-- //Block slideshow  -->
	
	
	<!-- Main Container  -->
	<div class="main-container ">
		<div class="container">
		<div class="row">
			<div id="content-top" class="clearfix" >
				<div class="module banner1-id7">
					<div class="modcontent clearfix">
						<ul class="blank">		
							<li class="col-lg-6 col-md-6 col-sm-6 static-image">
								<div class="banners">
									<div>
										<a href="#"><img src="image/demo/cms/home7/image1-id11.jpg" alt="banner1"></a>
									</div>
								</div>
							</li>		
							<li  class="col-lg-6 col-md-6 col-sm-6 static-image">
								<div class="banners">
									<div>
										<a href="#"><img src="image/demo/cms/home7/image2-id11.jpg" alt="banner1"></a>
									</div>
								</div>
							</li>		
							
						</ul>
						
					</div>
				</div>
				
				<div class="module">
					<div class="modcontent clearfix">
						<div class="services-v1">
							<div class="policy policy1 col-lg-3 col-md-3 col-sm-6 col-xs-12">
								<div class="policy-inner"><span class="ico-policy"></span>
									<h2>30 days return</h2><a href="#">money back</a>
								</div>
							</div>
							<div class="policy policy2 col-lg-3 col-md-3 col-sm-6 col-xs-12">
								<div class="policy-inner"><span class="ico-policy"></span><a href="#"><h2>free shipping</h2>on all orders over $99</a>
								</div>
							</div>
							<div class="policy policy3 col-lg-3 col-md-3 col-sm-6 col-xs-12">
								<div class="policy-inner"><span class="ico-policy"></span><a href="#"><h2>lowest price</h2>guarantee </a>
								</div>
							</div>
							<div class="policy policy4 col-lg-3 col-md-3 col-sm-6 col-xs-12">
								<div class="policy-inner"><span class="ico-policy"></span><a href="#"><h2>safe shopping</h2>guarantee </a>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="module tab-slider titleLine col-xs-12">
					<div id="so_listing_tabs_1" class="so-listing-tabs first-load module">
						<div class="loadeding"></div>
						<div class="ltabs-wrap ">
							<div class="ltabs-tabs-container" data-delay="300" data-duration="600" data-effect="starwars" data-ajaxurl="" data-type_source="0" data-lg="5" data-md="4" data-sm="2" data-xs="1" data-margin="30">
								<!--Begin Tabs-->
								<div class="ltabs-tabs-wrap"> 
									<span class="ltabs-tab-selected">Lastest Products	</span> <span class="ltabs-tab-arrow">▼</span>
									<div class="item-sub-cat item-sub-cat__divided">
										<ul class="ltabs-tabs cf">
											<li class="ltabs-tab tab-sel" data-category-id="20" data-active-content=".items-category-20"> <span class="ltabs-tab-label">Lastest Products					</span> </li>
											<li class="ltabs-tab " data-category-id="74" data-active-content=".items-category-74"> <span class="ltabs-tab-label">Most Viewed		</span> </li>
											<li class="ltabs-tab " data-category-id="75" data-active-content=".items-category-75"> <span class="ltabs-tab-label">Most Selling	</span> </li>
										</ul>
									</div>
								</div>
								<!-- End Tabs-->
							</div>
							<div class="ltabs-items-container">
								<!--Begin Items-->
								<div class="ltabs-items ltabs-items-loaded ltabs-items-selected items-category-20 grid" data-total="10">
									<div class="ltabs-items-inner ltabs-slider ">
										
										<div class="ltabs-item product-layout">
											<div class="product-item-container">
												<div class="left-block">
													<div class="product-image-container second_img ">
														<img src="image/demo/shop/product/B10.jpg"  alt="Apple Cinema 30&quot;" class="img-responsive" />
														<img src="image/demo/shop/product/B9.jpg"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
													</div>
													<!--Sale Label-->
													<span class="label label-sale">Sale</span>
													<!--full quick view block-->
													<a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="quickview.html">  Quickview</a>
													<!--end full quick view block-->
												</div>
												<div class="right-block">
													<div class="caption">
														<h4><a href="product.html">Comas samer rumas</a></h4>		
														<div class="ratings">
															<div class="rating-box">
																<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
															</div>
														</div>
																			
														<div class="price">
															<span class="price-new">$97.00</span> 
														</div>
													</div>
													
													  <div class="button-group">
														<button class="addToCart addToCart--notext" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span >Add to Cart</span></button>
														<button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
														<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
													  </div>
												</div><!-- right block -->
											</div>
										</div>
										<div class="ltabs-item product-layout">
											<div class="product-item-container">
												<div class="left-block">
													<div class="product-image-container second_img ">
														<img src="image/demo/shop/product/w1.jpg"  alt="Apple Cinema 30&quot;" class="img-responsive" />
														<img src="image/demo/shop/product/w10.jpg"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
													</div>
													
													<!--full quick view block-->
													<a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="quickview.html">  Quickview</a>
													<!--end full quick view block-->
												</div>
												<div class="right-block">
													<div class="caption">
														<h4><a href="product.html">Toma kimas darem	</a></h4>		
														<div class="ratings">
															<div class="rating-box">
																<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
															</div>
														</div>
																			
														<div class="price">
															<span class="price-new">$97.00</span> 
														</div>
													</div>
													
													  <div class="button-group">
														<button class="addToCart addToCart--notext" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="">Add to Cart</span></button>
														<button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
														<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
													  </div>
												</div><!-- right block -->
											</div>
										</div>
										<div class="ltabs-item product-layout">
											<div class="product-item-container">
												<div class="left-block">
													<div class="product-image-container second_img ">
														<img src="image/demo/shop/product/B5.jpg"  alt="Apple Cinema 30&quot;" class="img-responsive" />
														<img src="image/demo/shop/product/B10.jpg"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
													</div>
													
													<!--full quick view block-->
													<a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="quickview.html">  Quickview</a>
													<!--end full quick view block-->
												</div>
												<div class="right-block">
													<div class="caption">
														<h4><a href="product.html">Gumase sema dumae</a></h4>		
														<div class="ratings">
															<div class="rating-box">
																<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
															</div>
														</div>
																			
														<div class="price">
															<span class="price-new">$65.00</span> 
														</div>
													</div>
													
													  <div class="button-group">
														<button class="addToCart addToCart--notext" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="">Add to Cart</span></button>
														<button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
														<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
													  </div>
												</div><!-- right block -->
											</div>
										</div>	
										<div class="ltabs-item product-layout">
											<div class="product-item-container">
												<div class="left-block">
													<div class="product-image-container second_img ">
														<img src="image/demo/shop/product/J9.jpg"  alt="Apple Cinema 30&quot;" class="img-responsive" />
														<img src="image/demo/shop/product/J5.jpg"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
													</div>
													<!--Sale Label-->
													<span class="label label-sale">Sale</span>
													<!--full quick view block-->
													<a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="quickview.html">  Quickview</a>
													<!--end full quick view block-->
												</div>
												<div class="right-block">
													<div class="caption">
														<h4><a href="product.html">Vimas suma pola</a></h4>		
														<div class="ratings">
															<div class="rating-box">
																<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
															</div>
														</div>
																			
														<div class="price">
															<span class="price-new">$50.00</span> 
															<span class="price-old">$62.00</span>		 
														</div>
													</div>
													
													  <div class="button-group">
														<button class="addToCart addToCart--notext" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="">Add to Cart</span></button>
														<button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
														<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
													  </div>
												</div><!-- right block -->
											</div>
										</div>
										<div class="ltabs-item product-layout">
											<div class="product-item-container">
												<div class="left-block">
													<div class="product-image-container second_img ">
														<img src="image/demo/shop/product/m1.jpg"  alt="Apple Cinema 30&quot;" class="img-responsive" />
														<img src="image/demo/shop/product/m3.jpg"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
													</div>
													<!--New Label-->
													<span class="label label-new">New</span>
													<!--full quick view block-->
													<a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="quickview.html">  Quickview</a>
													<!--end full quick view block-->
												</div>
												<div class="right-block">
													<div class="caption">
														<h4><a href="product.html">Cisi Chicken	</a></h4>		
														<div class="ratings">
															<div class="rating-box">
																<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
															</div>
														</div>
																			
														<div class="price">
															<span class="price-new">$59.00</span> 
														</div>
													</div>
													
													  <div class="button-group">
														<button class="addToCart addToCart--notext" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="">Add to Cart</span></button>
														<button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
														<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
													  </div>
												</div><!-- right block -->
											</div>
										</div>
										<div class="ltabs-item product-layout">
											<div class="product-item-container">
												<div class="left-block">
													<div class="product-image-container second_img ">
														<img src="image/demo/shop/product/e11.jpg"  alt="Apple Cinema 30&quot;" class="img-responsive" />
														<img src="image/demo/shop/product/E3.jpg"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
													</div>
													<!--Sale Label-->
													<span class="label label-sale">Sale</span>
													<!--full quick view block-->
													<a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="quickview.html">  Quickview</a>
													<!--end full quick view block-->
												</div>
												<div class="right-block">
													<div class="caption">
														<h4><a href="product.html">Apple Cinema 30"</a></h4>		
														<div class="ratings">
															<div class="rating-box">
																<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
															</div>
														</div>
																			
														<div class="price">
															<span class="price-new">$50.00</span> 
															<span class="price-old">$62.00</span>		 
														</div>
													</div>
													
													  <div class="button-group">
														<button class="addToCart addToCart--notext" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="">Add to Cart</span></button>
														<button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
														<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
													  </div>
												</div><!-- right block -->
											</div>
										</div>
									</div>
									
								</div>
								
								<div class="ltabs-items items-category-74 products-list  grid" data-total="10">
									<div class="ltabs-loading"></div>
								</div>
								<div class="ltabs-items  items-category-75 products-list  grid" data-total="10">
									<div class="ltabs-loading"></div>
								</div>
							</div>
							<!--End Items-->
							
						</div>
						
					</div>
				</div>
						
				<div class="module static-image col-xs-12 module--4x clearfix">
					<div class="banners">
						<div>
							<a href="#"><img src="image/demo/cms/home7/image3-id11.jpg" alt="banner1"></a>
						</div>
					</div>
				</div>
				
				<div class="module tab-slider tab-slider--full titleLine container-full">
					<div class="container">
						<h3 class="modtitle">New Arrivals</h3>
						<div id="so_listing_tabs_2" class="so-listing-tabs first-load module">
							<div class="loadeding"></div>
							<div class="ltabs-wrap ">
								<div class="ltabs-tabs-container" data-delay="300" data-duration="600" data-effect="starwars" data-ajaxurl="" data-type_source="0" data-lg="1" data-md="1" data-sm="1" data-xs="1" data-margin="0">
									<!--Begin Tabs-->
									<div class="ltabs-tabs-wrap"> 
									<span class="ltabs-tab-selected">Jewelry &amp; Watches	</span> <span class="ltabs-tab-arrow">▼</span>
										<div class="item-sub-cat  item-sub-cat__right">
											<ul class="ltabs-tabs cf">
												<li class="ltabs-tab tab-sel" data-category-id="74" data-active-content=".items-category-74"> <span class="ltabs-tab-label">Jewelry &amp; Watches						</span> </li>
												<li class="ltabs-tab " data-category-id="72" data-active-content=".items-category-72"> <span class="ltabs-tab-label">Electronics		</span> </li>
												<li class="ltabs-tab " data-category-id="73" data-active-content=".items-category-73"> <span class="ltabs-tab-label">Sports &amp; Outdoors	</span> </li>
											</ul>
										</div>
									</div>
									<!-- End Tabs-->
								</div>
								<div class="ltabs-items-container">
									<!--Begin Items-->
									<div class="ltabs-items  ltabs-items-selected items-category-74 grid" data-total="10">
										<div class="ltabs-items-inner ltabs-slider ">
											<div class="item-wrap">
												<div class="row">
													<div class="col-md-3 col-xs-12 product-col">
														<div class="ltabs-item product-layout ">
															<div class="product-item-container">
																<div class="left-block">
																	<div class="product-image-container second_img ">
																		<img src="image/demo/shop/product/B10.jpg"  alt="Apple Cinema 30&quot;" class="img-responsive" />
																		<img src="image/demo/shop/product/B9.jpg"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
																	</div>
																	<!--Sale Label-->
																	<span class="label label-sale">Sale</span>
																	<!--full quick view block-->
																	<a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="quickview.html">  Quickview</a>
																	<!--end full quick view block-->
																</div>
																<div class="right-block">
																	<div class="caption">
																		<h4><a href="product.html">Comas samer rumas</a></h4>		
																		<div class="ratings">
																			<div class="rating-box">
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																				<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
																			</div>
																		</div>
																							
																		<div class="price">
																			<span class="price-new">$97.00</span> 
																		</div>
																	</div>
																	
																	  <div class="button-group">
																		<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i><span class="hidden-md">Add to Cart</span></button>
																		<button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																		<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																	  </div>
																</div><!-- right block -->
															</div>
														</div>
														<div class="ltabs-item product-layout">
															<div class="product-item-container">
																<div class="left-block">
																	<div class="product-image-container second_img ">
																		<img src="image/demo/shop/product/B5.jpg"  alt="Apple Cinema 30&quot;" class="img-responsive" />
																		<img src="image/demo/shop/product/B10.jpg"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
																	</div>
																	
																	<!--full quick view block-->
																	<a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="quickview.html">  Quickview</a>
																	<!--end full quick view block-->
																</div>
																<div class="right-block">
																	<div class="caption">
																		<h4><a href="product.html">Gumase sema dumae</a></h4>		
																		<div class="ratings">
																			<div class="rating-box">
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																				<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
																			</div>
																		</div>
																							
																		<div class="price">
																			<span class="price-new">$65.00</span> 
																		</div>
																	</div>
																	
																	  <div class="button-group">
																		<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-md">Add to Cart</span></button>
																		<button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																		<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																	  </div>
																</div><!-- right block -->
															</div>
														</div>
													</div>
													<div class="col-md-6 col-xs-12 ltabs-slider__gallery">
														<div class="ltabs-item product-layout product_1846281811484147376">
															<div class="product-item-container">
																<div class="left-block">
																	<div class="product-image-container  ">
																		<img src="image/demo/shop/product/home7/1_3_18.jpg"  alt="Apple Cinema 30&quot;" class="img-responsive" />
																	</div>
																	<!--Sale Label-->
																	<span class="label label-sale">Sale</span>
																	<!--full quick view block-->
																	<a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="quickview.html">  Quickview</a>
																	<!--end full quick view block-->
																</div>
																<div class="right-block">
																	<div class="caption">
																		<h4><a href="product.html">Comas samer rumas nazme</a></h4>		
																		<div class="ratings">
																			<div class="rating-box">
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																				<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
																			</div>
																		</div>
																							
																		<div class="price">
																			<span class="price-new">$97.00</span> 
																		</div>
																	</div>
																	
																	  <div class="button-group">
																		<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-md">Add to Cart</span></button>
																		<button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																		<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																	  </div>
																</div><!-- right block -->
																<div class="thumbs-product">
																	<div class="item-img thumb-active" data-src="image/demo/shop/product/home7/1_3_18.jpg"><img src="image/demo/shop/product/resize/1.jpg" alt="image"></div>
																	<div class="item-img" data-src="image/demo/shop/product/home7/2_2_25.jpg"><img src="image/demo/shop/product/resize/2.jpg" alt="image"></div>
																	<div class="item-img " data-src="image/demo/shop/product/home7/3_2_26.jpg"><img src="image/demo/shop/product/resize/3.jpg" alt="image"></div>
																	<div class="item-img" data-src="image/demo/shop/product/home7/4_3_25.jpg"><img src="image/demo/shop/product/resize/4.jpg" alt="image"></div>
																</div>
															</div>
														</div>
													</div>
													
													<div class="col-md-3 col-xs-12 product-col">
														<div class="ltabs-item product-layout ">
															<div class="product-item-container">
																<div class="left-block">
																	<div class="product-image-container second_img ">
																		<img src="image/demo/shop/product/w1.jpg"  alt="Apple Cinema 30&quot;" class="img-responsive" />
																		<img src="image/demo/shop/product/w10.jpg"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
																	</div>
																	
																	<!--full quick view block-->
																	<a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="quickview.html">  Quickview</a>
																	<!--end full quick view block-->
																</div>
																<div class="right-block">
																	<div class="caption">
																		<h4><a href="product.html">Toma kimas darem	</a></h4>		
																		<div class="ratings">
																			<div class="rating-box">
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																				<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
																			</div>
																		</div>
																							
																		<div class="price">
																			<span class="price-new">$97.00</span> 
																		</div>
																	</div>
																	
																	  <div class="button-group">
																		<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-md">Add to Cart</span></button>
																		<button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																		<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																	  </div>
																</div><!-- right block -->
															</div>
														</div>
														
														<div class="ltabs-item product-layout ">
															<div class="product-item-container">
																<div class="left-block">
																	<div class="product-image-container second_img ">
																		<img src="image/demo/shop/product/J9.jpg"  alt="Apple Cinema 30&quot;" class="img-responsive" />
																		<img src="image/demo/shop/product/J5.jpg"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
																	</div>
																	<!--Sale Label-->
																	<span class="label label-sale">Sale</span>
																	<!--full quick view block-->
																	<a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="quickview.html">  Quickview</a>
																	<!--end full quick view block-->
																</div>
																<div class="right-block">
																	<div class="caption">
																		<h4><a href="product.html">Vimas suma pola</a></h4>		
																		<div class="ratings">
																			<div class="rating-box">
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																				<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
																			</div>
																		</div>
																							
																		<div class="price">
																			<span class="price-new">$50.00</span> 
																			<span class="price-old">$62.00</span>		 
																		</div>
																	</div>
																	
																	  <div class="button-group">
																		<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i><span class="hidden-md">Add to Cart</span> </button>
																		<button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																		<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																	  </div>
																</div><!-- right block -->
															</div>
														</div>
													</div>
													
													
												</div>
											
											</div>
											<div class="item-wrap">
												<div class="row">
													<div class="col-md-3 col-xs-12 product-col">
														<div class="ltabs-item product-layout ">
															<div class="product-item-container">
																<div class="left-block">
																	<div class="product-image-container second_img ">
																		<img src="image/demo/shop/product/w1.jpg"  alt="Apple Cinema 30&quot;" class="img-responsive" />
																		<img src="image/demo/shop/product/w10.jpg"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
																	</div>
																	
																	<!--full quick view block-->
																	<a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="quickview.html">  Quickview</a>
																	<!--end full quick view block-->
																</div>
																<div class="right-block">
																	<div class="caption">
																		<h4><a href="product.html">Toma kimas darem	</a></h4>		
																		<div class="ratings">
																			<div class="rating-box">
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																				<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
																			</div>
																		</div>
																							
																		<div class="price">
																			<span class="price-new">$97.00</span> 
																		</div>
																	</div>
																	
																	  <div class="button-group">
																		<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-md">Add to Cart</span></button>
																		<button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																		<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																	  </div>
																</div><!-- right block -->
															</div>
														</div>
														
														<div class="ltabs-item product-layout ">
															<div class="product-item-container">
																<div class="left-block">
																	<div class="product-image-container second_img ">
																		<img src="image/demo/shop/product/J9.jpg"  alt="Apple Cinema 30&quot;" class="img-responsive" />
																		<img src="image/demo/shop/product/J5.jpg"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
																	</div>
																	<!--Sale Label-->
																	<span class="label label-sale">Sale</span>
																	<!--full quick view block-->
																	<a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="quickview.html">  Quickview</a>
																	<!--end full quick view block-->
																</div>
																<div class="right-block">
																	<div class="caption">
																		<h4><a href="product.html">Vimas suma pola</a></h4>		
																		<div class="ratings">
																			<div class="rating-box">
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																				<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
																			</div>
																		</div>
																							
																		<div class="price">
																			<span class="price-new">$50.00</span> 
																			<span class="price-old">$62.00</span>		 
																		</div>
																	</div>
																	
																	  <div class="button-group">
																		<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i><span class="hidden-md">Add to Cart</span> </button>
																		<button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																		<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																	  </div>
																</div><!-- right block -->
															</div>
														</div>
													</div>
													
													<div class="col-md-6 col-xs-12 ltabs-slider__gallery">
														<div class="ltabs-item product-layout product_1846281811484147376">
															<div class="product-item-container">
																<div class="left-block">
																	<div class="product-image-container  ">
																		<img src="image/demo/shop/product/home7/1_3_18.jpg"  alt="Apple Cinema 30&quot;" class="img-responsive" />
																	</div>
																	<!--Sale Label-->
																	<span class="label label-sale">Sale</span>
																	<!--full quick view block-->
																	<a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="quickview.html">  Quickview</a>
																	<!--end full quick view block-->
																</div>
																<div class="right-block">
																	<div class="caption">
																		<h4><a href="product.html">Comas samer rumas nazme</a></h4>		
																		<div class="ratings">
																			<div class="rating-box">
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																				<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
																			</div>
																		</div>
																							
																		<div class="price">
																			<span class="price-new">$97.00</span> 
																		</div>
																	</div>
																	
																	  <div class="button-group">
																		<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-md">Add to Cart</span></button>
																		<button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																		<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																	  </div>
																</div><!-- right block -->
																<div class="thumbs-product">
																	<div class="item-img thumb-active" data-src="image/demo/shop/product/home7/1_3_18.jpg"><img src="image/demo/shop/product/resize/1.jpg" alt="image"></div>
																	<div class="item-img" data-src="image/demo/shop/product/home7/2_2_25.jpg"><img src="image/demo/shop/product/resize/2.jpg" alt="image"></div>
																	<div class="item-img " data-src="image/demo/shop/product/home7/3_2_26.jpg"><img src="image/demo/shop/product/resize/3.jpg" alt="image"></div>
																	<div class="item-img" data-src="image/demo/shop/product/home7/4_3_25.jpg"><img src="image/demo/shop/product/resize/4.jpg" alt="image"></div>
																</div>
															</div>
														</div>
													</div>
													
													
													<div class="col-md-3 col-xs-12 product-col">
														<div class="ltabs-item product-layout ">
															<div class="product-item-container">
																<div class="left-block">
																	<div class="product-image-container second_img ">
																		<img src="image/demo/shop/product/B10.jpg"  alt="Apple Cinema 30&quot;" class="img-responsive" />
																		<img src="image/demo/shop/product/B9.jpg"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
																	</div>
																	<!--Sale Label-->
																	<span class="label label-sale">Sale</span>
																	<!--full quick view block-->
																	<a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="quickview.html">  Quickview</a>
																	<!--end full quick view block-->
																</div>
																<div class="right-block">
																	<div class="caption">
																		<h4><a href="product.html">Comas samer rumas</a></h4>		
																		<div class="ratings">
																			<div class="rating-box">
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																				<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
																			</div>
																		</div>
																							
																		<div class="price">
																			<span class="price-new">$97.00</span> 
																		</div>
																	</div>
																	
																	  <div class="button-group">
																		<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i><span class="hidden-md">Add to Cart</span></button>
																		<button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																		<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																	  </div>
																</div><!-- right block -->
															</div>
														</div>
														<div class="ltabs-item product-layout">
															<div class="product-item-container">
																<div class="left-block">
																	<div class="product-image-container second_img ">
																		<img src="image/demo/shop/product/B5.jpg"  alt="Apple Cinema 30&quot;" class="img-responsive" />
																		<img src="image/demo/shop/product/B10.jpg"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
																	</div>
																	
																	<!--full quick view block-->
																	<a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="quickview.html">  Quickview</a>
																	<!--end full quick view block-->
																</div>
																<div class="right-block">
																	<div class="caption">
																		<h4><a href="product.html">Gumase sema dumae</a></h4>		
																		<div class="ratings">
																			<div class="rating-box">
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																				<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
																			</div>
																		</div>
																							
																		<div class="price">
																			<span class="price-new">$65.00</span> 
																		</div>
																	</div>
																	
																	  <div class="button-group">
																		<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-md">Add to Cart</span></button>
																		<button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																		<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																	  </div>
																</div><!-- right block -->
															</div>
														</div>
													</div>
													
													
												</div>
											
											</div>	
										</div>
										
									</div>
										
									<div class="ltabs-items  items-category-72  products-list grid" data-total="11">
										<div class="ltabs-loading"></div>
									</div>
									<div class="ltabs-items items-category-73  products-list grid" data-total="11">
										<div class="ltabs-loading"></div>
									</div>
								
								</div>
								<!--End Items-->
								
								
							</div>
							
						</div>
					</div>
				</div>
			</div>
			
			<div id="content" class="clearfix">
				
			</div>
			
			
			
		</div>
		</div>
	</div>
	<!-- //Main Container -->
	
	<!-- Block Spotlight1  -->
	<section class="so-spotlight1">
		<div class="container">
			<div class="row">
				<div class="module extraslider-home5 titleLine col-xs-12 clearfix">
					<h3 class="modtitle">Hot Sale</h3>
					<div id="so_extraslider1--home7" >
						
						<!-- Begin extraslider-inner -->
						<div class="so-extraslider products-list grid "  data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column0="4" data-items_column1="4" data-items_column2="3"  data-items_column3="2" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="no" data-hoverpause="yes">
							<!--Begin Items-->
							<div class="ltabs-item product-layout">
								<div class="product-item-container">
									<div class="left-block">
										<div class="product-image-container second_img ">
											<img src="image/demo/shop/product/w1.jpg" alt="Apple Cinema 30&quot;" class="img-responsive">
											<img src="image/demo/shop/product/w10.jpg" alt="Apple Cinema 30&quot;" class="img_0 img-responsive">
										</div>
										<!--Sale Label-->
										<span class="label label-sale">Sale</span>
										<span class="label label-new">New</span>
										
										<!--full quick view block-->
										<a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="quickview.html">  Quickview</a>
										<!--end full quick view block-->
									</div>
									<div class="right-block">
										<div class="caption">
											<h4><a href="product.html">Qurem mazem numa </a></h4>		
											<div class="ratings">
												<div class="rating-box">
													<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
													<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
													<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
													<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
													<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
												</div>
											</div>
																
											<div class="price">
												<span class="price-new">$50.00</span> 
												<span class="price-old">$62.00</span>	
											</div>
										</div>
										
										  <div class="button-group">
											<button class="addToCart addToCart--notext" type="button"  onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="button-group__text">Add to Cart</span></button>
											<button class="wishlist" type="button" onclick="wishlist.add('42');"><i class="fa fa-heart"></i>  </button>
											<button class="compare" type="button"  onclick="compare.add('42');"><i class="fa fa-exchange"></i>  </button>
										  </div>
									</div><!-- right block -->
								</div>
							</div>
							
							<div class="ltabs-item product-layout">
								<div class="product-item-container">
									<div class="left-block">
										<div class="product-image-container second_img ">
											<img src="image/demo/shop/product/B5.jpg" alt="Apple Cinema 30&quot;" class="img-responsive">
											<img src="image/demo/shop/product/B10.jpg" alt="Apple Cinema 30&quot;" class="img_0 img-responsive">
										</div>
										<!--Sale Label-->
										<span class="label label-new">new</span>
										<!--full quick view block-->
										<a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="quickview.html">  Quickview</a>
										<!--end full quick view block-->
									</div>
									<div class="right-block">
										<div class="caption">
											<h4><a href="product.html">Suma fuma direm </a></h4>		
											<div class="ratings">
												<div class="rating-box">
													<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
													<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
													<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
													<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
													<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												</div>
											</div>
																
											<div class="price">
												<span class="price-new">$150.00</span> 
												 
											</div>
										</div>
										
										  <div class="button-group">
											<button class="addToCart addToCart--notext" type="button" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="button-group__text">Add to Cart</span></button>
											<button class="wishlist" onclick="wishlist.add('42');"><i class="fa fa-heart"></i>  </button>
											<button class="compare" type="button" onclick="compare.add('42');"><i class="fa fa-exchange"></i>  </button>
										  </div>
									</div><!-- right block -->
								</div>
							</div>
							<div class="ltabs-item product-layout">
								<div class="product-item-container">
									<div class="left-block">
										<div class="product-image-container second_img ">
											<img src="image/demo/shop/product/J9.jpg" alt="Apple Cinema 30&quot;" class="img-responsive">
											<img src="image/demo/shop/product/J5.jpg" alt="Apple Cinema 30&quot;" class="img_0 img-responsive">
										</div>
										<!--Sale Label-->
										<span class="label label-new">new</span>
										<!--full quick view block-->
										<a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="quickview.html">  Quickview</a>
										<!--end full quick view block-->
									</div>
									<div class="right-block">
										<div class="caption">
											<h4><a href="product.html">Pumasi dema nones </a></h4>		
											<div class="ratings">
												<div class="rating-box">
													<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
													<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
													<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
													<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
													<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
												</div>
											</div>
																
											<div class="price">
												<span class="price-new">$120.00</span> 
											</div>
										</div>
										
										  <div class="button-group">
											<button class="addToCart addToCart--notext" type="button" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="button-group__text">Add to Cart</span></button>
											<button class="wishlist" onclick="wishlist.add('42');"><i class="fa fa-heart"></i>  </button>
											<button class="compare" type="button" onclick="compare.add('42');"><i class="fa fa-exchange"></i> </button>
										  </div>
									</div><!-- right block -->
								</div>
							</div>
							
							<div class="ltabs-item product-layout">
								<div class="product-item-container">
									<div class="left-block">
										<div class="product-image-container ">
											<img src="image/demo/shop/product/m1.jpg" alt="Apple Cinema 30&quot;" class="img-responsive">
										</div>
										<!--Sale Label-->
										<span class="label label-sale">Sale</span>
										<!--full quick view block-->
										<a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="quickview.html">  Quickview</a>
										<!--end full quick view block-->
									</div>
									<div class="right-block">
										<div class="caption">
											<h4><a href="product.html">Taetem hasem razem  </a></h4>		
											<div class="ratings">
												<div class="rating-box">
													<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
													<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
													<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
													<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
													<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
												</div>
											</div>
																
											<div class="price">
												<span class="price-new">$120.00</span> 
												<span class="price-old">$162.00</span>		 
											</div>
										</div>
										
										  <div class="button-group">
											<button class="addToCart addToCart--notext" type="button" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="button-group__text" >Add to Cart</span></button>
											<button class="wishlist" onclick="wishlist.add('42');"><i class="fa fa-heart"></i>  </button>
											<button class="compare" type="button" data-toggle="tooltip"><i class="fa fa-exchange"></i> </button>
										  </div>
									</div><!-- right block -->
								</div>
							</div>
							<div class="ltabs-item product-layout">
								<div class="product-item-container">
									<div class="left-block">
										<div class="product-image-container second_img ">
											<img src="image/demo/shop/product/e11.jpg" alt="Apple Cinema 30&quot;" class="img-responsive">
											<img src="image/demo/shop/product/E3.jpg" alt="Apple Cinema 30&quot;" class="img_0 img-responsive">
										</div>
										<!--Sale Label-->
										<!--<span class="label label-sale">Sale</span>-->
										<!--full quick view block-->
										<a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="quickview.html">  Quickview</a>
										<!--end full quick view block-->
									</div>
									<div class="right-block">
										<div class="caption">
											<h4><a href="product.html">Trai Kuma pekaem  </a></h4>		
											<div class="ratings">
												<div class="rating-box">
													<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
													<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
													<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
													<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
													<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
												</div>
											</div>
											<div class="price">
												<span class="price-new">$110.00</span> 
											</div>
										</div>
										
										<div class="button-group">
											<button class="addToCart addToCart--notext" type="button" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="button-group__text"  >Add to Cart</span></button>
											<button class="wishlist" onclick="wishlist.add('42');"><i class="fa fa-heart"></i> </button>
											<button class="compare" type="button" ><i class="fa fa-exchange"></i> </button>
										</div>
									</div><!-- right block -->
								</div>
							</div>
								
							<!--End Items-->
							
							
						</div>
						<!--End extraslider-inner -->
					</div>
				</div>
				<div class="module col-xs-12 clearfix">
					<div class="modcontent clearfix">
						
						<div class="yt-content-slider slider-brand--home6"  data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="15" data-items_column0="7" data-items_column1="5" data-items_column2="4"  data-items_column3="3" data-items_column4="2" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="yes" data-hoverpause="yes">
							<div class="item">
								<a title="Brand" href="#"><img src="image/demo/brand/home6/brand-1.jpg" alt="Brand"></a>
							</div>
							<div class="item">
								<a title="Brand" href="#"><img src="image/demo/brand/home6/brand-2.jpg" alt="Brand"></a>
							</div>
							<div class="item">
								<a title="Brand" href="#"><img src="image/demo/brand/home6/brand-3.jpg" alt="Brand"></a>
							</div>
							<div class="item">
								<a title="Brand" href="#"><img src="image/demo/brand/home6/brand-4.jpg" alt="Brand"></a>
							</div>
							<div class="item">
								<a title="Brand" href="#"><img src="image/demo/brand/home6/brand-5.jpg" alt="Brand"></a>
							</div>
							<div class="item">
								<a title="Brand" href="#"><img src="image/demo/brand/home6/brand-6.jpg" alt="Brand"></a>
							</div>
							<div class="item">
								<a title="Brand" href="#"><img src="image/demo/brand/home6/brand-1.jpg" alt="Brand"></a>
							</div>
							<div class="item">
								<a title="Brand" href="#"><img src="image/demo/brand/home6/brand-2.jpg" alt="Brand"></a>
							</div>
							<div class="item">
								<a title="Brand" href="#"><img src="image/demo/brand/home6/brand-3.jpg" alt="Brand"></a>
							</div>
							<div class="item">
								<a title="Brand" href="#"><img src="image/demo/brand/home6/brand-4.jpg" alt="Brand"></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- //Block Spotlight1  -->
	
	<!-- Block Spotlight2  -->
	<section class="so-spotlight2">
		<div class="container">
			<div class="row">
					<div class="col-xs-12">
						<div class="module clearfix no-margin-bottom ">
							<div class="modcontent">
								<div class="slider-clientsay">
									<ul id="carousel-custom-dots" class="owl-dots eg-list-inline eg-list-inline-1"> 
										<li class="owl-dot"><img src="image/demo/clientsay/client-s2.jpg" alt="Client"></li> 
										<li class="owl-dot"><img src="image/demo/clientsay/client-s1.jpg" alt="Client"></li>
										<li class="owl-dot"><img src="image/demo/clientsay/client-s3.jpg" alt="Client"></li>
									</ul>
									<div class="slider-clientsay__owl">
										<div class="slider-clientsay__item">
											<div class="slider-clientsay__dec">
												First time shopping here. I love the shop!<br>
												Its really bright and welcoming. The staff are friendly which is always nice. <br>
												The clothes are stylish and affordable. <br>
												Definitely will be shopping here again. My new favorite shop 
											</div>
											<div class="slider-clientsay__info">
												<h4>Micheal Doe</h4>
												<p>BIRMINGHAM, UNITED KINGDOM</p>
											</div>
										</div>
										
										<div class="slider-clientsay__item">
											<div class="slider-clientsay__dec">
												First time shopping here. I love the shop!<br>
												Its really bright and welcoming. The staff are friendly which is always nice. <br>
												The clothes are stylish and affordable. <br>
												Definitely will be shopping here again. My new favorite shop 
											</div>
											<div class="slider-clientsay__info">
												<h4>John Doe</h4>
												<p>BIRMINGHAM, UNITED KINGDOM</p>
											</div>
										</div>
										
										<div class="slider-clientsay__item">
											<div class="slider-clientsay__dec">
												First time shopping here. I love the shop!<br>
												Its really bright and welcoming. The staff are friendly which is always nice. <br>
												The clothes are stylish and affordable. <br>
												Definitely will be shopping here again. My new favorite shop 
											</div>
											<div class="slider-clientsay__info">
												<h4>Jadis Ngan</h4>
												<p>BIRMINGHAM, UNITED KINGDOM</p>
											</div>
										</div>
									</div>
								</div>
								
								
							</div>
							
						</div>
					</div>
					
					
			</div>
		</div>
	</section>
	<!-- //Block Spotlight2  -->
	
<script type="text/javascript"><!--
	var $typeheader = 'header-home7';
	//-->
</script>

	<!-- Footer Container -->
	<footer class="footer-container type_footer4">
		
		<!-- Footer Top Container -->
		<section class="footer-top">
			<div class="container content">
				<div class="row">
					<div class="col-lg-8 col-md-7 col-sm-12 col-xs-12">
						<div class="module clearfix modLine subscribe-home">
							<h3 class="modtitle">Sign up for newsletter	</h3>
							<div class="modcontent align-center">
								<form class="form subscribe" novalidate="novalidate" action="http://magento2.magentech.com/themes/sm_market/newsletter/subscriber/new/" method="post" id="newsletter-validate-detail">
									<div class="input-group">
										<input name="email" type="email" class="form-control" onfocus="if(this.value=='Your email address') this.value='';" onblur="if(this.value=='') this.value='Your email address';" value="Your email address" data-validate="{required:true, 'validate-email':true}">
										<span class="input-group-btn">
											<button type="submit" class="button-search btn btn-primary" name="submit_search">Subscribe</button>
										</span>
									</div>
									
								</form>
								
								
							</div>
						</div>
					</div>
					
					<div class="col-lg-4 col-md-5 col-sm-12 col-xs-12">
						<div class="module clearfix modLine footer--social">
							<h3 class="modtitle">Follow Us</h3>
							<div class="modcontent">
								<div class="icons-social">
										
										<div class="list-inline">
											<a title="Facebook" href="http://www.facebook.com/MagenTech" target="_blank"> 
												<span class="fa fa-facebook icon-circled icon-color"></span> 
											</a>
										
											<a title="Twitter" href="https://twitter.com/magentech" target="_blank"> 
												<span class="fa fa-twitter icon-circled icon-color"></span> 
											</a>
									
											<a title="Google+" href="https://plus.google.com/u/0/+Smartaddons" target="_blank"> 
												<span class="fa fa-google-plus icon-circled icon-color"></span>
											</a>
										
											
											<a title="Pinterest" href="#" target="_blank"> 
												<span class="fa fa-instagram icon-circled icon-color"></span>
											</a>
											
											
										</div>
								</div>
								
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</section>
		<!-- /Footer Top Container -->
		
		<section class="footer-center">
			<div class=" container">
				<div class="row">
					<div class="col-sm-6 col-md-3 box-information">
						<div class="module clearfix">
							<h3 class="modtitle">Information</h3>
							<div class="modcontent">
								<ul class="menu">
									<li><a href="about-us.html">About Us</a></li>
									<li><a href="faq.html">FAQ</a></li>
									<li><a href="order-history.html">Order history</a></li>
									<li><a href="order-information.html">Order information</a></li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-md-3 box-service">
						<div class="module clearfix">
							<h3 class="modtitle">Customer Service</h3>
							<div class="modcontent">
								<ul class="menu">
									<li><a href="contact.html">Contact Us</a></li>
									<li><a href="return.html">Returns</a></li>
									<li><a href="sitemap.html">Site Map</a></li>
									<li><a href="my-account.html">My Account</a></li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-md-3 box-account">
						<div class="module clearfix">
							<h3 class="modtitle">My Account</h3>
							<div class="modcontent">
								<ul class="menu">
									<li><a href="#">Brands</a></li>
									<li><a href="gift-voucher.html">Gift Vouchers</a></li>
									<li><a href="#">Affiliates</a></li>
									<li><a href="#">Specials</a></li>
									<li><a href="#" target="_blank">Our Blog</a></li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-md-3 collapsed-block ">
						<div class="module clearfix">
							<h3 class="modtitle">Contact Us	</h3>
							<div class="modcontent">
								<ul class="contact-address">
									<li><span class="fa fa-map-marker"></span> My Company, 42 avenue des Champs Elysées 75000 Paris France</li>
									<li><span class="fa fa-envelope-o"></span> Email: <a href="#"> sales@yourcompany.com</a></li>
									<li><span class="fa fa-phone">&nbsp;</span> Phone 1: 0123456789 <br>Phone 2: (123) 4567890</li>
								</ul>
							</div>
						</div>
					</div>
					
					<hr class="footer-lines no-margin-bottom">
				</div>
			</div>	
		</section>
		
		<!-- Footer Bottom Container -->
		<div class="footer-bottom-block ">
			<div class=" container">
				<div class="row">
					<div class="col-sm-5 copyright-text"> © 2016 Market. All Rights Reserved. </div>
					<div class="col-sm-7">
						<div class="block-payment text-right"><img src="image/demo/content/payment.png" alt="payment" title="payment" ></div>
					</div>
					<!--Back To Top-->
					<div class="back-to-top"><i class="fa fa-angle-up"></i><span> Top </span></div>

				</div>
			</div>
		</div>
		<!-- /Footer Bottom Container -->
		
		
	</footer>
	<!-- //end Footer Container -->

    </div>
	<!-- Social widgets -->
	<section class="social-widgets visible-lg">
	<ul class="items">
		<li class="item item-01 facebook"> <a href="php/facebook.php?account=envato" class="tab-icon"><span class="fa fa-facebook"></span></a>
			<div class="tab-content">
				<div class="title">
					<h5>FACEBOOK</h5>
				</div>
				<div class="loading">
					<img src="image/theme/lazy-loader.gif" class="ajaxloader" alt="loader">
				</div>
			</div>
		</li>
		<li class="item item-02 twitter"> <a href="php/twitter.php?account_twitter=envato" class="tab-icon"><span class="fa fa-twitter"></span></a>
			<div class="tab-content">
				<div class="title">
					<h5>TWITTER FEEDS</h5> 
				</div>
				<div class="loading">
					<img src="image/theme/lazy-loader.gif" class="ajaxloader" alt="loader">
				</div>
			</div>
		</li>
		<li class="item item-03 youtube"> <a href="php/youtubevideo.php?account_video=PY2RLgTmiZY" class="tab-icon"><span class="fa fa-youtube"></span></a>
			<div class="tab-content">
				<div class="title">
					<h5>YouTube</h5>
				</div>
				<div class="loading"> <img src="image/theme/lazy-loader.gif" class="ajaxloader" alt="loader"></div>
			</div>
		</li>
	</ul>
</section>	<!-- End Social widgets -->
	
	


<!-- Begin Color Scheme
============================================ -->	
<!-- Cpanel Block -->
<div id="sp-cpanel_btn" class="isDown visible-lg">
	<i class="fa fa-cog"></i>
</div>		
<div id="sp-cpanel" class="sp-delay">
	<h2 class="sp-cpanel-title"> Demo Options <span class="sp-cpanel-close"> <i class="fa fa-times"> </i></span></h2>
	<div id="sp-cpanel_settings">
		<form action="" method="post" class="myform" >

		<div class="panel-group">
			<label>Color Scheme</label>
			
			<div class="group-schemes">
				<input name="cplthemesColors" class="minicolors minicolors-input form-control" type="text" value="#f4A137" size="7">
				
			 </div>
		</div>
		
		<div class="panel-group ">
			<label>Header style</label>
			<div class="group-boxed">
				<select id="change_header_type" name="cpheaderstype" class="form-control" onchange="headerTypeChange(this.value);">
					<option value="header-home1" >Header 1</option>
					<option value="header-home2" >Header 2</option>
					<option value="header-home3" >Header 3</option>
					<option value="header-home4" >Header 4</option>
					<option value="header-home5" >Header 5</option>
					<option value="header-home6" >Header 6</option>
					<option value="header-home8" >Header 8</option>
				</select>
			</div>
		</div>
		
		
		<div class="panel-group ">
			<label>Layout Box</label>
			<div class="group-boxed">
				<select id="cp-layoutbox" name="cplayoutbox" class="form-control" onchange="changeLayoutBox(this.value);">
					<option value="full">Wide</option>
					<option value="boxed">Boxed</option>
					<option value="iframed">Iframed</option>
					<option value="rounded">Rounded</option>
				</select>
			</div>
		</div>
		
        <div class="panel-group">
			<label>Body Image</label>
			
			<div class="group-pattern">
								<div data-pattern="28"  class="img-pattern"><img src="image/theme/patterns/28.png" alt="pattern 28"></div>
								<div data-pattern="29"  class="img-pattern"><img src="image/theme/patterns/29.png" alt="pattern 29"></div>
								<div data-pattern="30"  class="img-pattern"><img src="image/theme/patterns/30.png" alt="pattern 30"></div>
								<div data-pattern="31"  class="img-pattern"><img src="image/theme/patterns/31.png" alt="pattern 31"></div>
								<div data-pattern="32"  class="img-pattern"><img src="image/theme/patterns/32.png" alt="pattern 32"></div>
								<div data-pattern="33"  class="img-pattern"><img src="image/theme/patterns/33.png" alt="pattern 33"></div>
								<div data-pattern="34"  class="img-pattern"><img src="image/theme/patterns/34.png" alt="pattern 34"></div>
								<div data-pattern="35"  class="img-pattern"><img src="image/theme/patterns/35.png" alt="pattern 35"></div>
								<div data-pattern="36"  class="img-pattern"><img src="image/theme/patterns/36.png" alt="pattern 36"></div>
								<div data-pattern="37"  class="img-pattern"><img src="image/theme/patterns/37.png" alt="pattern 37"></div>
								<div data-pattern="38"  class="img-pattern"><img src="image/theme/patterns/38.png" alt="pattern 38"></div>
								<div data-pattern="39"  class="img-pattern"><img src="image/theme/patterns/39.png" alt="pattern 39"></div>
								<div data-pattern="40"  class="img-pattern"><img src="image/theme/patterns/40.png" alt="pattern 40"></div>
								<div data-pattern="41"  class="img-pattern"><img src="image/theme/patterns/41.png" alt="pattern 41"></div>
								<div data-pattern="42"  class="img-pattern"><img src="image/theme/patterns/42.png" alt="pattern 42"></div>
								<div data-pattern="43"  class="img-pattern"><img src="image/theme/patterns/43.png" alt="pattern 43"></div>
								<div data-pattern="44"  class="img-pattern"><img src="image/theme/patterns/44.png" alt="pattern 44"></div>
								<div data-pattern="45"  class="img-pattern"><img src="image/theme/patterns/45.png" alt="pattern 45"></div>
							</div>
			<p class="label-sm">Background only applies for Boxed,Framed, Rounded Layout</p>
			<button type="button" style="width:100%" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-file-text"></i> Get Skin CSS</button>

		</div>
		
		<div class="reset-group">
			<input type="submit" name="submit-reset" class="btn btn-success " value="Reset" onClick="ResetAll();">
			<input type="submit" name="submitbtn" class="btn" value="Apply">
		</div>
		</form>
	</div>

</div>


<?php 
require_once ('scssphp/scss.inc.php');
use Leafo\ScssPhp\Compiler;
use Leafo\ScssPhp\Server;
 $themeCssName='';	

 if (isset($_COOKIE['customColorScheme']) ) {
	$ColorScheme = $_COOKIE['customColorScheme'];
	
	$themeCssName = 'theme-' . str_replace("#", "", $ColorScheme) . '.css';
	if(isset($_POST['submitbtn'])){
		$themeColor = strtolower($ColorScheme);
		
		$scss = new Compiler();
		$scss->setFormatter('Leafo\ScssPhp\Formatter\Nested');
		$scss->addImportPath('sass');
		$scss->setVariables(array(
			'$linkColor' => $themeColor,
			'$dir' => 'ltr',
		));
		
		$string_css 	= $scss->compile('@import "home7.scss"');
		file_put_contents('css/'.$themeCssName, $string_css);
	}
}

if(isset($_POST['submit-reset'])){
	clear_css_cache('css');
	unset($_POST);
}

function clear_css_cache($type){
	$files = glob('css/theme-*.'.$type);
	if ($files) {
	  foreach ($files as $file) {
		if (file_exists($file)) unlink($file);
		}
	}
}
?>
<link rel='stylesheet' property='stylesheet'  href='css/themecss/cpanel.css' type='text/css' media='all' />
<?php if(isset($ColorScheme)){?>
<link rel='stylesheet' property='stylesheet'  href='css/<?php echo $themeCssName?>' type='text/css' media='all' />
<?php }?>

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
		<div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button> <h4 class="modal-title" id="myLargeModalLabel">Skin CSS</h4> </div>
		<div class="modal-body"> 
			<textarea id="getCSSTextarea" class="get-css" readonly=""><?php $fileCssName = !empty($themeCssName) ?  $themeCssName : 'home7.css'; echo '/********************************************
' ;
echo '*	 Color Scheme: '.$fileCssName;
echo '
********************************************/
' ;
				echo file_get_contents('css/'.$fileCssName);
				?>
			</textarea>
		</div> 
		
			
    </div>
  </div>
</div>
<!-- End Color Scheme
============================================ -->

<!-- Include Libs & Plugins
============================================ -->
<!-- Placed at the end of the document so the pages load faster -->
<script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/owl-carousel/owl.carousel.js"></script>
<script type="text/javascript" src="js/themejs/libs.js"></script>
<script type="text/javascript" src="js/unveil/jquery.unveil.js"></script>
<script type="text/javascript" src="js/countdown/jquery.countdown.min.js"></script>
<script type="text/javascript" src="js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js"></script>
<script type="text/javascript" src="js/datetimepicker/moment.js"></script>
<script type="text/javascript" src="js/datetimepicker/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript" src="js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/modernizr/modernizr-2.6.2.min.js"></script>


<!-- Theme files
============================================ -->
<script type="text/javascript" src="js/themejs/application.js"></script>
<script type="text/javascript" src="js/themejs/homepage.js"></script>
<script type="text/javascript" src="js/themejs/so_megamenu.js"></script>
<script type="text/javascript" src="js/themejs/addtocart.js"></script>	
<script type="text/javascript" src="js/minicolors/jquery.miniColors.min.js"></script>
<script type="text/javascript" src="js/themejs/cpanel.js"></script>

<!--<script type="text/javascript" src="js/themejs/toppanel.js"></script>-->

</body>
</html>