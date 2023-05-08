<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SalesPaymentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sales_payments')->delete();
        
        \DB::table('sales_payments')->insert(array (
            0 => 
            array (
                'admin_id' => 1,
                'branch_id' => '1',
                'created_at' => NULL,
                'customer_id' => 'C-00003',
                'deleted_at' => NULL,
                'discount' => NULL,
                'entry_date' => '2023-05-08',
                'id' => 26,
                'invoice_no' => NULL,
                'note' => 'PD',
                'payment_amount' => NULL,
                'payment_type' => NULL,
                'previous_due' => 100.0,
                'return_amount' => NULL,
                'returnpaid' => NULL,
                'status' => NULL,
                'transaction_type' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'admin_id' => 1,
                'branch_id' => '1',
                'created_at' => NULL,
                'customer_id' => 'C-00005',
                'deleted_at' => NULL,
                'discount' => NULL,
                'entry_date' => '2023-05-08',
                'id' => 27,
                'invoice_no' => NULL,
                'note' => 'PD',
                'payment_amount' => NULL,
                'payment_type' => NULL,
                'previous_due' => 500.0,
                'return_amount' => NULL,
                'returnpaid' => NULL,
                'status' => NULL,
                'transaction_type' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}