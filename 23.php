<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $number = isset($_POST['number']) ? $_POST['number'] : false;
        if (is_numeric($number)) {
            $digits = str_split($number);
            $sum = array_sum($digits);
            $result = "<p>Сумма цифр числа {$number} равняется {$sum}</p>";
        } else {
            $result = "<p>Неверный ввод</p>";
        }
    }
    ?>
    <?= isset($result) ? $result : '' ?>
    <form action="" method="post">
        <p>
            <label for="number">Введите число</label><br>
            <input type="text" name="number" id="number">
        </p>
        <p>
            <button>Вперед!</button>
        </p>
    </form>