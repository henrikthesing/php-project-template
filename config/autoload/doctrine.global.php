<?php

return [
    'doctrine' => [
        'migrations_configuration' => [
            'orm_default' => [
                'directory' => realpath('module/Storage/data/Migrations'),
                'name' => 'Database migrations',
                'namespace' => 'Storage\Migrations',
                'table' => 'migrations',
                'params' => [
                    'driverOptions' => [
                        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8;COLLATE \'utf8mb4_unicode_ci\';'
                    ],
                ],
            ],
        ],
    ],
];
