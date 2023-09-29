;<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP</title>
    </head>
    <body>
        <?php
           echo "<h1> Integers </h1>";
           $int_var = 12345;
           $another_int = -12345+12345;

           echo $int_var;
           echo $another_int; // will not print because it is equal to zero
           echo "<br>";
            
           echo "<h1> Doubles</h1>";
           $many = 2.2888800;
           $many_2 = 2.2111200;
           $few = $many + $many_2;
           print("$many + $many_2 = $few<br>");

           //boolean
           echo "<h1> Boolean </h1>";
           if(TRUE)
            print("This will always print<br>");

           else
            print("This will never print<br>");

           $true_num = 3 + 0.14159;
           $true_str = "Tried and true";
           $true_array[49] = "An array element";
           $false_array = array();
           $false_null = NULL;
           $false_num = 999 - 999;
           $false_str = "";

           echo "<h1> Null </h1>";
           $my_var = null;

           echo "<h1> Strings </h1>";
           $string_1 = "This is a string in double quotes";
           $string_2 = "This is a somewhat longer, singly quoted string";
           $string_39 = "This string has thirty-nine characters";
           $string_0 = ""; // a string with zero characters
            
            //Sample outputs
           echo $string_1;
              echo "<br>";
           echo $string_2;
              echo "<br>";
           echo $string_39;
              echo "<br>";
           echo $string_0;
              echo "<br>";

            
            $variable = "name";
            $literally = 'My $variable will not print!\n';
                print($literally); //error in printing
                echo "<br>";
            $literally = "My $variable will print!\n";
                print($literally);

            echo "<h1> PHP local variables </h1>";
              $x = 4;
                function assignx () 
                {
                    $x = 0;
                    print "\$x inside function is $x. ";
                }
                assignx();
                    print "\$x outside of function is $x.";

            echo "<h1> PHP Function Parameters </h1>";
            // multiply a value by 10 and return it to the caller
            
            function multiply ($value) {
            $value = $value * 10;
            return $value;
            }
            $retval = multiply (10);
            Print "Return value is $retval\n";

            echo "<h1> PHP Global variables </h1>";
            $somevar = 15;
            function addit() {
            GLOBAL $somevar;
            $somevar++;
            print "Somevar is $somevar";
            }
            addit();

            echo "<h1> PHP Static variables </h1>";
            function keep_track() {
            STATIC $count = 0;
            $count++;
            print $count;
            echo"<br>";            
            }
            keep_track();
            keep_track();
            keep_track();

        ?>
    </body>
</html>