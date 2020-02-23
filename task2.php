<?php
const IMAGES = 80;
const MARKER = 23;
const PENCIL = 40;

echo '<b>Условия задачи:</b><br>На школьной выставке '.IMAGES.' рисунков. '.MARKER.' из них выполнены фломастерами, '.PENCIL.' карандашами, а остальные — красками. Сколько рисунков, выполненные красками, на школьной выставке?<br><br>';
$paint = IMAGES - MARKER - PENCIL;
echo '<b>Решение:</b><br>Количество рисунков, выполненных красками = '.IMAGES.' - '.MARKER.' - '.PENCIL.' = '.$paint;
