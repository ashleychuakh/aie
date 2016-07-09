<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Auth\Authenticatable;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

/**
 * @SWG\Definition(
 *      definition="Account",
 *      required={},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="client_name",
 *          description="client_name",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="client_address",
 *          description="client_address",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="client_email",
 *          description="client_email",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="client_numbers",
 *          description="client_numbers",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="password",
 *          description="password",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="contract",
 *          description="contract",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="type",
 *          description="type",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="status",
 *          description="status",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="role_id",
 *          description="role_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="company_id",
 *          description="company_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="confirmed",
 *          description="confirmed",
 *          type="boolean"
 *      ),
 *      @SWG\Property(
 *          property="confirmation_code",
 *          description="confirmation_code",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="remember_token",
 *          description="remember_token",
 *          type="string"
 *      )
 * )
 */
class Account extends Model implements AuthenticatableContract, AuthorizableContract, CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;
    use SoftDeletes;

    public $table = 'accounts';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];

    protected $attributes = array(
      'role_id' => '1',
      'status' => '0'
    );

    public $fillable = [
        'name',
        'type',
        'email',
        'phone',
        'password',
        'company_id',
        'confirmation_token',
        'remember_token',
        'deleted_at'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'type' => 'string',
        'email' => 'string',
        'phone' => 'string',
        'password' => 'string',
        'status' => 'string',
        'role_id' => 'integer',
        'company_id' => 'integer',
        'confirmation_token' => 'string',
        'remember_token' => 'string',
        'deleted_at' => 'datetime'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * Boot the model.
     *
     * @return void
     */
    public static function boot()
    {
        parent::boot();

        static::creating(function ($account) {
            $account->confirmation_token = str_random(30);
        });
    }

    /**
     * Set the password attribute.
     *
     * @param string $password
     */
    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }

    public function addresses()
    {
        return $this->hasMany('App\Models\AccountAddress', 'account_id');
    }

    public function defaultaddress()
    {
        $address = $this->addresses()->default();

        return $address;
    }

    public function billingaddress()
    {
        $address = $this->addresses()->billing();

        return $address;
    }
}
