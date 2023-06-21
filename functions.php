<?php
function myFuct($name){
    echo "Hi $name";
}
myFuct('Gashie');
function cmp($x,$y){
    if($x > $y){
        echo "$x is greater";
    }elseif($x < $y){
        echo "$y is greater";

    }else {
        echo "numbers are equal";
    }
}

cmp(20,20);
?>