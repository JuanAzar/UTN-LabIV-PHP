<!DOCTYPE html>
<html>
    <head>
        <title>PHP fundamentals</title>
    </head>
    <body>
        <?php
            $text = "I love PHP!";
            $x = 5;
            $y = 10.5;

            echo "Hey! ".$text . "<br> and this is another line";
            echo "<br>";
    
            $z = $x + $y;
            echo $z;
            echo "<br>";

            echo $x + $y;
            
            $a = 5;

            function myGlobalScopeTest() {
                echo "<p>Variable a inside function is: $a<br>";
            } 

            myGlobalScopeTest();
            
            echo "<p>Variable a outside function is: $a<br>";

            function myLocalScopeTest() {
                $b = 5; // local scope
                echo "<p>Variable b inside function is: $b</p>";
            } 
            myLocalScopeTest();
            
            // using x outside the function will generate an error
            echo "<p>Variable b outside function is: $b</p>";

            define("TITLE", "PHP fundamentals");
            echo TITLE;
        ?>
    </body>
</html>