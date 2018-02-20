<?php
$a = 'xx';
while (strlen($a) <= 10) {
    echo "{$a}<br>";
    $a .= 'xx';
}