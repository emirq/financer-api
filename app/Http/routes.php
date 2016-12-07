<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {
    return $app->version();
});

$app->group(['prefix' => 'api/v1'], function($app) {

	// AccountType
    $app->get('account_type', 'AccountTypesController@index');
    $app->post('account_type', 'AccountTypesController@store');
    $app->get('account_type/{id}', 'AccountTypesController@show');
    $app->put('account_type/{id}', 'AccountTypesController@update');
    $app->delete('account_type/{id}', 'AccountTypesController@delete');

    // Account
    $app->get('account', 'AccountsController@index');
    $app->post('account', 'AccountsController@store');
    $app->get('account/{id}', 'AccountsController@show');
    $app->put('account/{id}', 'AccountsController@update');
    $app->delete('account/{id}', 'AccountsController@delete');

    // Category
    $app->get('category', 'CategoriesController@index');
    $app->post('category', 'CategoriesController@store');
    $app->get('category/{id}', 'CategoriesController@show');
    $app->put('category/{id}', 'CategoriesController@update');
    $app->delete('category/{id}', 'CategoriesController@delete');

    // Currency
    $app->get('currency', 'CurrenciesController@index');
    $app->post('currency', 'CurrenciesController@store');
    $app->get('currency/{id}', 'CurrenciesController@show');
    $app->put('currency/{id}', 'CurrenciesController@update');
    $app->delete('currency/{id}', 'CurrenciesController@delete');

    // Transaction
    $app->get('transaction', 'TransactionsController@index');
    $app->post('transaction', 'TransactionsController@store');
    $app->get('transaction/{id}', 'TransactionsController@show');
    $app->put('transaction/{id}', 'TransactionsController@update');
    $app->delete('transaction/{id}', 'TransactionsController@delete');

    // User
    $app->get('user', 'UsersController@index');
    $app->post('user', 'UsersController@store');
    $app->get('user/{id}', 'UsersController@show');
    $app->put('user/{id}', 'UsersController@update');
    $app->delete('user/{id}', 'UsersController@delete');
});

