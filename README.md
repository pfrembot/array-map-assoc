Array Map Assoc
===============

[![Build Status](https://travis-ci.org/pfrembot/array-map-assoc.svg?branch=master)](https://travis-ci.org/pfrembot/array-map-assoc)

Add array_map functions for mapping associative arrays whilst maintaining their original array keys

## Installation

```bash
composer require pfrembot/array_map_assoc
```

## Functions

### array_map_assoc

Applies the user defined callback to each key/value pair in the array, and maps the callback result as the new array value

```php
array array_map_assoc ( array $array , callable $callback )
```

#### Parameters

__array__

The input array

__callback__

The callback to be applied to each key/value pair in $array

```php
mixed callback( mixed $value )
```

* __value__: Holds the value of the current iteration.

#### Returns

Returns the values of the original array mapped back to the original array keys

### array_map_uassoc

Applies the user defined callback to each key/value pair in the array, and maps the callback result as the new array value

```php
array array_map_uassoc ( array $array , callable $callback )
```

#### Parameters

__array__

The input array

__callback__

The callback to be applied to each key/value pair in $array

```php
mixed callback( mixed $value , mixed &$key )
```

* __value :__ Holds the value of the current iteration.
* __key   :__   Holds a reference to the key of the current iteration.
    
* _Note: $key as passed by reference to $callback can be mutated within the callback to modify the key of the resulting array_
* _Note: Many internal functions (for example strtolower()) will throw a warning if more than the expected number of argument are passed in and are not usable directly as a callback._
    
#### Returns

Returns the values of the original array mapped back to the user modified array keys
