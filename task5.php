<?php
$bmw = array('model' => 'X5', 'speed' => 120, 'doors' => 5, 'year' => '2015');
$toyota = array('model' => 'RAV4', 'speed' => 110, 'doors' => 5, 'year' => '2017');
$opel = array('model' => 'Frontera', 'speed' => 115, 'doors' => 5, 'year' => '2005');

$auto['BMW'] = $bmw;
$auto['Toyota'] = $toyota;
$auto['Opel'] = $opel;

foreach($auto as $name => $arr) {
    echo "CAR ".$name."<br>";
    echo $arr['model'].'   '.$arr['speed'].'   '.$arr['doors'].'   '.$arr['year'];
    echo "<br><br>";
}