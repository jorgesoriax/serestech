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
        $inventory->quantity = 123;
        $inventory->save();

        $inventory = new Inventory();
        $inventory->quantity = 456;
        $inventory->save();

        $inventory = new Inventory();
        $inventory->quantity = 789;
        $inventory->save();
    }
}
