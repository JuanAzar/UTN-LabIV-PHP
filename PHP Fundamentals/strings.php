<!DOCTYPE html>
<html>
    <head>
        <title>PHP fundamentals</title>
    </head>
    <body>
        <?php
            echo strlen("I Love PHP!"); // outputs 11
            echo str_word_count("I Love PHP!"); // outputs 3
            echo strrev("I Love PHP!"); //outputs PHP evoL I
            echo strpos("I Love PHP", "PHP"); // outputs 7
            echo str_replace("PHP", "Programming", "I Love PHP!"); 
            // outputs I Love Programming!
            echo strtoupper("i love php!"); //outputs I LOVE PHP!
            echo strtolower("I LOVE PHP!"); //outputs i love php!
            echo ucfirst("i love php!"); //outputs I love php!
            echo ucwords("i love php!"); //outputs I Love Php!
            echo substr("I Love PHP!", 2); //outputs Love PHP!
            echo substr("I Love PHP!", 2, 4); //outputs Love
            echo trim(" I Love PHP! "); //outputs I Love PHP!
            echo trim("I Love PHP!", "IHP!"); //outputs Love
        ?>
    </body>
</html>