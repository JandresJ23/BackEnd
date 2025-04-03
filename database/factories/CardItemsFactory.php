<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\CardItem;
use App\Models\CardItems;
use App\Models\User;
use App\Models\Product;

class CardItemFactory extends Factory
{
    protected $model = CardItems::class;

    public function definition()
    {
        return [
            'user_id' => User::inRandomOrder()->first()->id ?? 1, // Usuario aleatorio
            'product_id' => Product::inRandomOrder()->first()->id ?? 1, // Producto aleatorio
            'quantity' => $this->faker->numberBetween(1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
