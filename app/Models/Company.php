<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'companies';

    protected $fillable = [
        'name',
        'address',
        'unit_number',
        'postal_code',
        'email',
        'phone',
        'owner_id'
    ];

    public function Account()
    {
        return $this->belongsTo('App\Models\Account', 'owner_id');
    }

    public function Appointment()
    {
        return $this->hasMany('App\Models\Appointment');
    }

    public function Transaction()
    {
        return $this->hasMany('App\Models\Transaction');
    }

    public function Location()
    {
        return $this->hasMany('App\Models\Location');
    }
}
