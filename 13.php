    <?php
    $start = 2;
    $end = 9;
    $multiArr = array_fill($start, $end - $start + 1, array_fill($start, $end - $start + 1, 0));
    foreach ($multiArr as $multiplier1 => &$multiRow) {
        foreach ($multiRow as $multiplier2 => &$result) {
            $result = $multiplier1 * $multiplier2;
        }
    }

    unset($multiRow);
    unset($result);

    echo "<table class=\"table table-bordered\">";
    echo "<tr>";
    echo "<th class=\"text-right\">&nbsp;</th>";
    foreach (array_keys(reset($multiArr)) as $multiplier2) {
        echo "<th class=\"text-right\">{$multiplier2}</th>";
    }
    echo "</tr>";
    foreach ($multiArr as $multiplier1 => $multiRow) {
        echo "<tr>";
        echo "<th class=\"text-right\">{$multiplier1}</th>";
        foreach ($multiRow as $multiplier2 => $result) {
            echo "<td class=\"text-right\">{$result}</td>";
        }
        echo "</tr>";
    }
    echo "</table>";