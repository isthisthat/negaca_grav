<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/kanterakis/webapps/negaca_grav/user/config/site.yaml',
    'modified' => 1471020186,
    'data' => [
        'title' => 'Negaça',
        'author' => [
            'name' => 'Negaça',
            'email' => 'joe@test.com'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'Grupo Negaça Capoeira is a brazilian martial arts group in Cambridge, Saffron Walden and Stapleford'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
