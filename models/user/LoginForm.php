<?php
/**
 * Created by PhpStorm.
 * User: Max-QA
 * Date: 7/20/2017
 * Time: 6:26 PM
 */

namespace app\models\user;


use yii\base\Model;

class LoginForm extends Model
{
    public $username;
    public $password;
    public $rememberMe;

    public function rules() {

        return [
            [['username', 'password'], 'required'],
            ['rememberMe', 'boolean'],
            ['password', 'validatePassword']
        ];
    }

    public function validatePassword($attributeName) {
        if ($this->hasErrors()) {
            return;
        }

        $user = $this->getUser($this->username);
    }

}