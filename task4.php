<?php
$day = 3;
switch ($day) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo 'Это рабочиий день';
        break;
    case 6:
    case 7:
        echo 'Это выходной день';
        break;
    default:
        echo 'Неизвестный день';
        break;
}
