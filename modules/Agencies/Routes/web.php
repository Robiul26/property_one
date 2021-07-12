<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Support\Facades\Route;

Route::group(['prefix'=> 'agency'],function(){
    Route::get('/','\Modules\Agencies\Controllers\AgenciesController@index')->name('agencies.search');
    Route::get('/{slug}','\Modules\Agencies\Controllers\AgenciesController@detail')->name('agencies.detail');
});

Route::group(['prefix'=> 'agent'],function() {
    Route::get('/','\Modules\Agencies\Controllers\AgentController@index')->name('agent.search');
    // Route::match(['get'],'/agentContact','\Modules\Agencies\Controllers\AgentController@getAgentContact')->name('agent.getAgentContact');
    Route::get('/{id}','\Modules\Agencies\Controllers\AgentController@detail')->name('agent.detail');
    Route::match(['post'],'/contactAgent','\Modules\Agencies\Controllers\AgentController@submitDetailContact')->name('agent.contact');

    // Route::get('/getAgentContact','\Modules\Agencies\Controllers\AgentController@getAgentContact')->name('agent.getAgentContact');
});
