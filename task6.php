<!DOCTYPE html>
<html lang=ru>
<head>
    <meta charset=utf-8>
    <title>Таблица Пифагора</title>
</head>
<body>
<table cellpadding="3" cellspacing="1" border="1" style="border-style: solid; width: 400px; height: 400px;">
    <?php
    for ($i = 1; $i <= 10; $i++) {
        echo '<tr>';
        for ($j = 1; $j <= 10; $j++) {
            if (($i%2 == 0) && ($j%2 == 0)) {
                $sb = '(';
                $se = ')';
            }
            elseif (($i%2 > 0) && ($j%2 > 0)) {
                $sb = '[';
                $se = ']';
            }
            else {
                $sb = '';
                $se = '';
            }
            echo '<td style="text-align: center;">'.$sb.$i*$j.$se.'</td>';
        }
        echo '</tr>';
    }
    ?>
</table>
</body>
</html>