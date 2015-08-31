<?php

namespace App\Libraries\Contexts;

use App\Libraries\Contexts\DBContext;

class AccountContext extends DBContext {

    protected $table = 'accounts';
    protected $primaryKey = 'email_add';

}
