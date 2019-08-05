<!DOCTYPE html>
<html>
    <head>
        <title>PHP fundamentals</title>
    </head>
    <body>
        <?php
            $x = 1; 

            while($x <= 5)
            {
                echo "The number is: $x <br>";
                $x++;
            }

            $x = 1; 

            do 
            {
                echo "The number is: " . $x . "<br>";
                $x++;
            }
            while ($x <= 5);

            for ($x = 0; $x < 10; $x++)
            {
                echo "The number is: $x <br>";
            }

            $colors = array("red", "green", "blue", "yellow"); 

            foreach ($colors as $value)
            {
                echo $value . "<br>";
            }

            foreach ($colors as $key => $value)
            {
                echo $key . " " . $value . "<br>";
            }
        ?>
    </body>
</html>