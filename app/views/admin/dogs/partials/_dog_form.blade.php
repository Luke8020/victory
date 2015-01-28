
@include('admin.layouts.partials._errors')

<div class="form-group">
	{{ Form::label('name', 'Name', ['class' => 'col-sm-2 control-label no-padding-right']) }}

	<div class="col-sm-8">
		{{ Form::text('name', null, ['class' => 'col-sm-12']) }}
	</div>
</div>

<div class="form-group">
	{{ Form::label('weight', 'Weight', ['class' => 'col-sm-2 control-label no-padding-right']) }}

	<div class="col-sm-8">
		{{ Form::text('weight', null, ['class' => 'col-sm-12']) }}
	</div>
</div>

<div class="form-group">
	{{ Form::label('height', 'Height', ['class' => 'col-sm-2 control-label no-padding-right']) }}

	<div class="col-sm-8">
		{{ Form::text('height', null, ['class' => 'col-sm-12']) }}
	</div>
</div>

<div class="form-group">
	{{ Form::label('birthdate', 'Birth Date', ['class' => 'col-sm-2 control-label no-padding-right']) }}

	<div class="col-sm-8">
		<div class="input-group">
			{{ Form::text('birthdate', null, ['class' => 'form-control date-picker', 'data-date-format' => 'dd-mm-yyyy']) }}
			<span class="input-group-addon">
				<i class="fa fa-calendar bigger-110"></i>
			</span>
		</div>
	</div>
</div>

<div class="form-group">
	{{ Form::label('about', 'About', ['class' => 'col-sm-2 control-label no-padding-right']) }}

	<div class="col-sm-8">
		{{ Form::textarea('about', null, ['class' => 'col-sm-12']) }}
	</div>
</div>