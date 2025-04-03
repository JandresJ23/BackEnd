<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CardItem;
use App\Models\CardItems;

class CardItemSeeder extends Seeder
{
    public function run()
    {
        CardItems::factory(20)->create(); 
    }
}
