<?php
/* ----------- Arrrays ----------- */

/*
  Arrays hold multiple values. Each value in an array is called an "element"
*/

//simple array

$numbers = [1,44,55,22]; //way one to make an array
$fruits = array['apple', 'orange', 'pear']//array using the array function

var_dump($numbers); //shows the data type, length of values, values themselfes, and the index of the values

echo $fruits[1]; //will show the 1 index


//associative array assigns values other values
$colors = [
  1 => 'red',
  4 => 'blue',
  6 => 'green'
];

$hex = [
  'red' => '#f00',
  'blue' => '#0f0',
  'green' => '#00f'

];

echo $hex ['blue']; //will show #0f0

$person = [
  'first_name' => 'Brad',
  'last_name' => 'Traversy',
  'email' => 'bradgmail.com'
];

echo $person[$first_name]; //would show brad, the arrows translate one value to another value

//multivalue arrays

$people = [
  ['first_name' => 'Brad',
  'last_name' => 'Traversy',
  'email' => 'bradgmail.com'
  ]
  ['first_name' => 'John',
  'last_name' => 'Doe',
  'email' => 'johngmail.com'
  ]
  ['first_name' => 'Jane',
  'last_name' => 'Doe',
  'email' => 'janegmail.com'
  ]
];

echo $people[1]['email']; //will give you john and his email, considers it just another array

var_dump(json_encode($people)); //Gives you an array of jason values there is also json decode (ask zach about it)


