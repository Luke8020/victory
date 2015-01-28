@extends('admin.layouts.main')

@section('page-content')

	<div class="user-profile row">
		<div class="col-xs-12 col-sm-3 center">
			<div>
				<span class="profile-picture">
					<img class="img-responsive" alt="{{ $dog->name }}" src="{{ asset('images/dogs/' . $dog->id . '.jpg') }}" />
				</span>

				<div class="space-4"></div>

				<div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
					<div class="inline position-relative">
						<span class="white">{{ $dog->name }}</span>
					</div>
				</div>
			</div>
		</div>

		<div class="col-xs-12 col-sm-9">
			
			<div class="profile-user-info profile-user-info-striped">
				<div class="profile-info-row">
					<div class="profile-info-name"> Name </div>

					<div class="profile-info-value">
						<span>{{ $dog->name }}</span>
					</div>
				</div>

				<div class="profile-info-row">
					<div class="profile-info-name"> Birth Date </div>

					<div class="profile-info-value">
						<span>{{ $dog->birthdate }}</span>
					</div>
				</div>

				<div class="profile-info-row">
					<div class="profile-info-name"> Height </div>

					<div class="profile-info-value">
						<span>{{ $dog->height }}</span>
					</div>
				</div>

				<div class="profile-info-row">
					<div class="profile-info-name"> Weight </div>

					<div class="profile-info-value">
						<span>{{ $dog->weight }}</span>
					</div>
				</div>

				<div class="profile-info-row">
					<div class="profile-info-name"> About </div>

					<div class="profile-info-value">
						<span>{{ $dog->about }}</span>
					</div>
				</div>

			</div>

			<div class="space-20"></div>

			<div class="text-center">
				<a href="/admin/dogs/{{ $dog->id }}/edit" class="btn btn-lg btn-info">
					<i class="ace-icon fa fa-pencil"></i>
					Edit {{ $dog->name }}'s info
				</a>

				{{ Form::open(['style' => 'display:inline']) }}

					<button type="submit" class="btn btn-lg btn-danger">
						<i class="ace-icon fa fa-trash-o"></i>
						Remove {{ $dog->name }}
					</button>

				{{ Form::close() }}
			</div>
		</div>
	</div>

@stop