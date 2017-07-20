<?php
/**
 * Created by PhpStorm.
 * User: Max-QA
 * Date: 7/20/2017
 * Time: 6:19 PM
 */

use \yii\widgets\ActiveForm;
use \yii\helpers\Html;

$form = ActiveForm::begin(['id' => 'login-form']);
echo $form->field($model, 'username');
echo $form->field($model, 'password')->passwordInput();
echo $form->field($model, 'rememberMe')->checkbox();
echo  Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']);
ActiveForm::end();