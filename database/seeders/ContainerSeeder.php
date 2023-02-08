<?php

namespace Database\Seeders;

use App\Models\Container;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ContainerSeeder extends Seeder
{
   /**
    * Run the database seeds.
    *
    * @return void
    */
   public function run()
   {
      $now = Carbon::now();
      Container::create([
         'date' => $now,
         'pib_no' => '2244224',
         'pib_date' => $now,
         'doc_type' => 'Karantina',
         'lpn' => '7764',
         'front_cont' => 'HG34535',
         'back_cont' => 'MN94234',
         'rpm' => 'No Alarm',
         'cont_weight' => '7960',
         'status' => 'Normal',
         'verified_by' => 'System',
         'created_at' => NOW(),
         'updated_at' => NOW()
      ]);

      Container::create([
         'date' => $now,
         'pib_no' => '53452',
         'pib_date' => $now,
         'doc_type' => 'Karantina',
         'lpn' => '12339',
         'front_cont' => 'BG9987',
         'back_cont' => 'KL09844',
         'rpm' => 'No Alarm',
         'cont_weight' => '6200',
         'status' => 'Normal',
         'verified_by' => 'System',
         'created_at' => NOW(),
         'updated_at' => NOW()
      ]);

      Container::create([
         'date' => $now->addDay(1),
         'pib_no' => '6654646',
         'pib_date' => $now->addDay(1),
         'doc_type' => 'Karantina',
         'lpn' => '32221',
         'front_cont' => 'MA3123',
         'back_cont' => 'DF98655',
         'rpm' => 'No Alarm',
         'cont_weight' => '12000',
         'status' => 'Normal',
         'verified_by' => 'System',
         'created_at' => NOW(),
         'updated_at' => NOW()
      ]);
      Container::create([
         'date' => $now->addDay(1),
         'pib_no' => '39786',
         'pib_date' => $now->addDay(1),
         'doc_type' => 'Karantina',
         'lpn' => '554355',
         'front_cont' => 'ED4235',
         'back_cont' => 'QP22341',
         'rpm' => 'No Alarm',
         'cont_weight' => '9000',
         'status' => 'Normal',
         'verified_by' => 'System',
         'created_at' => NOW(),
         'updated_at' => NOW()
      ]);
      Container::create([
         'date' => $now->addDay(1),
         'pib_no' => '7767567',
         'pib_date' => $now->addDay(1),
         'doc_type' => 'Karantina',
         'lpn' => '87231',
         'front_cont' => 'ST6234324',
         'back_cont' => 'JHG31244',
         'rpm' => 'No Alarm',
         'cont_weight' => '5000',
         'status' => 'Normal',
         'verified_by' => 'System',
         'created_at' => NOW(),
         'updated_at' => NOW()
      ]);
      Container::create([
         'date' => $now->addDay(1),
         'pib_no' => '7767567',
         'pib_date' => $now->addDay(1),
         'doc_type' => 'Karantina',
         'lpn' => '87231',
         'front_cont' => 'ST6234324',
         'back_cont' => 'JHG31244',
         'rpm' => 'No Alarm',
         'cont_weight' => '5000',
         'status' => 'Normal',
         'verified_by' => 'System',
         'created_at' => NOW(),
         'updated_at' => NOW()
      ]);
      Container::create([
         'date' => $now->addDay(2),
         'pib_no' => '087423',
         'pib_date' => $now->addDay(1),
         'doc_type' => 'Karantina',
         'lpn' => '4324',
         'front_cont' => 'GK73242',
         'back_cont' => 'XD43242',
         'rpm' => 'No Alarm',
         'cont_weight' => '6700',
         'status' => 'Normal',
         'verified_by' => 'System',
         'created_at' => NOW(),
         'updated_at' => NOW()
      ]);
      Container::create([
         'date' => $now->addDay(2),
         'pib_no' => '663424',
         'pib_date' => $now->addDay(2),
         'doc_type' => 'Karantina',
         'lpn' => '7657',
         'front_cont' => 'SP238742',
         'back_cont' => 'JH10314',
         'rpm' => 'No Alarm',
         'cont_weight' => '8700',
         'status' => 'Normal',
         'verified_by' => 'System',
         'created_at' => NOW(),
         'updated_at' => NOW()
      ]);
      Container::create([
         'date' => $now->addDay(2),
         'pib_no' => '17734',
         'pib_date' => $now->addDay(1),
         'doc_type' => 'Karantina',
         'lpn' => '444535',
         'front_cont' => 'AW53453',
         'back_cont' => 'OIJ42343',
         'rpm' => 'No Alarm',
         'cont_weight' => '5600',
         'status' => 'Normal',
         'verified_by' => 'System',
         'created_at' => NOW(),
         'updated_at' => NOW()
      ]);
   }
}
