<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Image;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
//         User::factory(1)->create();

        Brand::factory(10)
            ->has(Product::factory()->count(3), 'products')
            ->create();


    }
}
