<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Kategori;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::first() ?? User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);

        for ($i = 1; $i <= 10; $i++) {
            $product = Product::create([
                'user_id' => $user->id,
                'name' => "Gadget Premium $i",
                'qty' => rand(5, 50),
                'price' => rand(2000000, 15000000),
            ]);

            Kategori::create([
                'product_id' => $product->id,
                'name' => "Kategori Elektronik $i",
            ]);
        }
    }
}
