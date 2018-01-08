<?php

#echo '<pre>';
#var_dump($_GET);
#echo '</pre>';

$contestants = [];

var_dump($_GET);

foreach($_GET as $inputName => $contestantsName) {

    if($contestantsName != "") {
        $coin = rand(0,1);

        if($coin == 0) {
            $results = 'loser';
        }
        else {
            $results = 'winner';
        }

        $contestants[$contestantsName] = $results;
    }

}
