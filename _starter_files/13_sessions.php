<?php
/* ------------ Sessions ------------ */

/*
  Sessions are a way to store information (in variables) to be used across multiple pages.
  Unlike cookies, sessions are stored on the server.
*/
if(isset)($_POST['submit']) {


  $name = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
  $password = $_POST['password'];

  if($username == 'john' && $password == 'password') {
    $_SESSION['username'] = $username;
    header('Location: /php-crash/extras/dashboard.php');
  } else {
    echo 'Incorrect Login';
  }
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
    <label for="username">Username: </label>
    <label type="text" name="usernamename">
  </div>
  <div>
    <label for="Passowrd">Password: </label>
    <label type="Password" name="Password">
  </div>
  <div>
    <input type="submit" value="submit" name="submit">
  </div>
  </form>
  
  
  //filter var
  
  $name = filter_var($POST['name']);