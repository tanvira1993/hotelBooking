
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-ng-app="hotelUserApp">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Hotel Booking</title>

	<link rel="stylesheet" href="frontend/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="frontend/toastr.min.css">  
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="frontend/sweetalert.min.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="frontend/styleLogin.css" />
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Alex+Brush" rel="stylesheet">
	<!-- Styles -->

	<!-- Theme Plugin CSS Start -->

	<link rel="stylesheet" href="frontend/css/open-iconic-bootstrap.min.css">
	<link rel="stylesheet" href="frontend/css/animate.css">

	<link rel="stylesheet" href="frontend/css/owl.carousel.min.css">
	<link rel="stylesheet" href="frontend/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="frontend/css/magnific-popup.css">

	<link rel="stylesheet" href="frontend/css/aos.css">

	<link rel="stylesheet" href="frontend/css/ionicons.min.css">

	<link rel="stylesheet" href="frontend/css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="frontend/css/jquery.timepicker.css">


	<link rel="stylesheet" href="frontend/css/flaticon.css">
	<link rel="stylesheet" href="frontend/css/icomoon.css">
	<link rel="stylesheet" href="frontend/css/style.css">

	<!-- Theme Plugin CSS End -->

</head>
<body ng-controller="AppController">

	<div>
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
			<div class="container">
				<a class="navbar-brand" ui-sref="dashboard">Hotel Search</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="oi oi-menu"></span> Menu
				</button>

				<div class="collapse navbar-collapse" id="ftco-nav">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active"><a ui-sref="dashboard" class="nav-link">Home</a></li>
						<li class="nav-item"><a ui-sref="about" class="nav-link">About</a></li>
						<li class="nav-item"><a ui-sref="packages" class="nav-link">Packages</a></li>
						<li class="nav-item"><a ui-sref="hotelSearch" class="nav-link">Hotels</a></li>
						<li class="nav-item"><a ui-sref="blog" class="nav-link">Blog</a></li>
						<li class="nav-item"><a ui-sref="contact" class="nav-link">Contact</a></li>
						<li class="nav-item cta"><a ui-sref="login" class="nav-link"><span>Join Us</span></a></li>
					</ul>
				</div>
			</div>
		</nav>

		<!-- END nav -->

	</div>

	<div >
		<div ui-view> </div>
	</div>
	<section class="ftco-section-parallax">
		<div class="parallax-img d-flex align-items-center">
			<div class="container">
				<div class="row d-flex justify-content-center">
					<div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
						<h2>Subcribe to our Newsletter</h2>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
						<div class="row d-flex justify-content-center mt-5">
							<div class="col-md-8">
								<form action="#" class="subscribe-form">
									<div class="form-group d-flex">
										<input type="text" class="form-control" placeholder="Enter email address">
										<input type="submit" value="Subscribe" class="submit px-3">
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div>
		<footer class="ftco-footer ftco-bg-dark ftco-section">
			<div class="container">
				<div class="row mb-5">
					<div class="col-md">
						<div class="ftco-footer-widget mb-4">
							<h2 class="ftco-heading-2">Hotel Search</h2>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
								<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
								<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
								<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
							</ul>
						</div>
					</div>
					<div class="col-md">
						<div class="ftco-footer-widget mb-4 ml-md-5">
							<h2 class="ftco-heading-2">Information</h2>
							<ul class="list-unstyled">
								<li><a ui-sref="about" class="py-2 d-block">About</a></li>
								<li><a href="#" class="py-2 d-block">Service</a></li>
								<li><a href="#" class="py-2 d-block">Terms and Conditions</a></li>
								<li><a href="#" class="py-2 d-block">Become a partner</a></li>
								<li><a href="#" class="py-2 d-block">Best Price Guarantee</a></li>
								<li><a href="#" class="py-2 d-block">Privacy and Policy</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md">
						<div class="ftco-footer-widget mb-4">
							<h2 class="ftco-heading-2">Customer Support</h2>
							<ul class="list-unstyled">
								<li><a href="#" class="py-2 d-block">FAQ</a></li>
								<li><a href="#" class="py-2 d-block">Payment Option</a></li>
								<li><a href="#" class="py-2 d-block">Booking Tips</a></li>
								<li><a href="#" class="py-2 d-block">How it works</a></li>
								<li><a ui-sref="contact" class="py-2 d-block">Contact Us</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md">
						<div class="ftco-footer-widget mb-4">
							<h2 class="ftco-heading-2">Have a Questions?</h2>
							<div class="block-23 mb-3">
								<ul>
									<li><span class="icon icon-map-marker"></span><span class="text"> BasunDhara R/A, Dhaka, Bangladesh</span></li>
									<li><a href="#"><span class="icon icon-phone"></span><span class="text">+88017.........</span></a></li>
									<li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 text-center">

						<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
						</div>
					</div>
				</div>
			</footer>
		</div>

		<script src="frontend/jquery-3.2.1.min.js" type="text/javascript"></script>	
		<script src="frontend/angular.min.js"></script>
		<script src="frontend/ocLazyLoad.min.js"></script>
		<script src="frontend/angular-ui-router.js"></script>   
		<script src="frontend/main.js" type="text/javascript"></script>
		<script src="frontend/routes.js" type="text/javascript"></script>   
		<script src="frontend/toastr.min.js" type="text/javascript"></script>	
		<script src="frontend/bootstrap.min.js"></script>
		<script src="frontend/sweetalert.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>

		<!-- Theme Plugin JS Start -->

		<script src="frontend/js/jquery.min.js"></script>
		<script src="frontend/js/jquery-migrate-3.0.1.min.js"></script>
		<script src="frontend/js/popper.min.js"></script>
		<script src="frontend/js/bootstrap.min.js"></script>
		<script src="frontend/js/jquery.easing.1.3.js"></script>
		<script src="frontend/js/jquery.waypoints.min.js"></script>
		<script src="frontend/js/jquery.stellar.min.js"></script>
		<script src="frontend/js/owl.carousel.min.js"></script>
		<script src="frontend/js/jquery.magnific-popup.min.js"></script>
		<script src="frontend/js/aos.js"></script>
		<script src="frontend/js/jquery.animateNumber.min.js"></script>
		<script src="frontend/js/bootstrap-datepicker.js"></script>
		<script src="frontend/js/scrollax.min.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
		<script src="frontend/js/google-map.js"></script>
		<script src="frontend/js/mainTheme.js"></script>

		<!-- Theme Plugin JS End -->
	</body>
	</html>