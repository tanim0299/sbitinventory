<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductMeasurementsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product_measurements')->delete();
        
        \DB::table('product_measurements')->insert(array (
            0 => 
            array (
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 1,
                'measurement_admin_id' => '1',
                'measurement_id' => 'MU-0000001',
                'measurement_sl' => '1',
                'measurement_unit' => 'KG',
                'updated_at' => '2023-05-01 06:34:10',
            ),
            1 => 
            array (
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 3,
                'measurement_admin_id' => '1',
                'measurement_id' => 'MU-0000002',
                'measurement_sl' => '2',
                'measurement_unit' => 'Dozen',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 4,
                'measurement_admin_id' => '1',
                'measurement_id' => 'MU-0000003',
                'measurement_sl' => '3',
                'measurement_unit' => 'Meter',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}