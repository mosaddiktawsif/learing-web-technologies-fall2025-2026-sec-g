<?php

//rectangle
$length = 5;
$width = 3;
$area = $length * $width;
$perimeter = 2 * ($length + $width);
echo "Area: " . $area . "<br>";
echo "Perimeter: " . $perimeter . "<br>";





//Vat 
$amount = 100;
$vat = 0.15 * $amount;
echo "VAT: " . $vat . "<br>";





//Even or ODD
$number = 7;
if ($number % 2 == 0) {
    echo "Even<br>";
} else {
    echo "Odd<br>";
}




//large Number
$a = 10;
$b = 20;
$c = 15;
if ($a > $b && $a > $c) {
    echo $a . "<br>";
} else if ($b > $a && $b > $c) {
    echo $b . "<br>";
} else {
    echo $c . "<br>";
}




//odd number (10-100)
for ($i = 10; $i <= 100; $i++) {
    if ($i % 2 != 0) 
        {
        echo $i . " ";
        }
}
echo "<br>";





//search Element
$array = [1, 2, 3, 4, 5];
$search = 3;
$found = false;
for ($i = 0; $i < count($array); $i++) {
    if ($array[$i] == $search) {
        $found = true;
    }
}
if ($found) {
    echo "Found<br>";
} else {
    echo "Not found<br>";
}





//Print Shape
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br>";
}

for ($i = 3; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j . " ";
    }
    echo "<br>";
}

$letters = ['A', 'B', 'C', 'D', 'E', 'F'];
$k = 0;
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $letters[$k] . " ";
        $k++;
    }
    echo "<br>";
}





//2D array
$array = [
    [1, 2, 3, 'A'],
    [1, 2, 'B', 'C'],
    [1, 'D', 'E', 'F']
];

for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3 - $i; $j++) {
        echo $array[$i][$j] . " ";
    }
    echo "<br>";
}

for ($i = 0; $i < 3; $i++) {
    $start = 3 - $i;
    for ($j = 0; $j < $i + 1; $j++) {
        echo $array[$i][$start + $j] . " ";
    }
    echo "<br>";
}

?>


