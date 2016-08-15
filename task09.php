<?php 

$string = '$123,34.00A';

$string = preg_replace('/[^0-9,.]/', '', $string);
echo $string;
