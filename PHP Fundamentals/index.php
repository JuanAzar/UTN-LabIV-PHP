<!DOCTYPE html>
<html>
    <head>
        <title>PHP fundamentals</title>
    </head>
    <body>
        <?php
            //This is a single-line comment

            #This is also a single-line comment

            /*
                This is a multiple-lines 
                comment block
            */

            //PHP Case Sensitivity

            /*NO Keywords, classes, functions and 
            user-defined functions are case sensitive */
            echo "Hello World!!";

            ECHO "Hello World!!";

            //*However, variable names are case sensitive */
            $color = "red";

            echo "My car is " . $color . "<br>";
            echo "My house is " . $COLOR . "<br>";
            echo "My boat is " . $coLOR . "<br>";
        ?>
    </body>
</html>
