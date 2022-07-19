<?php

namespace App;

Class FizzBuzz {
    public function isDivisibleOrContains (int $numb):string
    {
        if ($numb % 3 === 0 || $numb  === 3 ){
            return "Fizz";
        }

        if ($numb % 5 === 0 || $numb  === 5 ){
             return "Buzz";
         }
    }

    public function isDivisible (int $numb): string
    {
        if ($numb % 3 === 0 && $numb % 5 === 0 ){
            return "FizzBuzz";
        }

        if ($numb % 3 === 0){
            return "Fizz";
        }

        // if ($numb % 5 === 0){
        //     return "Buzz";
        // }
        return $numb;
    }




}