<?php

return [
    /*
    |--------------------------------------------------------------------------
    | default
    |--------------------------------------------------------------------------
    |
    | The repository to use for establishing a feature's on/off state.
    |
    */

    'default' => 'chain',

    /*
    |--------------------------------------------------------------------------
    | Config Feature Switches
    |--------------------------------------------------------------------------
    |
    | This is a set of features to load into the config features repository.
    |
    */

    'feature' => [
        'auth' => false,
    ],

    /*
    |--------------------------------------------------------------------------
    | Repositories
    |--------------------------------------------------------------------------
    |
    | Configures the different repository options
    |
    */

    'repositories' => [
        'database' => [
            'table' => 'features',
        ],
        'config' => [
            'key' => 'features.feature',
        ],
        'redis' => [
            'prefix' => 'features',
            'connection' => 'default',
        ],
        'chain' => [
            'drivers' => [
                'database',
                'config',
                // 'redis',
            ],
            'store' => 'config',
            'update_on_resolve' => true,
        ],
    ],
];