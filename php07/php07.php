<?php

// encapsulation -
/* এটা আমরা ব্যবহার করব গোপনীয়তা রক্ষা করতে,

এখানে আমরা কিছু লজিক্যাল কাজ করব যেটা অন্য কেউ জানার দরকার নেই, এটার মাধ্যমে তাদের কাজ করলেই হইল। */


// -----------------------------------------
/* include_once শুধু একবার include করতে পারে */
include_once "function.php";

$x = 13;

if(isEven($x)){  // argument $x
    echo "{$x} number is Even";
}else{
    echo "{$x} number is Odd";
}


// ------------------------------------------
// A DocBlock looks like this: 
/**
 * A summary 
 * informing element does.
 * informing element does.
 * informing element does.
 */