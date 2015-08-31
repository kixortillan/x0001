<?php

namespace App\Http\Controllers\OAuth;

use App\Http\Controllers\Controller;
use App\Models\OAuth\Account;
use DB;
use App\Libraries\Repositories\Contracts\IRepository;

class OAuthController extends Controller {

    protected $acctRepo;

    public function __construct(IRepository $repo) {
        $this->acctRepo = $repo;
    }

    public function authorize() {
        
    }

    public function identify($id) {
        $model = $this->acctRepo->get($id);

        return response()->json($model);
    }

    public function create() {

        //$models = DB::select('select * from accounts');
        //return;
        //$model = Account::where('email_add', 'kixortillan@gmail.com')->first();
        //return $model->email_add;
        //return response()->json([
        //    'accounts' => $models
        //]);    
    }

    public function getVersion() {
        
    }

}
