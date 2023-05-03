<?php
/* 
 Note : এখানে এক function কে আর একটা function এ call করা হলে, এটাকে বলা যাবে recursive function.
 এখানে এক function কে আর একটা function এ ব্যবহার করা হচ্ছে, 
*/


//  Recursion and Recursive Functions -
    // using recursive function using 1 to 10 print - 

function printN($i){
    if($i>10){
        return;
    }
    echo $i. PHP_EOL;
    $i++;
    printN($i);
}
printN(1);


/* 
 Recursive Functions এ যখন নিজেই নিজেকে কল দিবে তখন সে আবার function থেকে কল নিয়ে ভিতরে যাবে।
*/

/* 
 Note : Recursive Functions এ  শুরুতে কন্ডিশন সেট করে দিতে হবে না হলে সে infinite loop এ চলতেই থাকবে।
*/


echo PHP_EOL;

// ---------------------------------------------------

function printNumber($counter, $end, $stepping){
    if($counter > $end){
        return;
    }
    echo $counter.PHP_EOL;
    $counter += $stepping;
    printNumber($counter, $end, $stepping);
}
printNumber(21, 37, 2);



