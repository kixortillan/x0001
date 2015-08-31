<?php

namespace App\Providers\OAuth;

use Illuminate\Support\ServiceProvider;
use App\Libraries\Repositories\AccountRepository;
use App\Libraries\Contexts\AccountContext;
use App\Http\Controllers\OAuth\OAuthController;
use App\Libraries\Repositories\Contracts\IRepository;
use App\Libraries\Contexts\DBContext;

class RepositoryServiceProvider extends ServiceProvider {

    protected $defer = true;

    public function register() {
        $this->app->when(AccountRepository::class)
                ->needs(DBContext::class)
                ->give(AccountContext::class);

        $this->app->when(OAuthController::class)
                ->needs(IRepository::class)
                ->give(AccountRepository::class);
    }

}
