<script type="text/javascript">
	jQuery(function($) 
	{
		$(document).bind('drop dragover', function (e) { e.preventDefault(); });
		/*********************************************
			FILE INPUTS INITIALIZATION
		*********************************************/
		var fileInputOptions = {
			style:'well',
			btn_choose:'Drop image files here or click to choose',
			btn_change:null,
			no_icon:'ace-icon fa fa-cloud-upload',
			droppable:false,
			'allowExt': ["jpeg", "jpg", "png", "gif" , "bmp"],
			'allowMime': ["image/jpg", "image/jpeg", "image/png", "image/gif", "image/bmp"],
			thumbnail:'small'
		};

		/*********************************************
			MAIN PICTURE FILE INPUT INITIALIZATION
		*********************************************/
		$('#file-input').ace_file_input(fileInputOptions);

		$('#file-input').ace_file_input('update_settings', {
			before_change : function(files, dropped) 
			{
				//LOAD IMAGE TO CROPPER
				var reader = new FileReader();
				reader.onload = function (e) 
				{
					$("#image-cropper").attr('src', e.target.result);
					initializeImageCropper();
				}
				reader.readAsDataURL(files[0]);
				return true;
			},
			before_remove : function() {
				$("#image-cropper").cropper("destroy");
				$('#image-cropper-container').hide();
				return true;
			},
			preview_error : function(filename, error_code) {
				console.log(filename + " " + error_code);
			}
		});

		$('#file-input').on('change', function() 
		{
			$("#file-input").prop("files", $(this).data('ace_input_files'));
		});
		/*********************************************
			OTHER PICTURES FILE INPUT INITIALIZATION
		*********************************************/
		$('#multiple-file-input').ace_file_input(fileInputOptions);

		$('#multiple-file-input').on('change', function() 
		{
			$("#multiple-file-input").prop("files", $(this).data('ace_input_files'));
		});

		/*********************************************
			MAIN PICTURE IMAGE CROPPER INITIALIZATION
		*********************************************/
		function initializeImageCropper()
		{
			$('#image-cropper-container').show();

			$("#image-cropper").cropper({
				multiple: true,
				data: {},
				aspectRatio: 1,
				preview: ".preview",
				done: function(data) 
				{
					$('#dataX').val(data.x);
					$('#dataY').val(data.y);
					$('#dataH').val(data.height);
					$('#dataW').val(data.width);
				}

			});
		};
	
	});
</script>