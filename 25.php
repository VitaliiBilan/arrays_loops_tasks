<?php
$arr = [];
    for ($i = 0; $i < 10; $i++) {
        $arr[] = rand(1, 100);
    }

    echo '<pre>';
    print_r($arr);
    echo '</pre>';

    $Max = array_search(max($arr), $arr);
    $Min = array_search(min($arr), $arr);
    echo "Max:{$arr[$Max]}<br>";
    echo "Min:{$arr[$Min]}<br>";

    list($arr[$Min], $arr[$Max]) = [$arr[$Max], $arr[$Min]];
    echo '<p>New array:</p>';
    echo '<pre>';
    print_r($arr);
    echo '</pre>';