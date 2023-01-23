<?php
/* --- $_GET & $_POST Superglobals -- */

/*
  We can pass data through urls and forms using the $_GET and $_POST superglobals.
*/

if(isset)($_POST['submit']) {


echo $_POST['name'];
echo $_POST['age'];
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