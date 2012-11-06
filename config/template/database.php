<?php

/**
 * Database Template
 */

return array(
    'doctrine' => array(
        'connection' => array(
            'orm_default' => array(
                'params' => array(
                    'host'      => 'localhost',
                    'dbname'    => 'socialog',
                    'user'      => 'root',
                    'password'  => '',
                )
            )
        ),
        'configuration' => array(
            'orm_default' => array(
                'metadata_cache' => 'array',
                'query_cache' => 'array',
                'result_cache' => 'array',
                'generate_proxies' => true,
                'proxy_dir' => 'data/DoctrineORMModule/Proxy',
                'proxy_namespace' => 'DoctrineORMModule\Proxy'
            )
        ),
    ),
);
