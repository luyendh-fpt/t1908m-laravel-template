<?php

use Illuminate\Database\Seeder;

class AccountRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('accounts_roles')->truncate();
        \Illuminate\Support\Facades\DB::table('accounts_roles')->insert([
            [
                'account_id' => 1,
                'role_id' => 1
            ],
            [
                'account_id' => 1,
                'role_id' => 2
            ],[
                'account_id' => 1,
                'role_id' => 3
            ],
            [
                'account_id' => 2,
                'role_id' => 2
            ],[
                'account_id' => 2,
                'role_id' => 3
            ],
            [
                'account_id' => 3,
                'role_id' => 3
            ]
        ]);
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
