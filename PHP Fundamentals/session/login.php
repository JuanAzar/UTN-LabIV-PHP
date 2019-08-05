<?php
    require_once("Config/Autoload.php");

    use Models\User as User;

    if($_POST)
    {
        $email = $_POST["email"];
        $password = $_POST["password"];        

        if(($email == "john@doe.com") && ($password == "123456"))
        {
            session_start();

            $loggedUser = new User();
            $loggedUser->setEmail($email);
            $loggedUser->setPassword("123456");

            $_SESSION["loggedUser"] = $loggedUser;

            header("location:main.php");
        }
        else
            header("location:index.php");
    }
?>