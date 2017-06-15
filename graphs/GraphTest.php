<?php

/**
 * Created by PhpStorm.
 * User: Sergey.I
 * Date: 09.06.2017
 * Time: 17:05
 */
require_once __DIR__ . '/Graph.php';

list($a, $b, $c, $d) = range(0, 3);

//echo $d;

$g = new Graph();

// a: {b:11, d:5},
// b: {c:22},
// c: {d:33},
// d: {a:44},

// 0      11      inf     5
// inf    0       22      inf
// inf    inf     0       33
// 44     inf     inf     0

$adjacencyList = [];

$adjacencyListItemA = [];
$adjacencyListItemA[$b] = 11;
$adjacencyListItemA[$d] = 5;
$adjacencyListItemB = [];
$adjacencyListItemB[$c] = 22;
$adjacencyListItemC = [];
$adjacencyListItemC[$d] = 33;
$adjacencyListItemD = [];
$adjacencyListItemD[$a] = 44;

$adjacencyList = [
    $adjacencyListItemA,
    $adjacencyListItemB,
    $adjacencyListItemC,
    $adjacencyListItemD
];

$g->setAdjacencyList($adjacencyList);

$inf = -1;
$adjencyMatrix = [
    [0,     11,     $inf,   5   ],
    [$inf,  0,      22,     $inf],
    [$inf,  $inf,   0,      33  ],
    [44,    $inf,   $inf,   0   ],
];

$g->setAdjacencyMatrix($adjencyMatrix);