<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Account extends Authenticatable
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'accounts';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'company_id',
        'role_id',
        'client_name',
        'client_address',
        'client_email',
        'client_numbers',
        'type',
        'password',
        'contract',
        'status',
        'confirmation_code'

    ];

    public function Company()
    {
        return $this->hasMany('App\Models\Company');
    }

    public function Transaction()
    {
        return $this->hasMany('App\Models\Transaction');
    }
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role()
    {
        return $this->hasOne('App\Models\Role', 'id', 'role_id');
    }

    public function hasRole($roles)
    {
        $this->have_role = $this->getUserRole();
//        dd($this->have_role);
        // Check if the user is a root account
        if(@$this->have_role->name == 'Root') {
            return true;
        }
        if(is_array($roles)){
            foreach($roles as $need_role){
                if($this->checkIfUserHasRole($need_role)) {
                    return true;
                }
            }
        } else{
            return $this->checkIfUserHasRole($roles);
        }
        return false;
    }
    private function getUserRole()
    {
        return $this->role()->getResults();
    }
    private function checkIfUserHasRole($need_role)
    {
        return (strtolower($need_role)==strtolower(@$this->have_role->name)) ? true : false;
    }


}
