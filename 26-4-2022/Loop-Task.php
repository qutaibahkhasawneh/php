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
    $Total=0;
    for($x=0;$x<=30;$x++){
        $Total+=$x;
    }
    echo "The Total numbers between 0 & 30 is $Total";
    echo "<br>";
    
    ?>


<h2>Exersice 4</h2>
<?php
for($i = 1; $i <= 5 ;$i++){
    for($j = 1;$j <= 5;$j++){
        if($i == $j){
            echo $i;
        }else{
            echo 0;
        }
    }
?>
<h2>Exersice 5</h2>
<?php

for ($i=5;$i>0;$i--){
static $factorial = 1;
$factorial*=$i;
}
echo $factorial ; 

?>
<h2>Exersice 6</h2>
<?php

$num1 = 0;
$num2 = 1;
$n = 30;
echo "$num1, $num2";
for($i = 1; $i <= $n; $i++) {
    $num3 = $num1 + $num2;
    $num1 = $num2;
    $num2 = $num3;
    echo ", $num3"; 
}

?>

<h2>Exersice 6</h2>
<?php
$n = 5;
$count = 0;
for($i = 1; $i <= $n;$i++){
    for($j = 0; $j < $i; $j++){
        $count++;
       echo $count ." ";
    
}
echo "<br>";
}
?>
</body>
</html>