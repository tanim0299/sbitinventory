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
                'id' => 5,
                'measurement_admin_id' => '1',
                'measurement_id' => 'MU-0000001',
                'measurement_sl' => '1',
                'measurement_unit' => 'KG',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 6,
                'measurement_admin_id' => '1',
                'measurement_id' => 'MU-0000002',
                'measurement_sl' => '2',
                'measurement_unit' => 'Liter',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}