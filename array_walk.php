<?php

function setCase(&$value, &$key) {
    $value = strtoupper($value);
}

$type = array('internal', 'custom');
$output_formats[] = array('rss', 'html', 'xml');
$output_formats[] = array('csv', 'json');
$map = array_combine($type, $output_formats);
array_walk_recursive($map, 'setCase');
var_dump($map);