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

Route::group(['middleware' => ['web']], function () {
    Route::get('/', 'AngularController@serveApp');

    Route::get('/unsupported-browser', 'AngularController@unsupported');
});
Route::post('posts', 'PostsController@create');

//public API routes
$api->group(['middleware' => ['api']], function ($api) {

    // Authentication Routes...
    $api->post('auth/login', 'Auth\AuthController@login');
    $api->post('auth/register', 'Auth\AuthController@register');
    $api->post('posts', 'PostsController@create');
    // Password Reset Routes...
    $api->post('auth/password/email', 'Auth\PasswordResetController@sendResetLinkEmail');
    $api->get('auth/password/verify', 'Auth\PasswordResetController@verify');
    $api->post('auth/password/reset', 'Auth\PasswordResetController@reset');

    // Elements
    $api->post('create-element', 'CWElementController@create');
    $api->post('evaluate', 'CWEvaluateController@create');
    $api->get('list-elements', 'CWElementController@get');
    $api->get('list-evaluates', 'CWEvaluateController@get');
    
    //Groups
    $api->post('groups', 'CWGroupsController@create');
    $api->get('list-groups', 'CWGroupsController@get');
    $api->post('delete-group', 'CWGroupsController@delete');
    //Activities
    $api->post('activities', 'CWActivitiesController@create');
    $api->get('list-activities', 'CWActivitiesController@get');
    $api->post('delete-activity', 'CWActivitiesController@delete');
    //Questions
    $api->post('questions', 'CWQuestionController@create');
    $api->get('list-questions', 'CWQuestionController@get');
    $api->post('delete-question', 'CWQuestionController@delete');
    $api->get('question/{id}', 'CWQuestionController@getId');

});

//protected API routes with JWT (must be logged in)
$api->group(['middleware' => ['api', 'api.auth']], function ($api) {
    // Posts
   // $api->post('posts', 'PostsController@create');
    

});

