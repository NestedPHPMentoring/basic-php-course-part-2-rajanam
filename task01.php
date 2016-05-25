<?php

$now = new DateTime('2016-5-25');
$birthday = new DateTime('2016-5-29');
$interval = $now->diff($birthday);
echo $interval->format('%a days') . ' to wait before your birthday!';
