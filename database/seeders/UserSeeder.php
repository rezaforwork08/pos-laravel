<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // $faker = Faker::create('id_ID');

        // for ($i = 1; $i <= 2000; $i++) {
        //     User::insert([
        //         'name'  => $faker->name,
        //         'email' => $faker->email,
        //         'password' => Hash::make($faker->name),
        //     ]);
        // }
        // elequount
        // insert into user
        User::create([
            'name'  => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678'),
            'id_level' => 1,
        ]);

        // $user = new User();
        // $user->name = 'Admin';
        // $user->email = 'admin@gmail.com';
        // $user->password = Hash::make('12345678');
        // $user->save();
    }
}
