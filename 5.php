<?php
    $arr = [
        'Коля' => 200,
        'Вася' => 300,
        'Петя' => 400
    ];
    foreach ($arr as $key => $val) {
       echo $key . ' —' . ' зарплата ' . $val . ' долларов.' . '<br>';
    }