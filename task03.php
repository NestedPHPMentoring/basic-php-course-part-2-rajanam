<?php

$query_date = '2016-05-04';
$date = new DateTime($query_date);
//First day of month
$date->modify('first day of this month');
$firstday= $date->format('l');
echo $firstday . ' was the first day of May 2016';
echo '<br />';
//Last day of month
$date->modify('last day of this month');
$lastday= $date->format('l');
echo $lastday . ' is the last day of the month of May 2016';
