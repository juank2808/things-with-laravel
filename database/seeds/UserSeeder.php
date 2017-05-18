<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('users')->insert([
        // 'name'      =>  'Preuba seed',
        // 'email'     =>  'seeder@prueba.com',
        // 'password'  =>  bcrypt('prueba'),
        // 'type'      =>  'admin'
        // ]);
        factory(App\User::class, 5)->create();
    }
}
