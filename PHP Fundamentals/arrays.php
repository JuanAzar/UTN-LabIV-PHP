<!DOCTYPE html>
<html>
    <head>
        <title>PHP fundamentals</title>
    </head>
    <body>
        <?php
            $cars = array("Volvo", "BMW", "Toyota");
            echo $cars[0] . ", " . $cars[1] . " and " . $cars[2] . "<br>";

            $arrayLength = count($cars);

            echo $arrayLength . "<br>";
            
            for($x = 0; $x < $arrayLength; $x++) {
                echo $cars[$x]."<br>";
            }

            $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

            //or

            $age['Peter'] = "35";
            $age['Ben'] = "37";
            $age['Joe'] = "43";

            $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
            echo "Peter is " . $age['Peter'] . " years old<br>";

            foreach($age as $x => $x_value) {
                echo "Key= " . $x . ", Value= " . $x_value . "<br>";
            }

            $cars = array
            (
                array("Volvo", 22, 18),
                array("BMW", 15, 13),
                array("Saab", 5, 2)
            );

            for ($row = 0; $row < 3; $row++) {
                echo "<p><b>Row number $row</b></p>";
                echo "<ul>";
                for ($col = 0; $col < 3; $col++) {
                    echo "<li>".$cars[$row][$col]."</li>";
                }
                echo "</ul>";
            }
        ?>
    </body>
</html>