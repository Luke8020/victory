@extends('admin.layouts.main')

@section('page-content')

	<div class="space-20"></div>

	<div class="text-center">
		<a href="/admin/create" class="btn btn-lg btn-success">
			<i class="ace-icon fa fa-plus"></i>
			Add New Dog
		</a>
	</div>

	<div class="space-20"></div>

	<ul class="ace-thumbnails clearfix">

		@include('flash::message')

		@foreach($dogs as $dog)

			<li>
				<a href="admin/dogs/{{ $dog->id }}">
					<img width="150" height="150" src="{{ asset('images/dogs/' . $dog->id . '.jpg') }}" alt="" class="img-responsive" />
					<div class="text">
						<div class="inner">{{ $dog->name }}</div>
					</div>
				</a>
			</li>

		@endforeach

	</ul>
@stop