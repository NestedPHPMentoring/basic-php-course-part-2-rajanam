<?php

$Belgrade = new DateTimeZone('Europe/Belgrade');
$USeast = new DateTimeZone('America/New_York');
$Manila = new DateTimeZone('Asia/Manila');


$now = new DateTime('now', $Belgrade);
$format = 'l, F jS, Y g:ia';
?>
<p>In Belgrade Serbia it's <?= $now->format($format); ?></p>
<p>In America it's <?php $now->setTimezone($USeast); echo $now->format($format); ?></p>
<p>In Philippines Manila it's <?php $now->setTimezone($Manila); echo $now->format($format); ?></p>
