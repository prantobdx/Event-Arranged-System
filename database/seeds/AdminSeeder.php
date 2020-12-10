<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name' => 'Pranto',
            'email' => 'admin@gmail.com',
            'job_title' => 'CEO',
            'password' => Hash::make('123456789'),
              'image' => 'my.jpg',
        ]);
    }
}
