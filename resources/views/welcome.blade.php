<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-ng-app="hotelUserApp">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Hotel Booking</title>

	<link rel="stylesheet" href="frontend/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="frontend/toastr.min.css">  
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="frontend/sweetalert.min.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css" rel="stylesheet" />

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

	<!-- Styles -->



	<link rel="icon" href="frontend/img/icon_travel.png" type="image/png">

  

  <link rel="stylesheet" href="frontend/themify-icons.css">
  <link rel="stylesheet" href="frontend/style.css">
  <link rel="stylesheet" href="frontend/owl.theme.default.min.css">
  <link rel="stylesheet" href="frontend/owl-carousel/owl.carousel.min.css">
  <link rel="stylesheet" href="frontend/flaticon.css">
  <link rel="stylesheet" href="frontend/nice-select.css">

  <link rel="stylesheet" href="css/style.css">

</head>
<body ng-controller="AppController">
	<div style="background-color:steelblue" >
		  <header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container box_1620">
          <a class="navbar-brand logo_h" href="index.html"><img src="fronted/img/logo.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <div padding-left: 800px class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav justify-content-end">
              <li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li> 
              <li class="nav-item"><a class="nav-link" href="about.html">About</a></li> 
              <li class="nav-item"><a class="nav-link" href="package.html">Packages</a></li>
              <li class="nav-item"><a class="nav-link" href="package.html">Search</a></li>
              <li class="nav-item"><a class="nav-link" href="package.html">Blog</a></li>
              <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
              <li class="nav-item"><a class="nav-link" href="package.html">Login</a></li>
              <li class="nav-item"><a class="nav-link" href="contact.html">Sign Up</a></li>
            </ul>

           
          </div> 
        </div>
      </nav>
    </div>
	</div>










	<div >
		<div ui-view> </div>
	</div>
	<div>
		



			<div style="background-color:steelblue" >
		  <header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container box_1620">
          <a class="navbar-brand logo_h" href="index.html"><img src="fronted/img/logo.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <div padding-left: 800px class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav justify-content-end">
              <li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li> 
              <li class="nav-item"><a class="nav-link" href="about.html">About</a></li> 
              <li class="nav-item"><a class="nav-link" href="package.html">Packages</a></li>
              <li class="nav-item"><a class="nav-link" href="package.html">Search</a></li>
              <li class="nav-item"><a class="nav-link" href="package.html">Blog</a></li>
              <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
              <li class="nav-item"><a class="nav-link" href="package.html">Login</a></li>
              <li class="nav-item"><a class="nav-link" href="contact.html">Sign Up</a></li>
            </ul>

           
          </div> 
        </div>
      </nav>
    </div>
	</div>
	</div>
	<script src="frontend/jquery.min.js" type="text/javascript"></script>
	<script src="frontend/angular.min.js"></script>
	<script src="frontend/ocLazyLoad.min.js"></script>
	<script src="frontend/angular-ui-router.js"></script>   
	<script src="frontend/main.js" type="text/javascript"></script>
	<script src="frontend/routes.js" type="text/javascript"></script>   
	<script src="frontend/toastr.min.js" type="text/javascript"></script>	
	<script src="frontend/bootstrap.min.js"></script>
	<script src="frontend/sweetalert.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>


	<script src="frontend/jquery-3.2.1.min.js"></script>
  <script src="frontend/bootstrap.bundle.min.js"></script>
  <script src="frontend/owl.carousel.min.js"></script>
  <script src="frontend/jquery.nice-select.min.js"></script>
  <script src="frontend/jquery.ajaxchimp.min.js"></script>
  <script src="frontend/mail-script.js"></script>
  <script src="frontend/skrollr.min.js"></script>
  
</body>
</html>
