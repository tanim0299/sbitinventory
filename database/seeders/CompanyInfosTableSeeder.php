<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CompanyInfosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('company_infos')->delete();
        
        \DB::table('company_infos')->insert(array (
            0 => 
            array (
                'banner' => '891657610.jpg',
                'company_address_bn' => NULL,
                'company_address_en' => 'Feni',
                'company_contact_no' => '01840241895',
                'company_email' => 'info@skillbasedit.com',
                'company_mobile' => '01575434262',
                'company_name_bn' => NULL,
                'company_name_en' => 'Company Name English',
                'created_at' => NULL,
                'date' => '2023-04-01',
                'deleted_at' => NULL,
                'id' => 1,
                'logo' => '1319686533.png',
                'openingbalance' => 50000.0,
                'status' => 1,
                'updated_at' => '2023-04-19 06:33:49',
                'vat' => 5,
            ),
        ));
        
        
    }
}