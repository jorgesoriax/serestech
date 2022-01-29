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
            $product->sku               = "WEBU7D23OR";
            $product->price             = "6574";
            $product->price_discount    = "5300";
            $product->status_usage      = "Nuevo";
            $product->status_aesthetics = 9;
            $product->warranty_days     = 60;
            $product->support           = "1 mes de soporte remoto sin costo";
            $product->delivery          = "Entrega a domicilio de inmediato";
            $product->image_1           = "url/img1a.jpg";
            $product->image_2           = "url/img2a.jpg";
            $product->image_3           = "url/img3a.jpg";
            $product->image_4           = "url/img4a.jpg";
            $product->image_5           = "url/img5a.jpg";
            $product->image_6           = "url/img6a.jpg";
            $product->image_7           = "url/img7a.jpg";
            $product->category_id       = 1;
            $product->inventory_id      = 1;
        $product->save();

        $product = new Product();
            $product->sku               = "L2SUII5TF4";
            $product->price             = "5600";
            $product->price_discount    = "4300";
            $product->status_usage      = "Seminuevo";
            $product->status_aesthetics = 8;
            $product->warranty_days     = 120;
            $product->support           = "2 meses de soporte remoto sin costo";
            $product->delivery          = "Entrega a domicilio de inmediato";
            $product->image_1           = "url/img1a.jpg";
            $product->image_2           = "url/img2a.jpg";
            $product->image_3           = "url/img3a.jpg";
            $product->image_4           = "url/img4a.jpg";
            $product->image_5           = "url/img5a.jpg";
            $product->image_6           = "url/img6a.jpg";
            $product->image_7           = "url/img7a.jpg";
            $product->category_id       = 1;
            $product->inventory_id      = 2;
        $product->save();

        $product = new Product();
            $product->sku               = "AVDHLMF3CK";
            $product->price             = "15300";
            $product->price_discount    = "12000";
            $product->status_usage      = "Nuevo";
            $product->status_aesthetics = 10;
            $product->warranty_days     = 180;
            $product->support           = "3 meses de soporte remoto sin costo";
            $product->delivery          = "Entrega a domicilio de inmediato";
            $product->image_1           = "url/img1a.jpg";
            $product->image_2           = "url/img2a.jpg";
            $product->image_3           = "url/img3a.jpg";
            $product->image_4           = "url/img4a.jpg";
            $product->image_5           = "url/img5a.jpg";
            $product->image_6           = "url/img6a.jpg";
            $product->image_7           = "url/img7a.jpg";
            $product->category_id       = 1;
            $product->inventory_id      = 3;
        $product->save();
    }
}
