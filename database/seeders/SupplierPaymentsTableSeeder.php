<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SupplierPaymentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('supplier_payments')->delete();
        
        \DB::table('supplier_payments')->insert(array (
            0 => 
            array (
                'admin_id' => 1,
                'branch_id' => '1',
                'comment' => 'firstpayment',
                'created_at' => NULL,
                'deleted_at' => NULL,
                'discount' => NULL,
                'entry_date' => '2023-05-08',
                'id' => 18,
                'invoice_no' => 'PI-0000001',
                'payment' => 119000.0,
                'payment_date' => '2023-05-08',
                'payment_type' => 'Cash',
                'previous_due' => NULL,
                'return_amount' => 0.0,
                'returnpaid' => NULL,
                'supplier_id' => 'S-00001',
                'transaction_type' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}