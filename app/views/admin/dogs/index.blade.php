@extends('admin.layouts.main')

@section('page-content')

	<div class="col-xs-12">
		<ul class="ace-thumbnails clearfix">

			@foreach($dogs as $dog)

				<li>
					<a href="dogs/{{ $dog->id }}">
						<img width="150" height="150" src="{{ $dog->present()->mainPicture() }}" alt="" class="img-responsive" />
						<div class="text">
							<div class="inner">{{ $dog->name }}</div>
						</div>
					</a>
				</li>

			@endforeach

		</ul>
	</div>
@stop