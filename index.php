<?php
/**
 * File index.php
 *
 * @author Edward Pfremmer <epfremme@nerdery.com>
 */

require_once 'src/array_map_assoc.php';

$test = [
    'a' => 1,
    'b' => 2,
    'c' => 3,
    0 => 4,
];

$test2 = array_map_assoc($test, function ($value, &$key) {
    $key = 'prefix_' . $key;
    return $value * 2;
});

var_dump($test, $test2);
