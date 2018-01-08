<?php

## Thu Feb 11, 2015 4:15pm

date_default_timezone_set('America/New_York');

$current_time = date('D M j, Y g:ia');

$hour = date('G');

# Morning between 5 and 11
# Afternoon between 11 and 16 (4pm)
# Evening between 16 and 20 (8pm)
# Night 16+

# Morning
if($hour >= 5 AND $hour < 11) {
    #echo "It is morning";
    $time_of_day = 'morning';
}
# Afternoon
elseif($hour >= 11 AND $hour < 16) {
    #echo "It is afternoon";
    $time_of_day = 'afternoon';
}
# Evening
elseif($hour >= 16 AND $hour < 20) {
    #echo "It is evening";
    $time_of_day = 'evening';
}
# Night
else {
    #echo "It is nighttime";
    $time_of_day = 'night';
}
?>
