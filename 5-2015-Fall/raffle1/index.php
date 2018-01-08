<?php
error_reporting(-1); # Report all PHP errors
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Raffle v1</title>
	<?php require 'logic.php'; ?>
</head>
<body>

	<h1>Raffle v1</h1>


	<!-- Print the contestants array -->
	<?php foreach($contestants as $key => $value) { ?>
		<table>
			<tr>
				<td>
					<?php echo $key; ?>
				</td>
				<td>
					<?php echo $value; ?>
				</td>
			</tr>
		</table>
	<?php } ?>


	<!-- Bonus features! -->
	<br>
	<?php if($winner_count == 0) { ?>

		No winners this round :(

	<?php } elseif($winner_count > 1) { ?>

		It's a tie!

	<?php } ?>

	<p>
		<a href='index.php'>Play again...</a>
	</p>

</body>
</html>
