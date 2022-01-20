<?php

namespace Database\Seeders;

use App\Models\Inventory;
use Illuminate\Database\Seeder;

class InventorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $inventory = new Inventory();
            $inventory->stock = 2;
        $inventory->save();

        $inventory = new Inventory();
            $inventory->stock = 5;
        $inventory->save();

        $inventory = new Inventory();
            $inventory->stock = 0;
        $inventory->save();
    }
}
