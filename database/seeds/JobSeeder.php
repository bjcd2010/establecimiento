<?php

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jobs')->insert([
            'name' => 'Vendedor',
            'description'=> 'Venta en mostrador',
            'pay'=> 2000.00,
            'image'=>'',
            'establecimiento_id'=>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('jobs')->insert([
            'name' => 'Vendedor',
            'description'=> 'Venta Delivery',
            'pay'=> 1500.00,
            'image'=>'',
            'establecimiento_id'=>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('jobs')->insert([
            'name' => 'Operario de Limpieza',
            'description'=> 'Limpieza de casa y oficinas',
            'pay'=> 2000.00,
            'image'=>'',
            'establecimiento_id'=>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        
        
        
    }
}
