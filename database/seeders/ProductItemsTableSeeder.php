<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product_items')->delete();
        
        \DB::table('product_items')->insert(array (
            0 => 
            array (
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 3,
                'item_admin_id' => '1',
                'item_id' => 'ITM-000001',
                'item_name_bn' => 'ফলমূল',
                'item_name_en' => 'Fruit',
                'item_status' => '1',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 4,
                'item_admin_id' => '1',
                'item_id' => 'ITM-000002',
                'item_name_bn' => 'কনফেকশনারি',
                'item_name_en' => 'Confectionary',
                'item_status' => '1',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}