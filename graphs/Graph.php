<?php

/**
 * Created by PhpStorm.
 * User: Sergey.I
 * Date: 09.06.2017
 * Time: 16:45
 */
class Graph {

    private $adjacencyList;
    private $adjacencyMatrix;

    function __construct() {
        $this->adjacencyList = [];
        $this->adjacencyMatrix = [];
    }

    /**
     * Задает для графа список смежности.
     *
     * @param $adjacencyList
     */
    public function setAdjacencyList($adjacencyList) {
        $this->adjacencyList = $adjacencyList;
        $this->adjacencyMatrix = $this->adjacencyList2AdjacencyMatrix($adjacencyList);
        $this->showAdjacencyMatrix();
    }

    /**
     * Задает для графа матрицу смежности.
     *
     * @param $adjacencyMatrix
     */
    public function setAdjacencyMatrix($adjacencyMatrix) {
        $this->adjacencyMatrix = $adjacencyMatrix;
        $this->adjacencyList = $this->adjacencyMatrix2AdjacencyList($adjacencyMatrix);
        $this->showAdjacencyList();
    }

    /**
     * Преобразует список смежности в матрицу смежности.
     *
     * @param $adjacencyList
     * @return array
     */
    public function adjacencyList2AdjacencyMatrix($adjacencyList) {
        $adjacencyMatrix = [];
        $len = count($adjacencyList);
        $inf = -1;

        for ($i = 0; $i < $len; $i++) {
            $adjacencyMatrix[$i] = [];
            for ($j = 0; $j < $len; $j++) {
                if (isset($adjacencyList[$i]) && isset($adjacencyList[$i][$j])) {
                    $adjacencyMatrix[$i][$j] = $adjacencyList[$i][$j];
                }
                else {
                    $adjacencyMatrix[$i][$j] = $inf;
                }

                if ($i === $j) {
                    $adjacencyMatrix[$i][$j] = 0;
                }
            }
        }

        return $adjacencyMatrix;
    }

    /**
     * Преобразует матрицу смежности в список смежности.
     *
     * @param $adjacencyMatrix
     * @return array
     */
    public function adjacencyMatrix2AdjacencyList($adjacencyMatrix) {
        $adjacencyList = [];
        $len = count($adjacencyMatrix);

        for ($i = 0; $i < $len; $i++) {
            $adjacencyListItem = [];
            for ($j = 0; $j < $len; $j++) {
                if (!is_numeric($adjacencyMatrix[$i][$j]) || $adjacencyMatrix[$i][$j] <= 0) {
                    continue;
                }
                $adjacencyListItem[$j] = $adjacencyMatrix[$i][$j];
            }
            $adjacencyList[] = $adjacencyListItem;
        }

        return $adjacencyList;
    }

    /**
     * Отображает список смежности.
     */
    public function showAdjacencyList() {
        foreach ($this->adjacencyList as $vetexKey => $vertex) {
            echo $vetexKey . ': {';
            $str = '';
            foreach ($vertex as $adjacencyVertexKey => $adjacencyVertex) {
                $str .= $adjacencyVertexKey . ': ' . $adjacencyVertex . ', ';
            }
            $str = substr($str, 0, -2);
            echo $str;
            echo '},<br>';
        }
    }

    /**
     * Отображает матрицу смежности.
     */
    public function showAdjacencyMatrix() {
        $len = count($this->adjacencyMatrix);

        for ($i = 0; $i < $len; $i++) {
            for ($j = 0; $j < $len; $j++) {
                if ($this->adjacencyMatrix[$i][$j] === -1) {
                    $this->adjacencyMatrix[$i][$j] = '-';
                }

                echo '<span style="display:inline-block; width:60px; height: 60px; border: 1px solid #ccc; text-align: center; line-height: 60px;">'
                    . $this->adjacencyMatrix[$i][$j] . '</span>';
            }
            echo '<br>';
        }
    }
}