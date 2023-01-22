<?php

/* -------- Loops & Iteration ------- */

/* ------------ For Loop ------------ */

/*
** For Loop Syntax
  for (initialize; condition; increment) {
  // code to be executed
  }
*/

//This will make the screen show 0-10 because it has x start at zero and increase by one untill it is les than or equal to 10
for($x = 0; $x <= 10; $x ++) {
  echo 'Number' .$x '<br>'; //this will add number before every single number
};


/* ------------ While Loop ------------ */

/*
** While Loop Syntax
  while (condition) {
  // code to be executed
  }
*/

$x =1;

while($x <= 15) {
  echo 'Number' . $x '<br>';
  $x++ //without x++ it will just go until the browser crashes
}


/* ---------- Do While Loop --------- */

/*
** Do While Loop Syntax
  do {
  // code to be executed
  } while (condition);

do...while loop will always execute the block of code once, even if the condition is false.
*/
$x = 6;

do {
  echo 'Number' . $x . '<br>';
  $x++;
} while($x <= 5); //This will show just the number six because it is executed before the do while loop


/* ---------- Foreach Loop ---------- */

/*
** Foreach Loop Syntax
  foreach ($array as $value) {
  // code to be executed
  }
*/

$posts = ['First Post', 'Second Post', 'Third Post'];

for($x = 0; $x < count($posts);$x++) {
  echo $posts[$x];
}; //will display all the posts in order

foreach($posts as $post) {
  echo $post;
}; //Will give you the same thing as above 

foreach($posts as $index=> $post) {
  echo $index + 1 . '-' . $post . '<br>';
}
