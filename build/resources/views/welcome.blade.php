<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Inspeksi Teknik | PT.PUSRI PALEMBANG</title>
	<meta charset="UTF-8">
	<meta name="description" content="Industry.INC HTML Template">
	<meta name="keywords" content="industry, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- Favicon -->
	<link href="{{asset('/frontend')}}/img/pusriico.ico" rel="shortcut icon"/>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i&display=swap" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{asset('/frontend')}}/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="{{asset('/frontend')}}/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="{{asset('/frontend')}}/css/magnific-popup.css"/>
	<link rel="stylesheet" href="{{asset('/frontend')}}/css/slicknav.min.css"/>
	<link rel="stylesheet" href="{{asset('/frontend')}}/css/owl.carousel.min.css"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="{{asset('/frontend')}}/css/style.css"/>


	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section  -->
	<header class="header-section clearfix">
		<div class="header-top">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6">
						<p>DEPARTEMENT INSPEKSI TEKNIK</p>
					</div>
					<div class="col-md-6 text-md-right">
						<p>PT PUPUK SRIWIJAYA PALEMBANG</p>
					</div>
				</div>
			</div>
		</div>
		<div class="site-navbar">
			<!-- Logo -->
			<a href="http://pusri.co.id/" class="site-logo">
				<img src="{{asset('/frontend')}}/img/logo.png" alt="" width="200">
			</a>
			<div class="header-right">
				<div class="header-info-box">
					<div class="hib-icon">
						<img src="{{asset('/frontend')}}/img/icons/phone.png" alt="" class="">
					</div>
					<div class="hib-text">
						<h6>0711-XXX-XXX</h6>
						<p>XXX@pusri.co.id</p>
					</div>
				</div>
				<div class="header-info-box">
					<div class="hib-icon">
						<img src="{{asset('/frontend')}}/img/icons/map-marker.png" alt="" class="">
					</div>
					<div class="hib-text">
						<h6>Palembang</h6>
						<p>Sumatera Selatan</p>
					</div>
				</div>
				<button class="search-switch"><i class="fa fa-search"></i></button>
			</div>
			<!-- Menu -->
			<nav class="site-nav-menu">
				<ul>
					<li class="active"><a href="/">Home</a></li>
					<li><a href="#">About us</a></li>
					<li><a href="#">Contact</a></li>
					<li><a href="{{ route('login') }}">Login</a></li>
				</ul>
			</nav>

		</div>
	</header>
	<!-- Header section end  -->
	
	<section class="hero-section">
		<div class="hero-slider owl-carousel">
			<div class="hero-item set-bg" data-setbg="{{asset('/frontend')}}/img/hero-slider/11.jpg">
				<div class="container">
					<div class="row">
						<div class="col-xl-8">	
						</div>
					</div>
				</div>
			</div>
			<div class="hero-item set-bg" data-setbg="{{asset('/frontend')}}/img/hero-slider/22.jpg">
				<div class="container">
					<div class="row">
						<div class="col-xl-8">
						</div>
					</div>
				</div>
			</div>
			<div class="hero-item set-bg" data-setbg="{{asset('/frontend')}}/img/hero-slider/33.jpg">
				<div class="container">
					<div class="row">
						<div class="col-xl-8">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Hero section end  -->

	<!-- Services section  -->
	<section class="services-section">
		<div class="services-warp">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="service-item">
							<div class="si-head">
								<div class="si-icon">
									<img src="{{asset('/frontend')}}/img/icons/pollution.png" alt="">
								</div>
								<h5>Inspeksi Teknik Lapangan 1</h5>
							</div>
							<h6 align="center">1. Inspeksi Teknik Pabrik 1</h6>
							<br>
							<h6 align="center">2. Inspeksi Teknik Pabrik 2</h6>
							<br>
							<h6 align="center">3. Inspeksi Teknik Pabrik PPK,</h6>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="service-item">
							<div class="si-head">
								<div class="si-icon">
									<img src="{{asset('/frontend')}}/img/icons/pollution.png" alt="">
								</div>
								<h5>Inspeksi Teknik Lapangan 2</h5>
							</div>
							<h6 align="center">1. Inspeksi Teknik Pabrik 3</h6>
							<br>
							<h6 align="center">2. Inspeksi Teknik Pabrik 4</h6>
							<br>
							<h6 align="center">3. Inspeksi Teknik Pabrik 5</h6>
							<br>
							<h6 align="center">4. Inspeksi Teknik STG,BB & Jetty</h6>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="service-item">
							<div class="si-head">
								<div class="si-icon">
									<img src="{{asset('/frontend')}}/img/icons/pollution.png" alt="">
								</div>
								<h5>Inspeksi Teknik Khusus</h5>
							</div>
							<h6 align="center">1. Inspeksi Teknik Perbengkelan</h6>
							<br>
							<h6 align="center">2. Inspeksi Teknik NDT</h6>
							<br>
							<h6 align="center">3. Inspeksi Teknik QC</h6>
							<br>
							<h6 align="center">4. Inspeksi Teknik Khusus</h6>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</section>
	<!-- Services section end  -->

	<!-- Features section   -->
	<section class="features-section spad set-bg" data-setbg="{{asset('/frontend')}}/img/features-bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-12">
					<div class="feature-box">
						<img height="240" src="{{asset('/frontend')}}/img/features/b.png" alt="">
						<div class="fb-text">
							<h5 align="center">Plant Inspection</h5>
							<p align="center">Departemen Inspeksi Teknik bertanggung jawab untuk menjamin reliability peralatan non-rotating pabrik. 
								<br>
								<br>
								<br></p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-12">
					<div class="feature-box">
						<img src="{{asset('/frontend')}}/img/features/c.png" alt="">
						<div class="fb-text">
							<h5 align="center">Engineering Inspection</h5>
							<p align="center">Departemen Inspeksi Teknik membuat rekomendasi perbaikan peralatan pabrik terutama non-rotating equipment, pengelasan, metode inspeksi untuk menunjang plant reliability pabrik. </p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-12">
					<div class="feature-box">
						<img src="{{asset('/frontend')}}/img/features/e.png" alt="">
						<div class="fb-text">
							<h5 align="center">NDT/DT Inspection</h5>
							<p align="center">Departemen Inspeksi Teknik melakukan kegiatan pemeriksaaan non destructive dan destructive untuk menunjang evaluasi kerusakan peralatan sehingga kegagalan serupa tidak terjadi. </p>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-12">
					<div class="feature-box">
						<img height="290" src="{{asset('/frontend')}}/img/features/h.jpg" alt="">
						<div class="fb-text">
							<h5 align="center">QC Inspection</h5>
							<p align="center">Departemen Inspeksi Teknik melakukan Quality Control barang masuk pabrik. </p>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-12">
					<div class="feature-box">
						<img src="{{asset('/frontend')}}/img/features/d.png" alt="">
						<div class="fb-text">
							<h5 align="center">QA Inspection</h5>
							<p align="center">Departemen Inspeksi Teknik melakukan perencanaan dan perancangan perbaikan saat Shutdown/Turn Arround. </p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Features section end  -->


	<!-- Clients section  -->
	<section class="clients-section spad">
		<div class="container">
			<h1 align="center">DEPARTEMEN INSPEKSI TEKNIK</h1>
			<br>
			<div class="row">
				<div class="col-lg-4 col-md-12">
					<div class="feature-box">
						<img src="{{asset('/frontend')}}/img/features/g.png" alt="">
						<div class="fb-text">
							<h5 align="center">CREATIVE</h5>
						</div>
					</div>
				</div>
					<div class="col-lg-4 col-md-12">
					<div class="feature-box">
						<img src="{{asset('/frontend')}}/img/features/f.png" alt="">
						<div class="fb-text">
							<h5 align="center">INNOVATIVE</h5>
						</div>
					</div>
					</div>
				<div class="col-lg-4 col-md-12">
					<div class="feature-box">
						<img src="{{asset('/frontend')}}/img/features/ab.png" alt="">
						<div class="fb-text">
							<h5 align="center">IMPROVEMENT</h5>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Clients section end  -->
	<!-- Testimonial section -->
	<section class="testimonial-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6 p-0">
					<div class="testimonial-bg set-bg" data-setbg="{{asset('/frontend')}}/img/testimonial-bg.jpg"></div>
				</div>
				<div class="col-lg-6 p-0">
					<div class="testimonial-box">
						<div class="testi-box-warp">
							<h2>ISTEK PUSRI</h2>
							<div class="testimonial-slider owl-carousel">
								<div class="testimonial">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque orci purus, sodales in est quis, blandit sollicitudin est. Nam ornare ipsum ac accumsan auctor. Donec consequat arcu et commodo interdum. Vivamus posuere lorem lacus.Lorem ipsum dolor sit amet, consecte-tur adipiscing elit. Quisque orci purus, sodales in est quis, blandit sollicitudin est.</p>
									<img src="{{asset('/frontend')}}/img/testimonial-thumb.jpg" alt="" class="testi-thumb">
									<div class="testi-info">
										<h5>Michael Smith</h5>
										<span>CEO Industrial INC</span>
									</div>
								</div>
								<div class="testimonial">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque orci purus, sodales in est quis, blandit sollicitudin est. Nam ornare ipsum ac accumsan auctor. Donec consequat arcu et commodo interdum. Vivamus posuere lorem lacus.Lorem ipsum dolor sit amet, consecte-tur adipiscing elit. Quisque orci purus, sodales in est quis, blandit sollicitudin est.</p>
									<img src="{{asset('/frontend')}}/img/testimonial-thumb.jpg" alt="" class="testi-thumb">
									<div class="testi-info">
										<h5>Michael Smith</h5>
										<span>CEO Industrial INC</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Testimonial section end  -->


	<!-- Call to action section  -->
	<section class="cta-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 d-flex align-items-center">
					<h2>We produce or supply Goods, Services, or Sources</h2>
				</div>
				<div class="col-lg-3 text-lg-right" >
					<a href="#" class="site-btn sb-dark">contact us</a>
				</div>
			</div>
		</div>
	</section>
	<!-- Call to action section end  -->

	<!-- Video section  -->
	<section class="video-section spad" >
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="video-text">
						<h2>We produce or supply Goods, & Services</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque orci purus, sodales in est quis, blandit sollicitudin est. Nam ornare ipsum ac accumsan auctor. Donec consequat arcu et commodo interdum. Vivamus posuere lorem lacus.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque orci purus, sodales in est quis, blandit sollicitudin est. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque orci purus, sodales in est quis, blandit sollicitudin est. Nam ornare ipsum ac accumsan auctor. Donec consequat arcu et commodo interdum. Vivamus posuere lorem lacus.Lorem ipsum dolor sit amet, consectetur.</p>
						<a href="#" class="site-btn">contact us</a>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="video-box set-bg" data-setbg="{{asset('/frontend')}}/img/video-box.jpg">
						<a href="https://www.youtube.com/watch?v=wbnaHgSttVo" class="video-popup">
							<i class="fa fa-play"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>


	<!-- Footer section -->
	<footer class="footer-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="footer-widget about-widget">
						<img src="{{asset('/frontend')}}/img/logo.png" alt="">
						<p>Lorem ipsum dolor sit amet, consec-tetur adipiscing elit. Quisque orci purus, sodales in est quis, blandit sollicitudin est. Nam ornare ipsum ac accumsan auctor. Donec consequat arcu et commodo interdum. </p>
						<div class="footer-social">
							<a href="https://www.facebook.com/profile.php?id=100013416165552" target="_blank"><i class="fa fa-facebook"></i></a>
							<a href="http://www.twitter.com/pusripalembang" target="_blank"><i class="fa fa-twitter"></i></a>
							<a href="https://www.instagram.com/pusripalembang/?hl=id" target="_blank"><i class="fa fa-instagram"></i></a>
							<a href="http://www.youtube.com/channel/UC_wRlJ5Vb2QZ8nXercC4dUQ" target="_blank"><i class="fa fa-youtube"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="footer-widget">
						
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="footer-widget">
						
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-7">
					<div class="footer-widget">
						<h2 class="fw-title">Contact Us</h2>
						<div class="footer-info-box">
							<div class="fib-icon">
								<img src="{{asset('/frontend')}}/img/icons/map-marker.png" alt="" class="">
							</div>
							<div class="fib-text">
								<p>Palembang<br>Sumatera Selatan</p>
							</div>
						</div>
						<div class="footer-info-box">
							<div class="fib-icon">
								<img src="{{asset('/frontend')}}/img/icons/phone.png" alt="" class="">
							</div>
							<div class="fib-text">
								<p>0711-XXX-XXX<br>XXX@pusri.co.id</p>
							</div>
						</div>
						<form class="footer-search">
							<input type="text" placeholder="Search">
							<button><i class="fa fa-search"></i></button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-buttom">
			<div class="container">
			<div class="row">
				<div class="col-lg-4 order-2 order-lg-1 p-0">
					<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <a href="http://pusri.co.id" target="_blank"> PT PUPUK SRIWIJAYA PALEMBANG </a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
				</div>
				<div class="col-lg-7 order-1 order-lg-2 p-0">
					<ul class="footer-menu">
						<li class="active"><a href="/">Home</a></li>
						<li><a href="#">About us</a></li>
						<li><a href="#">Contact</a></li>
						<li><a href="{{ route('login') }}">Login</a></li>
					</ul>
				</div>
			</div>
		</div>
		</div>
	</footer>
	<!-- Footer section end -->

	<!-- Search model -->
	<div class="search-model">
		<div class="h-100 d-flex align-items-center justify-content-center">
			<div class="search-close-switch">+</div>
			<form class="search-model-form">
				<input type="text" id="search-input" placeholder="Search here.....">
			</form>
		</div>
	</div>
	<!-- Search model end -->
	
	<!--====== Javascripts & Jquery ======-->
	<script src="{{asset('/frontend')}}/js/jquery-3.2.1.min.js"></script>
	<script src="{{asset('/frontend')}}/js/bootstrap.min.js"></script>
	<script src="{{asset('/frontend')}}/js/jquery.slicknav.min.js"></script>
	<script src="{{asset('/frontend')}}/js/owl.carousel.min.js"></script>
	<script src="{{asset('/frontend')}}/js/circle-progress.min.js"></script>
	<script src="{{asset('/frontend')}}/js/jquery.magnific-popup.min.js"></script>
	<script src="{{asset('/frontend')}}/js/main.js"></script>

	</body>
</html>
