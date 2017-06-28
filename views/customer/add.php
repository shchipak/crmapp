<?php

use yii\widgets\ActiveForm;
use app\models\customer\CustomerRecord;
use app\models\customer\PhoneRecord;
use \yii\web\View;
use \yii\helpers\Html;

/**
 * Add Customer UI
 *
 * @var View $this
 * @var CustomerRecord $customer
 * @var PhoneRecord $phone
 */

$form = ActiveForm::begin([
   'id' => 'add-customer-form'
]);

echo $form->errorSummary([$customer, $phone]);
echo $form->field($customer, 'name');
echo $form->field($customer, 'birth_date');
echo $form->field($customer, 'notes');

echo $form->field($phone, 'number');

echo Html::submitButton( 'Submit', ['class' => 'btn btn-primiry']);
ActiveForm::end();
