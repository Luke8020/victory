
<div class="widget-box">
	<div class="widget-header">
		<h4 class="widget-title">Info</h4>
	</div>
	<div class="widget-body">

		<div class="form-group">
			{{ Form::label('breed', 'Breed', ['class' => 'col-sm-2 control-label no-padding-right']) }}

			<div class="col-sm-8">
				{{ Form::text('breed', null, ['class' => 'col-sm-12']) }}
			</div>
		</div>

		<div class="form-group">
			{{ Form::label('name', 'Name', ['class' => 'col-sm-2 control-label no-padding-right']) }}

			<div class="col-sm-8">
				{{ Form::text('name', null, ['class' => 'col-sm-12']) }}
			</div>
		</div>

		<div class="form-group">
			{{ Form::label('gender', 'Gender', ['class' => 'col-sm-2 control-label no-padding-right']) }}

			<div class="radio col-sm-8">
				<label>
					{{ Form::radio('is_male', '1', false, ['class' => 'ace']); }}
					<span class="lbl"> Male</span>
				</label>

				<label>
					{{ Form::radio('is_male', '0', false, ['class' => 'ace']); }}
					<span class="lbl"> Female</span>
				</label>
			</div>
		</div>

		<div class="form-group">
			{{ Form::label('about', 'About', ['class' => 'col-sm-2 control-label no-padding-right']) }}

			<div class="col-sm-8">
				{{ Form::textarea('about', null, ['class' => 'col-sm-12']) }}
			</div>
		</div>
	</div>
</div>