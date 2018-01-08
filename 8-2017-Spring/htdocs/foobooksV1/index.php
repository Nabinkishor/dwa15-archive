<?php
require('getAllBooks.php');
?>

<!DOCTYPE html>
<html>
<head>

	<title>Foobooks</title>
	<meta charset='utf-8'>

    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet'>
	<link href='https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/flatly/bootstrap.min.css' rel='stylesheet'>
	<link href='css/styles.css' rel='stylesheet'>

</head>
<body>

    <h1>Foobooks</h1>

    <form method='GET' action='/'>

        <label for='searchTerm'>Search by title:</label>
        <input type='text' name='searchTerm' id='searchTerm' value='<?=sanitize($searchTerm)?>'>

        <input type='checkbox' name='caseSensitive' <?php if($caseSensitive) echo 'CHECKED' ?>>
        <label>case sensitive</label>

        <br>
        <input type='submit' class='btn btn-primary btn-small'>

    </form>


	<?php if($errors): ?>
		<div class='alert alert-danger'>
			<?php foreach($errors as $error): ?>
				<?=$error?><br>
			<?php endforeach; ?>
		</div>
	<?php else: ?>

		<?php if($searchTerm): ?>
	        <div class='alert alert-info'>Search by title: <?=sanitize($searchTerm)?></div>
	    <?php endif; ?>

	    <?php foreach($books as $title => $book): ?>

	        <div class='book'>
	            <h2><?=$title?></h2>

	            By <?=$book['author']?><br>

	            Published <?=$book['published']?>
	        </div>

	    <?php endforeach; ?>

		<?php if(!$haveResults): ?>
	        No books found
	    <?php endif; ?>

	<?php endif; ?>

</body>
</html>
