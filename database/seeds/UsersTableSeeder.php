<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::truncate();

        DB::table('users')->insert([
            'name'     => 'Ridwan Noor',
            'email'    => 'contact@simungil.com',
            'password' => bcrypt('password'),
            'is_admin' => true
        ]);

    }
}
