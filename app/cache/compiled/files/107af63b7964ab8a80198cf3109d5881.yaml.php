<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/marlene/Documents/Proyectos/Starterdaily/htdocs/app2/user/themes/mediakit/blueprints.yaml',
    'modified' => 1448024412,
    'data' => [
        'name' => 'MediaKit',
        'version' => '0.1.0',
        'description' => 'MediaKit para **StarterDaily**',
        'icon' => 'empire',
        'author' => [
            'name' => 'Montana Studio',
            'email' => 'mauro@mediatrends.cl',
            'url' => 'http://mediatrends.cl'
        ],
        'homepage' => 'https://github.com/getgrav/grav-theme-antimatter',
        'demo' => 'http://demo.getgrav.org/blog-skeleton',
        'keywords' => 'mediatrends, montana sudio, theme, core, modern, fast, responsive, html5, css3',
        'bugs' => 'https://github.com/getgrav/grav-theme-antimatter/issues',
        'license' => 'MIT',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'dropdown.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Dropdown in navbar',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];