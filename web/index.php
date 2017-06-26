<?php
/**
 * Created by PhpStorm.
 * User: Max-QA
 * Date: 6/26/2017
 * Time: 11:10 AM
 */
defined('YII_DEBUG');
require(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');
ini_set('display_errors', true);
$config = require (__DIR__ . '/../config/web.php');
(new yii\web\Application($config))->run();

