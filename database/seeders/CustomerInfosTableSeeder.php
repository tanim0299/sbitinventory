<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CustomerInfosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('customer_infos')->delete();
        
        \DB::table('customer_infos')->insert(array (
            0 => 
            array (
                'created_at' => NULL,
                'customer_address' => 'Feni',
                'customer_admin_id' => '1',
                'customer_branch_id' => '1',
                'customer_email' => 'tanimchy417@gmail.com',
                'customer_id' => 'C-00001',
                'customer_name_bn' => NULL,
                'customer_name_en' => 'Tazim Islam',
                'customer_phone' => '01872583429',
                'deleted_at' => NULL,
                'type' => '1',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'created_at' => NULL,
                'customer_address' => NULL,
                'customer_admin_id' => '1',
                'customer_branch_id' => '1',
                'customer_email' => NULL,
                'customer_id' => 'C-00002',
                'customer_name_bn' => NULL,
                'customer_name_en' => 'Parvez Hossain',
                'customer_phone' => '01840241895',
                'deleted_at' => NULL,
                'type' => '1',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'created_at' => '2023-05-08 12:25:10',
                'customer_address' => 'Feni',
                'customer_admin_id' => '1',
                'customer_branch_id' => '1',
                'customer_email' => NULL,
                'customer_id' => 'C-00003',
                'customer_name_bn' => NULL,
                'customer_name_en' => 'Abdul Motaleb',
                'customer_phone' => '0198752421',
                'deleted_at' => NULL,
                'type' => '1',
                'updated_at' => '2023-05-08 12:25:10',
            ),
            3 => 
            array (
                'created_at' => NULL,
                'customer_address' => NULL,
                'customer_admin_id' => '1',
                'customer_branch_id' => '1',
                'customer_email' => NULL,
                'customer_id' => 'C-00004',
                'customer_name_bn' => NULL,
                'customer_name_en' => 'Ashraf Hossain',
                'customer_phone' => '01964621350',
                'deleted_at' => NULL,
                'type' => '1',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'created_at' => '2023-05-08 12:25:49',
                'customer_address' => 'Feni',
                'customer_admin_id' => '1',
                'customer_branch_id' => '1',
                'customer_email' => NULL,
                'customer_id' => 'C-00005',
                'customer_name_bn' => NULL,
                'customer_name_en' => 'Rashed',
                'customer_phone' => '01811358601',
                'deleted_at' => NULL,
                'type' => '1',
                'updated_at' => '2023-05-08 12:25:49',
            ),
        ));
        
        
    }
}