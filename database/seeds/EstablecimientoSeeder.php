<?php

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstablecimientoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('establecimientos')->insert([
            'name' => 'Ninos lan center',
            'image' => 'dota.png',
            'address'=> 'Av. Sta. Mercedes 165 - 2do Piso',
            'Urbanization' => 'Palao',
            'lat' => 10000,
            'lng' => -10000,
            'phone'=> '922400079',
            'description'=> 'cabina de Internet - lan center',
            'open'=> '10:00',
            'close' => '23:00',
            'subcategory_id' => 1,
            'uuid' => 1,
            'user_id'=>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('establecimientos')->insert([
            'name' => 'Ninos pollos y parillas',
            'image' => 'pollos.png',
            'address'=> 'Av. Sta. Mercedes 165 - 2do Piso',
            'Urbanization' => 'Palao',
            'lat' => 10000,
            'lng' => -10000,
            'phone'=> '922400079',
            'description'=> 'pollerría a la brasa y parrillas',
            'open'=> '10:00',
            'close' => '23:00',
            'subcategory_id' => 4,
            'uuid' => 1,
            'user_id'=>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('establecimientos')->insert([
            'name' => 'Botica Ninos',
            'image' => 'botica.png',
            'address'=> 'Av. Sta. Mercedes 165 - 2do Piso',
            'Urbanization' => 'Palao',
            'lat' => 10000,
            'lng' => -10000,
            'phone'=> '922400079',
            'description'=> 'botica mi salud',
            'open'=> '10:00',
            'close' => '23:00',
            'subcategory_id' => 13,
            'uuid' => 1,
            'user_id'=>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }


    
           
}
