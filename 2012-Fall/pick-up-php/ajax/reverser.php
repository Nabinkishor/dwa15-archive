<!DOCTYPE html>

<html>

<head>

	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
	<script type="text/javascript" src="jquery.form.js"></script>
	
	
	<script type='text/javascript'>
		
		$(document).ready(function() {
			
			var options = {
				beforeSend: function() {
					$('#results').html("Loading...");
				},
				success: function(response) {
					$('#results').html(response);
				},
			};
			
			$('#reverser').ajaxForm(options);
					
		});
		
	</script>


</head>


<body>

	<form id='reverser' method='POST' action='processor.php'>
		Enter your name:
		<input type='text' name='first_name'>
		<input type='submit' value='Reverse'>
		
	</form>
		
	<div id='results'></div>
		
</body>

</html>