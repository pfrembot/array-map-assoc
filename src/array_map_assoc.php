<?php
/**
 * File array_map_assoc.php
 *
 * @author Edward Pfremmer <epfremme@nerdery.com>
 */

namespace Pfrembot;

/**
 * Applies the user defined callback to each key/value pair in the array,
 * and maps the callback result as the new array value
 *
 * @param array $array       : The input array
 * @param callable $callback : The callback to be applied to each key/value pair in $array
 *
 *   Callback Signature: mixed $value : $callback( mixed $value )
 *
 * @return array
 */
function array_map_assoc(array $array, callable $callback)
{
    $keys = array_keys($array);

    $apply = function($carry, $key) use ($array, $callback) {
        $carry[$key] = $callback($array[$key]);

        return $carry;
    };

    return array_reduce($keys, $apply, []);
}


/**
 * Applies the user defined callback to each key/value pair in the array,
 * and maps the callback result as the new array value
 *
 * @param array $array       : The input array
 * @param callable $callback : The callback to be applied to each key/value pair in $array
 *
 *   Callback Signature: mixed $value : $callback( mixed $value, [optional] mixed &$key )
 *
 *   Note: $key as passed by reference to $callback can be mutated within
 *         the callback to modify the key of the resulting array
 *
 *   Note: Many internal functions (for example strtolower()) will throw a warning if
 *         more than the expected number of argument are passed in and are not usable
 *         directly as a callback.
 *
 * @return array
 */
function array_map_uassoc(array $array, callable $callback)
{
    $keys = array_keys($array);

    $apply = function($carry, $key) use ($array, $callback) {
        $carry[$key] = $callback($array[$key], $key);

        return $carry;
    };

    return array_reduce($keys, $apply, []);
}
