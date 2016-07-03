<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'transactions';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'invoice_id',
        'paypal_id',
        'amount',
        'type',
        'status',
        'company_id',
        'appointment_id'
    ];

    public function Company()
    {
        return $this->belongsTo('App\Models\Company','company_id');
    }

    public function Appointment()
    {
        return $this->belongsTo('App\Models\Appointment','appointment_id');
    }

    public function paypal()
    {
        return $this->belongsTo('App\paypal','paypal_id');
    }
}
