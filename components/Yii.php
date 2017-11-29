<?php

use app\components\UserStub;

/**
 * Yii bootstrap file.
 * Used for enhanced IDE code autocompletion.
 */
class Yii extends \yii\BaseYii
{
    /**
     * @var WebApplication the application instance
     */
    public static $app;
}



/**
 * Class WebApplication
 * Include only Web application related components here
 *
 * @property UserStub $user The user component. This property is read-only. Extended component.
 */
class WebApplication extends yii\web\Application
{
}

