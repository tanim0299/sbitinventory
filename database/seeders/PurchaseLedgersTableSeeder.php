<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PurchaseLedgersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('purchase_ledgers')->delete();
        
        \DB::table('purchase_ledgers')->insert(array (
            0 => 
            array (
                'admin_id' => '1',
                'branch_id' => '1',
                'comment' => NULL,
                'created_at' => NULL,
                'deleted_at' => NULL,
                'discount' => 100.0,
                'entry_date' => '2023-05-08',
                'id' => 18,
                'invoice_date' => '2023-05-08',
                'invoice_no' => 'PI-0000001',
                'paid' => 119000.0,
                'status' => NULL,
                'suplier_id' => 'S-00001',
                'total' => 119100.0,
                'transaction_type' => 'Cash',
                'updated_at' => NULL,
                'voucher_date' => '2023-05-08',
                'voucher_no' => NULL,
            ),
        ));
        
        
    }
}