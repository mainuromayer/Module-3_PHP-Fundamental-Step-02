<?php
//  Dividing a large function into smaller functions -


/* function doTheLargerTask(){
    echo "Step A Done \n";
    echo "Step B Done \n";
    echo "Step C Done \n";
    echo "Step D Done \n";
    echo "Step E Done \n";
}
echo doTheLargerTask(); */


/* 
 -> একটা বড় কাজ কে ছোট ছোট অংশে ভাগ করে করলে কাজ টা পরিস্কার দেখা যাবে,
 -> একটা বড় কাজ কে ছোট ছোট অংশে ভাগ করলে, তারপরে কোথাও কোন সমস্যা হলে ডিবাগ করতে সুবিধা হয়।
 -> এজন্য সবসময় recommand করা হয় যে প্রত্যেক কাজের জন্য আলাদা আলাদা function ব্যবহার করতে।
 -> এভাবে আলাদা আলাদা function ব্যবহার করলে আরেকটা সুবিধা হচ্ছে যে প্রতিটা functionতাদের সমস্যা নিয়ে ব্যস্ত থাকবে।

 */





//  ------------------------------------

function doTaskA(){
    echo "Step A Done \n";
}

function doTaskB(){
    echo "Step B Done \n";
}

function doTaskC(){
    echo "Step C Done \n";
}

function doTaskD(){
    echo "Step D Done \n";
}

function doTaskE(){
    echo "Step E Done \n";
}


function doTheLargerTask(){
    doTaskA();
    doTaskB();
    doTaskC();
    doTaskD();
    doTaskE();
}
echo doTheLargerTask();

/* 
 -> এভাবে সবগুলো function অথবা, যে যে function গুলো লাগবে সেগুলোকে আরেকটা function এ ব্যবহার করতে পারব।
*/
