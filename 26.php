<?php
    $arr = [];
    for ($i = 0; $i < 10; $i++) {
        $arr[] = rand(1, 100);
    }
    echo '<pre>';
    print_r($arr);
    echo '</pre>';

    $mul = $arr[0];
    for ($i = 2; $i < count($arr); $i += 2) {
        if ($arr[$i] > 0) {
            $mul *= $arr[$i];
        }
    }
    echo "Парні індекси: {$mul}<br>";

    echo "Нe парні індекси: <br>";
    foreach ($arr as $key => $value) {
        if ($value > 0 && $key % 2) {
            echo "{$value}<br>";
        }
    }