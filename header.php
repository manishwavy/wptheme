<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
		
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
		<link  rel="stylesheet" type="text/css" href="css/animation.css">		

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri()?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri()?>/css/owl.theme.default.min.css">

		<!-- Font Awesome -->
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri()?>/css/all.min.css">

		<!-- CSS -->
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri()?>/css/style.css">    

		<!-- Responsive -->
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri()?>/css/responsive.css">

    <?php wp_head();?>
	
    <title> <?php wp_title('');?> </title>
  </head> 
  <body <?php body_class(); ?>>
    
    <!-- =======------- Header Start -------======= -->
  	<header>
  		<div class="header-top py-3 px-5">
  			<div class="container-fluid">
  				<div class="row align-items-center">
  					<div class="col-md-6">
  						<div class="header-contact">
  							<a href="tel:(239) 244-5871"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/phone.png" class="pr-md-3">(239) 244-5871</a>
  							<a href="mailto:edgardo@teambalentine.com">edgardo@teambalentine.com</a>
  						</div>
  					</div>
  					<div class="col-md-6 d-flex justify-content-end">
  						<div class="header-social d-flex align-items-center">
  							<a href="https://www.facebook.com/balentinehomeloans/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/fb.png" alt="fb"></a>
  							<a href="https://www.youtube.com/channel/UCaI-NmsdpgKkiY0iAc6AzIg" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/youtube-icon.png" alt="youtube"></a>
  							<a href="https://www.linkedin.com/in/edgardo-balentine-10744ba1" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/linkedin-icon.png" alt="linkedin"></a>
							<a href="https://www.instagram.com/edgardobalentine/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/insta-round-icon.png" alt="insta"></a>
							<a href="https://www.zillow.com/lender-profile/ebalentine/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/zillow-icon.png" alt="zillow"></a>
  						</div>
  						<div class="header-btn">
  							<a href="https://myhome.neohomeloans.com/homehub/signup/Edgardo@TeamBalentine.com" target="_blank" class="btn btn-primary" id="apply-btn">APPLY NOW</a>
  							<a href="https://myhome.neohomeloans.com/homehub/signup/Edgardo@TeamBalentine.com" target="_blank" class="btn btn-primary" id="quote-btn">FREE QUOTE</a>
  						</div>
  					</div>
  				</div>
  			</div>
  		</div>
  		<div class="main-header py-3 px-sm-5 px-3">
  			<div class="container-fluid">
  				<div class="row">
  					<div class="col-2">
  						<div class="header-logo">
  							<a href="<?php echo site_url();?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png"></a>
  						</div>
  					</div>
  					<div class="col-10">
  						<nav class="navbar navbar-expand-lg">
                <div class="container-fluid">                                    
                  <div class="navbar-collapse justify-content-end" id="navbarNav">
                    <?php wp_nav_menu( array( 'theme_location' => 'max_mega_menu_1' ) ); ?>
                    <!-- <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Purchase</a>
                      </li>                      
                      <li class="nav-item">
                        <a class="nav-link" href="#">Refinance</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Client Experience</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Art of Homeownership</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Blog</a>
                      </li>
                    </ul> -->
                  </div>
                </div>
              </nav>
  					</div>
  				</div>
  			</div>
  		</div>
  	</header>
    <!-- =======------- Header End -------======= -->