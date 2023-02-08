<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
   /**
    * Run the database seeds.
    *
    * @return void
    */
   public function run()
   {
      User::create([
         'name' => 'Karantina',
         'email' => 'karantina@gmail.com',
         'password' => Hash::make('12345678'),
         'created_at' => NOW(),
         'updated_at' => NOW()
      ]);
   }
}
