<?php
// Variable Scope in PHP Function -

// global scope -

$global = "Global";

function globalVariable() {
    global $global;
    echo $global;
}

echo globalVariable();
echo PHP_EOL;

/*
সাধারণত function এর ভিতরে যে variable গুলো নিয়ে কাজ করি, সেগুলো local scope এর ভিতরে থাকে। এর জন্য বাইরের কোন variable কে নিয়ে কাজ করতে চাইলে, তাকে function এর ভিতরে নিয়ে global করতে হবে।
 */





// -----------------------------------------------

// super global variable -
/*
PHP এর মধ্যে একটা buil in গ্লোবাল ভেরিয়েবল বানানো আছে। যেটা যে কোন জায়গাতে ব্যবহার করা যাবে। এটাকে super gobal variable বলা হয়।
 */
$superGlobal = "Super Global";

function superGlobalVariable() {
    echo $GLOBALS['superGlobal'];
}

echo superGlobalVariable();
echo PHP_EOL;

// Note : এখানে super global variable এ যে variable টা access করতে চাইবো, শুধু সে variable এর নাম টা দিব।







// -----------------------------------------------
// local scope -

function localVariable() {
    // global $local = "Local";
    $local = "Local";
    echo $local;
}

echo localVariable();
// echo $local;
echo PHP_EOL;

/*
সাধারণত function এর ভিতরে যে variable গুলো নিয়ে কাজ করি, সেগুলো local scope এর ভিতরে থাকে। এর জন্য বাইরে access করতে চাইলে, তাকে global করতে হবে। না হলে সেটা বাইরে কাজ করবে না।
 */

// -----------------------------------------------







// -----------------------------------------------
// static scope -

function staticVariable1() {
    static $num;
    $num = $num ?? 0;
    $num ++;
    echo $num;
    echo PHP_EOL;

}

function staticVariable2() {
    static $num;
    $num = $num ?? 0;
    $num ++;
    echo $num;
    echo PHP_EOL;

}

echo staticVariable1(); // 1
echo staticVariable1(); // 2
echo staticVariable1(); // 3

echo staticVariable2(); // 1
echo staticVariable2(); // 2
echo staticVariable2(); // 3

echo staticVariable1(); // 4
echo staticVariable2(); // 4

echo PHP_EOL;

/*
এখানে variable যদি static বলে দেই, তাহলে সে মান টা store করে রাখবে, পরবর্তীতে যদি ফাংশন কে কল করি তাহলে সে আগে যে মান টা ধরে রেখেছিল সেটা নিয়ে কাজ করবে।

Note : আবার static variable শুধু সেই function এর জন্য কাজ করবে, 
 */

// -----------------------------------------------