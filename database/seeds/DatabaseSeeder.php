<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(CategorySeeder::class);
         $this->call(ProductSeeder::class);
         $this->call(CustomerSeeder::class);
         $this->call(PhoneSeeder::class);
         $this->call(AccountSeeder::class);
         $this->call(RoleSeeder::class);
         $this->call(AccountRoleSeeder::class);
    }
}
