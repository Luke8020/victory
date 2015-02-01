@extends('admin.layouts.main')

@section('page-stylesheets')

	<link rel="stylesheet" href="{{ asset('admin-assets/css/cropper.min.css') }}" />

@stop

@section('page-content')

	<div class="tabbable">
		<ul class="nav nav-tabs padding-18">
			<li class="active">
				<a data-toggle="tab" href="#main-picture">
					Main Picture
				</a>
			</li>

			<li>
				<a data-toggle="tab" href="#pictures">
					Pictures
				</a>
			</li>
		</ul>

		<div class="tab-content no-border padding-24">

			<div id="main-picture" class="tab-pane in active">

				{{ Form::open(['route' => ['puppy_update_path', $puppy->id], 'files' => true, 'class' => 'form-horizontal']) }}

					<div class="user-profile row">
						<div class="col-xs-12 col-sm-4 col-sm-offset-4 center">
							<span class="profile-picture">
								<img class="img-responsive" src="{{ $puppy->present()->mainPicture() }}" />
							</span>
						</div>
					</div>

					<div class="space-20"></div>

					@include('admin.layouts.partials._main_picture_upload')

					<div class="space-10"></div>

					<div class="text-center">
						<button type="submit" class="btn btn-lg btn-success">
							<i class="ace-icon fa fa-save"></i>
							Update Main Picture
						</button>
					</div>

				{{ Form::close() }}
			</div>

			<div id="pictures" class="tab-pane">

				<div class="widget-box">
					<div class="widget-header">
						<h4 class="widget-title">Current Pictures</h4>
					</div>
					<div class="widget-body">

						@if ( !count($puppy->pictures) )

							<div class="text-center">
								<h4 class="text-warning">No current pictures added...</h4>
							</div>

						@endif

						<ul class="ace-thumbnails clearfix">

							@foreach($puppy->pictures as $picture)

								<li style="border:none">
									<img width="150" height="150" src="{{ $picture->present()->picturePath('puppies') }}" alt="" class="img-responsive" />

									<button type="button" onClick="deleteItem({{ $picture->id }})" class="btn btn-xs btn-danger col-xs-12">
										<i class="ace-icon fa fa-trash-o bigger-110"></i>
										Delete
									</button>
								</li>

							@endforeach

						</ul>
					</div>
				</div>

				<div class="space-20"></div>

				{{ Form::open(['route' => ['puppy_add_pictures_path', $puppy->id], 'files' => true, 'name' => 'addPictureForm', 'class' => 'form-horizontal']) }}

					@include('admin.layouts.partials._pictures_upload')

					<div class="space-10"></div>

					<div class="text-center">
						<button type="submit" class="btn btn-lg btn-success">
							<i class="ace-icon fa fa-save"></i>
							Add Pictures
						</button>
					</div>

				{{ Form::close() }}

				{{ Form::open(['route' => ['puppy_delete_pictures_path', $puppy->id], 'name' => 'deleteForm', 'class' => 'form-horizontal']) }}

					{{ Form::hidden('pictureId', null, ['id' => 'pictureId']) }}

				{{ Form::close() }}

			</div>

		</div>
	</div>

@stop

@section('page-scripts')

	<script src="{{ asset('admin-assets/js/cropper.min.js') }}"></script>
	<script src="{{ asset('admin-assets/js/bootbox.min.js') }}"></script>

@stop

@section('inline-scripts')

	@include('admin.layouts.partials._file_upload_scripts')
	@include('admin.layouts.partials._confirm_delete_scripts')
	
@stop