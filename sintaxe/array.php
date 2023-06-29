<?php

$array = [
    1,2,3,4
];



foreach ($array as $key => $value) {
    echo $key . " " . $value;
}

echo count($array);

sort($array);

function ordenar(int $a1, int $a2){
    return 1;
}
usort($array, 'ordenar');

arsort();

ksort();

gettype($array);


class A {

    public static $n = 0;

    public function __construct(){
        A::$n;
        self::$n;
    }

    public function __destruct(){
        
    }


    public function pub() :void {

    }
}