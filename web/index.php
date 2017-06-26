<?php
/**
 * Created by PhpStorm.
 * User: Max-QA
 * Date: 6/26/2017
 * Time: 11:10 AM
 */
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

require(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');
$config = require (__DIR__ . '/../config/web.php');
(new yii\web\Application($config))->run();

