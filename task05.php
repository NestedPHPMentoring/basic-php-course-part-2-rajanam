<?php

$format = 'l, F jS, Y';
$date = new DateTime('now');
?>

<p>Original date: <?= $date->format($format); ?></p>
<p>Add one month: <?php $date->modify('+1 month'); echo $date->format($format); ?></p>
