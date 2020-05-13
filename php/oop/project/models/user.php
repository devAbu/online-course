<?php

class UserModel extends Model
{
    public function register()
    {
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $hashedPassword = md5($password);
            $this->query("INSERT INTO users(`name`, `email`, `password`) values (:name, :email, :password)");
            $this->bind(':name', $name);
            $this->bind(':email', $email);
            $this->bind(':password', $hashedPassword);

            $this->execute();
        }

        /* TODO: OVO NIKAD NE RADI */
        if ($this->lastInsertId()) {
            header("Location: " . ROOT_URL . "user/login");
        }
        return;
    }

    public function login()
    {
        if (isset($_POST['submit'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $hashedPassword = md5($password);
            $this->query("Select * from users where email = :email and password = :password");

            $this->bind(':email', $email);
            $this->bind(':password', $hashedPassword);

            $row = $this->single();

            if ($row) {
                $_SESSION['is_logged_in'] = true;
                $_SESSION['user_data'] = array(
                    "ID" => $row['ID'],
                    "name" => $row['name'],
                    "email" => $row['email']
                );
                header("Location: " . ROOT_URL . "share");
            } else {
                Message::setMessage('Incorrect login', 'error');
            }
        }
        return;
    }
}
