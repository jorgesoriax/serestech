<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Product();
        $product->sku = "123";
        $product->price = "999";
        $product->discount_price = "999";
        $product->image_1 = "url/img1a.jpg";
        $product->image_2 = "url/img2a.jpg";
        $product->image_3 = "url/img3a.jpg";
        $product->image_4 = "url/img4a.jpg";
        $product->image_5 = "url/img5a.jpg";
        $product->image_6 = "url/img6a.jpg";
        $product->image_7 = "url/img7a.jpg";
        $product->category_id = 1;
        $product->inventory_id = 1;
        $product->save();

        $product = new Product();
        $product->sku = "456";
        $product->price = "999";
        $product->discount_price = "999";
        $product->image_1 = "url/img1b.jpg";
        $product->image_2 = "url/img2b.jpg";
        $product->image_3 = "url/img3b.jpg";
        $product->image_4 = "url/img4b.jpg";
        $product->image_5 = "url/img5b.jpg";
        $product->image_6 = "url/img6b.jpg";
        $product->image_7 = "url/img7b.jpg";
        $product->category_id = 2;
        $product->inventory_id = 2;
        $product->save();

        $product = new Product();
        $product->sku = "789";
        $product->price = "999";
        $product->discount_price = "999";
        $product->image_1 = "url/img1c.jpg";
        $product->image_2 = "url/img2c.jpg";
        $product->image_3 = "url/img3c.jpg";
        $product->image_4 = "url/img4c.jpg";
        $product->image_5 = "url/img5c.jpg";
        $product->image_6 = "url/img6c.jpg";
        $product->image_7 = "url/img7c.jpg";
        $product->category_id = 3;
        $product->inventory_id = 3;
        $product->save();
    }
}
