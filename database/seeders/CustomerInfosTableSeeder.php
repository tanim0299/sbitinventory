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
        ));
        
        
    }
}