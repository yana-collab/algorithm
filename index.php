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


