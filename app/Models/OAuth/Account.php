<?php

namespace App\Models\OAuth;

use App\Models\IModel;

class Account implements IModel {

    public $emailAdd;
    public $name;
    public $password;
    public $mobileNum;
    public $address1;
    public $address2;
    public $postalCode;
    public $createdAt;
    public $updatedAt;
    public $deletedAt;

}
