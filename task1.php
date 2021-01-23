<?php

$a = [1, 2, [[9, 10, [11]], 7, 8], 3, 5];

array_walk_recursive($a, function(&$item) {
     $item*=2;
});

print_r($a);

