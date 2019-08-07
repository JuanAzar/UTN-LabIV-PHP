<?php
    class User
    {
        private $email;    

        public function getEmail() { return $this->email; }
        public function setEmail($email) { $this->email = $email; }
    }

    interface IUserCollection
    {
        function Add(User $user);
        function GetAll();
    }

    class UserCollection implements IUserCollection
    {
        private $userList;

        public function __construct()
        {
            $this->userList = array();
        }

        public function Add(User $user)
        {
            array_push($this->userList, $user);
        }

        public function GetAll()
        {
            return $this->userList;
        }
    }

    $user = new User();
    $user->setEmail("john@doe.com");

    $userCollection = new UserCollection();
    $userCollection->Add($user);

    $userList = $userCollection->GetAll();

    foreach($userList as $user)
    {
        echo $user->getEmail()."<br>";
    }
?>