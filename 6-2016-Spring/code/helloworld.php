<!doctype html>
<html>
<head>

	<title>Hello World</title>
	<meta charset='utf-8'>

</head>
<body>

	<?php
	echo 'Hello World! You are visiting ';
	echo $_SERVER['SERVER_NAME'];
	?>

	<div class='form-group'>
    	<input
		type='checkbox'
		name='add_number'
		id='add_number'
		value="1" <?php if(!empty($_GET['add_number'])) { echo 'checked'; } ?>
		>
        <label for='add_number'>Add a number</label>
	</div>

</body>
</html>
