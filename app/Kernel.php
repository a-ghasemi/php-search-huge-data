<?php


namespace App;


class Kernel
{
    private bool $debuger;

    public function __construct(bool $debuger = false)
    {
        $this->debuger = $debuger;
    }

    public function run(){
        $keyword = 5;
        $arr = [1,2,3,4,5,6,7,8,9];

        $search_engine = new BinarySearch($this->debuger);
        $search_engine->GetArray($arr);
        $result = $search_engine->Find($keyword);

        $result ?
            printf("%d is in the Array",$keyword)
            : printf("%d is not in the Array",$keyword);
    }
}