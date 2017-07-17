<?php
/**
 * Created by PhpStorm.
 * User: Max-QA
 * Date: 7/12/2017
 * Time: 4:00 PM
 */

namespace app\assets;


use yii\web\AssetBundle;

class SnowAssetBundle extends AssetBundle
{
    public $sourcePath = '@app/assets/snow';
    public $css = ['snow.css'];
    public $depends = ['app\\assets\ApplicationUiAssetBundle'];

}