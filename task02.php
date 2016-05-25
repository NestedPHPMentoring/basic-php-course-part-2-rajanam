<?php

$date = new DateTime();

$format1 = 'Y/m/d';
echo $date->format($format1);
echo '<br />';
$format2 = 'd.m.y';
echo $date->format($format2);

echo '<br />';
$format3 = 'm-d-y';
echo $date->format($format3);

