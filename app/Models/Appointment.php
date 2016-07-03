<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'appointments';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'date',
        'time',
        'pre_set_time',
        'notes',
        'photos',
        'reason',
        'status',
        'location_id',
        'aircon_id',
        'company_id',
        'account_id'
    ];

    public function location()
    {
        return $this->belongsTo('App\Models\Location','location_id');
    }

    public function aircon()
    {
        return $this->belongsTo('App\Models\Aircon','aircon_id');
    }

    public function company()
    {
        return $this->belongsTo('App\Models\Company','company_id');
    }
}
