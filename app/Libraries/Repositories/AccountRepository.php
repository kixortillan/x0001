<?php

namespace App\Libraries\Repositories;

use App\Libraries\Repositories\Contracts\IRepository;
use App\Models\OAuth\Account;
use App\Models\IModel;
use App\Libraries\Contexts\DBContext;

class AccountRepository implements IRepository {

    private $context;

    public function __construct(DBContext $context) {
        $this->context = $context;
    }

    public function delete($primaryKey) {
        
    }

    public function get($primaryKey) {
        $dbResult = $this->context->where('email_add', $primaryKey)->first();

        $model = new Account();
        $model->emailAdd = $dbResult->email_add;
        $model->name = $dbResult->name;
        $model->password = $dbResult->password;
        $model->mobileNum = $dbResult->mobile_num;
        $model->address1 = $dbResult->address1;
        $model->address2 = $dbResult->address2;
        $model->postalCode = $dbResult->postal_code;
        $model->createdAt = $dbResult->created_at;
        $model->updatedAt = $dbResult->updated_at;
        $model->deletedAt = $dbResult->deleted_at;

        return $model;
    }

    public function getAll() {
        
    }

    public function persist(IModel $model) {
        
    }

}
