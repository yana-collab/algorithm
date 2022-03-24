<?php
//  Опишите алгоритм разбиения массива длины N на k подмассивов так, чтобы размер самого длинного
//  и самого короткого подмассива отличалась не больше чем на 1
//  Чему будут равны длины подмассивов?
//  Может ли k быть больше длины N?

function subArr ($arr, $k) {
    $n = count($arr);
    $startElement = 0;
    $subLen = floor ($n / $k);
    $subIndex = $n % $k;
    $subArr = array();

    if ($n === 0 || ($n === 1)) {
        return $arr;
    }
    if ($k < 1) {
    return false;

    } else {

    for ($i =0; $i < $k; $i++) {
        $step = ($i <  $subIndex) ? $subLen + 1 : $subLen;
        $subArr[$i] = array_slice($arr, $startElement, $step);
        $startElement+= $step;
    }
    return $subArr;
    }

}

subArr($arr, k);

//Ввод: натуральное число n
//Вывод: количество простых чисел строго меньше n

function getPrimes($num) {
    $primes = array();
    $not_primes = array();

    for($i = 4; $i <= $num; $i+=2) {
        $not_primes[$i] = true;
    }
    $next = 3;
    while($next <= (int)sqrt($num)) {
        for($i = $next*2; $i<= $num; $i+=$next) {
            $not_primes[$i] = true;
        }
        $next += 2;
        while($next <= $num && isset($not_primes[$next])) {
            $next+=2;
        }
    }
    for($i = 2; $i < $num; $i++) {
        if(!isset($not_primes[$i]))
            $primes[] = $i;
    }
    return count($primes);

}
getPrimes($num);

//Дан массив неповторяющихся чисел, который был отсортирован,
// а затем циклически сдвинут на неизвестное число позиций.
//Опишите без кода и псевдокода алгоритм поиска максимума в таком массиве


function getMax ($arr)
{
    $left = 0;
    $right = count($arr);
    $mid = floor($left + $right) / 2;
    $max = $arr[0];

    for ($i = $left; $i <= $mid; $i++) {
        if ($arr[$i + 1] > $i)
            $max = $arr[$i + 1];
    }
    for ($i = $mid; $i <= $right; $i++) {
        if ($max < $arr[$i])
            $max = $arr[$i];

    }
    return $max;
}
getMax($arr);