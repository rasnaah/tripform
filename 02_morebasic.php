<!DOCTYPE html>
<html lang = "en">

   <head>
    <meta charset = "UTF-8">
    <meta name = "viewport" content = "width=device-width, initialscale=1.0">
    <title>Php tutorial</title>
   </head>
   <style>
   *{
       margin:0;
       padding:0;
       box-sizing:border-box;
   }
   .container{
       max-width: 80%;
       color: rgb(238, 232, 243);
       background-color:rgb(176, 165, 165);
       margin: auto;
       padding: 23px;
   }
   </style>

   <body>
   <div class="container">
   <h1>Lets learn about PHP</h1>
   <?php
   //using if-else statements
   echo "Your party status is here:";
   echo "<br>";
    $age=18;
    if($age>18){
        echo "You can go to the party";
    }else if($age==8){
        echo "You are minor";
    }else{
        echo "You cannot go to the party";
    }

    echo "<br>";
    //arrays

    $languages = array("Python", "C++", "PHP", "Java");
    echo $languages[1];
    echo count($languages);

    //loops in php
    $a=0;
    while ($a <= 10) {
        echo "<br>The value of a is ";
        echo $a;
        $a++;
    }
    //Iterating arrays in PHP using while loop
    $a=0;
    while ($a < count($languages)) {
        echo "<br>The value of language is ";
        echo $languages[$a];
        $a++;

    }

    //do while loop

    $a=0;
    do {
        echo "<br>The value of language is ";
        echo $a;
        $a++;

    }while ($a < count($languages));

    //for loop
    for ($a=0; $a < 10; $a++) { 
        echo "<br>The value of a from for loop is ";
        echo $a;
    }

    foreach ($languages as $value) {
        echo "<br>The value from foreach loop is ";
        echo $value;
    }
    echo "<br>";

    function print5(){
        echo "FIVE";
    }
    print5();

    function print_number($number){
        echo "<br>Your number is ";
        echo $number;
    }
    print_number(7);
    print_number(77);
    print_number(777);




   ?>


   </div>
      
   </body>
</html>