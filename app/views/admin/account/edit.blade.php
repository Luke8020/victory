@extends('admin.layouts.main')

@section('page-content')

	<div class="tabbable">
		<ul class="nav nav-tabs padding-18">
			<li class="active">
				<a data-toggle="tab" href="#info">
					Info
				</a>
			</li>

			<li>
				<a data-toggle="tab" href="#password">
					Password
				</a>
			</li>
		</ul>

		<div class="tab-content no-border padding-24">

			<div id="info" class="tab-pane in active">

				{{ Form::model($user, ['route' => 'account_update_path', 'class' => 'form-horizontal']) }}

					<div class="form-group">
						{{ Form::label('first_name', 'First Name', ['class' => 'col-sm-2 control-label no-padding-right']) }}

						<div class="col-sm-8">
							{{ Form::text('first_name', null, ['class' => 'col-sm-12']) }}
						</div>
					</div>

					<div class="form-group">
						{{ Form::label('last_name', 'Last Name', ['class' => 'col-sm-2 control-label no-padding-right']) }}

						<div class="col-sm-8">
							{{ Form::text('last_name', null, ['class' => 'col-sm-12']) }}
						</div>
					</div>

					<div class="form-group">
						{{ Form::label('email', 'Email Address', ['class' => 'col-sm-2 control-label no-padding-right']) }}

						<div class="col-sm-8">
							{{ Form::email('email', null, ['class' => 'col-sm-12']) }}
						</div>
					</div>

					<div class="space-20"></div>

					<div class="text-center">
						<button type="submit" class="btn btn-lg btn-success">
							<i class="ace-icon fa fa-user"></i>
							Update info
						</button>
					</div>

				{{ Form::close() }}

			</div>

			<div id="password" class="tab-pane">

				{{ Form::open(['route' => 'password_update_path', 'files' => true, 'class' => 'form-horizontal']) }}

					<div class="form-group">
						{{ Form::label('current_password', 'Current Password', ['class' => 'col-sm-4 control-label no-padding-right']) }}

						<div class="col-sm-6">
							{{ Form::password('current_password', ['class' => 'col-sm-12']) }}
						</div>
					</div>

					<div class="form-group">

						{{ Form::label('password', 'New Password', ['class' => 'col-sm-4 control-label no-padding-right']) }}

						<div class="col-sm-6">
							{{ Form::password('password', ['class' => 'col-sm-12']) }}
						</div>
					</div>

					<div class="form-group">

						{{ Form::label('password_confirmation', 'Confirm New Password', ['class' => 'col-sm-4 control-label no-padding-right'])}}

						<div class="col-sm-6">
							{{ Form::password('password_confirmation', ['class' => 'col-sm-12']) }}
						</div>
					</div>

					<div class="space-20"></div>

					<div class="text-center">
						<button type="submit" class="btn btn-lg btn-success">
							<i class="ace-icon fa fa-lock"></i>
							Update Password
						</button>
					</div>

				{{ Form::close() }}
			</div>

			

		</div>
	</div>

@stop