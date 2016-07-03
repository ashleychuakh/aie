<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aircon extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'aircons';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable =  [
        'serial_number',
        'model',
        'brand',
        'service_performed',
        'purchased_date',
        'warranty_start_date',
        'warranty_end_date',
        'service_history',
        'in_door_location',
        'status',
        'location_id'
    ];

    public function Appointment()
    {
        return $this->hasMany('App\Models\Appointment');
    }

    public function Location()
    {
        return $this->belongsTo('App\Models\Location'. 'location_id');
    }
}
