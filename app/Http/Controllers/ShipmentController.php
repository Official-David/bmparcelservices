<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shipment;
use App\Models\Shipment_Notification;
use BaconQrCode\Renderer\Color\Rgb;

class ShipmentController extends Controller
{
    public function index()
    {
        $shipments = Shipment::latest()->paginate(10);
        return view('admin.shipments', compact('shipments'));
    }

    public function createShipment()
    {
        return view('admin.create-shipment');
    }

    public function newShipment(Request $request)
    {
        tracking_id:
        $tracking_id = 'FH' . date_timestamp_get(date_create());
        if (Shipment::where('tracking_id', $tracking_id)->exists()) {
            goto tracking_id;
        }
        $shipment = new Shipment;
        $shipment->shipment_name = $request->input('name');
        $shipment->shipment_status = $request->input('shipment_status');
        $shipment->tracking_id = $tracking_id;
        $shipment->created_at = $request->input('created_at');
        $shipment->save();
        $shipment_notification = new Shipment_Notification;
        $shipment_notification->shipment_id = Shipment::where('tracking_id', $tracking_id)->value('id');
        $shipment_notification->delivery_status = $request->input('delivery_status');
        $shipment_notification->message = $request->input('message');
        $shipment_notification->location = $request->input('location');
        $shipment_notification->created_at = $request->input('created_at');
        $shipment_notification->save();
        $shipments = Shipment::latest()->paginate(10);
        return view('admin.shipments', compact('shipments'));
    }

    public function shipmentDetails($id)
    {
        $shipment = Shipment::where('id', $id)->get();
        $shipmentDetails = Shipment_Notification::where('shipment_id', $id)->get();
        return view('admin.shipment-details', compact('shipmentDetails', 'shipment'));
    }

    public function updateShipment($id)
    {
        $shipment = Shipment::where('id', $id)->get();
        $shipmentDetails = Shipment_Notification::where('shipment_id', $id)->get();
        return view('admin.update-shipment', compact('shipmentDetails', 'shipment'));
    }

    public function addShipmentDetails(Request $request, $id)
    {
        $shipment = Shipment::where('id', $id)->first();
        $shipmentDetails = Shipment_Notification::where('shipment_id', $id)->get();
        $shipment->shipment_status = $request->input('shipment_status');
        $shipment->save();
        $shipment_notification = new Shipment_Notification;
        $shipment_notification->shipment_id = $id;
        $shipment_notification->delivery_status = $request->input('delivery_status');
        $shipment_notification->message = $request->input('message');
        $shipment_notification->location = $request->input('location');
        $shipment_notification->created_at = $request->input('created_at');
        $shipment_notification->save();
        // return view('admin.shipment-details', compact('shipmentDetails', 'shipment'));
        return back();
    }

    public function deleteShipment($id)
    {
        $shipment = Shipment::where('id', $id)->first();
        $shipment->delete();
        return back();
    }

    public function deleteShipmentDetails($id){
        $shipment = Shipment_Notification::where('id', $id)->first();
        $shipment->delete();
        return back();
    }

    public function editShipmentDetails($id){
        $shipment = Shipment::where('id', $id)->first();
        $shipmentDetails = Shipment_Notification::where('shipment_id', $id)->get();
        return view('admin.edit-shipment-details', compact('shipment', 'shipmentDetails'));
        // dd($shipment);
    }

    public function updateShipmentDetail(Request $request, $id){
        $shipment = Shipment::where('id', $id)->first();
        $shipment->shipment_status = $request->input('shipment_status');
        $shipment->update();
        $shipment_notification = Shipment_Notification::where('shipment_id', $id)->first();
        $shipment_notification->delivery_status = $request->input('delivery_status');
        $shipment_notification->message = $request->input('message');
        $shipment_notification->location = $request->input('location');
        $shipment_notification->created_at = $request->input('created_at');
        $shipment_notification->update();
        return back();
    }

}
