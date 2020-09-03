<?php

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Patio de Comida',
            'slug' => Str::slug('patio de comidas'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('categories')->insert([
            'name' => 'Entretenimiento',
            'slug' => Str::slug('entretenimiento'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        
        DB::table('categories')->insert([
            'name' => 'Salud',
            'slug' => Str::slug('salud'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('categories')->insert([
            'name' => 'Servicios',
            'slug' => Str::slug('servicios'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('categories')->insert([
            'name' => 'Belleza',
            'slug' => Str::slug('belleza'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('categories')->insert([
            'name' => 'Moda',
            'slug' => Str::slug('moda'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('categories')->insert([
            'name' => 'Hogar',
            'slug' => Str::slug('hogar'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

    }
}
