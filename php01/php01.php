<?php

/** PHP Loops -
 * for loop
 * foreach loop [arrey use]
 * while loop
 * do...while loop
 * Go To
 */

/* ===================================== */

// for loop -
/* 0 - 10 print using for loop */

echo "For Loop\n";

for ( $i = 1; $i < 10; $i++ ) {
    echo PHP_EOL;
    for ( $j = 0; $j < $i; $j++){
        echo "*";
    }
}

echo PHP_EOL;


/* ===================================== */

// while loop -
/* 0 - 10 print using while loop */

echo "While Loop\n";

$i = 0;
while($i < 10){
    $i++;
    echo "$i".PHP_EOL;
}

echo PHP_EOL;


/* ===================================== */

// do...while loop -
/* 0 - 10 print using do...while loop */

echo "Do While Loop\n";

$i = 0;
do{
    $i++;
    echo "$i".PHP_EOL;
}
while($i < 10);

echo PHP_EOL;


/* ===================================== */

// go to loop -
/* 0 - 10 print using go to loop */

echo "Go To Loop\n";

$i = 0;
a: $i++;
echo $i.PHP_EOL;
if($i<10) goto a;