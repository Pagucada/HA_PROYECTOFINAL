<?php

use Illuminate\Database\Seeder;

class CarModelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('car_models')->insert([
            'name' => 'Q3',
            'brand_id' => 1,
            'created_at' => date("2019-01-01 08:00:00"),
            'updated_at' => date("2019-01-01 08:00:00"),
        ]);

        DB::table('car_models')->insert([
            'name' => 'Q5',
            'brand_id' => 1,
            'created_at' => date("2019-01-01 08:00:00"),
            'updated_at' => date("2019-01-01 08:00:00"),
        ]);

        DB::table('car_models')->insert([
            'name' => 'Q7',
            'brand_id' => 1,
            'created_at' => date("2019-01-01 08:00:00"),
            'updated_at' => date("2019-01-01 08:00:00"),
        ]);

        DB::table('car_models')->insert([
            'name' => 'A6 Quattro',
            'brand_id' => 1,
            'created_at' => date("2019-01-01 08:00:00"),
            'updated_at' => date("2019-01-01 08:00:00"),
        ]);

        DB::table('car_models')->insert([
            'name' => 'R8',
            'brand_id' => 1,
            'created_at' => date("2019-01-01 08:00:00"),
            'updated_at' => date("2019-01-01 08:00:00"),
        ]);

        DB::table('car_models')->insert([
            'name' => 'Continental GT Speed',
            'brand_id' => 2,
            'created_at' => date("2019-01-01 08:00:00"),
            'updated_at' => date("2019-01-01 08:00:00"),
        ]);

        DB::table('car_models')->insert([
            'name' => '750Li',
            'brand_id' => 4,
            'created_at' => date("2019-01-01 08:00:00"),
            'updated_at' => date("2019-01-01 08:00:00"),
        ]);

        DB::table('car_models')->insert([
            'name' => 'M8',
            'brand_id' => 4,
            'created_at' => date("2019-01-01 08:00:00"),
            'updated_at' => date("2019-01-01 08:00:00"),
        ]);
        
        DB::table('car_models')->insert([
            'name' => 'XJ',
            'brand_id' => 7,
            'created_at' => date("2019-01-01 08:00:00"),
            'updated_at' => date("2019-01-01 08:00:00"),
        ]);

        DB::table('car_models')->insert([
            'name' => 'S60',
            'brand_id' => 12,
            'created_at' => date("2019-01-01 08:00:00"),
            'updated_at' => date("2019-01-01 08:00:00"),
        ]);

        DB::table('car_models')->insert([
            'name' => 'XC90',
            'brand_id' => 12,
            'created_at' => date("2019-01-01 08:00:00"),
            'updated_at' => date("2019-01-01 08:00:00"),
        ]);

        DB::table('car_models')->insert([
            'name' => 'S90',
            'brand_id' => 12,
            'created_at' => date("2019-01-01 08:00:00"),
            'updated_at' => date("2019-01-01 08:00:00"),
        ]);

        DB::table('car_models')->insert([
            'name' => 'XC60',
            'brand_id' => 12,
            'created_at' => date("2019-01-01 08:00:00"),
            'updated_at' => date("2019-01-01 08:00:00"),
        ]);

    }
}