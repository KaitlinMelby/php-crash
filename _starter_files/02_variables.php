<?php

/* ----- Variables & Data Types ----- */

/* --------- PHP Data Types --------- */
/*
- String - A string is a series of characters surrounded by quote
- Integer - Whole numbers
- Float - Decimal numbers
- Boolean - true or false
- Array - An array is a special variable, which can hold more than one value
- Object - A class
- NULL - Empty variable
- Resource - A special variable that holds a resource
*/

/* --------- Variable Rules --------- */
/*
- Variables must be prefixed with $
- Variables must start with a letter or the underscore character
- variables can't start with a number
- Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- Variables are case-sensitive ($name and $NAME are two different variables)
*/

$name = 'Brad'; //string
$age = 40; //int
$has_kids = true; //boolean if you echo a true value you see 1 false shows nothing
$cash_on_hand = 20.75; //float or decimal

echo $name;

//how to concatinate period instead of plus

echo $name . 'is' . $age . 'years old';
//you can do this with double quotes and no inbetweens
echo "$name is $age years old"

echo '5' + '5'; //will actually give you 10 rather than concatonating them
echo 10 - 5;
echo 5 * 6;
echo 10 / 2

//you can do arithmatic with php

define('HOST', 'localhost'); //equivilant of a constant only use when you know it wont change EVER
