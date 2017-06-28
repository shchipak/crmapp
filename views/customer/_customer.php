<?php
/**
 * Created by PhpStorm.
 * User: Max-QA
 * Date: 6/27/2017
 * Time: 4:17 PM
 */



echo \yii\widgets\DetailView::widget(
    [
        'model' => $model,
        'attributes' => [
            ['attribute' => 'name'],
            ['attribute' => 'birth_date', 'value' => $model->birth_date->format('Y-m-d')],
            'notes:text',
            ['label' => 'Phone Number', 'attribute' => 'phones.0.number']
        ]
    ]
);