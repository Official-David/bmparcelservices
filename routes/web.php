<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ShipmentController;

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

Route::controller(PagesController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/services', 'services')->name('services');
    Route::get('/about', 'about')->name('about');
    Route::get('/track', 'track')->name('track');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/track-result', 'trackResult')->name('track.result');
    Route::post('/track-shipment', 'trackShipment')->name('track.shipment');
});


// Auth Routes
Route::group(['middleware' => 'auth'], function () {
    Route::controller(AdminController::class)->group(function () {
        Route::get('/dashboard', 'index')->name('dashboard');
    });

    Route::controller(ShipmentController::class)->group(function () {
        Route::post('/new-shipment', 'newShipment')->name('new.shipment');
        Route::get('/create-shipment', 'createShipment')->name('create.shipment');
        Route::get('/shipments', 'index')->name('shipments');
        Route::get('/shipment/{id}/details', 'shipmentDetails')->name('shipment.details');
        Route::get('/shipment/{id}/update', 'updateShipment')->name('update.shipment');
        Route::post('/shipment/{id}/add-shipment-details', 'addShipmentDetails')->name('add.shipment.details');
        Route::post('/shipment/{id}/delete', 'deleteShipment')->name('delete.shipment');
        Route::post('/shipment/{id}/details/delete', 'deleteShipmentDetails')->name('delete.shipmentDetails');
        Route::get('/shipment/{id}/details/edit', 'editShipmentDetails')->name('edit.shipmentDetails');
        Route::post('/shipment/{id}/details/update', 'updateShipmentDetail')->name('update.shipmentDetails');

    });
});
