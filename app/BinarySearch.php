<?php


namespace App;


class BinarySearch
{
    private array $dataset;
    private bool $debuger;

    public function __construct(bool $debuger = false)
    {
        $this->debuger = $debuger;
    }

    public function GetArray(array $arr):void
    {
        $this->dataset = $arr;
    }

    public function Find(int $keyword):bool
    {
        return $this->Search($this->dataset, $keyword);
    }

    private function Search(array $arr, int $keyword):bool
    {
        if(empty($arr)) return false;
        if($this->debuger) print("Array is ".var_export($arr,true)."\n");

        if(count($arr) == 1) return $arr[0] == $keyword;

        $offset = floor(count($arr)/2);
        $res1 = $this->Search(array_slice($arr,0, $offset), $keyword);
        $res2 = $this->Search(array_slice($arr,$offset), $keyword);
        return $res1 || $res2;
    }

}