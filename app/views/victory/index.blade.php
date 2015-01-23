@extends('layouts.main')

@section('content')

	<body data-spy="scroll" data-target=".navbar-collapse">

		

		@include('partials._navbar')

		@include('partials.home._banner')

		@include('partials.home._puppies')

		@include('partials.home._dogs')

		@include('partials.home._blog')

		@include('partials.home._contact')

		@include('partials._footer')

@stop