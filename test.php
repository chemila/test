<?php
$array = array(
    'name' => sprintf('%.3f', 0.0000),
);

$test =(json_encode($array, JSON_PRETTY_PRINT));
var_dump($test);
var_dump(json_decode($test, true));
