<?php
    $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
    foreach ($arr as $key => $value) {
        echo $value;
        if (($key + 1) % 3){
            echo ', ';
        } else {
            echo "<br>";
        }
    }