<!DOCTYPE html>
<html>
    <head>
        <title>PHP fundamentals</title>
    </head>
    <body>
        <?php
            function writeMessge()
            {
                echo "I Love PHP!<br>";
            }
            
            writeMessge();

            function sayHello($name)
            {
                echo "Hello $name.<br>";
            }
            
            sayHello("John");
            sayHello("Peter");
            sayHello("Eric");

            function setHeight($minheight = 50)
            {
                echo "The height is : $minheight <br>";
            }
            
            setHeight(350);
            setHeight();

            function sum($x, $y)
            {
                $z = $x + $y;
                return $z;
            }
            
            echo "5 + 10 = " . sum(5, 10) . "<br>";
        ?>
    </body>
</html>