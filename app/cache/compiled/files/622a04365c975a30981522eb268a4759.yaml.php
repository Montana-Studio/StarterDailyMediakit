<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/marlene/Documents/Proyectos/Starterdaily/htdocs/app/system/blueprints/user/account.yaml',
    'modified' => 1448313237,
    'data' => [
        'title' => 'Site',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'content' => [
                    'type' => 'section',
                    'title' => 'PLUGIN_ADMIN.ACCOUNT',
                    'fields' => [
                        'username' => [
                            'type' => 'text',
                            'size' => 'large',
                            'label' => 'PLUGIN_ADMIN.USERNAME',
                            'disabled' => true,
                            'readonly' => true
                        ],
                        'email' => [
                            'type' => 'email',
                            'size' => 'large',
                            'label' => 'PLUGIN_ADMIN.EMAIL',
                            'validate' => [
                                'type' => 'email',
                                'message' => 'PLUGIN_ADMIN.EMAIL_VALIDATION_MESSAGE',
                                'required' => true
                            ]
                        ],
                        'password' => [
                            'type' => 'password',
                            'size' => 'large',
                            'label' => 'PLUGIN_ADMIN.PASSWORD',
                            'validate' => [
                                'required' => false,
                                'message' => 'PLUGIN_ADMIN.PASSWORD_VALIDATION_MESSAGE',
                                'pattern' => '(?=.*\\d)(?=.*[a-z])(?=.*[A-Z]).{8,}'
                            ]
                        ],
                        'fullname' => [
                            'type' => 'text',
                            'size' => 'large',
                            'label' => 'PLUGIN_ADMIN.FULL_NAME',
                            'validate' => [
                                'required' => true
                            ]
                        ],
                        'title' => [
                            'type' => 'text',
                            'size' => 'large',
                            'label' => 'PLUGIN_ADMIN.TITLE'
                        ],
                        'language' => [
                            'type' => 'select',
                            'label' => 'PLUGIN_ADMIN.LANGUAGE',
                            'size' => 'medium',
                            'classes' => 'fancy',
                            '@data-options' => '\\Grav\\Plugin\\admin::adminLanguages',
                            'default' => 'en',
                            'help' => 'PLUGIN_ADMIN.LANGUAGE_HELP'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
