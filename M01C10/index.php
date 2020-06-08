<?php

function counter (){
    static $a = 0;
    echo $a;
    $a++;

    counter();
}

// counter();
// echo '<br>';
// counter();
// echo '<br>';
// counter();
// echo '<br>';
// counter();
// echo '<br>';


// ----------------

function test() {
    static $count = 0;
    $count++;

    echo $count;

    if ($count < 10) {
        test();
    }

    // $count--;
}

// test();

$a = 'hola';
$$a = 'mundo'; // $hola = 'mundo';

// echo "$a ${$a}";

// -----------

define('EDAD_DEL_TEACHER', 33);
// echo 'Mi edad es ' . EDAD_DEL_TEACHER;

function test2 () {
    echo 'La edad es '  . EDAD_DEL_TEACHER;
}

// test2();


// ------

$a = 3;
$a += 5; // $a = $a + 5;

$x = 112;
$z = 99;

// echo $x <=> $z;

echo $aaa ?? $bbb ?? $x ?? $z;


// -----

$arr1 = [2,6,4,8];
$arr2 = [2,6,4,8];
$arr2 = [2,6,4,'8'];

echo $arr1 + $arr2; // [2,6,4,8,2,6,4,8]

echo $arr1 == $arr2; // true
echo $arr1 === $arr3; // false
