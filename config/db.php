<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=127.0.0.1;dbname='. getenv('DB_NAME'),
    'username' => getenv('DB_USERNAME'),
    'password' => getenv('DB_PASSWORD'),
    'charset' => 'utf8',
    'enableSchemaCache' => !YII_ENV_DEV,

    // Duration of schema cache.
    'schemaCacheDuration' => 24*60*60*60,

    // Name of the cache component used to store schema information
    'schemaCache' => 'cache',
];
