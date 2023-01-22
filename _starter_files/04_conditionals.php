<?php

/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
  != Not equal to
  !== Not identical to
*/

/* ---------- If & If-Else Statements --------- */

/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/

//if else statement

$age = 20;

if($age >= 18) {
  echo 'You are old enough to vote';
} else {
eco 'Sorry you are not old enouth to vote';
};

//else if statements

$t = date("H"); //H means hour

if($t < 12) {
  echo 'Good Morning';
}  elseif($t < 17) {
  echo 'Good Afternoon'
}else {
  echo 'good Evening';
}

$posts = ['First Post'];

if(!empty ($posts)) {
  echo $posts(0); 
} else {
  echo 'No Posts';
};


/* -------- Ternary Operator -------- */
/*
  The ternary operator is a shorthand if statement.
  Ternary Syntax:
    condition ? true : false;
*/


/* -------- Switch Statements ------- */

echo !empty($posts) ? $posts[0] : 'No Posts'; //does the same thing as the previous but in one line

$firstPost = echo !empty($posts) ? $posts[0] : 'No Posts'; //can set these if else statements as variables

$firstPost = $posts[0] ?? null;

//switch (no not that kind)

$favecolor = 'red';

switch($favecolor) {
  case 'red':
    echo 'Your favorite color is red';
    break
    case 'blue':
      echo 'Your favorite color is blue';
      break
      case 'green':
        echo 'Your favorite color is green'
        break;
        default:
        echo 'Your favorite color is not red, green, or blue';
};