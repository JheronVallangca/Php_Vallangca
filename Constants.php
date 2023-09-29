<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP</title>
    </head>
    <body>
        <?php

        echo "<h1>Constant example</h1>";

        define("MINSIZE", 50);
        echo MINSIZE;
        echo constant("MINSIZE"); // same thing as the previous line
       
        echo "<h1>Valid and invalid constant names</h1>";
        // Valid constant names
            define("ONE", "first thing");
            define("TWO2", "second thing");
            define("THREE_3", "third thing");

        // Invalid constant names
        //define("2TWO", "second thing");
        //define("__THREE__", "third value");
        ?>
    </body>
</html>