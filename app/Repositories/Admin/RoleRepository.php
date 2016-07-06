<?php

namespace App\Repositories\Admin;

use App\Models\Role;
use InfyOm\Generator\Common\BaseRepository;

class RoleRepository extends BaseRepository
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
        return Role::class;
    }
}
