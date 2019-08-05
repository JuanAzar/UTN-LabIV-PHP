<!DOCTYPE html>
<html>
    <head>
        <title>PHP fundamentals</title>
    </head>
    <body>
        <?php
            $bool = true && false;
            var_dump($bool); // false

            $bool = true and false;
            var_dump($bool); // true

            $bool = false && true;
            var_dump($bool); // false

            $bool = false and true;
            var_dump($bool); // false
        ?>
    </body>
</html>