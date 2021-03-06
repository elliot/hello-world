<?php

## Requires PHP 5.4

array_map(
    function ($seed, $fill) {
        mt_srand($seed);

        $word = vsprintf(
            str_repeat('%c', $fill) . ' ', 
            array_map(function ($void) { return mt_rand(1, 26) + 96; },  range(1, $fill))
        );

        echo ucfirst($word);
    },
    [-2129053370, -2142903234],
    [5, 5]
);
