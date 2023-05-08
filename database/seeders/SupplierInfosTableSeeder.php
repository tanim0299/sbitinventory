<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SupplierInfosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('supplier_infos')->delete();
        
        \DB::table('supplier_infos')->insert(array (
            0 => 
            array (
                'created_at' => NULL,
                'deleted_at' => NULL,
                'supplier_address' => 'Feni',
                'supplier_admin_id' => '1',
                'supplier_branch_id' => '1',
                'supplier_company_address' => NULL,
                'supplier_company_name' => 'Ontor Mango Supplier',
                'supplier_company_phone' => NULL,
                'supplier_email' => NULL,
                'supplier_id' => 'S-00001',
                'supplier_name_bn' => NULL,
                'supplier_name_en' => 'Md Alauddin Munshi',
                'supplier_phone' => '01575434262',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'created_at' => NULL,
                'deleted_at' => NULL,
                'supplier_address' => NULL,
                'supplier_admin_id' => '1',
                'supplier_branch_id' => '1',
                'supplier_company_address' => NULL,
                'supplier_company_name' => 'Fruit Valley',
                'supplier_company_phone' => NULL,
                'supplier_email' => NULL,
                'supplier_id' => 'S-00002',
                'supplier_name_bn' => NULL,
                'supplier_name_en' => 'Tazim Islam',
                'supplier_phone' => '0187545242',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}