<?php

use App\Http\Controllers\afdelingsController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ProductsController;
use \App\Http\Controllers\ProductCategoriesController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'dashboard' , 'middleware' => 'auth', 'as' => 'dashboard.'], function() {

    // rousource routes
    Route::resource('/products', ProductsController::class);
    Route::resource('/categorys', ProductCategoriesController::class);

    // get routes
    Route::get('/afdeling/{teams}', [afdelingsController::class, 'getafdeling']);
    Route::get('/finance', function () {    return view('dashboards.finance.index')    ;});
    Route::get('/finance/facturen', function () {   return view('dashboards.finance.facturen'); });
    Route::get('/finance/factuur/create', function () {return view('dashboards.finance.factuur_create');});
    Route::get('/factuur/create', function () {return view('dashboards.finance.factuur_create');});
    Route::get('/finance/begroting', function () {return view('dashboards.finance.begroting');});
    Route::get('/finance/betalingsachterstanden', function () {return view('dashboards.finance.betalingsachterstanden');});
    Route::get('/inkoop', function () {return view('dashboards.inkoop.index');});
    Route::get('/maintenance', function () {return view('dashboards.maintenance.index');});
    Route::get('/sales', function () {return view('dashboards.sales.index');});
    Route::get('/sales/notes', function () {return view('dashboards.sales.notes');});
});


Route::get('/webshop', function () {
    return view('webshop.index');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});




Route::get('/test', function () {
    return view('test.test');
});

Route::get('/testnaar', function () {
    return view('test.testnaar');
});

