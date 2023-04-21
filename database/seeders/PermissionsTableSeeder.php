<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'created_at' => '2023-03-19 16:25:23',
                'deleted_at' => NULL,
                'guard_name' => 'web',
                'id' => 1,
                'name' => 'Dashboard',
                'parent' => 'Dashboard',
                'status' => 1,
                'updated_at' => '2023-03-19 16:25:23',
            ),
            1 => 
            array (
                'created_at' => '2023-03-19 18:08:09',
                'deleted_at' => NULL,
                'guard_name' => 'web',
                'id' => 2,
                'name' => 'User List',
                'parent' => 'User',
                'status' => 1,
                'updated_at' => '2023-03-19 18:08:09',
            ),
            2 => 
            array (
                'created_at' => '2023-03-19 18:08:09',
                'deleted_at' => NULL,
                'guard_name' => 'web',
                'id' => 3,
                'name' => 'User Create',
                'parent' => 'User',
                'status' => 1,
                'updated_at' => '2023-03-19 18:08:09',
            ),
            3 => 
            array (
                'created_at' => '2023-03-19 18:08:09',
                'deleted_at' => NULL,
                'guard_name' => 'web',
                'id' => 4,
                'name' => 'User Edit',
                'parent' => 'User',
                'status' => 1,
                'updated_at' => '2023-03-19 18:08:09',
            ),
            4 => 
            array (
                'created_at' => '2023-03-19 18:08:09',
                'deleted_at' => NULL,
                'guard_name' => 'web',
                'id' => 5,
                'name' => 'User Delete',
                'parent' => 'User',
                'status' => 1,
                'updated_at' => '2023-03-19 18:08:09',
            ),
            5 => 
            array (
                'created_at' => '2023-03-19 18:08:09',
                'deleted_at' => NULL,
                'guard_name' => 'web',
                'id' => 6,
                'name' => 'User View',
                'parent' => 'User',
                'status' => 1,
                'updated_at' => '2023-03-19 18:08:09',
            ),
            6 => 
            array (
                'created_at' => '2023-03-19 18:08:09',
                'deleted_at' => NULL,
                'guard_name' => 'web',
                'id' => 7,
                'name' => 'User Print',
                'parent' => 'User',
                'status' => 1,
                'updated_at' => '2023-03-19 18:08:09',
            ),
            7 => 
            array (
                'created_at' => '2023-03-19 18:08:09',
                'deleted_at' => NULL,
                'guard_name' => 'web',
                'id' => 8,
                'name' => 'User Restore',
                'parent' => 'User',
                'status' => 1,
                'updated_at' => '2023-03-19 18:08:09',
            ),
            8 => 
            array (
                'created_at' => '2023-03-19 18:17:22',
                'deleted_at' => NULL,
                'guard_name' => 'web',
                'id' => 9,
                'name' => 'Role List',
                'parent' => 'Role',
                'status' => 1,
                'updated_at' => '2023-03-19 18:17:22',
            ),
            9 => 
            array (
                'created_at' => '2023-03-19 18:17:22',
                'deleted_at' => NULL,
                'guard_name' => 'web',
                'id' => 10,
                'name' => 'Role Create',
                'parent' => 'Role',
                'status' => 1,
                'updated_at' => '2023-03-19 18:17:22',
            ),
            10 => 
            array (
                'created_at' => '2023-03-19 18:17:22',
                'deleted_at' => NULL,
                'guard_name' => 'web',
                'id' => 11,
                'name' => 'Role Edit',
                'parent' => 'Role',
                'status' => 1,
                'updated_at' => '2023-03-19 18:17:22',
            ),
            11 => 
            array (
                'created_at' => '2023-03-19 18:17:22',
                'deleted_at' => NULL,
                'guard_name' => 'web',
                'id' => 12,
                'name' => 'Role Delete',
                'parent' => 'Role',
                'status' => 1,
                'updated_at' => '2023-03-19 18:17:22',
            ),
            12 => 
            array (
                'created_at' => '2023-03-19 18:17:22',
                'deleted_at' => NULL,
                'guard_name' => 'web',
                'id' => 13,
                'name' => 'Role View',
                'parent' => 'Role',
                'status' => 1,
                'updated_at' => '2023-03-19 18:17:22',
            ),
            13 => 
            array (
                'created_at' => '2023-03-19 18:17:22',
                'deleted_at' => NULL,
                'guard_name' => 'web',
                'id' => 14,
                'name' => 'Role Print',
                'parent' => 'Role',
                'status' => 1,
                'updated_at' => '2023-03-19 18:17:22',
            ),
            14 => 
            array (
                'created_at' => '2023-03-19 18:17:22',
                'deleted_at' => NULL,
                'guard_name' => 'web',
                'id' => 15,
                'name' => 'Role Restore',
                'parent' => 'Role',
                'status' => 1,
                'updated_at' => '2023-03-19 18:17:22',
            ),
            15 => 
            array (
                'created_at' => '2023-03-19 18:17:22',
                'deleted_at' => NULL,
                'guard_name' => 'web',
                'id' => 16,
                'name' => 'Role Permission',
                'parent' => 'Role',
                'status' => 1,
                'updated_at' => '2023-03-19 18:17:22',
            ),
            16 => 
            array (
                'created_at' => '2023-03-29 04:28:32',
                'deleted_at' => NULL,
                'guard_name' => 'web',
                'id' => 18,
                'name' => 'Apps Information List',
                'parent' => 'Apps Information',
                'status' => 1,
                'updated_at' => '2023-03-29 04:28:32',
            ),
            17 => 
            array (
                'created_at' => '2023-03-29 04:28:32',
                'deleted_at' => NULL,
                'guard_name' => 'web',
                'id' => 19,
                'name' => 'Apps Information Create',
                'parent' => 'Apps Information',
                'status' => 1,
                'updated_at' => '2023-03-29 04:28:32',
            ),
            18 => 
            array (
                'created_at' => '2023-03-29 04:28:32',
                'deleted_at' => NULL,
                'guard_name' => 'web',
                'id' => 20,
                'name' => 'Apps Information Edit',
                'parent' => 'Apps Information',
                'status' => 1,
                'updated_at' => '2023-03-29 04:28:32',
            ),
            19 => 
            array (
                'created_at' => '2023-03-29 04:28:32',
                'deleted_at' => NULL,
                'guard_name' => 'web',
                'id' => 21,
                'name' => 'Apps Information Delete',
                'parent' => 'Apps Information',
                'status' => 1,
                'updated_at' => '2023-03-29 04:28:32',
            ),
            20 => 
            array (
                'created_at' => '2023-03-29 04:28:32',
                'deleted_at' => NULL,
                'guard_name' => 'web',
                'id' => 22,
                'name' => 'Apps Information View',
                'parent' => 'Apps Information',
                'status' => 1,
                'updated_at' => '2023-03-29 04:28:32',
            ),
            21 => 
            array (
                'created_at' => '2023-03-29 04:28:32',
                'deleted_at' => NULL,
                'guard_name' => 'web',
                'id' => 23,
                'name' => 'Apps Information Print',
                'parent' => 'Apps Information',
                'status' => 1,
                'updated_at' => '2023-03-29 04:28:32',
            ),
            22 => 
            array (
                'created_at' => '2023-03-29 04:28:32',
                'deleted_at' => NULL,
                'guard_name' => 'web',
                'id' => 24,
                'name' => 'Apps Information Edit_history',
                'parent' => 'Apps Information',
                'status' => 1,
                'updated_at' => '2023-03-29 04:28:32',
            ),
            23 => 
            array (
                'created_at' => '2023-03-29 04:35:23',
                'deleted_at' => NULL,
                'guard_name' => 'web',
                'id' => 27,
                'name' => 'About Us Create',
                'parent' => 'About Us',
                'status' => 1,
                'updated_at' => '2023-03-29 04:35:23',
            ),
            24 => 
            array (
                'created_at' => '2023-03-29 04:35:23',
                'deleted_at' => NULL,
                'guard_name' => 'web',
                'id' => 28,
                'name' => 'About Us Edit',
                'parent' => 'About Us',
                'status' => 1,
                'updated_at' => '2023-03-29 04:35:23',
            ),
            25 => 
            array (
                'created_at' => '2023-03-29 04:35:23',
                'deleted_at' => NULL,
                'guard_name' => 'web',
                'id' => 29,
                'name' => 'About Us Delete',
                'parent' => 'About Us',
                'status' => 1,
                'updated_at' => '2023-03-29 04:35:23',
            ),
            26 => 
            array (
                'created_at' => '2023-03-29 04:35:23',
                'deleted_at' => NULL,
                'guard_name' => 'web',
                'id' => 30,
                'name' => 'About Us View',
                'parent' => 'About Us',
                'status' => 1,
                'updated_at' => '2023-03-29 04:35:23',
            ),
            27 => 
            array (
                'created_at' => '2023-03-29 04:35:23',
                'deleted_at' => NULL,
                'guard_name' => 'web',
                'id' => 31,
                'name' => 'About Us Print',
                'parent' => 'About Us',
                'status' => 1,
                'updated_at' => '2023-03-29 04:35:23',
            ),
            28 => 
            array (
                'created_at' => '2023-03-29 04:35:23',
                'deleted_at' => NULL,
                'guard_name' => 'web',
                'id' => 32,
                'name' => 'About Us Edit_history',
                'parent' => 'About Us',
                'status' => 1,
                'updated_at' => '2023-03-29 04:35:23',
            ),
            29 => 
            array (
                'created_at' => '2023-03-29 09:02:52',
                'deleted_at' => NULL,
                'guard_name' => 'web',
                'id' => 41,
                'name' => 'Website Info Edit_history',
                'parent' => 'Website Info',
                'status' => 1,
                'updated_at' => '2023-03-29 09:02:52',
            ),
            30 => 
            array (
                'created_at' => '2023-03-30 05:45:25',
                'deleted_at' => NULL,
                'guard_name' => 'web',
                'id' => 49,
                'name' => 'Photo Gallery Edit_history',
                'parent' => 'Photo Gallery',
                'status' => 1,
                'updated_at' => '2023-03-30 05:45:25',
            ),
            31 => 
            array (
                'created_at' => '2023-04-01 06:32:18',
                'deleted_at' => NULL,
                'guard_name' => 'web',
                'id' => 56,
                'name' => 'Services Edit_history',
                'parent' => 'Services',
                'status' => 1,
                'updated_at' => '2023-04-01 06:32:18',
            ),
            32 => 
            array (
                'created_at' => '2023-04-01 08:52:40',
                'deleted_at' => NULL,
                'guard_name' => 'web',
                'id' => 64,
                'name' => 'Project Info List',
                'parent' => 'Project Info',
                'status' => 1,
                'updated_at' => '2023-04-01 08:52:40',
            ),
            33 => 
            array (
                'created_at' => '2023-04-01 08:52:40',
                'deleted_at' => NULL,
                'guard_name' => 'web',
                'id' => 65,
                'name' => 'Project Info Create',
                'parent' => 'Project Info',
                'status' => 1,
                'updated_at' => '2023-04-01 08:52:40',
            ),
            34 => 
            array (
                'created_at' => '2023-04-01 08:52:40',
                'deleted_at' => NULL,
                'guard_name' => 'web',
                'id' => 66,
                'name' => 'Project Info Edit',
                'parent' => 'Project Info',
                'status' => 1,
                'updated_at' => '2023-04-01 08:52:40',
            ),
            35 => 
            array (
                'created_at' => '2023-04-01 08:52:40',
                'deleted_at' => NULL,
                'guard_name' => 'web',
                'id' => 67,
                'name' => 'Project Info Delete',
                'parent' => 'Project Info',
                'status' => 1,
                'updated_at' => '2023-04-01 08:52:40',
            ),
            36 => 
            array (
                'created_at' => '2023-04-01 08:52:40',
                'deleted_at' => NULL,
                'guard_name' => 'web',
                'id' => 68,
                'name' => 'Project Info View',
                'parent' => 'Project Info',
                'status' => 1,
                'updated_at' => '2023-04-01 08:52:40',
            ),
            37 => 
            array (
                'created_at' => '2023-04-01 08:52:40',
                'deleted_at' => NULL,
                'guard_name' => 'web',
                'id' => 69,
                'name' => 'Project Info Print',
                'parent' => 'Project Info',
                'status' => 1,
                'updated_at' => '2023-04-01 08:52:40',
            ),
            38 => 
            array (
                'created_at' => '2023-04-01 08:52:40',
                'deleted_at' => NULL,
                'guard_name' => 'web',
                'id' => 70,
                'name' => 'Project Info Edit_history',
                'parent' => 'Project Info',
                'status' => 1,
                'updated_at' => '2023-04-01 08:52:40',
            ),
            39 => 
            array (
                'created_at' => '2023-04-01 08:53:23',
                'deleted_at' => NULL,
                'guard_name' => 'web',
                'id' => 71,
                'name' => 'Project Category List',
                'parent' => 'Project Category',
                'status' => 1,
                'updated_at' => '2023-04-01 08:53:23',
            ),
            40 => 
            array (
                'created_at' => '2023-04-01 08:53:23',
                'deleted_at' => NULL,
                'guard_name' => 'web',
                'id' => 72,
                'name' => 'Project Category Create',
                'parent' => 'Project Category',
                'status' => 1,
                'updated_at' => '2023-04-01 08:53:23',
            ),
            41 => 
            array (
                'created_at' => '2023-04-01 08:53:23',
                'deleted_at' => NULL,
                'guard_name' => 'web',
                'id' => 73,
                'name' => 'Project Category Edit',
                'parent' => 'Project Category',
                'status' => 1,
                'updated_at' => '2023-04-01 08:53:23',
            ),
            42 => 
            array (
                'created_at' => '2023-04-01 08:53:23',
                'deleted_at' => NULL,
                'guard_name' => 'web',
                'id' => 74,
                'name' => 'Project Category Delete',
                'parent' => 'Project Category',
                'status' => 1,
                'updated_at' => '2023-04-01 08:53:23',
            ),
            43 => 
            array (
                'created_at' => '2023-04-01 08:53:23',
                'deleted_at' => NULL,
                'guard_name' => 'web',
                'id' => 75,
                'name' => 'Project Category View',
                'parent' => 'Project Category',
                'status' => 1,
                'updated_at' => '2023-04-01 08:53:23',
            ),
            44 => 
            array (
                'created_at' => '2023-04-01 08:53:23',
                'deleted_at' => NULL,
                'guard_name' => 'web',
                'id' => 76,
                'name' => 'Project Category Print',
                'parent' => 'Project Category',
                'status' => 1,
                'updated_at' => '2023-04-01 08:53:23',
            ),
            45 => 
            array (
                'created_at' => '2023-04-01 08:53:23',
                'deleted_at' => NULL,
                'guard_name' => 'web',
                'id' => 77,
                'name' => 'Project Category Edit_history',
                'parent' => 'Project Category',
                'status' => 1,
                'updated_at' => '2023-04-01 08:53:23',
            ),
            46 => 
            array (
                'created_at' => '2023-04-01 10:15:03',
                'deleted_at' => NULL,
                'guard_name' => 'web',
                'id' => 91,
                'name' => 'Project Information Edit_history',
                'parent' => 'Project Information',
                'status' => 1,
                'updated_at' => '2023-04-01 10:15:03',
            ),
            47 => 
            array (
                'created_at' => '2023-04-02 05:48:12',
                'deleted_at' => NULL,
                'guard_name' => 'web',
                'id' => 98,
                'name' => 'Testimonial Edit_history',
                'parent' => 'Testimonial',
                'status' => 1,
                'updated_at' => '2023-04-02 05:48:12',
            ),
            48 => 
            array (
                'created_at' => '2023-04-03 06:46:32',
                'deleted_at' => NULL,
                'guard_name' => 'web',
                'id' => 113,
                'name' => 'Our Team Edit_history',
                'parent' => 'Our Team',
                'status' => 1,
                'updated_at' => '2023-04-03 06:46:32',
            ),
            49 => 
            array (
                'created_at' => '2023-04-03 10:39:32',
                'deleted_at' => NULL,
                'guard_name' => 'web',
                'id' => 114,
                'name' => 'Menu List',
                'parent' => 'Menu',
                'status' => 1,
                'updated_at' => '2023-04-03 10:39:32',
            ),
            50 => 
            array (
                'created_at' => '2023-04-03 10:39:32',
                'deleted_at' => NULL,
                'guard_name' => 'web',
                'id' => 115,
                'name' => 'Menu Create',
                'parent' => 'Menu',
                'status' => 1,
                'updated_at' => '2023-04-03 10:39:32',
            ),
            51 => 
            array (
                'created_at' => '2023-04-03 10:39:32',
                'deleted_at' => NULL,
                'guard_name' => 'web',
                'id' => 116,
                'name' => 'Menu Edit',
                'parent' => 'Menu',
                'status' => 1,
                'updated_at' => '2023-04-03 10:39:32',
            ),
            52 => 
            array (
                'created_at' => '2023-04-03 10:39:32',
                'deleted_at' => NULL,
                'guard_name' => 'web',
                'id' => 117,
                'name' => 'Menu Delete',
                'parent' => 'Menu',
                'status' => 1,
                'updated_at' => '2023-04-03 10:39:32',
            ),
            53 => 
            array (
                'created_at' => '2023-04-03 10:39:32',
                'deleted_at' => NULL,
                'guard_name' => 'web',
                'id' => 118,
                'name' => 'Menu View',
                'parent' => 'Menu',
                'status' => 1,
                'updated_at' => '2023-04-03 10:39:32',
            ),
            54 => 
            array (
                'created_at' => '2023-04-03 10:39:32',
                'deleted_at' => NULL,
                'guard_name' => 'web',
                'id' => 119,
                'name' => 'Menu Deleted_list',
                'parent' => 'Menu',
                'status' => 1,
                'updated_at' => '2023-04-03 10:39:32',
            ),
            55 => 
            array (
                'created_at' => '2023-04-03 10:39:32',
                'deleted_at' => NULL,
                'guard_name' => 'web',
                'id' => 120,
                'name' => 'Menu Restore',
                'parent' => 'Menu',
                'status' => 1,
                'updated_at' => '2023-04-03 10:39:32',
            ),
            56 => 
            array (
                'created_at' => '2023-04-03 10:39:32',
                'deleted_at' => NULL,
                'guard_name' => 'web',
                'id' => 121,
                'name' => 'Menu Permanent_delete',
                'parent' => 'Menu',
                'status' => 1,
                'updated_at' => '2023-04-03 10:39:32',
            ),
            57 => 
            array (
                'created_at' => '2023-04-05 07:01:18',
                'deleted_at' => NULL,
                'guard_name' => 'web',
                'id' => 128,
                'name' => 'Member Edit_history',
                'parent' => 'Member',
                'status' => 1,
                'updated_at' => '2023-04-05 07:01:18',
            ),
            58 => 
            array (
                'created_at' => '2023-04-05 07:01:18',
                'deleted_at' => NULL,
                'guard_name' => 'web',
                'id' => 129,
                'name' => 'Member Deleted_list',
                'parent' => 'Member',
                'status' => 1,
                'updated_at' => '2023-04-05 07:01:18',
            ),
            59 => 
            array (
                'created_at' => '2023-04-05 07:01:18',
                'deleted_at' => NULL,
                'guard_name' => 'web',
                'id' => 131,
                'name' => 'Member Permanent_delete',
                'parent' => 'Member',
                'status' => 1,
                'updated_at' => '2023-04-05 07:01:18',
            ),
            60 => 
            array (
                'created_at' => '2023-04-19 07:39:32',
                'deleted_at' => NULL,
                'guard_name' => 'web',
                'id' => 132,
                'name' => 'Company Information List',
                'parent' => 'Company Information',
                'status' => 1,
                'updated_at' => '2023-04-19 07:39:32',
            ),
            61 => 
            array (
                'created_at' => '2023-04-19 07:39:32',
                'deleted_at' => NULL,
                'guard_name' => 'web',
                'id' => 133,
                'name' => 'Company Information Create',
                'parent' => 'Company Information',
                'status' => 1,
                'updated_at' => '2023-04-19 07:39:32',
            ),
            62 => 
            array (
                'created_at' => '2023-04-19 07:39:32',
                'deleted_at' => NULL,
                'guard_name' => 'web',
                'id' => 134,
                'name' => 'Company Information Edit',
                'parent' => 'Company Information',
                'status' => 1,
                'updated_at' => '2023-04-19 07:39:32',
            ),
            63 => 
            array (
                'created_at' => '2023-04-19 07:39:32',
                'deleted_at' => NULL,
                'guard_name' => 'web',
                'id' => 135,
                'name' => 'Company Information Delete',
                'parent' => 'Company Information',
                'status' => 1,
                'updated_at' => '2023-04-19 07:39:32',
            ),
            64 => 
            array (
                'created_at' => '2023-04-19 07:39:32',
                'deleted_at' => NULL,
                'guard_name' => 'web',
                'id' => 136,
                'name' => 'Company Information View',
                'parent' => 'Company Information',
                'status' => 1,
                'updated_at' => '2023-04-19 07:39:32',
            ),
            65 => 
            array (
                'created_at' => '2023-04-19 07:39:32',
                'deleted_at' => NULL,
                'guard_name' => 'web',
                'id' => 137,
                'name' => 'Company Information Print',
                'parent' => 'Company Information',
                'status' => 1,
                'updated_at' => '2023-04-19 07:39:32',
            ),
            66 => 
            array (
                'created_at' => '2023-04-19 07:39:32',
                'deleted_at' => NULL,
                'guard_name' => 'web',
                'id' => 138,
                'name' => 'Company Information Edit_history',
                'parent' => 'Company Information',
                'status' => 1,
                'updated_at' => '2023-04-19 07:39:32',
            ),
            67 => 
            array (
                'created_at' => '2023-04-19 07:39:32',
                'deleted_at' => NULL,
                'guard_name' => 'web',
                'id' => 139,
                'name' => 'Company Information Deleted_list',
                'parent' => 'Company Information',
                'status' => 1,
                'updated_at' => '2023-04-19 07:39:32',
            ),
            68 => 
            array (
                'created_at' => '2023-04-19 07:39:32',
                'deleted_at' => NULL,
                'guard_name' => 'web',
                'id' => 140,
                'name' => 'Company Information Restore',
                'parent' => 'Company Information',
                'status' => 1,
                'updated_at' => '2023-04-19 07:39:32',
            ),
            69 => 
            array (
                'created_at' => '2023-04-19 07:39:32',
                'deleted_at' => NULL,
                'guard_name' => 'web',
                'id' => 141,
                'name' => 'Company Information Permanent_delete',
                'parent' => 'Company Information',
                'status' => 1,
                'updated_at' => '2023-04-19 07:39:32',
            ),
            70 => 
            array (
                'created_at' => '2023-04-19 07:41:20',
                'deleted_at' => NULL,
                'guard_name' => 'web',
                'id' => 142,
                'name' => 'Create Customer List',
                'parent' => 'Create Customer',
                'status' => 1,
                'updated_at' => '2023-04-19 07:41:20',
            ),
            71 => 
            array (
                'created_at' => '2023-04-19 07:41:20',
                'deleted_at' => NULL,
                'guard_name' => 'web',
                'id' => 143,
                'name' => 'Create Customer Create',
                'parent' => 'Create Customer',
                'status' => 1,
                'updated_at' => '2023-04-19 07:41:20',
            ),
            72 => 
            array (
                'created_at' => '2023-04-19 07:41:20',
                'deleted_at' => NULL,
                'guard_name' => 'web',
                'id' => 144,
                'name' => 'Create Customer Edit',
                'parent' => 'Create Customer',
                'status' => 1,
                'updated_at' => '2023-04-19 07:41:20',
            ),
            73 => 
            array (
                'created_at' => '2023-04-19 07:41:20',
                'deleted_at' => NULL,
                'guard_name' => 'web',
                'id' => 145,
                'name' => 'Create Customer Delete',
                'parent' => 'Create Customer',
                'status' => 1,
                'updated_at' => '2023-04-19 07:41:20',
            ),
            74 => 
            array (
                'created_at' => '2023-04-19 07:41:20',
                'deleted_at' => NULL,
                'guard_name' => 'web',
                'id' => 146,
                'name' => 'Create Customer View',
                'parent' => 'Create Customer',
                'status' => 1,
                'updated_at' => '2023-04-19 07:41:20',
            ),
            75 => 
            array (
                'created_at' => '2023-04-19 07:41:20',
                'deleted_at' => NULL,
                'guard_name' => 'web',
                'id' => 147,
                'name' => 'Create Customer Print',
                'parent' => 'Create Customer',
                'status' => 1,
                'updated_at' => '2023-04-19 07:41:20',
            ),
            76 => 
            array (
                'created_at' => '2023-04-19 07:41:20',
                'deleted_at' => NULL,
                'guard_name' => 'web',
                'id' => 148,
                'name' => 'Create Customer Edit_history',
                'parent' => 'Create Customer',
                'status' => 1,
                'updated_at' => '2023-04-19 07:41:20',
            ),
            77 => 
            array (
                'created_at' => '2023-04-19 07:41:20',
                'deleted_at' => NULL,
                'guard_name' => 'web',
                'id' => 149,
                'name' => 'Create Customer Deleted_list',
                'parent' => 'Create Customer',
                'status' => 1,
                'updated_at' => '2023-04-19 07:41:20',
            ),
            78 => 
            array (
                'created_at' => '2023-04-19 07:41:20',
                'deleted_at' => NULL,
                'guard_name' => 'web',
                'id' => 150,
                'name' => 'Create Customer Restore',
                'parent' => 'Create Customer',
                'status' => 1,
                'updated_at' => '2023-04-19 07:41:20',
            ),
            79 => 
            array (
                'created_at' => '2023-04-19 07:41:20',
                'deleted_at' => NULL,
                'guard_name' => 'web',
                'id' => 151,
                'name' => 'Create Customer Permanent_delete',
                'parent' => 'Create Customer',
                'status' => 1,
                'updated_at' => '2023-04-19 07:41:20',
            ),
        ));
        
        
    }
}