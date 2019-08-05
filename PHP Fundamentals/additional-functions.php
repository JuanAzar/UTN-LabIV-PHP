<!DOCTYPE html>
<html>
    <head>
        <title>PHP fundamentals</title>
    </head>
    <body>
        <h1>Additional Functions Example</h1>

        <?php
            include "footer.php";

            require "footer.php";

            include_once "footer.php";

            require_once "footer.php";

            $url = "folder/subFolder/file.php";
            $stringToArray = explode("/", $url);
            var_dump($stringToArray);

            $array = array("Volvo", "BMW", "Toyota");
            $arrayToString = implode("/", $array);
            var_dump($arrayToString);

            function sayHello($firstName, $lastName) {
                echo "Hello $firstName $lastName from PHP!";
            }

            $firstName = "John";
            $lastName = "Doe";

            call_user_func("sayHello", $firstName, $lastName);
            
            call_user_func_array("sayHello", array($firstName, $lastName));
        ?>
    </body>
</html>