<?php
/* ------------ Functions ----------- */

/*
  Functions are reusable blocks of code that we can call to perform a specific task.
  We can pass values into functions to change their behavior. Functions have their own local scope as opposed to global scope


/*
** Function Syntax
  function functionName($arg1, $arg2, ...) {
    // code to be executed
  }
*/

//can not use variables in functions created in other functions
//to use global variables say global $whatever the name is
//"too few arguments to function" god me too php
//argument is defining a function
//passing something into an argument is a peramiter

function registerUser($email) {
  echo $emial . 'registered';
}

registerUser('Brad');


function sum($n1, $n2) {
  return $n1 +$n2;
}

num(5 , 5);
echo $number;

subtract = function($n1, $n2) {
  return $n1 - $n2;
};

echo $subtract(10, 5);

$multiply = fn($n1, $n2) => $n1 *n2; //shorter way of doing math
