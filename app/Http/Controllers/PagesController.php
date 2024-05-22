<?php

namespace App\Http\Controllers;

use App\Models\Receiver;
use App\Models\Sender;
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
        $shipments = Shipment::where('tracking_id', $request->input('tracking_id'))->first();
        if($shipments){
            $senderInfo = Sender::where('shipment_id', $shipments->id)->get();
            $receiverInfo = Receiver::where('shipment_id', $shipments->id)->get();
            $shipmentDetails = Shipment_Notification::where('shipment_id', $shipments->id)->latest()->get();
            return view('guest/track-shipment', compact('shipments', 'shipmentDetails', 'senderInfo', 'receiverInfo'));
        }
        return back();
    }
}
