<?php
/**
 * Created by PhpStorm.
 * User: Sergey.I
 * Date: 09.06.2017
 * Time: 16:20
 */

/**
 * Экспоненциальный алгоритм вычисления чисел Фибоначчи.
 *
 * @param $n
 * @return int
 */
function fib1($n) {
    if ($n === 0 || $n === 1) {
        return $n;
    }

    $result = fib1($n - 1) + fib1($n - 2);

    return $result;
}

/**
 * Полиномиальный алгоритм вычисления чисел Фибоначчи.
 *
 * @param $n
 * @return int
 */
function fib2($n) {
    if ($n === 0) {
        return 0;
    }

    $arr = [0, 1];

    for ($i = 2; $i <= $n; $i++) {
        $arr[$i] = $arr[$i - 1] + $arr[$i - 2];
    }

    return $arr[$n];
}