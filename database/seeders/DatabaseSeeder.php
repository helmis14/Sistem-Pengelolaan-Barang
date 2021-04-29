<?php

namespace Database\Seeders;

use App\Models\Categorie;
use App\Models\Product;
use App\Models\Brand;
use App\Models\Pegawai;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $limit = 100;

        Role::create(['name' => 'admin']);
        Role::create(['name' => 'user']);
        Role::create(['name' => 'pegawai']);

        // Admin
        User::create([
            'name' => 'Admin Unsur',
            'username' => 'Admin Unsur',
            'email' => 'admin@unsur.com',
            'photo' => 'default.png',
            'password' => Hash::make(123456)
        ])->roles()->attach(Role::find(1));

        // user
        User::create([
            'name' => 'User Unsur',
            'username' => 'User Unsur',
            'email' => 'user@unsur.com',
            'photo' => 'default.png',
            'password' => Hash::make(123456)
        ])->roles()->attach(Role::find(2));


        User::create([
            'name' => 'Pegawai Unsur',
            'username' => 'Pegawai Unsur',
            'email' => 'pegawai@unsur.com',
            'photo' => 'default.png',
            'password' => Hash::make(123456)
        ])->roles()->attach(Role::find(3));

        foreach (range(1, $limit) as $index) {

            Categorie::create([
                'name' => $faker->realText($maxNbChars = 20, $indexSize = 2),
            ]);

            Brand::create([
                'name' => $faker->realText($maxNbChars = 20, $indexSize = 2),
            ]);
        };

        foreach (range(1, $limit) as $index) {
            Product::create([
                'name' => $faker->realText($maxNbChars = 20, $indexSize = 2),
                'qty' => $faker->numberBetween($min = 1, $max = 9999),
                'price' => $faker->numberBetween($min = 10000, $max = 999999),
                'merk_id' => $faker->numberBetween($min = 1, $max = $limit),
                'categories_id' => $faker->numberBetween($min = 1, $max = $limit),
                'supplier_id' => $faker->numberBetween($min = 1, $max = $limit),
            ]);
        };
    }
}
