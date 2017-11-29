<?php
error_reporting(E_ALL ^ E_NOTICE);
defined('LIBXML_HTML_NODEFDTD') or define('LIBXML_HTML_NODEFDTD', 4);

require(__DIR__ . '/../vendor/autoload.php');
$dotenv = new Dotenv\Dotenv('../config');
$dotenv->load();

defined('YII_DEBUG') or define('YII_DEBUG', getenv('YII_DEBUG'));
defined('YII_ENV') or define('YII_ENV', getenv('YII_ENV'));

require(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');

$config = require(__DIR__ . '/../config/web.php');

(new yii\web\Application($config))->run();
