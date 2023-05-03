<?php

/*
আমরা এখানে যে ভেলু গুলো argument হিসেবে parameter এ দিচ্ছি সেখানে যদি কম argument পাস করাই তাহলে parameter গুলোতে defualt ভাবে value সেট করে দিতে পারি।

যদি এখানে যে parameter গুলোর argument আছে সেগুলো ছাড়া বাকী গুলোতে defualt ভাবে value সেট করে দিই।
সেগুলো হবে optional parameter.
 */

function sum( int $x=0, int $y=0, int $z=0 ): int {
    return $x + $y + $z;
}
echo sum( 5, 5 );

echo PHP_EOL;





// --------------------------------------------

// Accepting Unlimited Arguments in Functions -

function num($x, $y, int ...$numbers ): int {
    echo $x + $y;
    echo PHP_EOL;
    
    $result = 0;

    for ($i=0; $i<count($numbers); $i++){
        $result += $numbers[$i];
    }
    return $result;
}
echo num( 1, 2, 5, 5, 5, 10, 5, 5, 15 );


/* 
Note:
 -> এখানে 1 এবং 2 count হবে শুধু $x এবং $y এর জন্য। আর বাকী গুলো ...$numbers এ count হবে। 
 -> এখানে output শুধু ...$numbers এর ভিতর এর গুলোকে কাউন্ট করে রেজাল্ট দিবে।
 -> আবার ...$numbers এটা ব্যবহার করা হয় Unlimited Arguments পাস করানোর জন্য, অর্থাৎ Unlimited parameter নেয়ার ক্ষেত্রে।
 ->...$numbers যখন ব্যবহার করব, এর শেষে আর কোন parameter নেয়া যাবে না।

 
 */

