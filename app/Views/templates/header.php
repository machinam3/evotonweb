<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>EVOTON - <?= $title; ?></title>

		<!-- fonts -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7COswald:300,400,500,600,700" rel="stylesheet" type="text/css">
		
		<!-- styles -->	
        <link href="<?php echo base_url('asset/css/plugins.css'); ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('asset/css/style.css'); ?>" rel="stylesheet" type="text/css">
	</head>
	<body class="loader">
		<!-- loading start -->
		<div class="loading">
		    <img class="logo-loading" src="<?php echo base_url('asset/images/logo/logo loader evoton.png'); ?>" alt="logo">
	    </div><!-- loading end -->
	    
		<!-- pointer start -->
		<div class="pointer" id="pointer">
			<i class="fas fa-long-arrow-alt-right"></i>
			<i class="fas fa-search"></i>
			<i class="fas fa-link"></i>
		</div><!-- pointer end -->
		
		<!-- to-top-btn start -->
		<a class="to-top-btn pointer-small" href="#up">
			  <span class="to-top-arrow"></span>		    
		</a><!-- to-top-btn end -->
	    
	    <!-- header start -->
	    <header class="fixed-header">
		    <!-- header-flex-box start -->
			<div class="header-flex-box">
			    <!-- logo start -->
				<a href="<?php echo site_url('Home'); ?>" class="logo pointer-large animsition-link">
					<div class="logo-img-box">
				        <img class="logo-white" src="<?php echo base_url('asset/images/logo/logo white evoton.png'); ?>" alt="logo">
				        <img class="logo-black" src="<?php echo base_url('asset/images/logo/logo black evoton.png'); ?>" alt="logo">
			        </div>
		        </a><!-- logo end -->
		        
				<!-- menu-open start -->	
				<div class="menu-open pointer-large">
					<span class="hamburger"></span>
				</div><!-- menu-open end -->
		    </div><!-- header-flex-box end -->
		</header><!-- header end -->
		
		<!-- nav-container start -->	
		<nav class="nav-container dark-bg-1">
			<!-- nav-logo start -->
			<div class="nav-logo">
				<img src="<?php echo base_url('asset/images/logo/logo white evoton.png'); ?>" alt="logo">
			</div><!-- nav-logo end -->
			
			<!-- menu-close -->
			<div class="menu-close pointer-large"></div>

			<!-- dropdown-close-box start -->
			<div class="dropdown-close-box">
				<div class="dropdown-close pointer-large">
					<span></span>
				</div>
			</div><!-- dropdown-close-box end -->

			<!-- nav-menu start -->
			<ul class="nav-menu dark-bg-1">
				<!-- nav-box start -->
				<li class="nav-box nav-bg-change active">
					<a href="<?php echo site_url('Home'); ?>" class="animsition-link pointer-large nav-link">
						<span class="nav-btn active" data-text="Home">Home</span>
					</a>					
					<div class="nav-bg" style="background-image: url(<?php echo base_url('asset/images/backgrounds/georgie-cobbs-muOHbrFGEQY-unsplash.jpg'); ?>);"></div>
				</li><!-- nav-box end -->
				<!-- nav-box start -->
				<li class="nav-box nav-bg-change">
					<a href="<?php echo site_url('Home/about'); ?>" class="animsition-link pointer-large nav-link">
						<span class="nav-btn" data-text="About">About</span>
					</a>
					<div class="nav-bg" style="background-image: url(<?php echo base_url('asset/images/backgrounds/jakob-owens-HuNenPCNG84-unsplash.jpg'); ?>);"></div>
				</li><!-- nav-box end -->
				<!-- nav-box start -->
				<li class="nav-box nav-bg-change">
					<a href="<?php echo site_url('Home/services'); ?>" class="animsition-link pointer-large nav-link">
						<span class="nav-btn" data-text="Services">Services</span>
					</a>
					<div class="nav-bg" style="background-image: url(<?php echo base_url('asset/images/backgrounds/nikita-kachanovsky-g-YiX8ynmnY-unsplash.jpg'); ?>);"></div>
				</li><!-- nav-box end -->
				<!-- nav-box start -->
				<li class="nav-box nav-bg-change">
					<a href="<?php echo site_url('Home/portfolio'); ?>" class="animsition-link pointer-large nav-link">
						<span class="nav-btn" data-text="Portfolio">Portfolio</span>
					</a>
					<div class="nav-bg" style="background-image: url(<?php echo base_url('asset/images/backgrounds/fabian-grohs-U0tBTn8UR8I-unsplash.jpg'); ?>);"></div>
				</li><!-- nav-box end -->
				<!-- nav-box start -->
				<li class="nav-box nav-bg-change">
					<a href="<?php echo site_url('Home/blog'); ?>" class="animsition-link pointer-large nav-link">
						<span class="nav-btn" data-text="Blog">Blog</span>
					</a>
					<div class="nav-bg" style="background-image: url(<?php echo base_url('asset/images/backgrounds/beautiful-black-close-up-1689731.jpg'); ?>);"></div>
				</li><!-- nav-box end -->
				<!-- nav-box start -->
				<li class="nav-box nav-bg-change">
					<a href="<?php echo site_url('Home/contact'); ?>" class="animsition-link pointer-large nav-link">
						<span class="nav-btn" data-text="Contact">Contact</span>
					</a>
					<div class="nav-bg" style="background-image: url(<?php echo base_url('asset/images/backgrounds/oscar-nord-MuJHwDHbXUk-unsplash.jpg'); ?>);"></div>
				</li><!-- nav-box end -->
			</ul><!-- nav-menu end -->
		</nav><!-- nav-container end -->
	    