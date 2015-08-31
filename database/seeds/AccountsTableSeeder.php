<?php

use Illuminate\Database\Seeder;

class AccountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('accounts')->insert([
            'email_add' => 'kixortillan@gmail.com',
            'name' => 'Kian Ortillan',
            'password' => bcrypt('password'),
            'address1' => '01 Camia St.',
            'postal_code' => '1920'
        ]);
    }
}
