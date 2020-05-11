<?php

class User
{
    /* Properties = Attributes...ako se ne stavi access modifier default je public */
    public $id = 33;
    public $userName;
    public $email;
    public $password;

    /* Method = Function */

    /* Constructor --> pokrene se cim se object napravi (prije svega) */
    /* Constructor  moze imate parameters*/
    public function __construct($userName, $password)
    {
        echo 'construct called ';
        echo $this->id;
        $this->userName = $userName;
        $this->password = $password;
    }

    public function register()
    {
        echo 'User registered ';
        /* $this->userName = "test"; dole ce ga overwrite*/
    }

    /* Parameters su u constructor */
    public function login()
    {
        /* echo $userName . ' logged'; */
        /* kada su parametri u login metodi a ne u constructor 
        $this->userName = $userName;
        $this->password = $password; */
        /* drugi primjer - kada koristimo property */
        $this->authUser();

        /* $this->authUser($userName, $password); */
        /* kada zelimo pristupiti metodi ili property unutar klase..koristimo $this */
    }

    /* public function authUser($userName, $password)
    {
        echo $userName . ' authenticated ';
    } */

    /* Drugi primjer - kada koristimo property */
    public function authUser()
    {
        echo $this->userName . ' authenticated ';
    }

    /* Destructor --> pozove se nakon svega*/
    public function __destruct()
    {
        echo 'Destruct called';
    }
}

$User = new User('abu', 'juhu');/* Ako constructor ima parametre */
$User->register();
$User->login();

/* ako je property public...ako je private ili protected nece moc*/
echo $User->userName;
