<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shipment;
use App\Models\Shipment_Notification;
use App\Models\Country;
use App\Models\Receiver;
use App\Models\Sender;
use BaconQrCode\Renderer\Color\Rgb;

class ShipmentController extends Controller
{
    // Goto shipments page
    public function index()
    {
        $shipments = Shipment::latest()->paginate(10);
        return view('admin.shipments', compact('shipments'));
    }

    // Goto create shipment page
    public function createShipment()
    {
        $countries = Country::all();
        return view('admin.create-shipment', compact('countries'));
    }

    // Create new shipment
    public function newShipment(Request $request)
    {
        // Generate tracking id
        tracking_id:
        $tracking_id = 'FHQ' . date_timestamp_get(date_create());
        if (Shipment::where('tracking_id', $tracking_id)->exists()) {
            goto tracking_id;
        }
        // Inset into shipment table
        $shipment = new Shipment;
        $shipment->origin = $request->input('origin');
        $shipment->destination = $request->input('destination');
        $shipment->type_of_shipment = $request->input('type_of_shipment');
        $shipment->carrier = $request->input('carrier');
        $shipment->shipment_mode = $request->input('shipment_mode');
        $shipment->product = $request->input('product');
        $shipment->quantity = $request->input('quantity');
        $shipment->weight = $request->input('weight');
        $shipment->payment_mode = $request->input('payment_mode');
        $shipment->expected_delivery_date = $request->input('expected_delivery_date');
        $shipment->shipment_name = $request->input('name');
        $shipment->shipment_status = $request->input('shipment_status');
        $shipment->tracking_id = $tracking_id;
        $shipment->created_at = $request->input('created_at');
        $shipment->save();
        // Insert into sender table
        $senderName = new Sender;
        $senderName->shipment_id = Shipment::where('tracking_id', $tracking_id)->value('id');
        $senderName->name = $request->input('sender_name');
        $senderName->email = $request->input('sender_email');
        $senderName->phone = $request->input('sender_phone');
        $senderName->address = $request->input('sender_address');
        $senderName->save();
        // Insert into receiver table
        $receiverName = new Receiver();
        $receiverName->shipment_id = Shipment::where('tracking_id', $tracking_id)->value('id');
        $receiverName->name = $request->input('receiver_name');
        $receiverName->email = $request->input('receiver_email');
        $receiverName->phone = $request->input('receiver_phone');
        $receiverName->address = $request->input('receiver_address');
        $receiverName->save();
        // Insert into shipment_notification table
        $shipment_notification = new Shipment_Notification;
        $shipment_notification->shipment_id = Shipment::where('tracking_id', $tracking_id)->value('id');
        $shipment_notification->delivery_status = $request->input('delivery_status');
        $shipment_notification->message = $request->input('message');
        $shipment_notification->location = $request->input('location');
        $shipment_notification->created_at = $request->input('created_at');
        $shipment_notification->save();
        // Goto shipments page
        return redirect()->route('shipments')->with(session()->flash('shipmentSaved', 'Shipment Created Successfully'));
    }

    // Goto edit shipment page
    public function editShipment($id)
    {
        $shipment = Shipment::where('id', $id)->get();
        $sender = Sender::where('shipment_id', $id)->get();
        $receiver = Receiver::where('shipment_id', $id)->get();
        $countries = Country::all();
        $shipmentDetails = Shipment_Notification::where('shipment_id', $id)->get();
        return view('admin.update-shipment', compact('shipmentDetails', 'shipment', 'countries', 'sender', 'receiver'));
    }

    // Update shipment
    public function updateShipment(Request $request, $id)
    {
        // Inset into shipment table
        $shipment = Shipment::where('id', $id)->first();
        $shipment->origin = $request->input('origin');
        $shipment->destination = $request->input('destination');
        $shipment->type_of_shipment = $request->input('type_of_shipment');
        $shipment->carrier = $request->input('carrier');
        $shipment->shipment_mode = $request->input('shipment_mode');
        $shipment->product = $request->input('product');
        $shipment->quantity = $request->input('quantity');
        $shipment->weight = $request->input('weight');
        $shipment->payment_mode = $request->input('payment_mode');
        $shipment->expected_delivery_date = $request->input('expected_delivery_date');
        $shipment->shipment_name = $request->input('name');
        $shipment->created_at = $request->input('created_at');
        $shipment->update();
        // Insert into sender table
        $senderName = Sender::where('shipment_id', $id)->first();
        $senderName->name = $request->input('sender_name');
        $senderName->email = $request->input('sender_email');
        $senderName->phone = $request->input('sender_phone');
        $senderName->address = $request->input('sender_address');
        $senderName->update();
        // Insert into receiver table
        $receiverName = Receiver::where('shipment_id', $id)->first();
        $receiverName->name = $request->input('receiver_name');
        $receiverName->email = $request->input('receiver_email');
        $receiverName->phone = $request->input('receiver_phone');
        $receiverName->address = $request->input('receiver_address');
        $receiverName->update();
        // Insert into shipment_notification table
        $shipment_notification = Shipment_Notification::where('shipment_id', $id)->first();
        $shipment_notification->created_at = $request->input('created_at');
        $shipment_notification->update();
        // Goto shipments page
        return redirect()->route('shipments')->with(session()->flash('shipmentUpdated', 'Changes Saved Successfully'));
    }

    // Delete shipment
    public function deleteShipment($id)
    {
        $shipment = Shipment::where('id', $id)->first();
        $shipment->delete();
        return back()->with(session()->flash('shipmentDeleted', 'Deleted Successfully'));
    }

    // Add shipment details
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
        return back()->with(session()->flash('shipmentDetailSaved', 'Added Successfully'));
    }

    // View shipment's details
    public function shipmentDetails($id)
    {
        $shipment = Shipment::where('id', $id)->get();
        $shipmentDetails = Shipment_Notification::where('shipment_id', $id)->get();
        return view('admin.shipment-details', compact('shipmentDetails', 'shipment'));
    }

    // Goto edit shipment details page
    public function editShipmentDetails($id)
    {
        $shipment = Shipment::where('id', $id)->first();
        $shipmentDetails = Shipment_Notification::where('shipment_id', $id)->get();
        return view('admin.edit-shipment-details', compact('shipment', 'shipmentDetails'));
    }

    // Update shipment details
    public function updateShipmentDetail(Request $request, $id)
    {
        $shipment = Shipment::where('id', $id)->first();
        $shipment->shipment_status = $request->input('shipment_status');
        $shipment->update();
        $shipment_notification = Shipment_Notification::where('shipment_id', $id)->first();
        $shipment_notification->delivery_status = $request->input('delivery_status');
        $shipment_notification->message = $request->input('message');
        $shipment_notification->location = $request->input('location');
        $shipment_notification->created_at = $request->input('created_at');
        $shipment_notification->update();
        return back()->with(session()->flash('shipmentDetailsEdited', 'Updated Successfully'));
    }

    // Delete shipment details
    public function deleteShipmentDetails($id)
    {
        $shipment = Shipment_Notification::where('id', $id)->first();
        $shipment->delete();
        return back()->with(session()->flash('shipmentDetailsDeleted', 'Deleted Successfully'));
    }
}
