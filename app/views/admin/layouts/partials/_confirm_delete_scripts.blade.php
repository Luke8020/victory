<script>

	function deleteItem(id)
	{
		bootbox.dialog({
			message: "<span class='text-danger'>This action cannot be undone</span>",
			title: "Are you sure?",
			buttons: {
			    danger: {
					label: "Yes, Delete",
					className: "btn-danger",
					callback: function() 
					{
						$('#pictureId').val(id);
						deleteForm.submit();
					}
			    },
				main: {
					label: "Delete",
					className: "btn-primary"
				}
			}
		});
	}

	
</script>