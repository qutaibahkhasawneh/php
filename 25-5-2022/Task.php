<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Exersice 1</h2>
    <?php

     $year=2000;
     if ($year % 4 ==0){
     echo "this year is leap year";
     }
     else {
         echo "this year is not leap";
     }
    ?>
    
    <h2>Exersice 2</h2>
    <?php

     $temp=18 ;
     if( $temp<20){
         echo "the season is winter";
     }else{
         echo "the season is summer";
     }

    ?>

    <h2>Exersice 3</h2>

    <?php
    
     $int1=10;
     $int2=10;
     if ($int1==$int2){
         echo ($int1+$int2)*3;

     }else{
         echo $int1+$int2;
     }
    ?>


    <h2>Exersice 4</h2>
    <?php 
    
    $num1=15;
    $num2=15;
    if($num1+$num2==30){
        echo "true";
    }else{
        echo "false";
    }

    ?>

<h2>Exersice 5</h2>
<?php

$num=10;
if($num >0 && $num % 3==0){
    echo "true";
}else{
    echo "false";
}

?>
<h2>Exersice 6</h2>
<?php
$number=30;
if($number>=20 && $number<=50){
    echo "ture";
}else{
    echo "false";
}
?>

<h2>Exersice 7</h2>
<?php
$x=1;
$y=5;
$z=9;

if($x>$y && $x>$z){
    echo $x;
}elseif($y>$x && $y>$z){
    echo $y;
}else{
    echo $z;
}
?>

<h2>Exercice 8</h2>
   <?php 
   $units=100;

   if($units>250) {
       echo $units*7.5;
   }

   if($units>200) {
    echo $units*6.2;
    }

    if($units>100) {
        echo $units*5;
    }

    if($units>0) {
    echo $units*2.5; 
    }

    else {
        echo 'Wrong Entry!';
    }

   ?>

<h2>Exercice 9</h2>
   <?php 
    $age = 20;
    if($age>=18) {
        echo 'eligible to vote';
    }
    else {
        echo'no eligible to vote';
    }
   ?>

<h2>Exercice 10</h2>

   <?php 
    $numb = 0;
    if($numb>0) {
        echo 'positive';
    }
    else if($numb<0){
        echo 'negative';
    }
    else {
        echo 'zero';
    }

   ?>

<h2>Exercice 11</h2>
   <?php 
    $number1=10;
    $number2=20;
    $operation ='/';
    if($operation=='+'){
     echo $number1 + $number2;   
    }

    if($operation=='*') {
        echo $number1 *$number2;   
    }

    if($operation=='/'){
        echo $number1 / $number2;   
    }

    if($operation=='-'){
        echo $number1 -$number2  ; 
       }
     
   ?>



   
   <h2>Exercice 12</h2>

   <?php
    $marks = [60,86,95,63,55,74,79,62,50];
    $length=count($marks);
    $sum=0;

    for($counter=0; $counter<$length;$counter++) {
        $sum+=$marks[$counter];
    }
    $avg = $sum/$length;
    
    if($avg>100 || $avg <0){
        echo 'Wrong Entry!';
    }
    else {
        if($avg>=90) {
            echo "A";
        }
        if($avg>=80) {
            echo "B";
        }
        if($avg>=70) {
            echo "C";
        }
        if($avg>=60) {
            echo "D";
        }
        else {
            echo 'F';
        }
    }
   ?>

</body>
</html>