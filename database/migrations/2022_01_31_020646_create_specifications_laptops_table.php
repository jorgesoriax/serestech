<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecificationsLaptopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('specifications_laptops', function (Blueprint $table) {
            $table->id();

            $table->string('equipo_marca', 45);
            $table->string('equipo_linea', 45);
            $table->string('equipo_modelo', 45);
            $table->integer('ram_gb');
            $table->string('ram_tipo', 45);
            $table->string('discod_gb', 45);
            $table->string('discod_tipo', 45);
            $table->string('procesador_marca', 45);
            $table->string('procesador_modelo', 45);
            $table->integer('procesador_gen');
            $table->float('procesador_ghz');
            $table->integer('procesador_nucleos');
            $table->boolean('tarjetag');
            $table->string('tarjetag_marca', 45)->nullable();
            $table->string('tarjetag_modelo', 45)->nullable();
            $table->string('tarjetag_tipomemoria', 45)->nullable();
            $table->integer('tarjetag_gb')->nullable();
            $table->string('pantalla_tipo', 45);
            $table->float('pantalla_tamano');
            $table->boolean('pantalla_tactil');
            $table->string('pantalla_resolucion', 45);
            $table->string('teclado_idioma', 45);
            $table->boolean('teclado_retroi', 45);
            $table->boolean('teclado_num', 45);
            $table->integer('conectv_usb2');
            $table->integer('conectv_usb3');
            $table->integer('conectv_usbc');
            $table->boolean('conectv_wifi');
            $table->boolean('conectv_bluetooth');
            $table->boolean('conectv_jack');
            $table->boolean('conectv_hdmi');
            $table->boolean('conectv_vga');
            $table->boolean('conectv_displayp');
            $table->boolean('conectv_ethernet');
            $table->boolean('conectv_serialcom');
            $table->boolean('conectv_ieee1394');
            $table->string('so', 45);
            $table->string('software_ad', 155);
            $table->boolean('audiov_camara');
            $table->boolean('audiov_microfono');
            $table->boolean('lectura_unidadoptica');
            $table->boolean('lectura_sd');
            $table->string('bateria_tipo', 45);
            $table->integer('bateria_celdas');

            // Product
            $table->foreignId('product_id')
                  ->unique()
                  ->constrained('products')
                  ->cascadeOnDelete()
                  ->cascadeOnUpdate();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('specifications_laptops');
    }
}
