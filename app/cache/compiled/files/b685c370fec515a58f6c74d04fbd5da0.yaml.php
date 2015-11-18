<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/maurorios/Documents/Localhost/_StarterDaily/_MediaKit/htdocs/app/system/blueprints/pages/move.yaml',
    'modified' => 1447793004,
    'data' => [
        'rules' => [
            'slug' => [
                'pattern' => '[a-z][a-z0-9_\\-]+',
                'min' => 2,
                'max' => 80
            ]
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'route' => [
                    'type' => 'select',
                    'label' => 'PLUGIN_ADMIN.PARENT',
                    'classes' => 'fancy',
                    '@data-options' => '\\Grav\\Common\\Page\\Pages::parents',
                    '@data-default' => '\\Grav\\Plugin\\admin::route',
                    'options' => [
                        '/' => 'PLUGIN_ADMIN.DEFAULT_OPTION_ROOT'
                    ]
                ]
            ]
        ]
    ]
];
