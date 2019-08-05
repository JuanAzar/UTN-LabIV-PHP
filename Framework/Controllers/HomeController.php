<?php
    namespace Controllers;

    class HomeController
    {
        public function Index($message = "")
        {
            require_once(VIEWS_PATH."index.php");
        }

        public function ShowAddView()
        {
            require_once(VIEWS_PATH."student-add.php");
        }

        public function ShowListView()
        {
            require_once(VIEWS_PATH."student-list.php");
        }

        public function Login($email, $password)
        {
            if(($email == "john@doe.com") && ($password == "123456"))
                $this->ShowAddView();
            else
            {
                $message = "Usuario y/o contraseña incorrectos";
                $this->Index($message);
            }
        }

        public function Logout()
        {
            session_destroy();
            
            $this->Index();
        }
    }
?>