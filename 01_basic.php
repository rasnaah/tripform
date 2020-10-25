<!DOCTYPE html>
<html>

   <head>
      <title>HTML doctype Tag</title>
   </head>

   <body>
   <div class="container">
   This is my first php website
   <?php
    echo "Hello everyone my name is rasnaah and this is printed using php";
    //single line comment
    /*
    this is multi
    line comment
    */
    //variables in php
    $variable1 = 4;
    $variable2 = 5;
    echo $variable1;
    echo $variable2;

    echo $variable1 + $variable2;
    //operators in php
   //  Arithmetic operators
   echo "<br>";
   echo "The value of variable1 and variable2 is ";
   echo $variable1 / $variable2;
   echo "<br>";
   //  Assignment operators
   $newVar = $variable1;
   $newVar += 2;
   echo "The value of new variable is ";
   echo "$newVar";
   echo "<br>";
   //  Comparision operators
   echo "<h1>Comparision Operators</h1>";
   echo "The value of 1==4 is ";
   echo var_dump(1<=4);
   //  Increment/Decrement operators
   echo $variable1++;
   echo $variable1--;
   echo ++$variable1;
   echo --$variable1;
   echo "<br>";
   echo $variable2++;
   echo $variable2;
   //  Logical operators
   //and (&&)
   // or (||)
   // xor

   echo "<br>";
   
   $myVar = (true) xor (true);
   echo var_dump($myVar);

   ?>

   <?php
   //defining constant
   define('PI', 3.14);
      //Data types in php
      // 1. String
      // 2. Integer
      // 3. Float
      // 4. Boolean
      // 5. Array
      // 6. Object
      echo "<br>Data type<br>";
      $var = "This is a string";
      echo var_dump($var);
      echo "<br>";
      $var = 20;
      echo var_dump($var);
      echo "<br>";
      $var = 20.252;
      echo var_dump($var);
      echo "<br>";
      $var = true;
      echo var_dump($var);
      echo PI;

   ?>

   </div>  
   </body>
</html>