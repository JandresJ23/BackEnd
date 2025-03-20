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
        $categoria_elec = new Category();  
        $categoria_elec->name = 'Electrónica';
        $categoria_elec->description = 'categoria de electrodomesticos';
        $categoria_elec->save();

        $categoria_elec = new Category();  
        $categoria_elec->name = 'ropa';
        $categoria_elec->description = 'categoria de ropa';
        $categoria_elec->save();
    }
}
