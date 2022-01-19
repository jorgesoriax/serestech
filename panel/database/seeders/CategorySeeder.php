<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoria = new Category();
        $categoria->name = "Laptop";
        $categoria->save();
        
        $categoria = new Category();
        $categoria->name = "Monitor";
        $categoria->save();

        $categoria = new Category();
        $categoria->name = "Disco duro";
        $categoria->save();
    }
}
