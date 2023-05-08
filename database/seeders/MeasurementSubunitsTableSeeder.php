<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MeasurementSubunitsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('measurement_subunits')->delete();
        
        \DB::table('measurement_subunits')->insert(array (
            0 => 
            array (
                'admin_id' => '1',
                'branch_id' => NULL,
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 4,
                'measurement_unit_id' => 'MU-0000001',
                'sub_unit_data' => '1000',
                'sub_unit_name' => 'Gram',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'admin_id' => '1',
                'branch_id' => NULL,
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 5,
                'measurement_unit_id' => 'MU-0000001',
                'sub_unit_data' => '1',
                'sub_unit_name' => 'KG',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'admin_id' => '1',
                'branch_id' => NULL,
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 6,
                'measurement_unit_id' => 'MU-0000002',
                'sub_unit_data' => '1000',
                'sub_unit_name' => 'Mili Liter',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'admin_id' => '1',
                'branch_id' => NULL,
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 7,
                'measurement_unit_id' => 'MU-0000002',
                'sub_unit_data' => '1',
                'sub_unit_name' => 'Liter',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}