<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call(UsersSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(RoleHasPermissionsTableSeeder::class);
        $this->call(ModelHasRolesTableSeeder::class);
        $this->call(ModelHasPermissionsTableSeeder::class);
        $this->call(MenusTableSeeder::class);
        $this->call(MenuActionsTableSeeder::class);
        $this->call(UserMenuActionsTableSeeder::class);
        $this->call(OtpSmsTableSeeder::class);
        $this->call(CompanyInfosTableSeeder::class);
        $this->call(CustomerInfosTableSeeder::class);
        $this->call(BranchInfosTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(SupplierInfosTableSeeder::class);
        $this->call(ProductItemsTableSeeder::class);
        $this->call(ProductBrandsTableSeeder::class);
        $this->call(ProductCategoriesTableSeeder::class);
        $this->call(ProductMeasurementsTableSeeder::class);
        $this->call(MeasurementSubunitsTableSeeder::class);
        $this->call(ProductInformationsTableSeeder::class);
    }
}