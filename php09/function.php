<?php
/* 
মনে করি একটা রোবট আছে, তাকে কমান্ড করে বলে দিতে হবে যে কি ধরনের খাবার serve করবে - এটা তাকে বলে দিব
এবং default value সেট করে দিব
*/
function serve($foodType="Coffee", $numberOfItem="1 cups"){
    echo "{$numberOfItem} of {$foodType} has/have been served";
}