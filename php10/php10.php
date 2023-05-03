<?php
// Fixing function return type -

function num($x, $y, $z){
    return $x + $y + $z;
}

echo sum("4", 4, 2);

echo PHP_EOL;




// -------------------------------------

// আমরা যদি এখানে আর্গুমেন্ট পাস করানোর সময় কোন  intiger/float/string/arry  কিনা সেটা চেক করার জন্য -

function sum(int $x, int $y, int $z):int{
    return $x + $y + $z;
}

echo sum(4, 4, 2);

// এখানে ফাংশন কি ধরণের রিটার্ন ভেলু দিবে সেটাও আমরা বলে দিতে পারি।
