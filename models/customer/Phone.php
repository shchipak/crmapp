<?php
/**
 * Created by PhpStorm.
 * User: Max-QA
 * Date: 6/26/2017
 * Time: 2:16 PM
 */

namespace app\models\customer;


class Phone
{
    public $number;

    /**
     * Phone constructor.
     * @param $number
     */
    public function __construct($number)
    {
        $this->number = $number;
    }


}