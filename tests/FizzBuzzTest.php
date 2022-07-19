<?php

namespace Tests;

use App\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase 
{
    public function test_is_divisible_by_3_or_contains_3_return_Fizz() 
{
$fizzBuzz = new FizzBuzz;
$result = $fizzBuzz -> isDivisibleOrContains(35);
$this->assertEquals('Fizz', $result);
}
    public function test_is_divisible_by_3_and_return_Fizz () 
    {
    $fizzBuzz = new FizzBuzz;
    $result = $fizzBuzz -> isDivisible (3);
    $this->assertEquals('Fizz', $result);
}

    public function test_is_divisible_by_5_and_return_Buzz () 
    {
        $fizzBuzz = new FizzBuzz;
        $result = $fizzBuzz -> isDivisible (5);
        $this->assertEquals('Buzz', $result);   
}

public function test_is_divisible_by_3_and_5_return_FizzBuzz () 
{
    $fizzBuzz = new FizzBuzz;
    $result = $fizzBuzz -> isDivisible (15);
    $this->assertEquals('FizzBuzz', $result);   
}
}
