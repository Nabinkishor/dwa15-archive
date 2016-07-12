<!DOCTYPE html>
<html>
<head>
	<title>Raffle v1</title>
	<?php require 'logic.php'; ?>
</head>
<body>

	<h1>Raffle v1</h1>

	<form action='index.php' method='GET'>
		<input type='text' name='contestant1'><br>
		<input type='text' name='contestant2'><br>
		<input type='text' name='contestant3'><br>
		<input type='text' name='contestant4'><br>

		<input type='submit' value='Run the raffle!'>
	</form>

	<table border=1>
		<?php foreach($contestants as $name => $results): ?>
			<tr>
				<td><?php echo $name ?></td>
				<td><?php echo $results ?></td>
			</tr>
		<?php endforeach; ?>
	</table>

</body>
</html>
