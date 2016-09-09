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
mixed callback( mixed $value , mixed $key )
```

* __value :__ Holds the value of the current iteration.
* __key   :__ Holds the key of the current iteration.

* _Note: Many internal functions (for example strtolower()) will throw a warning if more than the expected number of argument are passed in and are not usable directly as a callback._

#### Returns

Returns the values of the original array mapped back to the original array keys
