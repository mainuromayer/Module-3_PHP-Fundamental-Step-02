<?php
/* using one loop (10-1) and (1-10) print */

for ($i = 10; 0 < $i; $i--){
    // echo $i." : ". (11 - $i) . PHP_EOL;
    printf("%2d"." : ". (11 - $i) . PHP_EOL,$i);
}


echo PHP_EOL;

/* ============================== */
/* multiple variable use */

for($i = 10,$j = 1; 0 < $i; $i--,$j++){
    echo $i." : ".$j.PHP_EOL;
}