<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Aircon",
 *      required={},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="serial_number",
 *          description="serial_number",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="model",
 *          description="model",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="brand",
 *          description="brand",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="service_performed",
 *          description="service_performed",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="purchased_date",
 *          description="purchased_date",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="warranty_start_date",
 *          description="warranty_start_date",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="warranty_end_date",
 *          description="warranty_end_date",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="service_history",
 *          description="service_history",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="in_door_location",
 *          description="in_door_location",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="status",
 *          description="status",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="location_id",
 *          description="location_id",
 *          type="integer",
 *          format="int32"
 *      )
 * )
 */
class Aircon extends Model
{
    use SoftDeletes;

    public $table = 'aircons';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
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
        'location_id',
        'deleted_at'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'serial_number' => 'string',
        'model' => 'string',
        'brand' => 'string',
        'service_performed' => 'string',
        'purchased_date' => 'string',
        'warranty_start_date' => 'string',
        'warranty_end_date' => 'string',
        'service_history' => 'string',
        'in_door_location' => 'string',
        'status' => 'string',
        'location_id' => 'integer',
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
