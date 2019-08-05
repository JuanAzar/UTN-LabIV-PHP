<!DOCTYPE html>
<html>
    <head>
        <title>PHP fundamentals</title>
    </head>
    <body>
        <?php
            function showArray($array)
            {
                foreach($array as $key=>$value)
                {
                    echo $key . ": " . $value . "<br>";
                }
            }

            $cars = array("Volvo", "BMW", "Toyota");
            sort($cars);

            $numbers = array(4, 6, 2, 22, 11);
            sort($numbers);
            
            rsort($cars);
            
            rsort($numbers);

            $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
            asort($age);

            ksort($age);

            arsort($age);

            krsort($age);

            array_push($cars,"Peugeot");

            array_shift($cars);

            array_unshift($cars, "Volvo");

            if(in_array("BMW", $cars))
                echo "Match found!";

            if(array_key_exists("Ben", $age))
                echo "Match foound!";
                
            $keys = array_keys($age);
        ?>
    </body>
</html>