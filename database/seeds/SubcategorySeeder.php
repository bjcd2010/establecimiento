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
            'name' => 'Ninos Lan Center',
            'slug' => Str::slug('Ninos Lan Center'),
            'category_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Palao Lan Center',
            'slug' => Str::slug('Palao Lan Center'),
            'category_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Esquina Lan Center',
            'slug' => Str::slug('Esquina Lan Center'),
            'category_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Pollos a la Brasa Totos',
            'slug' => Str::slug('Pollos a la Brasa Totos'),
            'category_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Pollos a la Brasa El Gordo',
            'slug' => Str::slug('Pollos a la Brasa El Gordo'),
            'category_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Pollos a la Brasa Chicken',
            'slug' => Str::slug('Pollos a la Brasa Chicken'),
            'category_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Cevicheria Juanita',
            'slug' => Str::slug('Cevicheria Juanita'),
            'category_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Cevicheria La Segunda',
            'slug' => Str::slug('Cevicheria la Segunda'),
            'category_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Cevicheria Palao',
            'slug' => Str::slug('Cevicheria Palao'),
            'category_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Restaurant Jimmys',
            'slug' => Str::slug('Restaurant jimmys'),
            'category_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Restaurant Palao',
            'slug' => Str::slug('restaurant palao'),
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
            'name' => 'chifa POn tu',
            'slug' => Str::slug('chifa pon tu'),
            'category_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subcategories')->insert([
            'name' => 'chifa Sta. mercedes',
            'slug' => Str::slug('chifa sta. mercedes'),
            'category_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        
    }
}
