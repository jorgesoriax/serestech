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
            $specification->equipo_marca         = "Lenovo";
            $specification->equipo_linea         = "MateBook";
            $specification->equipo_modelo        = "D15";
            $specification->ram_gb               = 8;
            $specification->ram_tipo             = "DDR4";
            $specification->discod_gb            = "256 GB";
            $specification->discod_tipo          = "SSD";
            $specification->procesador_marca     = "Intel";
            $specification->procesador_modelo    = "10110U";
            $specification->procesador_gen       = "3era";
            $specification->procesador_mhz       = 4.1;
            $specification->procesador_nucleos   = 3;
            $specification->tarjetag             = 1;
            $specification->tarjetag_marca       = "Intel UHD";
            $specification->tarjetag_modelo      = "Graphics 620";
            $specification->tarjetag_tipomemoria = "DDR5";
            $specification->tarjetag_gb          = 2;
            $specification->pantalla_tipo        = "LCD";
            $specification->pantalla_tamano      = 15.6;
            $specification->pantalla_tactil      = 1;
            $specification->teclado_idioma       = "Español";
            $specification->teclado_retroi       = 0;
            $specification->teclado_num          = 1;
            $specification->conectv_usb2         = "1";
            $specification->conectv_usb3         = "2";
            $specification->conectv_usbc         = "3";
            $specification->conectv_wifi         = 1;
            $specification->conectv_bluetooth    = 0;
            $specification->conectv_jack         = 0;
            $specification->conectv_hdmi         = 1;
            $specification->conectv_vga          = 0;
            $specification->conectv_displayp     = 1;
            $specification->conectv_ethernet     = 0;
            $specification->conectv_serialcom    = 0;
            $specification->conectv_ieee1394     = 1;
            $specification->so                   = "Windows 10 Home";
            $specification->software_ad          = "Lorem ipsum dolor sit amet. Qui voluptatem velit sit porro molestias qui asperiores maxime et minus earum aut autem voluptas hic molestias nihil ";
            $specification->audiov_camara        = 1;
            $specification->audiov_microfono     = 0;
            $specification->lectura_unidadoptica = 0;
            $specification->lectura_sd           = 1;
            $specification->bateria_tipo         = "ION-LITIO";
            $specification->bateria_celdas       = 6;
            $specification->product_id           = 1;
        $specification->save();

        $specification = new SpecificationsLaptop();
            $specification->equipo_marca         = "Lenovo";
            $specification->equipo_linea         = "MateBook";
            $specification->equipo_modelo        = "D15";
            $specification->ram_gb               = 4;
            $specification->ram_tipo             = "DDR4";
            $specification->discod_gb            = "500 GB";
            $specification->discod_tipo          = "SSD";
            $specification->procesador_marca     = "Intel";
            $specification->procesador_modelo    = "10110U";
            $specification->procesador_gen       = "3era";
            $specification->procesador_mhz       = 4.1;
            $specification->procesador_nucleos   = 3;
            $specification->tarjetag             = 1;
            $specification->tarjetag_marca       = "Intel UHD";
            $specification->tarjetag_modelo      = "Graphics 620";
            $specification->tarjetag_tipomemoria = "DDR5";
            $specification->tarjetag_gb          = 2;
            $specification->pantalla_tipo        = "LCD";
            $specification->pantalla_tamano      = 15.6;
            $specification->pantalla_tactil      = 1;
            $specification->teclado_idioma       = "Español";
            $specification->teclado_retroi       = 0;
            $specification->teclado_num          = 1;
            $specification->conectv_usb2         = 1;
            $specification->conectv_usb3         = 1;
            $specification->conectv_usbc         = 1;
            $specification->conectv_wifi         = 1;
            $specification->conectv_bluetooth    = 0;
            $specification->conectv_jack         = 0;
            $specification->conectv_hdmi         = 1;
            $specification->conectv_vga          = 0;
            $specification->conectv_displayp     = 1;
            $specification->conectv_ethernet     = 0;
            $specification->conectv_serialcom    = 0;
            $specification->conectv_ieee1394     = 1;
            $specification->so                   = "Windows 10 Home";
            $specification->software_ad          = "Lorem ipsum dolor sit amet. Qui voluptatem velit sit porro molestias qui asperiores maxime et minus earum aut autem voluptas hic molestias nihil ";
            $specification->audiov_camara        = 1;
            $specification->audiov_microfono     = 0;
            $specification->lectura_unidadoptica = 0;
            $specification->lectura_sd           = 1;
            $specification->bateria_tipo         = "ION-LITIO";
            $specification->bateria_celdas       = 6;
            $specification->product_id           = 2;
        $specification->save();

        $specification = new SpecificationsLaptop();
            $specification->equipo_marca         = "Chuwi";
            $specification->equipo_linea         = "HeroBook";
            $specification->equipo_modelo        = "Pro";
            $specification->ram_gb               = 8;
            $specification->ram_tipo             = "DDR4";
            $specification->discod_gb            = "1 TB";
            $specification->discod_tipo          = "SSD";
            $specification->procesador_marca     = "Intel";
            $specification->procesador_modelo    = "10110U";
            $specification->procesador_gen       = "2da";
            $specification->procesador_mhz       = 4.1;
            $specification->procesador_nucleos   = 3;
            $specification->tarjetag             = 0;
            $specification->tarjetag_marca       = "";
            $specification->tarjetag_modelo      = "";
            $specification->tarjetag_tipomemoria = "";
            $specification->tarjetag_gb          = 0;
            $specification->pantalla_tipo        = "LED";
            $specification->pantalla_tamano      = 15.6;
            $specification->pantalla_tactil      = 1;
            $specification->teclado_idioma       = "Inglés";
            $specification->teclado_retroi       = 0;
            $specification->teclado_num          = 1;
            $specification->conectv_usb2         = 0;
            $specification->conectv_usb3         = 2;
            $specification->conectv_usbc         = 3;
            $specification->conectv_wifi         = 0;
            $specification->conectv_bluetooth    = 0;
            $specification->conectv_jack         = 0;
            $specification->conectv_hdmi         = 1;
            $specification->conectv_vga          = 0;
            $specification->conectv_displayp     = 1;
            $specification->conectv_ethernet     = 0;
            $specification->conectv_serialcom    = 0;
            $specification->conectv_ieee1394     = 1;
            $specification->so                   = "Windows 11 Pro";
            $specification->software_ad          = "Winrar, Firefox, Microsoft Office 2011";
            $specification->audiov_camara        = 1;
            $specification->audiov_microfono     = 0;
            $specification->lectura_unidadoptica = 0;
            $specification->lectura_sd           = 1;
            $specification->bateria_tipo         = "ION-LITIO";
            $specification->bateria_celdas       = 6;
            $specification->product_id           = 3;
        $specification->save();


    }
}
