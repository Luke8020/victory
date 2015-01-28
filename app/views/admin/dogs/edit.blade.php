@extends('admin.layouts.main')

@section('page-stylesheets')

	<link rel="stylesheet" href="{{ asset('admin-assets/css/jquery-ui.custom.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('admin-assets/css/datepicker.css') }}" />

@stop

@section('page-content')

	<div class="user-profile row">
		<div class="col-xs-12 col-sm-3 center">
			<div>
				<span class="profile-picture">
					<img class="img-responsive" alt="{{ $dog->name }}" src="{{ asset('images/dogs/' . $dog->id . '.jpg') }}" />
				</span>

				<div class="space-4"></div>

				<div class="text-center">
					<a href="/admin/dogs/{{ $dog->id }}/edit" class="btn btn-info">
						<i class="ace-icon fa fa-pencil"></i>
						Edit {{ $dog->name }}'s picture
					</a>
				</div>
			</div>
		</div>

		<div class="col-xs-12 col-sm-9">

			{{ Form::model($dog, ['class' => 'form-horizontal']) }}

				@include('admin.dogs.partials._dog_form')

				<div class="text-center">
					<button type="submit" class="btn btn-lg btn-success">
						<i class="ace-icon fa fa-save"></i>
						Update info
					</button>
				</div>

			{{ Form::close() }}
		</div>
	</div>
@stop

@section('page-scripts')

	<script src="{{ asset('admin-assets/js/jquery-ui.custom.min.js') }}"></script>
	<script src="{{ asset('admin-assets/js/jquery.ui.touch-punch.min.js') }}"></script>
	<script src="{{ asset('admin-assets/js/date-time/bootstrap-datepicker.min.js') }}"></script>

@stop

@section('inline-scripts')

	<script type="text/javascript">
		jQuery(function($) 
		{
			$('.date-picker').datepicker({
				autoclose: true,
				todayHighlight: true
			})
			//show datepicker when clicking on the icon
			.next().on(ace.click_event, function(){
				$(this).prev().focus();
			});
		
		});
	</script>
	
@stop