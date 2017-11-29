<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id'         => 'basic',
    'basePath'   => dirname(__DIR__),
    'bootstrap'  => ['log'],
    'aliases'    => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'components' => [
        'view'         => [
            'defaultExtension' => 'twig',
            'class'            => 'yii\web\View',
            'renderers'        => [
                'twig' => [
                    'class'     => 'yii\twig\ViewRenderer',
                    'cachePath' => '@runtime/twig/cache',
                    'options'   => ['auto_reload' => true], /*  Array of twig options */
                    'globals'   => [
                        'html' => ['class' => '\yii\helpers\Html'],
                    ],
                    'uses'      => ['yii\bootstrap'],
                ],
            ],
        ],
        'request'      => [
            'cookieValidationKey' => getenv('COOKIE_VALIDATION_KEY'),
        ],
        'cache'        => [
            'class' => 'yii\caching\FileCache',
        ],
        'user'         => [
            'class'           => 'app\components\UserStub',
            'identityClass'   => 'app\models\User',
            'enableAutoLogin' => true,
            'loginUrl'        => ['start/login'],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer'       => [
            'class'            => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => YII_ENV_DEV,
        ],
        'log'          => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets'    => [
                [
                    'class'  => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db'           => $db,
        /*
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        */
    ],
    'params'     => $params,
];

if(YII_ENV_DEV){
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
