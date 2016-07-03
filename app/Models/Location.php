<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'locations';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable =  [
        'name',
        'address',
        'unit_number',
        'postal_code',
        'latitude',
        'longitude',
        'place_id',
        'status',
        'company_id'
    ];

    public function Appointment()
    {
        return $this->hasMany('App\Models\Appointment');
    }

    public function Aircon()
    {
        return $this->hasMany('App\Models\Aircon');
    }

    public function Company()
    {
        return $this->belongsTo('App\Models\Company', 'company_id');
    }

}
