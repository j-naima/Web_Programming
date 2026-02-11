<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> My first PHP page </h1>

<div class="container">
    This is div class <br>

    <?php
       echo"Naima\n";
       define('Pi',3.1416);
     
       //single line comment
       $variable1 = 10;
       $variable2 = 20;
       echo $variable1;
       echo $variable2;

       echo $variable1+$variable2;
       echo "<br>";
      
    //    Operators in PHP

    //    Arithmatic Operators
       echo"Value of variable1 + variable2 is:";
       echo $variable1+$variable2;
       echo "<br>";
       echo"Value of variable1 - variable2 is:";
       echo $variable1-$variable2;
       echo "<br>";
       echo"Value of variable1 * variable2 is:";
       echo $variable1*$variable2;
       echo "<br>";
       echo"Value of variable1 / variable2 is:";
       echo $variable1/$variable2;
       echo "<br>";

    //    Assignment Operators
       $newvalue = $variable1;
    //    $newvalue += 1;
    //    $newvalue -= 1;
    //    $newvalue *= 1;
       $newvalue /= 5;
       echo "Value of new value is:";
       echo "$newvalue";
       echo "<br>";

    //    comparison Operators
       echo "value of 1==4 is: ";
       echo var_dump(1==4);
       echo "<br>";
       echo "value of 1!=4 is: ";
       echo var_dump(1!=4);
       echo "<br>";
       echo "value of 1>=4 is: ";
       echo var_dump(1>=4);
       echo "<br>";
       echo "value of 1<=4 is: ";
       echo var_dump(1<=4);
       echo "<br>";

    //    Increment/Decrement Operators
    //    echo $variable1++;
    //    echo $variable1;
    //    echo "<br>";
    //    echo $variable1--;
    //    echo "<br>";
    //    echo $variable1;
    //    echo "<br>";
    //    echo ++$variable1;
    //    echo "<br>";
    //    echo $variable1;
    //    echo "<br>";
       echo --$variable1;
       echo "<br>";
       echo $variable1;
       echo "<br>";

    // Logical Operators
    // and(&&)
    // or(||)
    // not(!)
    // xor
   //  $myvar = (true and true);
   //  $myvar = (true and false);
   //  $myvar = (false and true);
   //  $myvar = (false and false);
   //  echo "<br>";
   // $myvar = (false xor true);
   $myvar = (true xor true);
   // $myvar = (false xor false);
   // $myvar = (true xor false);
    echo var_dump($myvar);
    echo "<br>";

    ?>

    <?php
    //data types in php
    //String
    //Integer
    //Boolean
    //Array
    //Obj
    $var = "This is string";
    echo var_dump($var);
    echo "<br>";

    $var = 23;
    echo var_dump($var);
    echo "<br>";

    $var = 2.5;
    echo var_dump($var);
    echo "<br>";

    $var = true;
    echo var_dump($var);
    echo "<br>";
    echo Pi;
    echo "<br>";

   echo"whatever";
    ?>
</div>

    
</body>
</html>