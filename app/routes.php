<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@showWelcome');

/*Route::get('/nouvelles', array('before' => 'auth', function()
{
    echo 'Maintenant vous pouvez accéder à cette zone du site '.Auth::user()->username;
}));
*/


Route::get('/nouvelles', 'HomeController@showWelcome1');
Route::get('/sucree', 'HomeController@showWelcome2');
Route::get('/salees', 'HomeController@showWelcome3');

//Route::get('/critiques', 'EntriesController@getCritiques');
Route::get('/critiques', 'EntriesController@getCritiques');

Route::post('critiques', 'EntriesController@postCritiques');
Route::delete('critiques/delete', 'EntriesController@deleteCritiques');



Route::get('critiques/{id}/edit', array('as'=>'edit_critiques', 'uses'=>'EntriesController@get_edit'));



Route::put('critiques/update', array('uses'=>'EntriesController@put_update'));



Route::post('connexion', function()
{
    $nom = Input::get('nom');
    $passe = Input::get('password');
 
    if(Auth::attempt(array('username' => $nom, 'password' => $passe)))
        echo 'Vous êtes maintenant connecté '.Auth::user()->username;
    else
        echo 'Echec de la connexion';
});