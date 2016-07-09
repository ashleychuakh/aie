<?php

namespace App\Repositories\Admin;

use App\Models\AccountAddress;
use InfyOm\Generator\Common\BaseRepository;

class AccountAddressRepository extends BaseRepository
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
        return AccountAddress::class;
    }
}
