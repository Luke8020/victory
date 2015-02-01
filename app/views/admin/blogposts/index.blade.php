@extends('admin.layouts.main')

@section('page-content')

<ul class="ace-thumbnails clearfix">

		@foreach($blogPosts as $blogPost)

			<li>
				<a href="blogposts/{{ $blogPost->id }}">
					<img width="150" height="150" src="{{ $blogPost->present()->mainPicture() }}" alt="" class="img-responsive" />
					<div class="text">
						<div class="inner">{{ $blogPost->title }}</div>
					</div>
				</a>
			</li>

		@endforeach

	</ul>

@stop