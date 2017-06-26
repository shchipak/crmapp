<?php

namespace app\models\customer;

/**
 * Created by PhpStorm.
 * User: Max-QA
 * Date: 6/26/2017
 * Time: 12:51 PM
 */
class Customer
{
    /** @var  string */
    public $name;

    /** @var  \DateTime */
    public $birth_date;

    public $notes = '';

    /** @var PhoneRecord[] */
    public  $phones = [];

    /**
     * Customer constructor.
     * @param string $name
     * @param DateTime $birth_date
     */
    public function __construct($name, DateTime $birth_date)
    {
        $this->name = $name;
        $this->birth_date = $birth_date;
    }


}