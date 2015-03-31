$(document).ready(function() {
	
	$('#view-deletebtn').click(function() {

		var doDelete = confirm("Are you sure you want to delete this address?");

		if (doDelete == true) {

			$.ajax({
				method: "POST",
				url:    $("#content").attr('data-url') + '/delete',
				data:   {'id': $('#view').attr('data-id')}
			})
			.done(function(result) {

				var result = Boolean(result);

				if (result == true) {
					window.location = $("#content").attr('data-url');
				} else {
					alert('There was an issue deleting this addresss');
				}
			});
		}
	});
});