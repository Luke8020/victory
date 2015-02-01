@extends('admin.layouts.main')

@section('page-content')

	<ul class="ace-thumbnails clearfix">

		@foreach($puppies as $puppy)

			<li>
				<a href="puppies/{{ $puppy->id }}">
					<img width="150" height="150" src="{{ asset('images/puppies/' . $puppy->id . '.jpg') }}" alt="" class="img-responsive" />
				</a>
			</li>

		@endforeach

	</ul>
@stop