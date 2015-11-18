<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'user/config/plugins/email.yaml',
    'modified' => 1447873669,
    'data' => [
        'enabled' => true,
        'from' => 'info@mediatrends.cl',
        'to' => 'mauro@montana-studio.com',
        'mailer' => [
            'engine' => 'mail',
            'smtp' => [
                'port' => 25,
                'encryption' => 'none'
            ],
            'sendmail' => [
                'bin' => '/usr/sbin/sendmail'
            ],
            'default' => 'mail'
        ]
    ]
];
