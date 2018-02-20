<?php
    $arr = [
        'green'=>'зеленый',
        'red'=>'красный',
        'blue'=>'голубой'
    ];
    foreach ($arr as $key => $value){
        echo "{$key} <br>";
    }
    foreach ($arr as $value){
        echo "{$value} <br>";
    }