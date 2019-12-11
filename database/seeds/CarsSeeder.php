<?php

use Illuminate\Database\Seeder;

class CarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cars')->insert([
            'brand_id' => 1,
            'car_model_id' => 1,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'year' => 2018,
            'price_usd' => 88000,
            'image' => 'cars/audi_q3_2018.jpg',
            'status' => 1,
            'rating' => 5,
            'created_at' => date("2019-01-01 08:00:00"),
            'updated_at' => date("2019-01-01 08:00:00"),
        ]);

        DB::table('cars')->insert([
            'brand_id' => 1,
            'car_model_id' => 2,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'year' => 2017,
            'price_usd' => 90000,
            'image' => 'cars/audi_q5_2017.jpg',
            'status' => 1,
            'rating' => 5,
            'created_at' => date("2019-01-01 08:00:00"),
            'updated_at' => date("2019-01-01 08:00:00"),
        ]);

        DB::table('cars')->insert([
            'brand_id' => 1,
            'car_model_id' => 2,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'year' => 2019,
            'price_usd' => 92000,
            'image' => 'cars/audi_q5_2019.jpg',
            'status' => 1,
            'rating' => 5,
            'created_at' => date("2019-01-01 08:00:00"),
            'updated_at' => date("2019-01-01 08:00:00"),
        ]);

        DB::table('cars')->insert([
            'brand_id' => 1,
            'car_model_id' => 3,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'year' => 2017,
            'price_usd' => 110000,
            'image' => 'cars/audi_q7_2017.jpg',
            'status' => 0,
            'rating' => 3,
            'created_at' => date("2019-01-01 08:00:00"),
            'updated_at' => date("2019-01-01 08:00:00"),
        ]);

        DB::table('cars')->insert([
            'brand_id' => 1,
            'car_model_id' => 4,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'year' => 2016,
            'price_usd' => 98000,
            'image' => 'cars/audi_a6_quattro_2016.jpg',
            'status' => 0,
            'rating' => 4,
            'created_at' => date("2019-01-01 08:00:00"),
            'updated_at' => date("2019-01-01 08:00:00"),
        ]);

        DB::table('cars')->insert([
            'brand_id' => 1,
            'car_model_id' => 5,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'year' => 2016,
            'price_usd' => 130000,
            'image' => 'cars/audi_r8_2016.jpg',
            'status' => 0,
            'rating' => 3,
            'created_at' => date("2019-01-01 08:00:00"),
            'updated_at' => date("2019-01-01 08:00:00"),
        ]);

        DB::table('cars')->insert([
            'brand_id' => 1,
            'car_model_id' => 3,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'year' => 2015,
            'price_usd' => 90000,
            'image' => 'cars/audi_q7_2015.jpg',
            'status' => 0,
            'rating' => 4,
            'created_at' => date("2019-01-01 08:00:00"),
            'updated_at' => date("2019-01-01 08:00:00"),
        ]);

        DB::table('cars')->insert([
            'brand_id' => 2,
            'car_model_id' => 6,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'year' => 2014,
            'price_usd' => 140000,
            'image' => 'cars/bentley_continental_gt_speed_2014.jpg',
            'status' => 0,
            'rating' => 3,
            'created_at' => date("2019-01-01 08:00:00"),
            'updated_at' => date("2019-01-01 08:00:00"),
        ]);
        
        DB::table('cars')->insert([
            'brand_id' => 4,
            'car_model_id' => 7,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'year' => 2016,
            'price_usd' => 80000,
            'image' => 'cars/bmw_750li_2016.jpg',
            'status' => 0,
            'rating' => 4,
            'created_at' => date("2019-01-01 08:00:00"),
            'updated_at' => date("2019-01-01 08:00:00"),
        ]);

        DB::table('cars')->insert([
            'brand_id' => 4,
            'car_model_id' => 8,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'year' => 2014,
            'price_usd' => 133000,
            'image' => 'cars/bmw_m8_2014.jpg',
            'status' => 0,
            'rating' => 4,
            'created_at' => date("2019-01-01 08:00:00"),
            'updated_at' => date("2019-01-01 08:00:00"),
        ]);

        DB::table('cars')->insert([
            'brand_id' => 7,
            'car_model_id' => 9,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'year' => 2017,
            'price_usd' => 99000,
            'image' => 'cars/jaguar_xj_2017.jpg',
            'status' => 0,
            'rating' => 3,
            'created_at' => date("2019-01-01 08:00:00"),
            'updated_at' => date("2019-01-01 08:00:00"),
        ]);

        DB::table('cars')->insert([
            'brand_id' => 12,
            'car_model_id' => 10,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'year' => 2016,
            'price_usd' => 89000,
            'image' => 'cars/volvo_s60_2016.jpg',
            'status' => 0,
            'rating' => 3,
            'created_at' => date("2019-01-01 08:00:00"),
            'updated_at' => date("2019-01-01 08:00:00"),
        ]);

        DB::table('cars')->insert([
            'brand_id' => 12,
            'car_model_id' => 11,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'year' => 2016,
            'price_usd' => 89000,
            'image' => 'cars/volvo_s90_2016.jpg',
            'status' => 0,
            'rating' => 4,
            'created_at' => date("2019-01-01 08:00:00"),
            'updated_at' => date("2019-01-01 08:00:00"),
        ]);

        DB::table('cars')->insert([
            'brand_id' => 12,
            'car_model_id' => 12,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'year' => 2016,
            'price_usd' => 93000,
            'image' => 'cars/volvo_s90_2016.jpg',
            'status' => 0,
            'rating' => 5,
            'created_at' => date("2019-01-01 08:00:00"),
            'updated_at' => date("2019-01-01 08:00:00"),
        ]);

        DB::table('cars')->insert([
            'brand_id' => 12,
            'car_model_id' => 13,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'year' => 2017,
            'price_usd' => 92000,
            'image' => 'cars/volvo_xc60_2017.jpg',
            'status' => 1,
            'rating' => 5,
            'created_at' => date("2019-01-01 08:00:00"),
            'updated_at' => date("2019-01-01 08:00:00"),
        ]);

        DB::table('cars')->insert([
            'brand_id' => 12,
            'car_model_id' => 13,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'year' => 2018,
            'price_usd' => 99000,
            'image' => 'cars/volvo_xc60_2018.jpg',
            'status' => 1,
            'rating' => 5,
            'created_at' => date("2019-01-01 08:00:00"),
            'updated_at' => date("2019-01-01 08:00:00"),
        ]);

    }
}