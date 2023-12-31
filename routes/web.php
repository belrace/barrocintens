<?php

use App\Http\Controllers\MaintenanceAppointmentsController;
use App\Http\Controllers\NotificationsController;
use App\Http\Controllers\afdelingsController;
use App\Http\Controllers\AppoinmentController;
use App\Http\Controllers\NotesController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ProductsController;
use \App\Http\Controllers\ProductCategoriesController;
use \App\Models\Team;
use \App\Http\Controllers\UserController;
use App\Http\Controllers\WerkbonController;
use App\Http\Controllers\WerkbonMaterialController;
use App\Http\Controllers\WorkhourController;
use App\Http\Controllers\leasecontractController;
use \App\Http\Controllers\CompaniesController;
use \App\Http\Controllers\StroingmedlingController;
use App\Models\Storingmedling;
use App\Models\werkbon;

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

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth', 'as' => 'dashboard.'], function () {

    // rousource routes
    Route::resource('/products', ProductsController::class);
    Route::get('/inkoop/product/add', [ProductsController::class, 'index']);

    Route::resource('/categorys', ProductCategoriesController::class);
    Route::get('/inkoop/category/add', [ProductCategoriesController::class, 'index']);
    Route::get('/inkoop/product/edit', [ProductCategoriesController::class, 'index']);
    Route::resource('/user', UserController::class);
    Route::get('/afdeling/1', function () {
        return redirect('/dashboard/user/create');
    });


    Route::resource('/notes', NotesController::class);
    Route::resource('/appoinment', AppoinmentController::class);
    Route::resource('/companies', CompaniesController::class);

    Route::resource('/werkbon', WerkbonController::class);
    Route::resource('/werkuren', WorkhourController::class);
    Route::resource('/materialen', WerkbonMaterialController::class);

    Route::get('/maintenance/appoinment', function () {
        return view('dashboards.maintenance.appoinment');
    });

    Route::get('/afdeling/4', [NotificationsController::class, 'getNotifications']);
    Route::get('/afdeling/{teams}', [afdelingsController::class, 'getafdeling']);


    Route::get('/finance', function () {
        return view('dashboards.finance.index');
    });
    Route::get('/finance/facturen', function () {
        return view('dashboards.finance.facturen');
    });
    Route::get('/finance/factuur/create', function () {
        return view('dashboards.finance.factuur_create');
    });
    Route::get('/factuur/create', function () {
        return view('dashboards.finance.factuur_create');
    });
    Route::get('/finance/begroting', function () {
        return view('dashboards.finance.begroting');
    });
    Route::get('/finance/betalingsachterstanden', function () {
        return view('dashboards.finance.betalingsachterstanden');
    });
    Route::get('/finance/leasecontract', [leasecontractController::class, 'getleasecontracts']);

    Route::get('/inkoop', function () {
        return view('dashboards.inkoop.index');
    });
    // Route::get('/inkoop', [InkoopController::class, 'getinkoop']);
    // Route::get('/maintenance', function () {
    //     return view('dashboards.maintenance.index');
    // });
    Route::get('/maintenance/werkbon', [WerkbonController::class, 'getWerkbon']);
    // Route::post('/maintenance/werkbon', [WerkbonController::class, 'store']);
    Route::get('maintenance/werkbon/overzicht', [WerkbonController::class, 'getWerkbonnen']);

 


    Route::get('/maintenance/allappointments', [maintenanceappointmentsController::class, 'getAppointments']);
    Route::get('/maintenance/allappointments', [leasecontractController::class, 'storeleasecontract']);

    //Route::get('/maintenance/storingmedling', [StroingmedlingController::class, 'getStoringmelding']);
    // Route::get('/maintenance/storingmedling', [maintenanceappointmentsController::class, 'getStoringmelding']);

    Route::get('/maintenance/storingmedling', [StroingmedlingController::class, 'index']);
    Route::get('/maintenance/storingmedling', [StroingmedlingController::class, 'create']);
    Route::post('/maintenance/storingmedling', [StroingmedlingController::class, 'store']);

    Route::get('/maintenance/storingmedling', [StroingmedlingController::class, 'create'])->name('dashboards.maintenance.storingmedling');
    //Route::post('/maintenance/storingmedling', [StroingmedlingController::class, 'postCreate'])->name('dashboards.maintenance.storingmedling');

    
    

    Route::get('/sales', function () {
        return view('dashboards.sales.index');
    });

    Route::get('/sales/notes', [NotesController::class, 'getcompanies']);
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


