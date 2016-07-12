<!DOCTYPE html>
<html>
<head>

	<title>PHP Clock Exercise</title>
	<meta charset='utf-8'>

	<link rel='stylesheet' href='styles.css' type='text/css'>

    <?php require('logic.php'); ?>


</head>
<body class='<?php echo $time_of_day ?>'>

    It is <?php echo $current_time ?>

    <img src='http://making-the-internet.s3.amazonaws.com/php-<?php echo $time_of_day; ?>.png'>

</body>
</html>
