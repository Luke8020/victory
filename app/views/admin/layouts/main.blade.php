@extends('admin.layouts.default')

@section('stylesheets')

	@yield('page-stylesheets')

@stop

@section('content')

<body class="no-skin">

	@include('admin.layouts.partials._navbar')
	
	<div class="main-container" id="main-container">
		<div class="main-content">

			<div class="breadcrumbs" id="breadcrumbs">

				<ul class="breadcrumb">
					<li>
						<i class="ace-icon fa fa-home home-icon"></i>
						<a href="/admin">Home</a>
					</li>

					@foreach($breadcrumbs as $breadcrumb)
						<li class="{{ $breadcrumb['class'] }}">

							@if ($breadcrumb['class'] == 'active')
								{{ $breadcrumb['title'] }}
							@else
								<a href="{{ $breadcrumb['location'] }}">{{ $breadcrumb['title'] }}</a>
							@endif

						</li>
					@endforeach
				</ul>

			</div>

			<div class="page-content">
				
				<div class="page-content-area">
					<div class="page-header">
						<h1>
							{{ $pageName }}
							<small>
								<i class="ace-icon fa fa-angle-double-right"></i>
								{{ $pageDescription }}
							</small>
						</h1>
					</div>
					<div class="row">
						<div class="col-xs-12">

							@yield('page-content')

						</div>
					</div>
				</div>
			</div>
		</div>

		<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
			<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
		</a>
	</div>
@stop

@section('scripts')	

	<script src="{{ asset('admin-assets/js/bootstrap.min.js') }}"></script>

	@yield('page-scripts')
	
	<script src="{{ asset('admin-assets/js/ace-elements.min.js') }}"></script>
	<script src="{{ asset('admin-assets/js/ace.min.js') }}"></script>

	@yield('inline-scripts')

@stop