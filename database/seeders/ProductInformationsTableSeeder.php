<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductInformationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product_informations')->delete();
        
        \DB::table('product_informations')->insert(array (
            0 => 
            array (
                'barcode' => '9963',
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 4,
                'pdt_admin_id' => '1',
                'pdt_brand_id' => 'BRN-000001',
                'pdt_cat_id' => 'CAT-000001',
                'pdt_id' => 'PDT-000001',
                'pdt_item_id' => 'ITM-000001',
                'pdt_measurement' => 'MU-0000001',
                'pdt_name_bn' => 'আম',
                'pdt_name_en' => 'Mango',
                'pdt_purchase_price' => '120',
                'pdt_sale_price' => '150',
                'pdt_status' => '1',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'barcode' => '4097',
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 5,
                'pdt_admin_id' => '1',
                'pdt_brand_id' => 'BRN-000001',
                'pdt_cat_id' => 'CAT-000002',
                'pdt_id' => 'PDT-000002',
                'pdt_item_id' => 'ITM-000001',
                'pdt_measurement' => 'MU-0000001',
                'pdt_name_bn' => 'রাজশাহী হাড়িভাঙা আম',
                'pdt_name_en' => 'Rajshahi Harivanga Mango',
                'pdt_purchase_price' => '150',
                'pdt_sale_price' => '180',
                'pdt_status' => '1',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'barcode' => '4206',
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 6,
                'pdt_admin_id' => '1',
                'pdt_brand_id' => 'BRN-000001',
                'pdt_cat_id' => 'CAT-000001',
                'pdt_id' => 'PDT-000003',
                'pdt_item_id' => 'ITM-000001',
                'pdt_measurement' => 'MU-0000002',
                'pdt_name_bn' => 'আমের রস',
                'pdt_name_en' => 'Mango Juice',
                'pdt_purchase_price' => '200',
                'pdt_sale_price' => '240',
                'pdt_status' => '1',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}