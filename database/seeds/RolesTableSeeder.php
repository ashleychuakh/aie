<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Administrator',
                'description' => 'Administrator Privileges',
                'created_at' => '2016-01-01 00:00:00',
                'updated_at' => '2016-01-01 00:00:00',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}
