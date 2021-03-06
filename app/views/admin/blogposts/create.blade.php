@extends('admin.layouts.main')

@section('page-stylesheets')

	<link rel="stylesheet" href="{{ asset('admin-assets/css/cropper.min.css') }}" />

@stop

@section('page-content')

	{{ Form::open(['name' => 'postForm', 'files' => true, 'class' => 'form-horizontal']) }}

		@include('admin.layouts.partials._main_picture_upload')

		<div class="space-20"></div>

		@include('admin.blogposts.partials._post_form')

		<div class="space-20"></div>

		@include('admin.layouts.partials._pictures_upload')

		<div class="space-20"></div>

		<div class="text-center">
			<button type="button" id="submit-btn" class="btn btn-lg btn-success">
				<i class="ace-icon fa fa-save"></i>
				Submit
			</button>
		</div>

	{{ Form::close() }}

@stop

@section('page-scripts')
	
	<script src="{{ asset('admin-assets/js/jquery.hotkeys.min.js') }}"></script>
	<script src="{{ asset('admin-assets/js/bootstrap-wysiwyg.min.js') }}"></script>
	<script src="{{ asset('admin-assets/js/cropper.min.js') }}"></script>

@stop

@section('inline-scripts')

	@include('admin.layouts.partials._file_upload_scripts')
	@include('admin.blogposts.partials._editor_scripts')
	
@stop