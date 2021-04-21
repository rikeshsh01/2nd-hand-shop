<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [

                'name'=>'Rikesh Admin',
                'email'=>'rikeshadmin@gmail.com',
                'password'=>Hash::make('1111'),
                'user_type'=>'admin',
            ],
    
            // for vendor
            [
                
                'name'=>'Rikesh U',
                'email'=>'rikeshuser@gmail.com',
                'password'=>Hash::make('1111'),
                'user_type'=>'user',
         
            ],
    
            // for customer
           [
                
                'name'=>'Manish',
                'email'=>'manish@gmail.com',
                'password'=>Hash::make('1111'),
                'user_type'=>'user',
             
            ],
            [
                
                'name'=>'Deepak',
                'email'=>'deepak@gmail.com',
                'password'=>Hash::make('1111'),
                'user_type'=>'user',
             
            ],
        ]);
                
    }
}
