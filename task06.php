<?php 

if (!isset($argv)) {
    exit('The script must be run from the command line.');
}

print('Please provide a string: ');
$values = fgets(STDIN);

if (!preg_match('/[a-zA-Z0-9]/', $values)) {
    printf("%s is not found on a string!", $values);
} else {
    printf('%s is found on a string!', $values);
}
