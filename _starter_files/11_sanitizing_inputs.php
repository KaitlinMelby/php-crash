<?php
/* --- Sanitizing Inputs -- */

/*
  Data submitted through a form is not sanitized by default. We have methods to sanitize data manually.
*/
<?php
/* --- $_GET & $_POST Superglobals -- */

/*
  We can pass data through urls and forms using the $_GET and $_POST superglobals.
*/

if(isset)($_POST['submit']) {


$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
$age = htmlspecialchars(INPUT_POST, 'age', FILTER_SANITIZE_SPECIAL_CHARS);
}

//get can be used for url and forms post can only be used for forms
//bad thing baout get is that values will show up in the url 
//just change get to post
?>

<a href=",?php echo $_SERVER['PHP_SELF']; ?>?name=Brad&age=30">Click</a>

//file we want to subit this form to

<form actions="<?php echo $_SERVER['PHP_SELF']; ?>"
method="POST">

<div>
  <label for="name">Name: </label>
  <label type="text" name="name">
</div>
<div>
  <label for="Age">Age: </label>
  <label type="text" name="age">
</div>
<div>
  <input type="submit" value="submit" name="submit">
</div>
</form>


//filter var

$name = filter_var($POST['name']);