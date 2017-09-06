<?php
require('Tools.php');
require('Form.php');
require('Library.php');

use DWA\Form;
use DWA\Tools;

$form = new Form($_GET);
$library = new Library('books.json');

Tools::dd([1,2,3]);


# Values
$haveResults = true;
$searchTerm = $form->get('searchTerm', '');
$caseSensitive = $form->isChosen('caseSensitive');

if($form->isSubmitted()) {

    ## Validate!

    $errors = $form->validate([
        'searchTerm' => 'required|alpha',
    ]);

    $books = $library->getBooksByTitle($searchTerm, $caseSensitive);

    if(count($books) == 0)
        $haveResults = false;

}
