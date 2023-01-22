<?php //always need the opening tag dont allways need the closing tag
//need it if you need html later because it tells the computer where html starts and php ends
/* -------- Output & Comments ------- */
//echo takes output strings numbers html etc
echo 'Hello', 10.5;

// print works like echo but only takes in a single argument
print 123;

//print_r()- print single values and arrays
print_r([1,2,3]);

//var_dump() returns more info like data type and length
var_dump(true);

//var_export()-similar to var_dump(). outputs string representation of a variable
var_export('Hello');

/*
  A .php file running on a server, can output both HTML and PHP code. There are multiple functions that can be used to output data to the browser.
*/?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
  </head>
  <body>
    <!--[if lt IE 7]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <h1>?php echo 'Post one'; ?</h1>
    
    <script src="" async defer></script>
  </body>
</html>