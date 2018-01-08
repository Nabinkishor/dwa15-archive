<?php

/**
* Level: Easy
* Solultion with simple if statement,
* Requires no knowledge of built-in php functions
*/
function removeVowels1($letters) {

    # Empty array to accumulate valid letter
    $consonants = [];

    foreach($letters as $letter) {

        if($letter != 'a' and $letter != 'e' and $letter != 'i' and $letter != 'o' and $letter != 'u')
            # Append this letter to our accumulator
            $consonants[] = $letter;

    }

    return $consonants;
}


/**
* Level: Easy -> Moderate
* Uses PHP's built-in function in_array
* Slightly more elegant than removeVowels1, but same basic principle: loop + accumulate
* Assumptions:
* Most programming languages have methods to check for existance of a value in a data structure.
* This should not be unfamiliar to anyone with prior programming experience.
*
* Furthermore, at the end of the array notes, common array-related functions were listed, including `in_array`,
* so students should have been familiar that array-manipulation functions like this existed.
*
* In lecture 2, we covered how to to use PHP documentation, and given the open-book nature of the quiz
* it would be perfectly acceptable to refer to documentation to make sure you're using a given built-in function correctly
*/
function removeVowels2($letters) {

    $results = [];

    foreach($letters as $letter) {
        if(!in_array($letter, ['a','e','i','o','u']))
            $results[] = $letter;
    }

    return $results;
}


/**
* Level: Easy -> Moderate
* Uses PHP's built-in function unset
* Same assumptions as listed for removeVowels2 could be made here.
*/
function removeVowels3($letters) {

    foreach($letters as $letter) {
        if($letter == 'a' or $letter == 'e' or $letter == 'i' or $letter == 'o' or $letter == 'u')
            unset($letters[$letter]);
    }

    return $letters;
}


/**
* Level: Advanced
* Most programming languages have map/filter/reduce methods; not unique to PHP.
* Is trickier because it involves a callback function. Not an expected solution.
*/
function removeVowels4($letters) {
    return array_filter($letters, function($letter) {
        return $letter != 'a' and $letter != 'e' and $letter != 'i' and $letter != 'o' and $letter != 'u';
    });
}


/**
* Test above functions
*/
$report = '';
$input = ['a','p','p','l','e'];
$expected = ['p','p','l'];

for($i = 1; $i <= 4; $i++) {

    # Test
    $functionToTest = 'removeVowels'.$i;
    $results = $functionToTest($input);

    # Compare expected answer to results
    $differences = array_diff($expected, $results);

    $report .= "<br>removeVowels{$i} ";

    # If there are 0 differences between expected and results, the test passed
    $report .= (count($differences) == 0) ? 'passed' : 'failed';

}
?>

<?=$report?>
