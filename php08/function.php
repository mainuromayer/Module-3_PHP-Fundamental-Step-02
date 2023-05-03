<?php

// Factorial Number and intiger value check -
/* 
  # How to calculate factorial?

    একটি positive integer (number) এর ফ্যাক্টরিয়াল হল সেই positive integer এর থেকে ছোট সমস্ত integer এর গুণের সমষ্টি। Example -
    5 এর Factorial হল 5 * 4 * 3 * 2 * 1 যা 120 এর সমান।
*/
// -----------------------------------


/* 
    // only use for php 7 -

    function factorial(int $n){
        $result = 1;
        for ($i=$n; $i>1; $i--){
            $result *= $i;
        }
        return $result;
    } 
*/




    // another way intiger check -

function factorial($n){
    if(gettype($n) != "integer"){
        return "invalid";
    }
    
    $result = 1;
    for ($i=$n; $i>1; $i--){
        $result *= $i;
    }
    return $result;
}

/* 
result : 1;
i = n = 5
1st step :
    5 > 1
    result = result * i
    result = 1 * 5
    result = 5  [ result stored 5 ]

2nd step :
    4 > 1
    result = result * i
    result = 1 * 4
    result = 4  [ stored 5 * 4 = 20 ]

3rd step :
    3 > 1
    result = result * i
    result = 1 * 3
    result = 3  [ stored 20 * 3 = 60 ] 5*4*3

4th step :
    2 > 1
    result = result * i
    result = 1 * 2
    result = 2  [ stored 60 * 2 = 120 ] 5*4*3*2

4th step :
    1 > 1
    condition false [ stop loop ]

*/