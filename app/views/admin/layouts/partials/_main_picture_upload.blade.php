<div class="widget-box">
	<div class="widget-header">
		<h4 class="widget-title">Main Picture</h4>
	</div>
	<div class="widget-body">

		{{ Form::hidden('dataX', null, ['id' => 'dataX']) }}
		{{ Form::hidden('dataY', null, ['id' => 'dataY']) }}
		{{ Form::hidden('dataW', null, ['id' => 'dataW']) }}
		{{ Form::hidden('dataH', null, ['id' => 'dataH']) }}

		<div class="form-group">
			<div class="col-xs-12 col-sm-10 col-sm-offset-1">
				{{ Form::file('main_picture', ['id' => 'file-input']) }}
			</div>
		</div>

		<div id="image-cropper-container" style="display:none">
			<div class="row">
					<div class="col-sm-5">
					<div class="bootstrap-modal-cropper">
						<img id="image-cropper" class="img-responsive" src="">
					</div>
				</div>

				<div class="col-sm-4 col-sm-offset-1">
					<div class="widget-box">
						<div class="widget-header">
							<h4 class="widget-title">Preview</h4>
						</div>

						<div class="widget-body">
					        <div class="eg-preview center">
					          	<div class="preview preview-md"></div>
					        </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>