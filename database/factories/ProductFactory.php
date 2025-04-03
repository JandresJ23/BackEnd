<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product; // Asegúrate de importar el modelo

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'price' => $this->faker->randomFloat(2, 10000, 3000000), 
            'category_id' => \App\Models\Category::inRandomOrder()->first()->id ?? 1, 
            'url_image'=> fake()->imageUrl(640,400,'products',true),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
