<?php
    $arr =[26, 17, 136, 12, 79, 15];
    $result = 0;
    foreach ($arr as $elements){
        $result = $result + $elements * $elements;  //$result += $elements ** 2;
    }
    echo $result;