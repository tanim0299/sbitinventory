<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SalesEntriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sales_entries')->delete();
        
        
        
    }
}