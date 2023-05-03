<?php

for ( $i = 1; $i <= 5; $i++ ) {
    for ( $j = 5; $j >= $i; $j-- ) {
        echo " ";
    }
    for ( $k = 1; $k <= ( 2 * $i - 1 ); $k++ ) {
        echo "* ";
    }
    echo "\n";
}
for ( $i = 4; $i >= 1; $i-- ) {
    for ( $j = 5; $j >= $i; $j-- ) {
        echo " ";
    }
    for ( $k = 1; $k <= ( 2 * $i - 1 ); $k++ ) {
        echo "* ";
    }
    echo "\n";
}



echo PHP_EOL;
echo PHP_EOL;

// ---------------------------------
for ( $i = 1; $i <= 5; $i++ ) {
    for ( $j = $i; $j <= 5; $j++ ) {
        echo "* ";
    }
    echo PHP_EOL;
}

echo PHP_EOL;
echo PHP_EOL;
// ---------------------------------

for ( $i = 1; $i <= 5; $i++ ) {
    for ( $k = 1; $k <= $i; $k++ ) {
        echo "* ";
    }
    echo PHP_EOL;
}

echo PHP_EOL;
echo PHP_EOL;

// ---------------------------------

for ( $i = 1; $i <= 5; $i++ ) {
    for ( $j = $i; $j <= 5; $j++ ) {
        echo " ";
    }
    for ( $k = 1; $k < $i * 2; $k++ ) {
        echo "* ";
    }
    echo PHP_EOL;
}
for ( $i = 4; $i >= 1; $i-- ) {
    for ( $j = 5; $j >= $i; $j-- ) {
        echo " ";
    }
    for ( $k = 1; $k < $i * 2; $k++ ) {
        echo "* ";
    }
    echo PHP_EOL;
}
