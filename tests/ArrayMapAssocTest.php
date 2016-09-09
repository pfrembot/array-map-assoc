<?php
/**
 * File ArrayMapAssocTest.php
 *
 * @author Edward Pfremmer <epfremme@nerdery.com>
 */
namespace Pfrembot\Tests;

use Pfrembot;
use PHPUnit_Framework_TestCase;

/**
 * Class ArrayMapAssocTest
 *
 * @package Pfrembot\Tests
 */
class ArrayMapAssocTest extends PHPUnit_Framework_TestCase
{
    /**
     * Current test array
     * @var array
     */
    private $array;

    /**
     * Sample test array
     * @var array
     */
    private static $sample = [
        'foo' => 1, // string key
        ''    => 2, // empty string key
        0     => 3, // integer key
        true  => 4, // boolean key
        null  => 5, // null key
                 6, // no key
    ];

    /**
     * {@inheritdoc}
     */
    public function setUp()
    {
        parent::setUp();

        $this->array = self::$sample;
    }

    /** @group array_map_assoc */
    public function testMapAssoc()
    {
        $result = Pfrembot\array_map_assoc($this->array, function ($value) {
            return $value * 2;
        });

        $this->assertSampleNotModified();

        foreach ($result as $key => $value) {
            $this->assertArrayHasKey($key, $this->array);
            $this->assertEquals($this->array[$key] * 2, $value);
        }
    }

    /**
     * Test that the original array was not modified
     *
     * @return void
     */
    public function assertSampleNotModified()
    {
        $this->assertEquals($this->array, self::$sample);
    }
}
