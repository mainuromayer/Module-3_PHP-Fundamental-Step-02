<?php
// ১ - ১০০ পর্যন্ত ৭ দ্বারা বিভাজ্য সংখ্যা গুলো হল -
for ($i=0; $i < 100; $i+=7) { 
    echo "$i \n";
}
echo PHP_EOL;

/* =================================================== */

// ১ - ১০০ পর্যন্ত ৭ এবং ১১ দ্বারা বিভাজ্য সংখ্যা গুলো হল -

    // use if else different way -

    for($i = 0; $i < 100; $i++){
        if ($i % 7 == 0) : echo $i.PHP_EOL;
        elseif ($i % 11 == 0) : echo $i.PHP_EOL;
    endif;
    }
    echo PHP_EOL;


    // -------------------------------------------
    // use nosted case

    for($i = 1; $i < 100; $i++){
        echo ($i % 7 == 0) ? $i.PHP_EOL : "";
        echo ($i % 11 == 0) ? $i.PHP_EOL : "";
    }
    echo PHP_EOL;


    // -------------------------------------------
    // use multiple case

    for($i = 0, $j = 0; $i < 100; $i+= 7, $j+= 11){
        echo $i.PHP_EOL;
        echo $j < 100 ? $j.PHP_EOL : "";
    }