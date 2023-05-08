<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StocksTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('stocks')->delete();
        
        \DB::table('stocks')->insert(array (
            0 => 
            array (
                'branch_id' => '1',
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 9,
                'invoice_no' => 'PI-0000001',
                'old_and_new_purchase_price_average' => NULL,
                'pdt_expiry_date' => NULL,
                'product_id' => 'PDT-000001',
                'purchase_price' => 119.0,
                'purchase_price_withcost' => 119.0,
                'quantity' => 500.0,
                'sale_price' => 150.0,
                'sales_qty' => NULL,
                'status' => NULL,
                'stock_qun' => NULL,
                'updated_at' => '2023-05-08 12:36:58',
            ),
            1 => 
            array (
                'branch_id' => '1',
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 10,
                'invoice_no' => 'PI-0000001',
                'old_and_new_purchase_price_average' => NULL,
                'pdt_expiry_date' => NULL,
                'product_id' => 'PDT-000002',
                'purchase_price' => 149.0,
                'purchase_price_withcost' => 149.0,
                'quantity' => 400.0,
                'sale_price' => 180.0,
                'sales_qty' => NULL,
                'status' => NULL,
                'stock_qun' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}