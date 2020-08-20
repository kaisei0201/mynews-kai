<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@admin',
            'password' => Hash::make('Zaq12wsxcde3'),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
