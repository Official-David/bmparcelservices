<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipment_Notification extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function Shipment(){
        return $this->belongsTo(Shipment::class);
    }
}
