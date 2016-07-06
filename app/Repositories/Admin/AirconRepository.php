<?php

namespace App\Repositories\Admin;

use App\Models\Aircon;
use InfyOm\Generator\Common\BaseRepository;

class AirconRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Aircon::class;
    }
}
