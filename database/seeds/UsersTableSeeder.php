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
        DB::table('users')->insert(
            [
                'name' => 'JohnDoe',
                'email' => 'johndoe@gmail.com',
                'mobile_number' => '066-044-22-12',
                'home_number' => '044-123-44-12',
            ]
        );
        DB::table('users')->insert(
            [
                'name' => 'Шпикуляк',
                'email' => 'shpikyliak@gmail.com',
                'mobile_number' => '063-328-99-93',
                'home_number' => '044-13-82-123',
            ]
        );
    }

}

