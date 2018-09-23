<?php 
//visibility (can be attached to both properties and methods): public --> accessible outside of class (anywhere); protected --> accessible in class and any extended classes; private --> accessible only in owner class

//Inheritance: classes can be extended to a child class --> child class have access to all of it's parents properties and methods UNLESS the visibility of them is set to PRIVATE

/*  create instance: $user = new User (class name);
    print property: echo $user->firstName;
    call method / function: $user->register();
 */

//Abstract classes: can not be instantiated and used directly, must be extended by another class, if method is abstract then the class must be abstract
?>