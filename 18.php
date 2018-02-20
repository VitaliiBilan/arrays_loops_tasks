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
    $weekend = [
        'Saturday',
        'Sunday',
    ];
    foreach ($week as $day){
        echo in_array($day, $weekend) ? "<strong>{$day}</strong><br>" : "{$day}<br>";
    }