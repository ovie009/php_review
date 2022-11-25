<?php
    $period = date('H');
    switch ($period) {
        case $period < 12:
            # code...
            $greeting = 'morning';
            break;

        case $period < 17:
            # code...
            $greeting = 'afternoon';
            break;

        case $period < 20:
            # code...
            $greeting = 'evening';
            break;

        case $period < 21:
            # code...
            $greeting = 'night';
            break;
        
        default:
            # code...
            break;
    }
    echo 'Good '.$greeting.' '.$_GET['user'].' hope you\'re having a nice day';
?>