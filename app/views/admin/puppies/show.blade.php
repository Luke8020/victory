@extends('admin.layouts.main')

@section('page-content')

	<div class="user-profile row">
		<div class="col-xs-12 col-sm-3 center">
			<div>
				<span class="profile-picture">
					<img class="img-responsive" alt="Puppy" src="{{ $puppy->present()->mainPicture() }}" />
				</span>

			</div>
		</div>

		<div class="col-xs-12 col-sm-9">

			<div class="space-10"></div>

			<div class="text-center">
				<a href="/admin/puppies/{{ $puppy->id }}/edit" class="btn btn-lg btn-info">
					<i class="ace-icon fa fa-pencil"></i>
					Edit puppy's profile
				</a>

				{{ Form::open(['name' => 'deleteForm', 'style' => 'display:inline']) }}

					<button type="button" onClick="deleteItem()" class="btn btn-lg btn-danger">
						<i class="ace-icon fa fa-trash-o"></i>
						Remove puppy
					</button>

				{{ Form::close() }}
			</div>

			<div class="space-10"></div>
			
			<ul class="ace-thumbnails clearfix">

				@foreach($puppy->pictures as $picture)

					<li>
						<img width="150" height="150" src="{{ $picture->present()->picturePath('puppies') }}" alt="" class="img-responsive" />
					</li>

				@endforeach

			</ul>
		</div>
	</div>

@stop

@section('page-scripts')

	<script src="{{ asset('admin-assets/js/bootbox.min.js') }}"></script>

@stop

@section('inline-scripts')

	@include('admin.layouts.partials._confirm_delete_scripts')
	
@stop