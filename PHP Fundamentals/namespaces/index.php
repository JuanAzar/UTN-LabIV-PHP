<?php
    require_once "Models/Person.php";

    use Models\Person as Person;

    $person = new Person();

    $person->setFirstName("John");
    $person->setLastName("Doe");

    var_dump($person);
?>