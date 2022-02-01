<?php

return [
    'modules' => require __DIR__ . '/modules.config.php',

    'module_listener_options' => [
        'module_paths' => [
            './module',
            './vendor',
        ],

        'config_glob_paths' => [
            realpath(__DIR__) . '/autoload/{{,*.}global,{,*.}local}.php',
        ],

        'config_cache_enabled' => false,

        // The key used to create the configuration cache file name.
        'config_cache_key' => 'application.config.cache',

        'module_map_cache_enabled' => false,

        // The key used to create the class map cache file name.
        'module_map_cache_key' => 'application.module.cache',

        // The path in which to cache merged configuration.
        'cache_dir' => 'data/cache/',
    ],
];
