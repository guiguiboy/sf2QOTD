$(document).ready(function() {

	$('.vote_link').click(function (event) {
		event.preventDefault();
		$.ajax({
			url: event.target.href,
			success: function (response, status)
			{
				if (response.status !== undefined && response.status == 'OK'){
					spanElement      = $(event.target).parent().children('span');
					spanElement.text(response.value);
				}
				else if (response.status !== undefined && response.status == 'NOK'){
					alert(response.message);
				}
			}
		});
	});
});