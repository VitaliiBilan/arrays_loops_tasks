<?php
    $week = [
        1 =>'Monday',
        2 => 'Tuesday',
        3 => 'Wenthday',
        4 => 'Thurthday',
        5 => 'Friday',
        6 => 'Saturday',
        7 => 'Sunday',
    ];
    $day = $week[date('N')];
    foreach ($week as $value){
        echo $value == $day ? "<em>{$value}</em><br>" : "{$value}<br>";
    }