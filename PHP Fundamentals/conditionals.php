<!DOCTYPE html>
<html>
    <head>
        <title>PHP fundamentals</title>
    </head>
    <body>
        <?php
            date_default_timezone_set("America/Argentina/Buenos_Aires");

            $time = date("H");

            if($time < 10)
                echo "Good morning!";
            elseif($time < 20)
            {
                echo "Have a good day!";
                echo "Work hard too!";
            }
            else
                echo "Have a good night!";


            $favoriteColor = "brown";

            switch ($favoriteColor) {
                case "red":
                    echo "Your favorite color is red!";
                    break;
                case "blue":
                    echo "Your favorite color is blue!";
                    break;
                case "green":
                    echo "Your favorite color is green!";
                    echo "This is my favorite color too!";
                    break;
                default:
                    echo "Your favorite color is neither red, blue, nor green!";
            }
        ?>
    </body>
</html>