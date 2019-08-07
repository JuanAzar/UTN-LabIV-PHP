<?php
    define("DB_HOST", "localhost");
    define("DB_NAME", "University");
    define("DB_USER", "root");
    define("DB_PASS", "");

    $recordId = 123;
    $firstName = "John";
    $lastName = "Doe";

    try
    {
        $pdo = new PDO("mysql:host=".DB_HOST."; dbname=".DB_NAME, DB_USER, DB_PASS);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        //Execute SELECT statement
        $selectStatement = $pdo->prepare("SELECT recordId, firstName, lastName FROM students");

        $selectStatement->execute();

        $result = $selectStatement->fetchAll();

        var_dump($result);

        //Execute INSERT statement
        $insertStatement = $pdo->prepare("INSERT INTO students (recordId, firstName, lastName)
                                    VALUES (:recordId, :firstName, :lastName)");

        $insertStatement->bindParam(":recordId", $recordId);
        $insertStatement->bindParam(":firstName", $firstName);
        $insertStatement->bindParam(":lastName", $lastName);

        $insertStatement->execute();
    }
    catch(PDOException $ex)
    {
        echo $ex->getMessage();
    }
?>

