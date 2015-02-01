<script type="text/javascript">
	jQuery(function($){

		$('#editor').css({'height':'200px'}).ace_wysiwyg({
			toolbar_place: function(toolbar) 
			{
				return $(this).closest('.widget-box')
			       .find('.widget-header').prepend(toolbar)
				   .find('.wysiwyg-toolbar').addClass('inline');
			},
			toolbar:
			[
				null,
				'insertunorderedlist',
				'insertorderedlist',
				null,
				'justifyleft',
				'justifycenter',
				'justifyright'
			],
			speech_button: false
		});

		var body = $("#blogPostBody").val();
		$("#editor").html(body);

		$('#submit-btn').on('click', function() 
		{
			var body = $("#editor").html();
			$("#blogPostBody").val(body);
			postForm.submit();
		});

	});
</script>