<?php 

$exec = file_get_contents('test.txt');

echo '<pre>';
print_r(json_decode( $exec));

?>