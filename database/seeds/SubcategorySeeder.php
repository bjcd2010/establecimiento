<?php

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subcategories')->insert([
            'name' => 'Internet - Lan Center',
            'slug' => Str::slug('internet Lan Center'),
            'category_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Bares',
            'slug' => Str::slug('bares'),
            'category_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Discotekas',
            'slug' => Str::slug('discotekas'),
            'category_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Pollos a la Brasa',
            'slug' => Str::slug('Pollos a la Brasa'),
            'category_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Chifa',
            'slug' => Str::slug('chifa'),
            'category_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Pizzería',
            'slug' => Str::slug('pizzeria'),
            'category_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Cevicheria',
            'slug' => Str::slug('Cevicheria'),
            'category_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Chicharrón',
            'slug' => Str::slug('chicharron'),
            'category_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Restaurant criollo',
            'slug' => Str::slug('restaurant criollo'),
            'category_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Restaurant Vegano',
            'slug' => Str::slug('Restaurant vegano'),
            'category_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Anticuchos - Pancitas',
            'slug' => Str::slug('anticuchos pancitas'),
            'category_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subcategories')->insert([
            'name' => 'caldo de gallina chifa',
            'slug' => Str::slug('caldo de gallina chifa'),
            'category_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Farmacias',
            'slug' => Str::slug('farmacias'),
            'category_id' => 3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Posta Médica',
            'slug' => Str::slug('posta medica'),
            'category_id' => 3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Podología',
            'slug' => Str::slug('podologia'),
            'category_id' => 3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        
    }
}
