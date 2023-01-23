<?php 
/* --- Object Oriented Programming -- */

/*
  From PHP5 onwards you can write PHP in either a procedural or object oriented way. OOP consists of classes that can hold "properties" and "methods". Objects can be created from classes.
*/

class User {
  //properties are attributes that belong to a class
  //public can be accessed from anywhere
  //private can only be accessed inside the class
  //protected can only be accessed from inside the class and by inheriting classes
  public $name;
  public $email;
  public $password;

  //a constructor is a method that runs when an object is created

  public function __construct($name, $email, $password) {
    this->name = $name;
    this->email = $email;
    this->password = $password;
    echo 'constructor ran';

  }

  //method is a function that belongs to a class
  function set_name($name) {
    $this->name = $name
  }

  function get_name () {
    return $this->name;
  }
}

//instantiate a user object
$user1 = new User('brad', 'brad@gmail.com', 'password');
$user2 = new User('joan', 'j@gmail.com', 'paseword');
$user3 = new User('bill', 'bill@gmail.com', 'pabsword');

//ineritance 

class Employee extends User {
  public function __construct($name, $email, $password, $title){
    parent::__construct($name, $mail, $password);
    $this->title = $title;
  }

  public function get_title(){
    return $this->title;
  }
}

$employee1 = new Employee('Sara', 'sara@gmail.com', 'passwerd', 'Manager')

