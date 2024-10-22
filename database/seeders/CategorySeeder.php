<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'electronics',
                'description' => 'devices and gadgets'
            ],
            [
                'name' => 'books',
                'description' => 'books and literature'
            ],
            [
                'name' => 'clothing',
                'description' => 'apparel and accessories'
            ]
        ];

        foreach ($categories as $category) {
            Category::firstOrCreate( 
                //:: atajo a propiedades y métodos estáticos de una clase
                ['name' => $category['name']],
                ['description' => $category['description']]
            );
        }
    }
}
