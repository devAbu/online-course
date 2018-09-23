<?php 
//visibility (can be attached to both properties and methods): public --> accessible outside of class (anywhere); protected --> accessible in class and any extended classes; private --> accessible only in owner class

//Inheritance: classes can be extended to a child class --> child class have access to all of it's parents properties and methods UNLESS the visibility of them is set to PRIVATE

/*  create instance: $user = new User (class name);
    print property: echo $user->firstName;
    call method / function: $user->register();
 */

//Abstract classes: can not be instantiated and used directly, must be extended by another class, if method is abstract then the class must be abstract

class User
{

    private $ID;
    private $userName;
    private $email;
    private $password;

    public function __construct($userName, $password) //called once the class is initiate ($User = new User)
    {
        $this->userName = $userName; //bez ovih
        $this->password = $password; //bez ovih
        echo 'Constructor called <br>';
    }
    public function register()
    {
        echo 'User registered <br>';
    }

    public function login() //login($userName, $password)
    {
        echo $this->userName . ' is now logged in!!! <br>';
        $this->auth_user();
    }

    public function auth_user()
    {
        echo $this->userName . ' is now authenticated!!! <br>';
    }

    public function __destruct() //run at the end
    {
        echo 'Destruct called <br>';
    }
}

$User = new User('abu', '123');

/* echo $User->userName . '<br>'; --> za private */

$User->register();
$User->login(); //$User->login('abu', '123');




?>