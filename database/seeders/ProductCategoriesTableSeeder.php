<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product_categories')->delete();
        
        \DB::table('product_categories')->insert(array (
            0 => 
            array (
                'cat_admin_id' => '1',
                'cat_id' => 'CAT-000001',
                'cat_item_id' => 'ITM-000001',
                'cat_name_bn' => 'ডেমো ক্যাটাগরি',
                'cat_name_en' => 'Demo Categorey',
                'cat_status' => '1',
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 1,
                'updated_at' => '2023-05-01 04:46:18',
            ),
            1 => 
            array (
                'cat_admin_id' => '1',
                'cat_id' => 'CAT-000002',
                'cat_item_id' => 'ITM-000001',
                'cat_name_bn' => 'টেস্ট',
                'cat_name_en' => 'TEST',
                'cat_status' => '1',
                'created_at' => NULL,
                'deleted_at' => '2023-05-01',
                'id' => 2,
                'updated_at' => '2023-05-01 04:48:01',
            ),
        ));
        
        
    }
}