<?php 

$numbers = array(25, 45, 88, 36, 56, 47, 12, 24, 83);
// var_dump($numbers);

echo "Les nombres pairs sont : ";
echo "<br>";
foreach ($numbers as $number) {
    if ($number % 2 == 0) {
        // var_dump($number);
        echo $number;
        echo "<br>";
    }
}