<!DOCTYPE html>
<html lang="en">
<head>
	<title>Labs - Design Studio</title>
	<meta charset="UTF-8">
	<meta name="description" content="Labs - Design Studio">
	<meta name="keywords" content="lab, onepage, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,700|Roboto:300,400,700" rel="stylesheet">
	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}"/>
	<link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}"/>
	<link rel="stylesheet" href="{{asset('assets/css/owl.carousel.css')}}"/>
	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}"/>
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}"/>
</head>
<body>
    <!-- Page Preloder -->
	<div id="preloder">
		<div class="loader">
			<img src="img/logo.png" alt="">
			<h2>Loading.....</h2>
		</div>
	</div>
<!-- Page Preloder end -->
<!-- Header -->
	<header class="header-section">
		<div class="logo">
			<img src="img/logo.png" alt=""><!-- Logo -->
		</div>
		<!-- Navigation -->
		<div class="responsive"><i class="fa fa-bars"></i></div>
		<nav>
			<ul class="menu-list">
				<li class="active"><a href="index.html">Home</a></li>
				<li><a href="services.html">Services</a></li>
				<li><a href="blog.html">Blog</a></li>
				<li><a href="contact.html">Contact</a></li>
			</ul>
		</nav>
	</header>
<!-- Header end -->
<!-- Composant -->
    @yield('content')
<!-- Composant end -->
<!-- Footer  -->
<!-- Footer end -->

	<!--====== Javascripts & Jquery ======-->
	<script src="{{asset('assets/js/jquery-2.1.4.min.js')}}"></script>
	<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('assets/js/magnific-popup.min.js')}}"></script>
	<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('assets/js/circle-progress.min.js')}}"></script>
	<script src="{{asset('assets/js/main.js')}}"></script>
</body>
</html>


















