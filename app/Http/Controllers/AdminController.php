<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shipment;
use App\Models\Shipment_Notification;

class AdminController extends Controller
{
    public function index(){
        $shipment = Shipment::get();
        return view('admin.dashboard', compact('shipment'));
    }
}
