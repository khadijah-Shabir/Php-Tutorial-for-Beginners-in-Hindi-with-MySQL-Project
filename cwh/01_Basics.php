<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>

     
        <?php
        define( "PI", 3.14);

          echo "<h1>Introduction</h1>";
          echo "this is my first php website";
          echo "<br>";
          echo "php is an open source server side scripting language we are using it as a backend language";
          echo "<br>";
          echo "free to download and using it ";
          echo "<br>";
          echo "logic writing";
          echo "<br>";
          echo " dynamic page content making";
          echo "<br>";
          echo "reading database without letting user know that the data is coming from database";
          echo "<br>";

          $var1= 5;
          $var2= 10;
          $var3= $var1 + $var2;
          echo $var1 + $var2;


          echo "the value of new variable is";
          echo $var3;
          echo "<br>";

          echo "<h1>Comparison operators</h1>";

          //secret algorithm

          echo var_dump($var1 == $var2);

          echo "<h1>Increment and decrement operators</h1>";

          echo $var1++;
          echo "<br>";
          echo $var1--;

          echo "<h1>Logical operators</h1>";
          //and &&
          //or ||
          //xor
          // !

          $myvar1=(true and true);
          $myvar2=(true or true);
          $myvar3=(true xor true);
          $myvar=(!true);
          echo $myvar1;

      



        ?>

 

    
    
</body>
</html>