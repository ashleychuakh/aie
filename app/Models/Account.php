<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

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
class Account extends Model
{
    use SoftDeletes;

    public $table = 'accounts';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'client_name',
        'client_address',
        'client_email',
        'client_numbers',
        'password',
        'contract',
        'type',
        'status',
        'role_id',
        'company_id',
        'confirmed',
        'confirmation_code',
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
        'client_name' => 'string',
        'client_address' => 'string',
        'client_email' => 'string',
        'client_numbers' => 'string',
        'password' => 'string',
        'contract' => 'string',
        'type' => 'string',
        'status' => 'string',
        'role_id' => 'integer',
        'company_id' => 'integer',
        'confirmed' => 'boolean',
        'confirmation_code' => 'string',
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
}
