<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shipment;
use App\Models\Shipment_Notification;


class PagesController extends Controller
{
    public function index(){
        return view('guest.index');
    }
    public function services(){
        return view('guest.services');
    }
    public function about(){
        return view('guest.about');
    }
    public function track(){
        return view('guest.track');
    }
    public function contact(){
        return view('guest.contact');
    }
    public function trackShipment(Request $request){
        $shipments = Shipment::where('tracking_id', $request->input('tracking_id'))->get();
        if($shipments->count() > 0){
            $shipmentDetails = Shipment_Notification::where('shipment_id', $shipments[0]->id)->get();
            return view('guest.track-result', compact('shipments', 'shipmentDetails'));
        }else{
            return back();
        }
    }
}
