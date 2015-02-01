<div class="widget-box">
	<div class="widget-header">
		<h4 class="widget-title">Other Pictures</h4>
	</div>
	<div class="widget-body">

		<div class="form-group">
			<div class="col-xs-12">
				{{ Form::file('pictures[]', ['id' => 'multiple-file-input', 'multiple' => true]) }}
			</div>
		</div>

	</div>
</div>