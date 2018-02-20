<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $number = isset($_POST['number']) ? $_POST['number'] : false;
        $digit = isset($_POST['digit']) ? $_POST['digit'] : false;
        if (is_numeric($number) && is_numeric($digit) && strlen($digit) == 1) {
            $digits = str_split($number);
            $counts = array_count_values($digits);
            $count = isset($counts[$digit]) ? $counts[$digit] : 0;
            $result = "<p>Число {$number} містить {$count} вхождені цифри {$digit}</p>\n";
        } else {
            $result = "<p>Невірний ввод</p>\n";
        }
    }
    ?>
    <?= isset($result) ? $result : '' ?>
    <form action="" method="post">
        <p>
            <label for="number">Введіть число</label><br>
            <input type="text" name="number" id="number">
        </p>
        <p>
            <label for="digit">Введіть цифру</label><br>
            <input type="text" name="digit" id="digit">
        </p>
        <p>
            <button>Вперед!</button>
        </p>
    </form>