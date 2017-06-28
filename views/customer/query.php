<?php
/**
 * Created by PhpStorm.
 * User: Max-QA
 * Date: 6/27/2017
 * Time: 4:27 PM
 */

use \yii\helpers\Html;

echo Html::beginForm(['/customer'], 'get');
echo Html::label('Phone number to search:', 'phone_number');
echo Html::textInput('phone_number');
echo Html::submitButton('Search');
echo Html::endForm();