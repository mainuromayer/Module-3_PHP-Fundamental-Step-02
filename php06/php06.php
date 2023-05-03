<?php
// Fibonacci Series -
/* 
ফিবোনাক্কি সিরিজ ঃ ফিবোনাক্কি সিরিজ হচ্ছে কোন প্যাটার্ন এর পূর্ববর্তী দুই সংখ্যার যোগফল;
০ হচ্ছে ১ম পদ, ১ হচ্ছে ২য় পদ, 
    ধারা - ০, ১,... 
৩য় পদ হবে (১ম পদ[০] + ২য় পদ[১]) = ১
    ধারা - ০, ১, ১,... 
৪র্থ পদ হবে (২য় পদ[১] + ৩য় পদ[১]) = ২
    ধারা - ০, ১, ১, ২,... 
৫ম পদ হবে (৩য় পদ[১] + ৪র্থ পদ[২]) = ৩
    ধারা - ০, ১, ১, ২, ৩,... 
৬ষ্ঠ পদ হবে (৪র্থ পদ[২] + ৫ম পদ[৩]) = ৫
    ধারা - ০, ১, ১, ২, ৩, ৫, ...

 */
// 0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144, 233, 377, 610, 987, 1597, 2584, 4181.

$first = 0;
$second = 1;
$sum = 0;

for ($i=0; $i<10; $i++)
{
    echo $first . " ";
    $sum = $first + $second;
    $first = $second;
    $second = $sum;
}


echo PHP_EOL;
echo PHP_EOL;

// ---------------------------


$veryOld = 0;
$old = 1;
$new = 1;

for ($i=1; $i<10; $i++){
    echo $veryOld. " ";
    
    $old = $new;
    $new = $old + $veryOld;
    $veryOld = $old;
}

/* 
initial value :
v = 0;
o = 1;
n = 1; 

1st step :
v = 1
o = 1
n = 1 + 0 = 1

2nd step :
v = 12️⃣
o = 13️⃣
n = 1 + 1 = 2

3rd step :
v = 23️⃣
o = 23️⃣
n = 2 + 1 = 3

4th step :
v = 3
o = 3
n = 3 + 2 = 5


<new> -> <old> -> <veryOld> -> 
<new[old + veryOld]> -> <old[new]> -> <veryOld[old]> -> new[old + veryOld]

*/
