<?php
    $rows = rand(2, 10);
    $cols = rand(2, 10);
    $colors = ['red','yellow','blue','gray','maroon','brown','green'];

    echo '<table>';
    for ($i = 0; $i < $rows; $i++) {
        echo '<tr>';
        for ($j = 0; $j < $cols; $j++) {
            $color = $colors[array_rand($colors)];
            $number = rand();
            echo "<td style='background-color:{$color}'>{$number}</td>";
        }
        echo '</tr>';
    }
    echo '</table>';