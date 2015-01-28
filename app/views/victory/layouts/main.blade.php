<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>Victory Great Danes</title>
		<link rel="shortcut icon" href="../favicon.png">

		<!-- Bootstrap -->
		<link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet" media="screen">
		<link href="{{ asset('/css/bootstrap-theme.min.css') }}" rel="stylesheet" media="screen">

		<!-- Custom CSS -->
		<link href="{{ asset('/css/style.css') }}" rel="stylesheet">

		<!-- Superslides CSS -->
		<link href="{{ asset('/css/superslides.css') }}" rel="stylesheet">

		<!-- Owl Carousel stylesheets -->
		<link href="{{ asset('/css/owl.carousel.css') }}" rel="stylesheet">
		<link href="{{ asset('/css/owl.theme.css') }}" rel="stylesheet">

		<!-- Fancybox -->
		<link href="{{ asset('/css/jquery.fancybox.css') }}" rel="stylesheet">

		<!-- Animate - necessary for Wow.js -->
		<link href="{{ asset('/css/animate.css') }}" rel="stylesheet">

		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700|Oranienbaum|PT+Serif:400italic" rel="stylesheet">

		<!-- Font Awesome Icons -->
		<link href="http://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.css" rel="stylesheet">

		<!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="../js/html5shiv.js"></script>
		<script src="../js/respond.min.js"></script>
		<![endif]-->
	</head>

	@include('victory.layouts.partials._navbar')

	@yield('content')

	@include('victory.layouts.partials._footer')

	<!-- Modernizr Plugin -->
	<script src="{{ asset('js/modernizr.custom.97074.js') }}"></script>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="{{ asset('js/jquery-1.10.2.min.js') }}"></script>

	<!-- Bootstrap Plugins -->
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>

	<!-- Retina Plugin -->
	<script src="{{ asset('js/retina-1.1.0.min.js') }}"></script>

	<!-- Superslides Plugin -->
	<script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
	<script src="{{ asset('js/jquery.animate-enhanced.min.js') }}"></script>
	<script src="{{ asset('js/jquery.superslides.js') }}"></script>

	<!-- Owl Carousel Plugin -->
	<script src="{{ asset('js/owl.carousel.js') }}"></script>

	<!-- Scrolly Plugin -->
	<script src="{{ asset('js/jquery.scrolly.js') }}"></script>

	<!-- MixItUp Plugin -->
	<script src="{{ asset('js/jquery.mixitup.min.js') }}"></script>

	<!-- Fancybox Plugin -->
	<script src="{{ asset('js/wow.min.js') }}"></script>
	<script>
		new WOW().init();
	</script>

	<!-- WOW Plugin -->
	<script src="{{ asset('js/jquery.fancybox.js') }}"></script>

	<!-- jQuery Settings -->
	<script src="{{ asset('js/settings.js') }}"></script>
</body>
</html>