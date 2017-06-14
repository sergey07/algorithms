<?php
/**
 * Created by PhpStorm.
 * User: Sergey.I
 * Date: 25.01.2017
 * Time: 10:39
 */

/**
 * Сортировка вставкой.
 *
 * @param $arr
 * @return mixed
 */
function insertionSort($arr) {
    $length = count($arr);

    for ($j = 1; $j < $length; $j++) {
        $key = $arr[$j];

        // Вставка $arr[$j] в отсортированную последовательность $arr[0 .. $j - 1].
        $i = $j - 1;
        while ($i >= 0 && $arr[$i] > $key) {
            $arr[$i + 1] = $arr[$i];
            $i--;
        }
        $arr[$i + 1] = $key;
    }

    return $arr;
}