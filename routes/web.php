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
    Route::view('/', 'guest/index')->name('home');
    Route::view('/about', 'guest/page-about')->name('about');
    Route::view('/core', 'guest/page-core')->name('page-core');
    Route::view('/leadership', 'guest/page-team')->name('page-team');
    Route::view('/global-location', 'guest/page-location')->name('page-locations');
    Route::view('/our-gallery', 'guest/page-gallery')->name('page-gallery');
    Route::view('/awards', 'guest/page-awards')->name('page-awards');
    Route::view('/careers', 'guest/page-careers')->name('page-careers');
    Route::view('/warehouse', 'guest/service-warehouse')->name('service-warehouse');
    Route::view('/ocean-freight', 'guest/service-ocean-freight')->name('service-ocean-freight');
    Route::view('/air-freight', 'guest/service-air-freight')->name('service-air-freight');
    Route::view('/road-freight', 'guest/service-road-freight')->name('service-road-freight');
    Route::view('/supply-chain', 'guest/service-supply')->name('service-supply');
    Route::view('/packaging', 'guest/service-packaging')->name('service-packaging');
    Route::view('/retail-consumer', 'guest/industry-retail')->name('industry-retail');
    Route::view('/sciences-healthcare', 'guest/industry-science')->name('industry-science');
    Route::view('/Industry-chemical', 'guest/industry-chemical')->name('industry-chemical');
    Route::view('/power-generation', 'guest/industry-power')->name('industry-power');
    Route::view('/food-beverage', 'guest/industry-food')->name('industry-food');
    Route::view('/oil-and-gas', 'guest/industry-oil')->name('industry-oil');
    Route::view('/track-shipment', 'guest/track-shipment')->name('track-shipment');
    Route::view('/faqs', 'guest/faqs')->name('faqs');
    Route::view('/contact', 'guest/contact')->name('contact');
    
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
        Route::get('/shipment/{id}/edit', 'editShipment')->name('edit.shipment');
        Route::post('/shipment/{id}/update', 'updateShipment')->name('update.shipment');
        Route::post('/shipment/{id}/add-shipment-details', 'addShipmentDetails')->name('add.shipment.details');
        Route::get('/shipment/{id}/new-shipment-details', 'newShipmentDetails')->name('new.shipment.details');
        Route::post('/shipment/{id}/delete', 'deleteShipment')->name('delete.shipment');
        Route::post('/shipment/{id}/details/delete', 'deleteShipmentDetails')->name('delete.shipmentDetails');
        Route::get('/shipment/{id}/{idd}/details/edit', 'editShipmentDetails')->name('edit.shipmentDetails');
        Route::post('/shipment/{id}/{idd}/details/update', 'updateShipmentDetail')->name('update.shipmentDetails');

    });
});
