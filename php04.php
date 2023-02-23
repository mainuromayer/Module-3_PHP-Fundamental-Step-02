<?php
$j = 0;
while ($j < 5){
    echo $j;
    echo PHP_EOL;
    $j++;
}

echo PHP_EOL;




// --------------
/* while multiple case - initialize and condition check */

    $i = 0;
    while ($i++ <5){
        echo $i.PHP_EOL;
    }

    echo PHP_EOL;

    // ------------------

    $i = 0;
    while (++$i <5){
        echo $i.PHP_EOL;
    }

    echo PHP_EOL;





/* ============================= */

$x = $y = 5;
$x = $y++;
echo $x. " : " .$y;

echo PHP_EOL;

// ------------------

$x = $y = 5;
$x = ++$y;
echo $x. " : " .$y;
