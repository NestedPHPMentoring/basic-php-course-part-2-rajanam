<?php

$html = <<<EOD
<a href="http://www.test1.com">PHP Test1</a>
<a href="http://www.test2.com">PHP Test2</a>
<a href="http://www.test3.com">PHP Test3</a>
EOD;


$result = preg_replace('/<a href="http:/', '/<a href=https:/', $html);
echo '<pre>';
print_r($result);
echo '</pre>';
