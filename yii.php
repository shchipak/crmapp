<?php
/**
 * Created by PhpStorm.
 * User: Max-QA
 * Date: 6/26/2017
 * Time: 2:21 PM
 */

define('YII_DEBUG', true);
require(__DIR__ . '/vendor/autoload.php');
require(__DIR__ . '/vendor/yiisoft/yii2/Yii.php');

$config = require(__DIR__ . '/config/console.php');

$application = new yii\console\Application($config);
$exitCode = $application->run();
exit($exitCode);