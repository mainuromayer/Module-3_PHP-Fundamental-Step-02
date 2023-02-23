<?php
// break -
/* Loop এর মধ্যে Condition মিলে গেলে, আমরা সেটাকে থামিয়ে দিতে পারি */
for($i = 0; $i < 10; $i++){
    echo $i;
    echo PHP_EOL;

    if($i == 6){
        break;
    }
}

echo PHP_EOL;



// ------------------
/* ২০ থেকে ৫০ এর মধ্যে ১৩ দিয়ে কোন সংখ্যাকে ভাগ যাবে, 
আমরা break ব্যবহার করে সেটার আউটপুট দেখাতে পারি */

for ($i = 20; $i < 50; $i++){
    if ($i % 13 == 0){
        echo $i;
        echo PHP_EOL;
        break;
    }
}

echo PHP_EOL;





/* ========================== */
// continue -
/* ২০ থেকে ৩০ এর মধ্যে যখন ২৭ পাবে, তারপর থেকে রান করবে এর আগের গুলো রান করবে না */
/* continue আগের কোড গুলো রান না করে লাস্ট এ পাঠিয়ে দেয় */

    for($i = 20; $i < 30; $i++){
        
        if($i < 27){
            continue;
        }
        echo $i;
        echo PHP_EOL;
    }

    echo PHP_EOL;

    
    // -----------------

    for($i = 20; $i < 30; $i++){
        
        if($i < 27){
            goto a;
        }
         echo $i;
        echo PHP_EOL;
    a : "";
    }

    echo PHP_EOL;

