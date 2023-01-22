<?php
/* --------- Array Functions -------- */

/*
  Functions to work with arrays
  https://www.php.net/manual/en/ref.array.php
*/

$fruits =['apple' , 'orange', 'pear'];

//get length of an array
echo count($fruits); 

//search array
var_dump(in_array('apple', $fruits))

//add to array
$fruits[] = 'grape'; //will add to the end of the array
array_push($fruits, 'blueberry', 'strawberry');
array_unshift($fruits, 'mango');//will add to the beginning of the array

//remove from array
array_pop($fruits);//removes from the end
array_shift($fruits);//removes from the beginning
unset($fruits[2]);//will remove from the array and the index without shifting the other numbers of the array

//split into 2 chunks

$chunked_array = array_chunk($fruits, 2);//will seperate array into groups of two


print_r($fruits);

//concatonate arrays

$arr1 = [1,2,3];
$arr = 2 [4,5,6];

$arr3 = array_merge($array1, $arr2);

print_r($arr3);



$a = ['green', 'red', 'yellow'];

$b = ['avacado', 'apple', 'bananna'];

$c = array_combine($a, $b); //This will combine the two arrays by assigning the values to each other like green : avacado

print_r ($c);

//flip the array

$flipped = array_flip($c);
print_r($flipped); //flips keys and values to switch things around