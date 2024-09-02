<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <!-- Meta Tags -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="keywords" content="Site keywords here">
		<meta name="description" content="">
		<meta name='copyright' content=''>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Title -->
        <title>Mediplus - Free Medical and Doctor Directory HTML Template.</title>
		
		<!-- Favicon -->
        <link rel="icon" href="<?php echo get_parent_theme_file_uri( 'assets/img/favicon.png' );?>">
		
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?php echo get_parent_theme_file_uri( 'assets/css/bootstrap.min.css' );?>">
		<!-- Nice Select CSS -->
		<link rel="stylesheet" href="<?php echo get_parent_theme_file_uri( 'assets/css/nice-select.css' );?>">
		<!-- Font Awesome CSS -->
        <link rel="stylesheet" href="<?php echo get_parent_theme_file_uri( 'assets/css/font-awesome.min.css' );?>">
		<!-- icofont CSS -->
        <link rel="stylesheet" href="<?php echo get_parent_theme_file_uri( 'assets/css/icofont.css' );?>">
		<!-- Slicknav -->
		<link rel="stylesheet" href="<?php echo get_parent_theme_file_uri( 'assets/css/slicknav.min.css' );?>">
		<!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="<?php echo get_parent_theme_file_uri( 'assets/css/owl-carousel.css' );?>">
		<!-- Datepicker CSS -->
		<link rel="stylesheet" href="<?php echo get_parent_theme_file_uri( 'assets/css/datepicker.css' );?>">
		<!-- Animate CSS -->
        <link rel="stylesheet" href="<?php echo get_parent_theme_file_uri( 'assets/css/animate.min.css' );?>">
		<!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="<?php echo get_parent_theme_file_uri( 'assets/css/magnific-popup.css' );?>">
		
		<!-- Medipro CSS -->
        <link rel="stylesheet" href="<?php echo get_parent_theme_file_uri( 'assets/css/normalize.css' );?>">
        <link rel="stylesheet" href="<?php echo get_parent_theme_file_uri( 'assets/css/style.css' );?>">
        <link rel="stylesheet" href="<?php echo get_parent_theme_file_uri( 'assets/css/responsive.css' );?>">
		
    </head>
    <body>
	
		<!-- Preloader -->
    
		
		<!-- Get Pro Button -->
		<ul class="pro-features">
			<a class="get-pro" href="#">Get Pro</a>
			<li class="big-title">Pro Version Available on Themeforest</li>
			<li class="title">Pro Version Features</li>
			<li>2+ premade home pages</li>
			<li>20+ html pages</li>
			<li>Color Plate With 12+ Colors</li>
			<li>Sticky Header / Sticky Filters</li>
			<li>Working Contact Form With Google Map</li>
			<div class="button">
				<a href="http://preview.themeforest.net/item/mediplus-medical-and-doctor-html-template/full_screen_preview/26665910?_ga=2.145092285.888558928.1591971968-344530658.1588061879" target="_blank" class="btn">Pro Version Demo</a>
				<a href="https://themeforest.net/item/mediplus-medical-and-doctor-html-template/26665910" target="_blank" class="btn">Buy Pro Version</a>
			</div>
		</ul>
	
		<!-- Header Area -->
		<header class="header" >
			<!-- Topbar -->
			<div class="topbar">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-5 col-12">
							<!-- Contact -->
							
							<!-- End Contact -->
								<!-- <ul class="top-link">
								<li><a href="#">About</a></li>
								<li><a href="#">Doctors</a></li>
								<li><a href="#">Contact</a></li>
								<li><a href="#">FAQ</a></li>
							</ul> -->
							<?php
							
							if(has_nav_menu('topmenu')){
								wp_nav_menu(
									array(
									'theme_location'=>'topmenu',
									'menu_class'=>'top-link',
									),
								);
							}
							?>
						</div>
						<div class="col-lg-6 col-md-7 col-12">
							<!-- Top Contact -->
							<ul class="top-contact">
								<li><i class="fa fa-phone"></i>	
								<?php 
								$all_fields = get_option('all_fields');
								if ($all_fields && !empty($all_fields['cell_number'])) {
									echo $all_fields['cell_number'];
								} else {
									echo '013464646';
								}
								?>
								</a></li>
								<li><i class="fa fa-envelope"></i>	
								<?php 
								$all_fields = get_option('all_fields');
								if ($all_fields && !empty($all_fields['cell_number'])) {
									echo $all_fields['enter_email'];
								} else {
									echo 'gmail@gmail.com';
								}
								?>
							</a></li>
							</ul>
							<!-- End Top Contact -->
						</div>
					</div>
				</div>
			</div>
			<!-- End Topbar -->
			<!-- Header Inner -->
			<div class="header-inner">
				<div class="container">
					<div class="inner">
						<div class="row">
							<div class="col-lg-3 col-md-3 col-12">
								<!-- Start Logo -->
								<div class="logo">
									<a href="index.html"><img src="<?php echo $all_fields['upload_logo'];?>" alt="#"></a>
								</div>
								<!-- End Logo -->
								<!-- Mobile Nav -->
								<div class="mobile-nav"></div>
								<!-- End Mobile Nav -->
							</div>
							<div class="col-lg-7 col-md-9 col-12">
								<!-- Main Menu -->
								<div class="main-menu">
									<nav class="navigation">
										<!-- <ul class="nav menu">
											<li class="active"><a href="#">Home <i class="icofont-rounded-down"></i></a>
												<ul class="dropdown">
													<li><a href="index.html">Home Page 1</a></li>
												</ul>
											</li>
											<li><a href="#">Doctos </a></li>
											<li><a href="#">Services </a></li>
											<li><a href="#">Pages <i class="icofont-rounded-down"></i></a>
												<ul class="dropdown">
													<li><a href="404.html">404 Error</a></li>
												</ul>
											</li>
											<li><a href="#">Blogs <i class="icofont-rounded-down"></i></a>
												<ul class="dropdown">
													<li><a href="blog-single.html">Blog Details</a></li>
												</ul>
											</li>
											<li><a href="contact.html">Contact Us</a></li>
										</ul> -->

										<?php
										if(has_nav_menu('primary')){
											wp_nav_menu(
												array(
												'theme_location'=>'primary',
												'menu_class'=>'nav menu',
												),
											);
										}
										?>
									</nav>
								</div>
								<!--/ End Main Menu -->
							</div>
							<div class="col-lg-2 col-12">
								<div class="get-quote">
								<a href="<?php echo $all_fields['booking_appoint_url'];?>" class="btn">Book Appointment</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Header Inner -->
		</header>
		<!-- End Header Area -->
		
		<!-- Slider Area -->
		<section class="slider">
			<div class="hero-slider">


			<?php 
			$header_slider=array(
				'post_type'=>'header_slider',
			);
			$the_header_slider=new WP_Query($header_slider);
			if($the_header_slider->have_posts('')):
				while($the_header_slider->have_posts( )):$the_header_slider->the_post( );
				$mybookinglink=get_post_meta(get_the_id(),'bookinglink',true);
				$mycontactlik=get_post_meta(get_the_id(),'contactlink',true);
				?>
				<!-- Start Single Slider -->
				<div class="single-slider" style="background-image:url('<?php echo get_the_post_thumbnail_url(); ?>')">
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text">
								
									<h1><?php the_title();?></h1>
									<p><?php the_excerpt();?></p>
									<div class="button">
										<a href="<?php echo $mybookinglink;?>" class="btn">Get Appointment</a>
										<a href="<?php echo $mycontactlik;?>" class="btn primary">Learn More</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End Single Slider -->
				<?php
			endwhile;
			endif;
			?>
			
			
			</div>
		</section>
		<!--/ End Slider Area -->
		
		<!-- Start Schedule Area -->
		<section class="schedule">
			<div class="container">
				<div class="schedule-inner">
					<div class="row">
						<div class="col-lg-4 col-md-6 col-12 ">
							<!-- single-schedule -->
							<div class="single-schedule first">
								<div class="inner">
									<div class="icon">
										<i class="fa fa-ambulance"></i>
									</div>
									<div class="single-content">
										<span>
											<?php 
											$all_fields = get_option('all_fields');

											if (isset($all_fields['pheading']) && !empty($all_fields['pheading'])) {
												echo $all_fields['pheading'];
											} else {
												echo 'lorem text';
											}
											?>
										</span>
										<h4>
										<?php 
											if (isset($all_fields['titleheading']) && !empty($all_fields['titleheading'])) {
												echo $all_fields['titleheading'];
											} else {
												echo 'lorem text';
											}
											
											
											?>
										</h4>
										<p>
											<?php 
											if (isset($all_fields['Description_des']) && !empty($all_fields['Description_des'])) {
												echo $all_fields['Description_des'];
											} else {
												echo 'lorem text';
											}
										
											
											?>
										</p>
										<a href="<?php 
												if(isset($all_fields['learnmorelink3']) && !empty($all_fields['learnmorelink3'])){
													echo $all_fields['learnmorelink3'];
												}else{
													echo 'please enter  link ';
												}
											
											?>">
										LEARN MORE
										<i class="fa fa-long-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-12">
							<!-- single-schedule -->
							<div class="single-schedule middle">
								<div class="inner">
									<div class="icon">
										<i class="icofont-prescription"></i>
									</div>
									<div class="single-content">
										<span>
											<?php 
											if(isset($all_fields['pheading2']) && !empty($all_fields['pheading2'])){
												echo $all_fields['pheading2'];
											}else{
												echo 'please enter heading';
											}
											
											?>
										</span>
										<h4>
											<?php 
											if(isset($all_fields['titleheading2']) && !empty($all_fields['titleheading2'])){
												echo $all_fields['titleheading2'];
											}else{
												echo 'please enter Main heading';
											}
											
											
											?>
										</h4>
										<p>
											<?php 
												if(isset($all_fields['Description_des2']) && !empty($all_fields['Description_des2'])){
													echo $all_fields['Description_des2'];
												}else{
													echo 'please enter Description';
												}
											
											?>
										</p>
										<a href="<?php 
												if(isset($all_fields['learnmorelink3']) && !empty($all_fields['learnmorelink3'])){
													echo $all_fields['learnmorelink3'];
												}else{
													echo 'please enter  link ';
												}
											
											?>">
										Learn MOre	
										<i class="fa fa-long-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-12 col-12">
							<!-- single-schedule -->
							<div class="single-schedule last">
								<div class="inner">
									<div class="icon">
										<i class="icofont-ui-clock"></i>
									</div>
									<div class="single-content">
										<span>
										<?php 
												if(isset($all_fields['pheading3']) && !empty($all_fields['pheading3'])){
													echo $all_fields['pheading3'];
												}else{
													echo 'please enter  heading';
												}
											
											?>	
										</span>
										<h4>
										<?php 
												if(isset($all_fields['titleheading3']) && !empty($all_fields['titleheading3'])){
													echo $all_fields['titleheading3'];
												}else{
													echo 'please enter  Title heading';
												}
											
											?>
										</h4>
										<ul class="time-sidual">
											<li class="day"><?php 
												if(isset($all_fields['Description_des3']) && !empty($all_fields['Description_des3'])){
													echo $all_fields['Description_des3'];
												}else{
													echo 'please enter  Title heading';
												}
											
											?></li>
											
										</ul>
										<a href="<?php 
												if(isset($all_fields['learnmorelink3']) && !empty($all_fields['learnmorelink3'])){
													echo $all_fields['learnmorelink3'];
												}else{
													echo 'please enter  link ';
												}
											
											?>">LEARN MORE<i class="fa fa-long-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/End Start schedule Area -->

		<!-- Start Feautes -->
		<section class="Feautes section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>
								<?php 
								if(isset($all_fields['always_ready_m_title']) && !empty($all_fields['always_ready_m_title'])){
									echo $all_fields['always_ready_m_title'];
								}else{
									echo 'Up your Title Frome theme setting ';
								}
								
								?>
							</h2>
							<img src="img/section-img.png" alt="#">
							<p>
							<?php 
								if(isset($all_fields['always_ready_title']) && !empty($all_fields['always_ready_title'])){
									echo $all_fields['always_ready_title'];
								}else{
									echo 'Up your Title Frome theme setting ';
								}
								
								?>
							</p>
						</div>
					</div>
				</div>
				<div class="row">


				<?php
				$meta=array(
					'post_type'=>'hasan_slider',
				);
				$the_meta=new WP_Query($meta);
				if(have_posts()):
					while($the_meta->have_posts()):$the_meta->the_post();
					$icon=get_post_meta($post->ID,'unique_key',true);
					
					?>
				<div class="col-lg-4 col-12">
						<!-- Start Single features -->
						<div class="single-features last">
							<div class="signle-icon">
								<i class="<?php echo $icon;?>"></i>
							</div>
							<h3><?php echo the_title();?></h3>
							<p><?php the_excerpt();?></p>
						</div>
						<!-- End Single features -->
					</div>
					<?php
				endwhile;
			else:
				echo "srry there is no posts";
				endif;
				
				?>
					
					
				</div>
			</div>
		</section>
		<!--/ End Feautes -->
		
		<!-- Start Fun-facts -->
		<div id="fun-facts" class="fun-facts section overlay">
			<div class="container">
				<div class="row">

				<?php 
				
				foreach($all_fields['opt-repeater-6'] as $single_value){


					
						?>

				<div class="col-lg-3 col-md-6 col-12">
						<!-- Start Single Fun -->
						<div class="single-fun">
							<i class="<?php echo $single_value['icon_class'] ?><"></i>
							<div class="content">
								<span class="counter"><?php echo $single_value['count'] ?></span>
								<p><?php echo $single_value['title'] ?> </p>
							</div>
						</div>
						<!-- End Single Fun -->
					</div>

						<?php
				}
			
				
				?>
					
					
				</div>
			</div>
		</div>
		<!--/ End Fun-facts -->
		
		<!-- Start Why choose -->
		<section class="why-choose section" >
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>
							<?php 
											$all_fields = get_option('all_fields');

											if (isset($all_fields['about_services_main_title']) && !empty($all_fields['about_services_main_title'])) {
												echo $all_fields['about_services_main_title'];
											} else {
												echo 'lorem text';
											}
											?>
							</h2>
							<img src="<?php echo $all_fields['about_services_upload_logo'];?>" alt="#">
						 	<p>
						                	<?php 
											$all_fields = get_option('all_fields');

											if (isset($all_fields['about_services_main_title_description']) && !empty($all_fields['about_services_main_title_description'])) {
												echo $all_fields['about_services_main_title_description'];
											} else {
												echo 'lorem text';
											}
											?>
							</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-12">
						<!-- Start Choose Left -->
						<div class="choose-left">
							<h3>
							<?php 
											$all_fields = get_option('all_fields');

											if (isset($all_fields['about_services_title']) && !empty($all_fields['about_services_title'])) {
												echo $all_fields['about_services_title'];
											} else {
												echo 'lorem about services title';
											}
											?>
							</h3>
							<p><?php 
											$all_fields = get_option('all_fields');

											if (isset($all_fields['about_services_title_description']) && !empty($all_fields['about_services_title_description'])) {
												echo $all_fields['about_services_title_description'];
											} else {
												echo 'lorem about services title';
											}
											?> </p>
							<div class="row">
								<div class="col-lg-6">
									<ul class="list">
									<?php 
									$all_fields=get_option('all_fields');
									// var_dump($all_fields);
									$myfeaturelist1=$all_fields['about_services_repeater_1'];
									// var_dump($myfeaturelist1);
									foreach($myfeaturelist1 as $singlefeaturelist1){
										?>
										<li><i class="fa fa-caret-right"></i><?php echo $singlefeaturelist1['about_setvices_feature_1'];?></li>

										<?php
									}
									
									?>
										
									</ul>
								</div>
								<div class="col-lg-6">
									<ul class="list">
									<?php 
									$all_fields=get_option('all_fields');
									// var_dump($all_fields);
									$myfeaturelist2=$all_fields['about_services_repeater_2'];
									// var_dump($myfeaturelist1);
									foreach($myfeaturelist2 as $singlefeaturelist2){
										?>
										<li><i class="fa fa-caret-right"></i><?php echo $singlefeaturelist2['about_setvices_feature_2'];?></li>

										<?php
									}
									
									?>
										<!-- <li><i class="fa fa-caret-right"></i>Maecenas vitae luctus nibh. </li>
										<li><i class="fa fa-caret-right"></i>Duis massa massa.</li>
										<li><i class="fa fa-caret-right"></i>Aliquam feugiat interdum.</li> -->
									</ul>
								</div>
							</div>
						</div>
						<!-- End Choose Left -->
					</div>
					<div class="col-lg-6 col-12">
						<!-- Start Choose Rights -->
						<div class="choose-right">
							<div class="video-image">
								<!-- Video Animation -->
								<div class="promo-video">
									<div class="waves-block">
										<div class="waves wave-1"></div>
										<div class="waves wave-2"></div>
										<div class="waves wave-3"></div>
									</div>
								</div>
								<!--/ End Video Animation -->
								<iframe width="560" height="315" src="
								<?php 
								if(isset($all_fields['about_video_up']) && !empty($all_fields['about_video_up'])){
									echo $all_fields['about_video_up'];
								}else{
									echo 'https://www.youtube.com/embed/dovQUvx0rkE?si=q_Gz2hw2ok4TrM3Y';
								}
								
								?>
								" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
							</div>
						</div>
						<!-- End Choose Rights -->
					</div>
				</div>
			</div>
		</section>
		<!--/ End Why choose -->
		
		<!-- Start Call to action -->
		<section class="call-action overlay" data-stellar-background-ratio="0.5">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-12">
						<div class="content">
							<h2>
							<?php 
							echo $all_fields['emergencytitle'];
							
							?>
							</h2>
							<p>
								<?php 
								echo $all_fields['emergencydescription'];
								
								?>
							</p>
							<div class="button">
								<a href="tel:+<?php echo $all_fields['emergency_contact'];?>" class="btn">Contact Now</a>
								<a href="<?php echo $all_fields['emergency_contact_link'];?>" class="btn second">Learn More<i class="fa fa-long-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Call to action -->
		
		<!-- Start portfolio -->
		<section class="portfolio section" >
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>
							<?php 
								echo $all_fields['Maintenince_title'];
								
								?>
							</h2>
							<img src="
							<?php 
							if(isset($all_fields['Maintenince_img']) && !empty($all_fields['Maintenince_img'])){
								echo $all_fields['Maintenince_img'];
							}else{
								echo get_theme_file_uri('assets/img/slider.jpg');
							}
								
								
								?>
							" alt="#">
							<p>
								<?php 
								echo $all_fields['Maintenince_description'];
								
								?>
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12 col-12">
						<div class="owl-carousel portfolio-slider">
							<div class="single-pf">
								<img src="<?php 
								echo $all_fields['Maintenince_img_slider_1'];
								
								?>" alt="#">
								<a href="portfolio-details.html" class="btn">View Details</a>
							</div>
							<div class="single-pf">
								<img src="
								<?php 
								echo $all_fields['Maintenince_img_slider_2'];
								
								?>" alt="#">
								<a href="portfolio-details.html" class="btn">View Details</a>
							</div>
							<div class="single-pf">
								<img src="
								<?php 
								echo $all_fields['Maintenince_img_slider_3'];
								
								?>" alt="#">
								<a href="portfolio-details.html" class="btn">View Details</a>
							</div>
							<div class="single-pf">
								<img src="
								<?php 
								echo $all_fields['Maintenince_img_slider_4'];
								
								?>" alt="#">
								<a href="portfolio-details.html" class="btn">View Details</a>
							</div>
							<div class="single-pf">
								<img src="<?php 
								echo $all_fields['Maintenince_img_slider_5'];
								
								?>" alt="#">
								<a href="portfolio-details.html" class="btn">View Details</a>
							</div>
							<div class="single-pf">
								<img src="<?php 
								echo $all_fields['Maintenince_img_slider_6'];
								
								?>" alt="#">
								<a href="portfolio-details.html" class="btn">View Details</a>
							</div>
							<div class="single-pf">
								<img src="<?php 
								echo $all_fields['Maintenince_img_slider_7'];
								
								?>" alt="#">
								<a href="portfolio-details.html" class="btn">View Details</a>
							</div>
							<div class="single-pf">
								<img src="<?php 
								echo $all_fields['Maintenince_img_slider_8'];
								
								?>" alt="#">
								<a href="portfolio-details.html" class="btn">View Details</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End portfolio -->
		
		<!-- Start service -->
		<section class="services section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>
								<?php 
								echo $all_fields['ouroffer_main_title'];
								
								?>
							</h2>
							<img src="
							<?php 
								echo $all_fields['ouroffer_main_title_img'];
								
								?>
							" alt="#">
							<p>
								
							<?php 
								echo $all_fields['ouroffer_main_title_description'];
								
								?>
							</p>
						</div>
					</div>
				</div>
				<div class="row">
					<?php 
					// var_dump($all_fields['different_services']);

					foreach($all_fields['different_services'] as $singular_different_services){
						?>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
							<i class="<?php echo $singular_different_services['different_services_icon'];?>"></i>
							<h4><a href="service-details.html"><?php echo $singular_different_services['differcent_service_title'];?></a></h4>
							<p><?php echo $singular_different_services['different_service_des'];?> </p>	
						</div>
						<!-- End Single Service -->
					</div>
						<?php
					}
					?>
					
					
				</div>
			</div>
		</section>
		<!--/ End service -->
		
		<!-- Pricing Table -->
		<section class="pricing-table section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>We Provide You The Best Treatment In Resonable Price</h2>
							<img src="img/section-img.png" alt="#">
							<p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
						</div>
					</div>
				</div>
				<div class="row">
				<?php
				$cmb2=array(
					'post_type'=>'mprice',
				);
				$the_cmb2=new WP_Query($cmb2);
				if($the_cmb2->have_posts( )):
					while($the_cmb2->have_posts()):$the_cmb2->the_post();
					$iconclass=get_post_meta(get_the_id(),'iconclass',true);
					$addbookingurl=get_post_meta(get_the_id(),'addbookingurl',true);
					$package_price=get_post_meta(get_the_id(),'package_price',true);

					$myfeaturelist=get_post_meta(get_the_id(),'yourprefix_group_demo',true);
					// var_dump($myfeaturelist);
					
					?>
				<!-- Single Table -->
				<div class="col-lg-4 col-md-12 col-12">
						<div class="single-table">
							<!-- Table Head -->
							<div class="table-head">
								<div class="icon">
									<i class="<?php echo $iconclass;?>"></i>
									
								</div>
								<h4 class="title"><?php the_title();?></h4>
								<div class="price">
									<p class="amount">$<?php echo $package_price;?><span>/ Per Visit</span></p>
								</div>	
							</div>
							<!-- Table List -->
							<ul class="table-list">
								<?php
								foreach($myfeaturelist as $singlefeature){
								?>
								<li><i class="icofont icofont-ui-check"></i><?php echo $singlefeature['title'];?></li>
								<?php
								}
								
								?>
							</ul>
							<div class="table-bottom">
								<a class="btn" href="<?php echo $addbookingurl;?>">Book Now</a>
							</div>
							<!-- Table Bottom -->
						</div>
					</div>
					<!-- End Single Table-->
					<?php
				endwhile;
				endif;
				
				
				?>
					
					
				</div>	
			</div>	
		</section>	
		<!--/ End Pricing Table -->
		
		
		
		<!-- Start Blog Area -->
		<section class="blog section" id="blog">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>Keep up with Our Most Recent Medical News.</h2>
							<img src="img/section-img.png" alt="#">
							<p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
						</div>
					</div>
				</div>
				<div class="row">
				          <?php 
										// var_dump($all_fields['different_news']);

										foreach($all_fields['different_news'] as $singularnews){
											?>
											<div class="col-lg-4 col-md-6 col-12">
											<!-- Single Blog -->
								<div class="single-news">
												<div class="news-head">
													<img style="width:30px; height:30px;" src="<?php echo $singularnews['different_news_image'];?>" alt="#">
												</div>
												<div class="news-body">
													<div class="news-content">
												<div class="date"><?php echo $singularnews['different_news_date'];?></div>
												<h2><a href="blog-single.html"><?php echo $singularnews['differents_news_title'];?></a></h2>
												<p class="text"><?php echo $singularnews['different_news_des'];?></p>
								</div>
							</div>
						</div>
						<!-- End Single Blog -->
					</div>
											<?php
										}
										
										?>
					
					
				</div>
			</div>
		</section>
		<!-- End Blog Area -->
		
		<!-- Start clients -->
		<div class="clients overlay">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-12">
						<div class="owl-carousel clients-slider">
							<?php
							
						// var_dump($all_fields['many_iamge']);
							foreach($all_fields['many_iamge'] as $singular_images){
								?>
								<div class="single-clients">
								<img src="<?php echo $singular_images['different_images'];?>" alt="#">
							</div>
								<?php
							}
							?>
							
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/Ens clients -->
		
		<!-- Start Appointment -->
		<section class="appointment">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>
								
							<?php 
							
							echo $all_fields['contact_area_title'];
							?>
							</h2>
							<img src="<?php echo $all_fields['contact_area_Image'];?>" alt="#">
							<p><?php echo $all_fields['contact_area_description'];?></p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-12 col-12">
					<?php 
					
					echo 	do_shortcode('[contact-form-7 id="a1c9660" title="Contact form 1"]');
						
						?>
					
						<!-- <form class="form" action="#">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<input name="name" type="text" placeholder="Name">
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<input name="email" type="email" placeholder="Email">
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<input name="phone" type="text" placeholder="Phone">
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<div class="nice-select form-control wide" tabindex="0"><span class="current">Department</span>
											<ul class="list">
												<li data-value="1" class="option selected ">Department</li>
												<li data-value="2" class="option">Cardiac Clinic</li>
												<li data-value="3" class="option">Neurology</li>
												<li data-value="4" class="option">Dentistry</li>
												<li data-value="5" class="option">Gastroenterology</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<div class="nice-select form-control wide" tabindex="0"><span class="current">Doctor</span>
											<ul class="list">
												<li data-value="1" class="option selected ">Doctor</li>
												<li data-value="2" class="option">Dr. Akther Hossain</li>
												<li data-value="3" class="option">Dr. Dery Alex</li>
												<li data-value="4" class="option">Dr. Jovis Karon</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<input type="text" placeholder="Date" id="datepicker">
									</div>
								</div>
								<div class="col-lg-12 col-md-12 col-12">
									<div class="form-group">
										<textarea name="message" placeholder="Write Your Message Here....."></textarea>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-5 col-md-4 col-12">
									<div class="form-group">
										<div class="button">
											<button type="submit" class="btn">Book An Appointment</button>
										</div>
									</div>
								</div>
								<div class="col-lg-7 col-md-8 col-12">
									<p>( We will be confirm by an Text Message )</p>
								</div>
							</div>
						</form> -->
					</div>
					<div class="col-lg-6 col-md-12 ">
						<div class="appointment-image">
							<img src="<?php echo $all_fields['contact_area_Image2'];?>" alt="#">
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Appointment -->
		
		<!-- Start Newsletter Area -->
		<section class="newsletter section">
			<div class="container">
				<div class="row ">
					<div class="col-lg-6  col-12">
						<!-- Start Newsletter Form -->
						<div class="subscribe-text ">
							<h6>Sign up for newsletter</h6>
							<p class="">Cu qui soleat partiendo urbanitas. Eum aperiri indoctum eu,<br> homero alterum.</p>
						</div>
						<!-- End Newsletter Form -->
					</div>
					<div class="col-lg-6  col-12">
						<!-- Start Newsletter Form -->
						<div class="subscribe-form ">
							<form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
								<input name="EMAIL" placeholder="Your email address" class="common-input" onfocus="this.placeholder = ''"
									onblur="this.placeholder = 'Your email address'" required="" type="email">
								<button class="btn">Subscribe</button>
							</form>
						</div>
						<!-- End Newsletter Form -->
					</div>
				</div>
			</div>
		</section>
		<!-- /End Newsletter Area -->
		
		<!-- Footer Area -->
		<footer id="footer" class="footer ">
			<!-- Footer Top -->
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer">
								<h2>About Us</h2>
								<p>Lorem ipsum dolor sit am consectetur adipisicing elit do eiusmod tempor incididunt ut labore dolore magna.</p>
								<!-- Social -->
								<ul class="social">
									<li><a href="#"><i class="icofont-facebook"></i></a></li>
									<li><a href="#"><i class="icofont-google-plus"></i></a></li>
									<li><a href="#"><i class="icofont-twitter"></i></a></li>
									<li><a href="#"><i class="icofont-vimeo"></i></a></li>
									<li><a href="#"><i class="icofont-pinterest"></i></a></li>
								</ul>
								<!-- End Social -->
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer f-link">
								<h2>Quick Links</h2>
								<div class="row">
									<div class="col-lg-6 col-md-6 col-12">
										<ul>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Home</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>About Us</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Services</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Our Cases</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Other Links</a></li>	
										</ul>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<ul>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Consuling</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Finance</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Testimonials</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>FAQ</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Contact Us</a></li>	
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer">
								<h2>Open Hours</h2>
								<p>Lorem ipsum dolor sit ame consectetur adipisicing elit do eiusmod tempor incididunt.</p>
								<ul class="time-sidual">
									<li class="day">Monday - Fridayp <span>8.00-20.00</span></li>
									<li class="day">Saturday <span>9.00-18.30</span></li>
									<li class="day">Monday - Thusday <span>9.00-15.00</span></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer">
								<h2>Newsletter</h2>
								<p>subscribe to our newsletter to get allour news in your inbox.. Lorem ipsum dolor sit amet, consectetur adipisicing elit,</p>
								<form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
									<input name="email" placeholder="Email Address" class="common-input" onfocus="this.placeholder = ''"
										onblur="this.placeholder = 'Your email address'" required="" type="email">
									<button class="button"><i class="icofont icofont-paper-plane"></i></button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Footer Top -->
			<!-- Copyright -->
			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-12">
							<div class="copyright-content">
								<p>© Copyright 2018  |  All Rights Reserved by <a href="https://www.wpthemesgrid.com" target="_blank">wpthemesgrid.com</a> </p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Copyright -->
		</footer>
		<!--/ End Footer Area -->
		
		<!-- jquery Min JS -->
        <script src="<?php echo get_parent_theme_file_uri( 'assets/js/jquery.min.js' );?>"></script>
		<!-- jquery Migrate JS -->
		<script src="<?php echo get_parent_theme_file_uri( 'assets/js/jquery-migrate-3.0.0.js' );?>"></script>
		<!-- jquery Ui JS -->
		<script src="<?php echo get_parent_theme_file_uri( 'assets/js/jquery-ui.min.js' );?>"></script>
		<!-- Easing JS -->
        <script src="<?php echo get_parent_theme_file_uri( 'assets/js/easing.js' );?>"></script>
		<!-- Color JS -->
		<script src="<?php echo get_parent_theme_file_uri( 'assets/js/colors.js' );?>"></script>
		<!-- Popper JS -->
		<script src="<?php echo get_parent_theme_file_uri( 'assets/js/popper.min.js' );?>"></script>
		<!-- Bootstrap Datepicker JS -->
		<script src="<?php echo get_parent_theme_file_uri( 'assets/js/bootstrap-datepicker.js' );?>"></script>
		<!-- Jquery Nav JS -->
        <script src="<?php echo get_parent_theme_file_uri( 'assets/js/jquery.nav.js' );?>"></script>
		<!-- Slicknav JS -->
		<script src="<?php echo get_parent_theme_file_uri( 'assets/js/slicknav.min.js' );?>"></script>
		<!-- ScrollUp JS -->
        <script src="<?php echo get_parent_theme_file_uri( 'assets/js/jquery.scrollUp.min.js' );?>"></script>
		<!-- Niceselect JS -->
		<script src="<?php echo get_parent_theme_file_uri( 'assets/js/niceselect.js' );?>"></script>
		<!-- Tilt Jquery JS -->
		<script src="<?php echo get_parent_theme_file_uri( 'assets/js/tilt.jquery.min.js' );?>"></script>
		<!-- Owl Carousel JS -->
        <script src="<?php echo get_parent_theme_file_uri( 'assets/js/owl-carousel.js' );?>"></script>
		<!-- counterup JS -->
		<script src="<?php echo get_parent_theme_file_uri( 'assets/js/jquery.counterup.min.js' );?>"></script>
		<!-- Steller JS -->
		<script src="<?php echo get_parent_theme_file_uri( 'assets/js/steller.js' );?>"></script>
		<!-- Wow JS -->
		<script src="<?php echo get_parent_theme_file_uri( 'assets/js/wow.min.js' );?>"></script>
		<!-- Magnific Popup JS -->
		<script src="js/jquery.magnific-popup.min.js"></script>
		<!-- Counter Up CDN JS -->
		<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="<?php echo get_parent_theme_file_uri( 'assets/js/bootstrap.min.js' );?>"></script>
		<!-- Main JS -->
		<script src="<?php echo get_parent_theme_file_uri( 'assets/js/main.js' );?>"></script>
    </body>
</html>