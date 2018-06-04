<?php

use Dotenv\Dotenv;

$autoloader = require __DIR__ . '/vendor/autoload.php';

if (file_exists('.env')) {
    (new Dotenv('.'))->load();
}

return [
    'paths' => [
        'migrations' => '%%PHINX_CONFIG_DIR%%/db/migrations',
        'seeds' => '%%PHINX_CONFIG_DIR%%/db/seeds'
    ],
    'default_database' => 'local',
    'default_migration_table' => 'phinxlog',
    'environments' => [
        'local' => [
            'adapter' => 'sqlite',
            'name' => './db/database/gift.sqlite'
        ],
        'remote' => [
            'adapter' => 'pgsql',
            'host' => getenv('POSTGRESQL_ADDON_HOST'),
            'name' => getenv('POSTGRESQL_ADDON_DB'),
            'user' => getenv('POSTGRESQL_ADDON_USER'),
            'pass' => getenv('POSTGRESQL_ADDON_PASSWORD'),
            'port' => getenv('POSTGRESQL_ADDON_PORT')
        ]
    ],
    'version_order' => 'creation'
];

