<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SalesLedgersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sales_ledgers')->delete();
        
        
        
    }
}