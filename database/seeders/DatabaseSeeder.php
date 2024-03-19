<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Product;
use App\Models\Role;
use App\Models\Storage;
use App\Models\Supplier;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
        ]);
        Storage::factory(10)->create();
        User::factory(10)->create();

        User::factory()->create([
             'name' => 'Test User',
             'email' => 'test@example.com',
         ]);


        Supplier::factory(10)->create();
        Product::factory(10)->create();


    }
}
