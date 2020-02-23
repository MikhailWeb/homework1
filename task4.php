<?php
$day = rand(0, 10);
echo 'День '.$day.'-й - ';
switch ($day) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo 'это рабочий день';
        break;
    case 6:
    case 7:
        echo 'это выходной день';
        break;
    default:
        echo 'неизвестный день';
}
