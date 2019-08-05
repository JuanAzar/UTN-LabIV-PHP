<!DOCTYPE html>
<html>
    <head>
        <title>PHP fundamentals</title>
    </head>
    <body>
        <?php
            $x = "I Love PHP!";
            $y = 'I Love PHP!';
            
            echo $x . "<br>";            
            echo $y . "<br>";;

            $x = 123456;
            var_dump($x);

            $x = 10.452;
            var_dump($x);

            $x = true;
            $y = false;

            $cars = array("Peugeot", "Chevrolet", "Ford");
            var_dump($cars);

            $x = null;
            var_dump($x);
        ?>
    </body>
</html>