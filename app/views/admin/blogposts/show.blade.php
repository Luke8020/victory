@extends('admin.layouts.main')

@section('page-content')

	<div class="user-profile row">
		<div class="col-xs-12 col-sm-3 center">
			<div>
				<span class="profile-picture">
					<img class="img-responsive" alt="{{ $blogPost->title }}" src="{{ $blogPost->present()->mainPicture() }}" />
				</span>

				<div class="space-4"></div>

				<div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
					<div class="inline position-relative">
						<span class="white">{{ $blogPost->title }}</span>
					</div>
				</div>
			</div>
		</div>

		<div class="col-xs-12 col-sm-9">

			<div class="space-10"></div>

			<div class="text-center">
				<a href="/admin/blogposts/{{ $blogPost->id }}/edit" class="btn btn-lg btn-info">
					<i class="ace-icon fa fa-pencil"></i>
					Edit {{ $blogPost->title }}'s details
				</a>

				{{ Form::open(['name' => 'deleteForm', 'style' => 'display:inline']) }}

					<button type="button" onClick="deleteItem()" class="btn btn-lg btn-danger">
						<i class="ace-icon fa fa-trash-o"></i>
						Remove {{ $blogPost->title }}
					</button>

				{{ Form::close() }}
			</div>

			<div class="space-10"></div>
			
			<div class="profile-user-info profile-user-info-striped">
				<div class="profile-info-row">
					<div class="profile-info-name"> Title </div>

					<div class="profile-info-value">
						<span>{{ $blogPost->title }}</span>
					</div>
				</div>

				<div class="profile-info-row">
					<div class="profile-info-name"> Body </div>

					<div class="profile-info-value">
						<span>{{ $blogPost->body }}</span>
					</div>
				</div>

			</div>
		</div>
	</div>

	<div class="hr hr-18 dotted hr-double"></div>

	<h3 class="header smaller lighter blue">Pictures for {{ $blogPost->title }}</h3>

	<div class="space-20"></div>

	@if ( !count($blogPost->pictures) )

		<div class="text-center">
			<h4 class="text-warning">No other pictures for {{ $blogPost->name }}...</h4>
		</div>

	@endif

	<ul class="ace-thumbnails clearfix">

		@foreach($blogPost->pictures as $picture)

			<li>
				<img width="150" height="150" src="{{ $picture->present()->picturePath('blog') }}" alt="" class="img-responsive" />
			</li>

		@endforeach

	</ul>
	
@stop

@section('page-scripts')

	<script src="{{ asset('admin-assets/js/bootbox.min.js') }}"></script>

@stop

@section('inline-scripts')

	@include('admin.layouts.partials._confirm_delete_scripts')
	
@stop