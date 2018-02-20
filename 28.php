<table>
    <caption>Таблиця множення</caption>
    <tr>
        <th>&nbsp;</th>
        <th>2</th>
        <th>3</th>
        <th>4</th>
        <th>5</th>
        <th>6</th>
        <th>7</th>
        <th>8</th>
        <th>9</th>
    </tr>

    <?php for ($i = 2; $i <= 9; $i++) : ?>
        <tr>
            <?= "<th>{$i}</th>" ?>
            <?php for ($j = 2; $j <= 9; $j++) : ?>
                <?= '<td>' . $i * $j . '</td>' ?>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>
</table>