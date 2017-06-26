<?php
/**
 * Created by PhpStorm.
 * User: Max-QA
 * Date: 6/26/2017
 * Time: 12:44 PM
 */

namespace app\controllers;


use yii\web\Controller;

class CustomersController extends Controller
{
    public function actionIndex() {
        $records = $this->findRecorsdByQuery();
        return $this->render('index', compact('records'));
    }

}