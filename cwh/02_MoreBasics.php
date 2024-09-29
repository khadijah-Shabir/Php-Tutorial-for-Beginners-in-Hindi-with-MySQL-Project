<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
    <style>
        *{
        margin: 0;
        padding: 0; 
        box-sizing: border-box;
        }
        .container{
            max-width: 80%;
            background-color: rgb(228,195,195);
            margin: auto;
            padding: 23px;

        }
        </style>
</head>
<body>

   <div class="container">
    <h1>Lets learn PHP</h1>
    this is a container

    <?php

        $age=7;

        if($age>18){
            echo "YOU can go to the party";
        }
        else if($age==7){
            echo "You are 7 years old";
        }else{
            echo "You can not go to the party";
        }

        echo "<br>";

        echo "<h1>Learning Loops</h1>";
        echo "<br>";
        echo "while and dowhile loop";
        echo "<br>";
        echo "for loop";
        echo "<br>";
        echo "foreach loop";
        echo "<br>";

        //Arrays in PHP
        $languges=array("C","C++","Python","Java","PHP");
        echo $languges[0];
        echo "<br>";
        echo count($languges);
        echo "<br>";

        //Loops in PHP

        $a=0;
        while ($a<= 10){
            echo "<br>The value of a is :";
            echo $a;
            echo "<br>";
            $a++;
        }

        echo "<br>";
        echo "<b>Iterating arrays in PHP using while loop</b>";
        $a=0;
        while ($a< count($languges)){
            echo "<br>The value of language is :";
            echo $languges[$a];
            echo "<br>";
            $a++;
        }

        echo "<br>";
        echo "<b>Iterating arrays in PHP using do-while loop</b>";
        $a=0;
        do{
            echo "<br>The value of language is :";
            echo $languges[$a];
            echo "<br>";
            $a++;
        }while ($a< count($languges));

        echo "<br>";
        echo "<b>Iterating arrays in PHP using for loop</b>";
        echo "<br>";
        for($a=0;$a< count($languges);$a++){
            echo "<br>The value of language is :";
            echo $languges[$a];
            echo "<br>";
        }


        echo "<br>";
        echo "<b>Iterating arrays in PHP using foreach loop</b>";
        echo "<br>";

        foreach($languges as $value){
            echo $value;
            echo "<br>";
        }


        
        

        


    ?>
   </div>



        
    
</body>
</html>