<?php 

$string = 'The quick " " brown fox';

$string = preg_replace('/\s+/', '', $string);
echo $string;
