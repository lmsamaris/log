<?php
require 'FizzBuzzClass.php';
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    public function testOnetoTwenty()
    {
        $fizzbuzz = new FizzBuzz(1, 20);
        $this->assertEquals('1,2,fizz fizz,4,buzz buzz,fizz,7,8,fizz,buzz,11,fizz,fizz,14,lucky,16,17,fizz,19,buzz', (string) $fizzbuzz);
    }
}
