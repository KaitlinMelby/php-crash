<?php

/* ----------- Exceptions ----------- */

/*
  PHP has an exception model similar to that of other programming languages. An exception can be thrown, and caught ("catched") within PHP. Code may be surrounded in a try block, to facilitate the catching of potential exceptions. Each try must have at least one corresponding catch or finally block.
*/

function inverse($x) {
if(!$x) {
  throw new Exeption('Devision by zero');
}

  return 1/$x;

}

try {
  echo inverse(0);
} catch(Exception $e) {
echo 'Caught Exeption',  $e->getMessage(), ' ';
} finally {
  echo 'First Finally';
}

try {
  echo inverse(0);
  echo inverse(5);
} catch(Exception $e) {
echo 'Caught Exeption',  $e->getMessage(), ' ';
} finally {
  echo 'Second Finally';
}