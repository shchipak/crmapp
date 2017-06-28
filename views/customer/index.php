<?php
/**
 * Created by PhpStorm.
 * User: Max-QA
 * Date: 6/27/2017
 * Time: 2:21 PM
 */
/**
 * @var  $record
 */

echo \yii\widgets\ListView::widget(
    [
        'options' => [
            'class' => 'list-view',
            'id' => 'search-result'
        ],
        'itemView' => '_customer',
        'dataProvider' => $record
    ]
);



