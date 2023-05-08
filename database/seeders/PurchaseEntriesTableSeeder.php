<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PurchaseEntriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('purchase_entries')->delete();
        
        \DB::table('purchase_entries')->insert(array (
            0 => 
            array (
                'admin_id' => '1',
                'branch_id' => '1',
                'created_at' => NULL,
                'deleted_at' => NULL,
                'discount_amount' => 1.0,
                'entry_date' => NULL,
                'id' => 20,
                'invoice_no' => 'PI-0000001',
                'pdt_expiry_date' => NULL,
                'per_unit_cost' => 0.0,
                'product_id' => 'PDT-000001',
                'product_quantity' => 500.0,
                'purchase_price' => 120.0,
                'status' => NULL,
                'sub_unit_id' => '5',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'admin_id' => '1',
                'branch_id' => '1',
                'created_at' => NULL,
                'deleted_at' => NULL,
                'discount_amount' => 1.0,
                'entry_date' => NULL,
                'id' => 21,
                'invoice_no' => 'PI-0000001',
                'pdt_expiry_date' => NULL,
                'per_unit_cost' => 0.0,
                'product_id' => 'PDT-000002',
                'product_quantity' => 400.0,
                'purchase_price' => 150.0,
                'status' => NULL,
                'sub_unit_id' => '5',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}