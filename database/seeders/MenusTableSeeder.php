<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menus')->delete();
        
        \DB::table('menus')->insert(array (
            0 => 
            array (
                'bn_name' => 'ড্যাশবোর্ড',
                'created_at' => '2023-03-19 14:04:30',
                'created_by' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'icon' => 'uil-home-alt',
                'id' => 1,
                'is_hidden' => 'No',
                'name' => 'Dashboard',
                'order_by' => 1,
                'parent_id' => NULL,
                'route_name' => 'dashboard',
                'status' => 1,
                'system_name' => 'Dashboard',
                'updated_at' => '2023-05-03 06:24:30',
                'updated_by' => 1,
            ),
            1 => 
            array (
                'bn_name' => 'ইউজার ম্যানেজমেন্ট',
                'created_at' => '2023-03-19 18:06:39',
                'created_by' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'icon' => NULL,
                'id' => 2,
                'is_hidden' => 'No',
                'name' => 'User Management',
                'order_by' => 10,
                'parent_id' => NULL,
                'route_name' => NULL,
                'status' => 1,
                'system_name' => 'User Management',
                'updated_at' => '2023-05-07 05:51:36',
                'updated_by' => 1,
            ),
            2 => 
            array (
                'bn_name' => 'ইউজার',
                'created_at' => '2023-03-19 18:08:09',
                'created_by' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'icon' => NULL,
                'id' => 3,
                'is_hidden' => 'No',
                'name' => 'User',
                'order_by' => 1,
                'parent_id' => 2,
                'route_name' => 'user.index',
                'status' => 1,
                'system_name' => 'User',
                'updated_at' => '2023-03-31 18:10:57',
                'updated_by' => 1,
            ),
            3 => 
            array (
                'bn_name' => 'রোল ম্যানেজমেন্ট',
                'created_at' => '2023-03-19 18:14:26',
                'created_by' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'icon' => NULL,
                'id' => 4,
                'is_hidden' => 'No',
                'name' => 'Role Management',
                'order_by' => 3,
                'parent_id' => NULL,
                'route_name' => NULL,
                'status' => 1,
                'system_name' => 'Role Management',
                'updated_at' => '2023-05-03 07:07:38',
                'updated_by' => 1,
            ),
            4 => 
            array (
                'bn_name' => 'রোল',
                'created_at' => '2023-03-19 18:17:21',
                'created_by' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'icon' => NULL,
                'id' => 5,
                'is_hidden' => 'No',
                'name' => 'Role',
                'order_by' => 1,
                'parent_id' => 4,
                'route_name' => 'role.index',
                'status' => 1,
                'system_name' => 'Role',
                'updated_at' => '2023-03-31 18:11:32',
                'updated_by' => 1,
            ),
            5 => 
            array (
                'bn_name' => 'মেন্যু ম্যানেজমেন্ট',
                'created_at' => '2023-04-03 10:38:48',
                'created_by' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'icon' => NULL,
                'id' => 25,
                'is_hidden' => 'No',
                'name' => 'Menu Management',
                'order_by' => 2,
                'parent_id' => NULL,
                'route_name' => '',
                'status' => 1,
                'system_name' => 'Menu Management',
                'updated_at' => '2023-04-03 10:38:48',
                'updated_by' => 1,
            ),
            6 => 
            array (
                'bn_name' => 'মেন্যু',
                'created_at' => '2023-04-03 10:39:32',
                'created_by' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'icon' => NULL,
                'id' => 26,
                'is_hidden' => 'No',
                'name' => 'Menu',
                'order_by' => 1,
                'parent_id' => 25,
                'route_name' => 'menu.index',
                'status' => 1,
                'system_name' => 'Menu',
                'updated_at' => '2023-04-03 10:39:32',
                'updated_by' => 1,
            ),
            7 => 
            array (
                'bn_name' => 'সফটওয়্যার সেটিংস',
                'created_at' => '2023-04-19 07:38:46',
                'created_by' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'icon' => NULL,
                'id' => 32,
                'is_hidden' => 'No',
                'name' => 'Software Settings',
                'order_by' => 13,
                'parent_id' => NULL,
                'route_name' => NULL,
                'status' => 1,
                'system_name' => 'Software Settings',
                'updated_at' => '2023-05-07 05:51:36',
                'updated_by' => 1,
            ),
            8 => 
            array (
                'bn_name' => 'কোম্পানি তথ্য',
                'created_at' => '2023-04-19 07:39:32',
                'created_by' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'icon' => NULL,
                'id' => 33,
                'is_hidden' => 'No',
                'name' => 'Company Information',
                'order_by' => 13,
                'parent_id' => 32,
                'route_name' => 'company.index',
                'status' => 1,
                'system_name' => 'Company Information',
                'updated_at' => '2023-04-19 07:39:32',
                'updated_by' => 1,
            ),
            9 => 
            array (
                'bn_name' => 'গ্রাহক তথ্য',
                'created_at' => '2023-04-19 07:40:33',
                'created_by' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'icon' => NULL,
                'id' => 34,
                'is_hidden' => 'No',
                'name' => 'Customer Information',
                'order_by' => 16,
                'parent_id' => NULL,
                'route_name' => NULL,
                'status' => 1,
                'system_name' => 'Customer Information',
                'updated_at' => '2023-05-07 05:51:36',
                'updated_by' => 1,
            ),
            10 => 
            array (
                'bn_name' => 'গ্রাহক যুক্ত করুন',
                'created_at' => '2023-04-19 07:41:20',
                'created_by' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'icon' => NULL,
                'id' => 35,
                'is_hidden' => 'No',
                'name' => 'Create Customer',
                'order_by' => 14,
                'parent_id' => 34,
                'route_name' => 'customer.create',
                'status' => 1,
                'system_name' => 'Create Customer',
                'updated_at' => '2023-04-19 07:41:58',
                'updated_by' => 1,
            ),
            11 => 
            array (
                'bn_name' => 'গ্রাহক দেখুন',
                'created_at' => '2023-04-29 06:36:51',
                'created_by' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'icon' => NULL,
                'id' => 36,
                'is_hidden' => 'No',
                'name' => 'Manage Customer',
                'order_by' => 22,
                'parent_id' => 34,
                'route_name' => 'customer.index',
                'status' => 1,
                'system_name' => 'Manage Customer',
                'updated_at' => '2023-04-29 06:37:26',
                'updated_by' => 1,
            ),
            12 => 
            array (
                'bn_name' => 'সাপ্লাইয়ার তথ্য',
                'created_at' => '2023-04-29 09:44:23',
                'created_by' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'icon' => NULL,
                'id' => 37,
                'is_hidden' => 'No',
                'name' => 'Supplier Information',
                'order_by' => 14,
                'parent_id' => NULL,
                'route_name' => NULL,
                'status' => 1,
                'system_name' => 'Supplier Information',
                'updated_at' => '2023-05-07 05:51:36',
                'updated_by' => 1,
            ),
            13 => 
            array (
                'bn_name' => 'সাপ্লাইয়ার যোগ করুন',
                'created_at' => '2023-04-29 09:45:16',
                'created_by' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'icon' => NULL,
                'id' => 38,
                'is_hidden' => 'No',
                'name' => 'Create Supplier',
                'order_by' => 23,
                'parent_id' => 37,
                'route_name' => 'supplier.create',
                'status' => 1,
                'system_name' => 'Create Supplier',
                'updated_at' => '2023-04-29 10:04:50',
                'updated_by' => 1,
            ),
            14 => 
            array (
                'bn_name' => 'সাপ্লাইয়ার দেখুন',
                'created_at' => '2023-04-29 10:30:41',
                'created_by' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'icon' => NULL,
                'id' => 39,
                'is_hidden' => 'No',
                'name' => 'Manage Supplier',
                'order_by' => 24,
                'parent_id' => 37,
                'route_name' => 'supplier.index',
                'status' => 1,
                'system_name' => 'Manage Supplier',
                'updated_at' => '2023-04-29 10:30:41',
                'updated_by' => 1,
            ),
            15 => 
            array (
                'bn_name' => 'প্রোডাক্ট সেটিংস',
                'created_at' => '2023-04-30 04:36:22',
                'created_by' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'icon' => NULL,
                'id' => 40,
                'is_hidden' => 'No',
                'name' => 'Product Settings',
                'order_by' => 21,
                'parent_id' => NULL,
                'route_name' => NULL,
                'status' => 1,
                'system_name' => 'Product Settings',
                'updated_at' => '2023-05-07 05:51:36',
                'updated_by' => 1,
            ),
            16 => 
            array (
                'bn_name' => 'আইটেম',
                'created_at' => '2023-04-30 04:37:07',
                'created_by' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'icon' => NULL,
                'id' => 41,
                'is_hidden' => 'No',
                'name' => 'Item',
                'order_by' => 25,
                'parent_id' => 40,
                'route_name' => 'item.index',
                'status' => 1,
                'system_name' => 'Item',
                'updated_at' => '2023-04-30 04:37:08',
                'updated_by' => 1,
            ),
            17 => 
            array (
                'bn_name' => 'ক্যাটাগরি',
                'created_at' => '2023-04-30 05:49:04',
                'created_by' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'icon' => NULL,
                'id' => 42,
                'is_hidden' => 'No',
                'name' => 'Category',
                'order_by' => 29,
                'parent_id' => 40,
                'route_name' => 'category.index',
                'status' => 1,
                'system_name' => 'Category',
                'updated_at' => '2023-05-01 04:58:07',
                'updated_by' => 1,
            ),
            18 => 
            array (
                'bn_name' => 'ব্রান্ড',
                'created_at' => '2023-05-01 04:58:07',
                'created_by' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'icon' => NULL,
                'id' => 43,
                'is_hidden' => 'No',
                'name' => 'Brand',
                'order_by' => 30,
                'parent_id' => 40,
                'route_name' => 'brand.index',
                'status' => 1,
                'system_name' => 'Brand',
                'updated_at' => '2023-05-01 04:58:07',
                'updated_by' => 1,
            ),
            19 => 
            array (
                'bn_name' => 'প্রোডাক্ট তথ্য',
                'created_at' => '2023-05-01 05:46:37',
                'created_by' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'icon' => NULL,
                'id' => 44,
                'is_hidden' => 'No',
                'name' => 'Product Information',
                'order_by' => 19,
                'parent_id' => NULL,
                'route_name' => NULL,
                'status' => 1,
                'system_name' => 'Product Information',
                'updated_at' => '2023-05-07 05:51:36',
                'updated_by' => 1,
            ),
            20 => 
            array (
                'bn_name' => 'পণ্য যুক্ত করুন',
                'created_at' => '2023-05-01 05:47:47',
                'created_by' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'icon' => NULL,
                'id' => 45,
                'is_hidden' => 'No',
                'name' => 'Add Product',
                'order_by' => 31,
                'parent_id' => 44,
                'route_name' => 'product.create',
                'status' => 1,
                'system_name' => 'Add Product',
                'updated_at' => '2023-05-01 05:53:54',
                'updated_by' => 1,
            ),
            21 => 
            array (
                'bn_name' => 'পরিমাপ',
                'created_at' => '2023-05-01 05:57:43',
                'created_by' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'icon' => NULL,
                'id' => 46,
                'is_hidden' => 'No',
                'name' => 'Measurement',
                'order_by' => 31,
                'parent_id' => 40,
                'route_name' => 'measurement.index',
                'status' => 1,
                'system_name' => 'Measurement',
                'updated_at' => '2023-05-01 05:57:43',
                'updated_by' => 1,
            ),
            22 => 
            array (
                'bn_name' => 'পণ্য দেখুন',
                'created_at' => '2023-05-01 07:04:09',
                'created_by' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'icon' => NULL,
                'id' => 47,
                'is_hidden' => 'No',
                'name' => 'Manage Product',
                'order_by' => 32,
                'parent_id' => 44,
                'route_name' => 'product.index',
                'status' => 1,
                'system_name' => 'Manage Product',
                'updated_at' => '2023-05-01 07:04:09',
                'updated_by' => 1,
            ),
            23 => 
            array (
                'bn_name' => 'ক্রয়',
                'created_at' => '2023-05-01 10:04:02',
                'created_by' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'icon' => NULL,
                'id' => 48,
                'is_hidden' => 'No',
                'name' => 'Purchase',
                'order_by' => 4,
                'parent_id' => NULL,
                'route_name' => 'purchase.create',
                'status' => 1,
                'system_name' => 'Purchase',
                'updated_at' => '2023-05-01 10:04:42',
                'updated_by' => 1,
            ),
            24 => 
            array (
                'bn_name' => 'মেজারমেন্ট সাবইউনিট',
                'created_at' => '2023-05-02 05:12:33',
                'created_by' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'icon' => NULL,
                'id' => 49,
                'is_hidden' => 'No',
                'name' => 'Measurement Sub Unit',
                'order_by' => 35,
                'parent_id' => 40,
                'route_name' => 'measurement_subunit.index',
                'status' => 1,
                'system_name' => 'Measurement Sub Unit',
                'updated_at' => '2023-05-02 05:12:34',
                'updated_by' => 1,
            ),
            25 => 
            array (
                'bn_name' => 'সফটওয়্যার তথ্য',
                'created_at' => '2023-05-02 10:53:17',
                'created_by' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'icon' => NULL,
                'id' => 50,
                'is_hidden' => 'No',
                'name' => 'Website Information',
                'order_by' => 44,
                'parent_id' => NULL,
                'route_name' => 'website_info.index',
                'status' => 1,
                'system_name' => 'Website Informaiton',
                'updated_at' => '2023-05-07 05:51:36',
                'updated_by' => 1,
            ),
            26 => 
            array (
                'bn_name' => 'প্রোডাক্ট স্টক',
                'created_at' => '2023-05-03 06:24:30',
                'created_by' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'icon' => NULL,
                'id' => 51,
                'is_hidden' => 'No',
                'name' => 'Product Stock',
                'order_by' => 5,
                'parent_id' => NULL,
                'route_name' => 'stock.index',
                'status' => 1,
                'system_name' => 'Product Stock',
                'updated_at' => '2023-05-03 06:24:30',
                'updated_by' => 1,
            ),
            27 => 
            array (
                'bn_name' => 'সেলস',
                'created_at' => '2023-05-03 07:07:38',
                'created_by' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'icon' => NULL,
                'id' => 52,
                'is_hidden' => 'No',
                'name' => 'Sales',
                'order_by' => 7,
                'parent_id' => NULL,
                'route_name' => 'sales.create',
                'status' => 1,
                'system_name' => 'Sales',
                'updated_at' => '2023-05-03 07:08:22',
                'updated_by' => 1,
            ),
            28 => 
            array (
                'bn_name' => 'সেলস্ ইনফরমেশন',
                'created_at' => '2023-05-07 05:45:10',
                'created_by' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'icon' => NULL,
                'id' => 53,
                'is_hidden' => 'No',
                'name' => 'Sales Information',
                'order_by' => 8,
                'parent_id' => NULL,
                'route_name' => NULL,
                'status' => 1,
                'system_name' => 'Sales Information',
                'updated_at' => '2023-05-07 05:45:10',
                'updated_by' => 1,
            ),
            29 => 
            array (
                'bn_name' => 'সেলস লেজার',
                'created_at' => '2023-05-07 05:45:43',
                'created_by' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'icon' => NULL,
                'id' => 54,
                'is_hidden' => 'No',
                'name' => 'Sales Ledger',
                'order_by' => 1,
                'parent_id' => 53,
                'route_name' => 'sales.index',
                'status' => 1,
                'system_name' => 'Sales Ledger',
                'updated_at' => '2023-05-07 05:45:43',
                'updated_by' => 1,
            ),
            30 => 
            array (
                'bn_name' => 'ক্রয় হিসাব',
                'created_at' => '2023-05-07 05:51:36',
                'created_by' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'icon' => NULL,
                'id' => 55,
                'is_hidden' => 'No',
                'name' => 'Purchase Information',
                'order_by' => 9,
                'parent_id' => NULL,
                'route_name' => NULL,
                'status' => 1,
                'system_name' => 'Purchase Information',
                'updated_at' => '2023-05-07 05:51:36',
                'updated_by' => 1,
            ),
            31 => 
            array (
                'bn_name' => 'ক্রয় লেজার সমূহ',
                'created_at' => '2023-05-07 05:52:16',
                'created_by' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'icon' => NULL,
                'id' => 56,
                'is_hidden' => 'No',
                'name' => 'Purchase Ledgers',
                'order_by' => 1,
                'parent_id' => 55,
                'route_name' => 'purchase.index',
                'status' => 1,
                'system_name' => 'Purchase Ledgers',
                'updated_at' => '2023-05-07 05:52:16',
                'updated_by' => 1,
            ),
        ));
        
        
    }
}