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
                'barcode' => '5967',
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 1,
                'pdt_admin_id' => '1',
                'pdt_brand_id' => 'BRN-000001',
                'pdt_cat_id' => 'CAT-000001',
                'pdt_id' => 'PDT-000001',
                'pdt_item_id' => 'ITM-000001',
                'pdt_measurement' => 'MU-0000001',
                'pdt_name_bn' => 'নাপা এক্ট্রা',
                'pdt_name_en' => 'Napa Extra',
                'pdt_purchase_price' => '300',
                'pdt_sale_price' => '5',
                'pdt_status' => '1',
                'updated_at' => '2023-05-04 05:39:19',
            ),
            1 => 
            array (
                'barcode' => '8660',
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 3,
                'pdt_admin_id' => '1',
                'pdt_brand_id' => 'BRN-000001',
                'pdt_cat_id' => 'CAT-000001',
                'pdt_id' => 'PDT-000002',
                'pdt_item_id' => 'ITM-000001',
                'pdt_measurement' => 'MU-0000001',
                'pdt_name_bn' => 'সারজেল ২০',
                'pdt_name_en' => 'Surgel 20',
                'pdt_purchase_price' => '60',
                'pdt_sale_price' => '100',
                'pdt_status' => '1',
                'updated_at' => '2023-05-03 09:53:51',
            ),
        ));
        
        
    }
}