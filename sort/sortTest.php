<?php
/**
 * Created by PhpStorm.
 * User: Sergey.I
 * Date: 09.06.2017
 * Time: 16:27
 */

require_once __DIR__ . '/sort.php';

$arr = [1, 3, 5, 2, 11, 7, 0, -5, 0, 22, 19];

echo 'Исходная последовательность чисел:<br>';

echo '<pre>';
var_export($arr);
echo '</pre>';

$arr = insertionSort($arr);

echo 'Отсортированная последовательность чисел:<br>';

echo '<pre>';
var_export($arr);
echo '</pre>';