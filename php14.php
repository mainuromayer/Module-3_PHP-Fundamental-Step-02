<?php
// Printing Fibonacci Series Using Recursive Functions -

function fibonacci($old, $new, $start, $end){
    if($start > $end){
        return;
    }
    $start ++;

    echo $old. " ";
    $_temp = $old + $new;
    $old = $new;
    $new = $_temp;

    fibonacci($old, $new, $start, $end);
}

fibonacci(0, 1, 1, 10);

echo PHP_EOL;
echo PHP_EOL;




// -----------------------------------

function fibonacci_series($first, $second, $start, $end){
    if($start > $end){
        return;
    }
    $start ++;

    echo $first. " ";
    $_temp = $first + $second;
    $first = $second;
    $second = $_temp;
    fibonacci_series($first, $second, $start, $end);

}

fibonacci_series(0, 1, 1, 10);

echo PHP_EOL;
echo PHP_EOL;






// -----------------------------------

// use statatic variable -

function fibonacci_serial($old, $new, $end){
    static $start;
    $start = $start ?? 1;
    if ($start > $end){
        return;
    }
    
    echo $old . " ";
    $start ++;
    $_temp = $old + $new;
    $old = $new;
    $new = $_temp;

    fibonacci_serial($old, $new, $end);
}

fibonacci_serial(0, 1, 10);