<?php

$tree = [
    [
        'id'        => '8',
        'parent_id' => '6',
    ],
    [
        'id'        => '2',
        'parent_id' => '1',
    ],
    [
        'id'        => '3',
        'parent_id' => '1',
    ],
    [
        'id'        => '4',
        'parent_id' => '1',
    ],
    [
        'id'        => '5',
        'parent_id' => '2',
    ],
    [
        'id'        => '1',
        'parent_id' => '0',
    ],
    [
        'id'        => '6',
        'parent_id' => '2',
    ],
    [
        'id'        => '7',
        'parent_id' => '3',
    ],
];

$fast_tree = array_reduce(
    $tree,
    function ($carry, $item) {
        $carry[$item['id']] = $item['parent_id'];
        return $carry;
    }
);
//без рекурсии
foreach ($fast_tree as $id => $parent_id) {
    $view = $id;
    while ($id != '1') {
        $id = $fast_tree[$id];
        $view = $id . '.' . $view;
    }
    $tree_view[] = $view . "\n";
}
sort($tree_view);
foreach ($tree_view as $view) {
    print_r($view);
}
//с рекурсией
function item_view($id, &$fast_tree)
{
    if ($id == '1') {
        return '1';
    }
    return item_view($fast_tree[$id], $fast_tree) . '.' . $id;
}

$tree_view = [];
foreach ($fast_tree as $id => $parent) {
    $tree_view[] = item_view($id, $fast_tree);
}
sort($tree_view);
foreach ($tree_view as $view) {
    print_r($view . "\n");
}
