<div class="widget-box">
	<div class="widget-header">
		<h4 class="widget-title">Info</h4>
	</div>
	<div class="widget-body">

		<div class="form-group">

			<div class="col-sm-12">
				{{ Form::label('title', 'Title', ['class' => 'control-label']) }}
				{{ Form::text('title', null, ['class' => 'col-sm-12']) }}
			</div>

		</div>

		{{ Form::hidden('body', null, ['id' => 'blogPostBody']) }}

		{{ Form::label('body', 'Body', ['class' => 'control-label']) }}
		<div class="widget-box widget-color-green">
			<div class="widget-header widget-header-small">  </div>

			<div class="widget-body">
				<div class="widget-main no-padding">
					<div class="wysiwyg-editor" id="editor"></div>
				</div>
			</div>
		</div>
	</div>
</div>