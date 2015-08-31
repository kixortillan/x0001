<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

$app->get('/', function() use ($app) {
    return $app->welcome();
});

$app->get('oauth/create', 'OAuth\OAuthController@create');
$app->get('oauth/identify/{id}', 'OAuth\OAuthController@identify');
$app->get('oauth/version', 'OAuth\OAuthController@getVersion');