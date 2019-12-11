<?php

use Illuminate\Database\Seeder;

class BrandsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
            'name' => 'Audi',
            'created_at' => date("2019-01-01 08:00:00"),
            'updated_at' => date("2019-01-01 08:00:00"),
        ]);

        DB::table('brands')->insert([
            'name' => 'Bentley',
            'created_at' => date("2019-01-01 08:00:00"),
            'updated_at' => date("2019-01-01 08:00:00"),
        ]);
 
        DB::table('brands')->insert([
            'name' => 'Buick',
            'created_at' => date("2019-01-01 08:00:00"),
            'updated_at' => date("2019-01-01 08:00:00"),
        ]);

        DB::table('brands')->insert([
            'name' => 'BMW',
            'created_at' => date("2019-01-01 08:00:00"),
            'updated_at' => date("2019-01-01 08:00:00"),
        ]);

        DB::table('brands')->insert([
            'name' => 'Cadillac',
            'created_at' => date("2019-01-01 08:00:00"),
            'updated_at' => date("2019-01-01 08:00:00"),
        ]);

        DB::table('brands')->insert([
            'name' => 'Chrysler',
            'created_at' => date("2019-01-01 08:00:00"),
            'updated_at' => date("2019-01-01 08:00:00"),
        ]);

        DB::table('brands')->insert([
            'name' => 'Jaguar',
            'created_at' => date("2019-01-01 08:00:00"),
            'updated_at' => date("2019-01-01 08:00:00"),
        ]);

        DB::table('brands')->insert([
            'name' => 'Lexus',
            'created_at' => date("2019-01-01 08:00:00"),
            'updated_at' => date("2019-01-01 08:00:00"),
        ]);

        DB::table('brands')->insert([
            'name' => 'Maserati',
            'created_at' => date("2019-01-01 08:00:00"),
            'updated_at' => date("2019-01-01 08:00:00"),
        ]);

        DB::table('brands')->insert([
            'name' => 'Mercedes-Benz',
            'created_at' => date("2019-01-01 08:00:00"),
            'updated_at' => date("2019-01-01 08:00:00"),
        ]);

        DB::table('brands')->insert([
            'name' => 'Porsche',
            'created_at' => date("2019-01-01 08:00:00"),
            'updated_at' => date("2019-01-01 08:00:00"),
        ]);

        DB::table('brands')->insert([
            'name' => 'Volvo',
            'created_at' => date("2019-01-01 08:00:00"),
            'updated_at' => date("2019-01-01 08:00:00"),
        ]);

    }
}
