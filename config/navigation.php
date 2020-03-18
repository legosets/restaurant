<?php

return [
    'kitchen' => [
        'title' => 'Kitchen',
        'route' => 'menu-items.index',
        'children' => [
            'menu_items' => [
                'title' => 'Menu items',
                'route' => 'menu-items.index',
            ],
            'categories' => [
                'title' => 'Categories',
                'route' => 'categories.index',
            ]
        ]
    ]
];
