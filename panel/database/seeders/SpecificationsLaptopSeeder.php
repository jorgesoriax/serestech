<?php

namespace Database\Seeders;

use App\Models\SpecificationsLaptop;
use Illuminate\Database\Seeder;

class SpecificationsLaptopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $specification = new SpecificationsLaptop();
        $specification->name= "Laptop Dell";
        $specification->product_id = 1;
        $specification->save();

        $specification = new SpecificationsLaptop();
        $specification->name = "Monitor Acer";
        $specification->product_id = 2;
        $specification->save();

        $specification = new SpecificationsLaptop();
        $specification->name = "Disco Duro Kingston";
        $specification->product_id = 3;
        $specification->save();
    }
}
