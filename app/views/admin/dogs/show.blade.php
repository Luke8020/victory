@extends('admin.layouts.main')

@section('page-content')

	<div class="user-profile row">
		<div class="col-xs-12 col-sm-3 center">
			<div>
				<span class="profile-picture">
					<img class="img-responsive" alt="{{ $dog->name }}" src="{{ $dog->present()->mainPicture() }}" />
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

			<div class="space-10"></div>

			<div class="text-center">
				<a href="/admin/dogs/{{ $dog->id }}/edit" class="btn btn-lg btn-info">
					<i class="ace-icon fa fa-pencil"></i>
					Edit {{ $dog->name }}'s profile
				</a>

				{{ Form::open(['name' => 'deleteForm', 'style' => 'display:inline']) }}

					<button type="button" onClick="deleteItem()" class="btn btn-lg btn-danger">
						<i class="ace-icon fa fa-trash-o"></i>
						Remove {{ $dog->name }}
					</button>

				{{ Form::close() }}
			</div>

			<div class="space-10"></div>
			
			<div class="profile-user-info profile-user-info-striped">
				<div class="profile-info-row">
					<div class="profile-info-name"> Name </div>

					<div class="profile-info-value">
						<span>{{ $dog->name }}</span>
					</div>
				</div>

				<div class="profile-info-row">
					<div class="profile-info-name"> Breed </div>

					<div class="profile-info-value">
						<span>{{ $dog->breed }}</span>
					</div>
				</div>

				<div class="profile-info-row">
					<div class="profile-info-name"> Gender </div>

					<div class="profile-info-value">
						<span>{{ $dog->present()->gender }}</span>
					</div>
				</div>

				<div class="profile-info-row">
					<div class="profile-info-name"> About </div>

					<div class="profile-info-value">
						<span>{{ $dog->about }}</span>
					</div>
				</div>

			</div>
		</div>
	</div>

	<div class="hr hr-18 dotted hr-double"></div>

	<h3 class="header smaller lighter blue">Pictures of {{ $dog->name }}</h3>

	<div class="space-20"></div>

	@if ( !count($dog->pictures) )

		<div class="text-center">
			<h4 class="text-warning">No other pictures of {{ $dog->name }}...</h4>
		</div>

	@endif

	<ul class="ace-thumbnails clearfix">

		@foreach($dog->pictures as $picture)

			<li>
				<img width="150" height="150" src="{{ $picture->present()->picturePath('dogs') }}" alt="" class="img-responsive" />
			</li>

		@endforeach

	</ul>

	<div class="space-20"></div>

	<div class="hr hr-18 dotted hr-double"></div>

	<h3 class="header smaller lighter blue">{{ $dog->name }}'s Pedigree</h3>

	<div class="space-10"></div>

	<div class="row">
		<table class="col-sm-12">
			<tbody class="text-center">

				<?php $countFirst = 0; $countSecond = 0; $countThird = 0; $countFourth = 0; ?>

				@foreach(range(0,15) as $index)

					@if ($index == 0 || $index == 8)

						<tr>
							<td rowspan='8'>
								{{ $dog->present()->presentable($dog[$pedigree[0][$countFirst]]) }}
							</td>
							<td rowspan='4'>
								{{ $dog->present()->presentable($dog[$pedigree[1][$countSecond]]) }}
							</td>
							<td rowspan='2'>
								{{ $dog->present()->presentable($dog[$pedigree[2][$countThird]]) }}
							</td>
							<td>
								{{ $dog->present()->presentable($dog[$pedigree[3][$countFourth]]) }}
							</td>
						</tr>

						<?php $countFirst++; $countSecond++; $countThird++; $countFourth++; ?>

					@elseif ($index%4 == 0)

						<tr>
							<td rowspan='4'>
								{{ $dog->present()->presentable($dog[$pedigree[1][$countSecond]]) }}
							</td>
							<td rowspan='2'>
								{{ $dog->present()->presentable($dog[$pedigree[2][$countThird]]) }}
							</td>
							<td>
								{{ $dog->present()->presentable($dog[$pedigree[3][$countFourth]]) }}
							</td>
						</tr>

						<?php $countSecond++; $countThird++; $countFourth++; ?>

					@elseif ($index%2 == 0)

						<tr>
							<td rowspan='2'>
								{{ $dog->present()->presentable($dog[$pedigree[2][$countThird]]) }}
							</td>

							<td>
								{{ $dog->present()->presentable($dog[$pedigree[3][$countFourth]]) }}
							</td>
						</tr>

						<?php $countThird++; $countFourth++; ?>

					@elseif ($index%2 != 0)

						<tr>
							<td>
								{{ $dog->present()->presentable($dog[$pedigree[3][$countFourth]]) }}
							</td>
						</tr>

						<?php $countFourth++; ?>

					@endif

				@endforeach
			</tbody>
		</table>
	</div>
	
@stop

@section('page-scripts')

	<script src="{{ asset('admin-assets/js/bootbox.min.js') }}"></script>

@stop

@section('inline-scripts')

	@include('admin.layouts.partials._confirm_delete_scripts')
	
@stop