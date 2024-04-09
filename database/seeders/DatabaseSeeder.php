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

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'role_id'=>1
        ]);
        User::factory()->create([
            'name' => 'Saler User',
            'email' => 'saler@example.com',
            'role_id'=>2
        ]);
        User::factory(10)->create();




        Supplier::factory(10)->create();
        Product::factory(10)->create();


    }
}
