<?php
return [
    'backend' => [
        'frontName' => 'm2_admin'
    ],
    'cache' => [
        'graphql' => [
            'id_salt' => 'jQ5GEDpFGzmwA7lEWvPltTV6Xs5hYi2J'
        ],
        'frontend' => [
            'default' => [
                'id_prefix' => 'e3b_'
            ],
            'page_cache' => [
                'id_prefix' => 'e3b_'
            ]
        ],
        'allow_parallel_generation' => false
    ],
    'remote_storage' => [
        'driver' => 'file'
    ],
    'queue' => [
        'consumers_wait_for_messages' => 1
    ],
    'crypt' => [
        'key' => '0bfa008aac1bd173f82282a5141eb665'
    ],
    'db' => [
        'table_prefix' => '',
        'connection' => [
            'default' => [
                'host' => 'mysql',
                'dbname' => 'magento2',
                'username' => 'root',
                'password' => 'a8sdfga8fh8asf',
                'model' => 'mysql4',
                'engine' => 'innodb',
                'initStatements' => 'SET NAMES utf8;',
                'active' => '1',
                'driver_options' => [
                    1014 => false
                ]
            ]
        ]
    ],
    'resource' => [
        'default_setup' => [
            'connection' => 'default'
        ]
    ],
    'x-frame-options' => 'SAMEORIGIN',
    'MAGE_MODE' => 'default',
    'session' => [
        'save' => 'files'
    ],
    'lock' => [
        'provider' => 'db'
    ],
    'directories' => [
        'document_root_is_pub' => true
    ],
    'cache_types' => [
        'config' => 1,
        'layout' => 1,
        'block_html' => 1,
        'collections' => 1,
        'reflection' => 1,
        'db_ddl' => 1,
        'compiled_config' => 1,
        'eav' => 1,
        'customer_notification' => 1,
        'config_integration' => 1,
        'config_integration_api' => 1,
        'full_page' => 1,
        'config_webservice' => 1,
        'translate' => 1
    ],
    'downloadable_domains' => [
        'magento.local'
    ],
    'install' => [
        'date' => 'Fri, 19 Jan 2024 13:20:40 +0000'
    ],
    'system' => [
        'default' => [
            'cms' => [
                'wysiwyg' => [
                    'enabled' => 'disabled'
                ]
            ],
            'admin' => [
                'security' => [
                    'admin_account_sharing' => '1',
                    'use_form_key' => '0'
                ]
            ]
        ]
    ]
];
