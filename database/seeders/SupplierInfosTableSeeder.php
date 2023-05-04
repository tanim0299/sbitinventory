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
                'deleted_at' => '2023-04-29',
                'supplier_address' => 'Feni',
                'supplier_admin_id' => '1',
                'supplier_branch_id' => '1',
                'supplier_company_address' => 'Feni',
                'supplier_company_name' => 'SBIT',
                'supplier_company_phone' => '01840241895',
                'supplier_email' => 'tanimchy417@gmail.com',
                'supplier_id' => 'S-00001',
                'supplier_name_bn' => NULL,
                'supplier_name_en' => 'Tanim Chowdhury',
                'supplier_phone' => '01575434262',
                'updated_at' => '2023-04-29 12:21:17',
            ),
            1 => 
            array (
                'created_at' => NULL,
                'deleted_at' => NULL,
                'supplier_address' => 'Feni',
                'supplier_admin_id' => '1',
                'supplier_branch_id' => '1',
                'supplier_company_address' => 'Feni',
                'supplier_company_name' => 'Skill Based IT',
                'supplier_company_phone' => '01842981240',
                'supplier_email' => NULL,
                'supplier_id' => 'S-00002',
                'supplier_name_bn' => NULL,
                'supplier_name_en' => 'Sumsul Karim Chowdhury',
                'supplier_phone' => '01575434262',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}