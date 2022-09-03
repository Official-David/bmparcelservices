<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function Shipment_Notification(){
        return $this->hasMany(Shipment_Notification::class);
    }

}
