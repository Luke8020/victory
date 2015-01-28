<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Victory Great Danes</title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="{{ asset('admin-assets/css/bootstrap.min.css') }}" />
		<link rel="stylesheet" href="{{ asset('admin-assets/css/font-awesome.min.css') }}" />

		@yield('stylesheets')

		<!-- text fonts -->
		<link rel="stylesheet" href="{{ asset('admin-assets/css/ace-fonts.css') }}" />

		<!-- ace styles -->
		<link rel="stylesheet" href="{{ asset('admin-assets/css/ace.min.css') }}" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="{{ asset('admin-assets/css/ace-part2.min.css') }}" />
		<![endif]-->
		<link rel="stylesheet" href="{{ asset('admin-assets/css/ace-skins.min.css') }}" />

		<!-- ace settings handler -->
		<script src="{{ asset('admin-assets/js/ace-extra.min.js') }}"></script>

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="{{ asset('admin-assets/css/ace-ie.min.css') }}" />
		<![endif]-->
		<link rel="stylesheet" href="{{ asset('admin-assets/css/ace.onpage-help.css') }}" />

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lt IE 9]>
		<script src="{{ asset('admin-assets/js/html5shiv.js') }}"></script>
		<script src="{{ asset('admin-assets/js/respond.min.js') }}"></script>
		<![endif]-->
		
	</head>

		@yield('content')

		<!--[if !IE]> -->
		<script type="text/javascript">
			window.jQuery || document.write("<script src='{{ asset('admin-assets/js/jquery.min.js') }}'>"+"<"+"/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
		<script type="text/javascript">
		 window.jQuery || document.write("<script src='{{ asset('admin-assets/js/jquery1x.min.js') }}'>"+"<"+"/script>");
		</script>
		<![endif]-->

		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src=''{{ asset('admin-assets/js/jquery.mobile.custom.min.js') }}'>"+"<"+"/script>");
		</script>

		@yield('scripts')
	</body>
</html>
