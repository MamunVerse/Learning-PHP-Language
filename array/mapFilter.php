<?php

    $numbers = array(1,2,3,4,5,6,7,8,9,10,11,12);

    function cube($item){
        return $item*$item*$item;
    }

    function even($item): bool
    {
        return $item%2==0;
    }


    $newArray = array_map('cube', $numbers);
    $newArrayFilter = array_filter($numbers, 'even',);

    print_r($newArray);
    print_r($newArrayFilter);


