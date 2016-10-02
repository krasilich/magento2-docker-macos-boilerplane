<?php
return array(
    'backend'         => array(
        'frontName' => 'admin',
    ),
    'crypt'           => array(
        'key' => '9b3504bd56b4e57e444f2611d20f8e4c',
    ),
    'session'         => array(
        'save' => 'files',
    ),
    'db'              => array(
        'table_prefix' => '',
        'connection'   => array(
            'default' => array(
                'host'           => 'db',
                'dbname'         => 'magento2',
                'username'       => 'magento2',
                'password'       => '123123',
                'active'         => '1',
                'model'          => 'mysql4',
                'engine'         => 'innodb',
                'initStatements' => 'SET NAMES utf8;',
            ),
        ),
    ),
    'resource'        => array(
        'default_setup' => array(
            'connection' => 'default',
        ),
    ),
    'x-frame-options' => 'SAMEORIGIN',
    'MAGE_MODE'       => 'default',
    'cache_types'     => array(
        'config'                 => 1,
        'layout'                 => 1,
        'block_html'             => 1,
        'collections'            => 1,
        'reflection'             => 1,
        'db_ddl'                 => 1,
        'eav'                    => 1,
        'config_integration'     => 1,
        'config_integration_api' => 1,
        'full_page'              => 1,
        'translate'              => 1,
        'config_webservice'      => 1,
        'compiled_config'        => 1,
    ),
    'install'         => array(
        'date' => 'Sat, 01 Oct 2016 23:05:51 +0000',
    ),
    'cache'           => array(
        'frontend' => array(
            'default'    => array(
                'backend'         => 'Cm_Cache_Backend_Redis',
                'backend_options' => array(
                    'server'                    => 'cache',
                    'port'                      => '6379',
                    'persistent'                => '',
                    // Specify a unique string like "cache-db0" to enable persistent connections.
                    'database'                  => '0',
                    'password'                  => '',
                    'force_standalone'          => '0',
                    // 0 for phpredis, 1 for standalone PHP
                    'connect_retries'           => '1',
                    // Reduces errors due to random connection failures
                    'read_timeout'              => '10',
                    // Set read timeout duration
                    'automatic_cleaning_factor' => '0',
                    // Disabled by default
                    'compress_data'             => '1',
                    // 0-9 for compression level, recommended: 0 or 1
                    'compress_tags'             => '1',
                    // 0-9 for compression level, recommended: 0 or 1
                    'compress_threshold'        => '20480',
                    // Strings below this size will not be compressed
                    'compression_lib'           => 'gzip',
                    // Supports gzip, lzf and snappy,
                    'use_lua'                   => '0'
                    // Lua scripts should be used for some operations
                )
            ),
            'page_cache' => array(
                'backend'         => 'Cm_Cache_Backend_Redis',
                'backend_options' => array(
                    'server'           => 'cache',
                    'port'             => '6379',
                    'persistent'       => '',
                    // Specify a unique string like "cache-db0" to enable persistent connections.
                    'database'         => '1',
                    // Separate database 1 to keep FPC separately
                    'password'         => '',
                    'force_standalone' => '0',
                    // 0 for phpredis, 1 for standalone PHP
                    'connect_retries'  => '1',
                    // Reduces errors due to random connection failures
                    'lifetimelimit'    => '57600',
                    // 16 hours of lifetime for cache record
                    'compress_data'    => '0'
                    // DISABLE compression for EE FPC since it already uses compression
                )
            )
        )
    )
);
