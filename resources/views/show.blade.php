@extends('layouts.template')

@section('title', 'Bievenido al panel')

@section('scripts')
    <script src="../resources/js/panel.js"></script>
@endsection

@section('content')
    <a href="{{ route('panel.index') }}">Volver al panel</a><br><br>

    <style>
        img{
            height: 150px;
        }
    </style>

    <table border="0" style="background: gainsboro">
        <caption style="text-align: left">Equipo</caption>
        <tr>
            <td>equipo_marca: </td><td>{{ $specLaptop->equipo_marca}}</td>
        </tr>
        <tr>
            <td>equipo_linea: </td><td>{{ $specLaptop->equipo_linea}}</td>
        </tr>
        <tr>
            <td>equipo_modelo: </td><td>{{ $specLaptop->equipo_modelo}}</td>
        </tr>
    </table><br>

    <table border="0" style="background: gainsboro">
        <caption style="text-align: left">Características del producto</caption>
        <tr>
            <td>sku: </td><td>{{ $specLaptop->product->sku }}</td>
        </tr>
        <tr>
            <td>price: </td><td>$ {{ $specLaptop->product->price }}</td>
        </tr>
        <tr>
            <td>price_discount: </td><td>$ {{ $specLaptop->product->price_discount }}</td>
        </tr>
        <tr>
            <td>status_usage: </td><td>{{ $specLaptop->product->status_usage }}</td>
        </tr>
        <tr>
            <td>status_usage: </td><td>{{ $specLaptop->product->status_aesthetic }}</td>
        </tr>
        <tr>
            <td>warranty_days: </td><td>{{ $specLaptop->product->warranty_days }}</td>
        </tr>
        <tr>
            <td>support: </td><td>{{ $specLaptop->product->support }}</td>
        </tr>
        <tr>
            <td>delivery: </td><td>{{ $specLaptop->product->delivery }}</td>
        </tr>
        <tr>
            <td>image_1: </td><td><img src="{{ asset($specLaptop->product->file->image_1) }}"></td>
        </tr>
        <tr>
            <td>image_2: </td><td><img src="{{ asset($specLaptop->product->file->image_2) }}"></td>
        </tr>
        <tr>
            <td>image_3: </td><td><img src="{{ asset($specLaptop->product->file->image_3) }}"></td>
        </tr>
        <tr>
            <td>image_4: </td><td><img src="{{ asset($specLaptop->product->file->image_4) }}"></td>
        </tr>
        <tr>
            <td>image_5: </td><td><img src="{{ asset($specLaptop->product->file->image_5) }}"></td>
        </tr>
        <tr>
            <td>image_6: </td><td><img src="{{ asset($specLaptop->product->file->image_6) }}"></td>
        </tr>
        <tr>
            <td>image_7: </td><td><img src="{{ asset($specLaptop->product->file->image_7) }}"></td>
        </tr>
        <tr>
            <td>Stock</td><td>{{ $specLaptop->product->inventory->stock }}</td>
        </tr>
    </table><br>

    <table border="0" style="background: gainsboro">
        <caption style="text-align: left">Especificaciones del producto</caption>
        <tr>
            <td>ram_gb: </td><td>{{ $specLaptop->ram_gb }} GB</td>
        </tr>
        <tr>
            <td>ram_tipo: </td><td>{{ $specLaptop->ram_tipo }}</td>
        </tr>
        <tr>
            <td>discod_gb: </td><td>{{ $specLaptop->discod_gb }} GB</td>
        </tr>
        <tr>
            <td>discod_tipo: </td><td>{{ $specLaptop->discod_tipo }}</td>
        </tr>
        <tr>
            <td>procesador_marca: </td><td>{{ $specLaptop->procesador_marca }}</td>
        </tr>
        <tr>
            <td>procesador_modelo: </td><td>{{ $specLaptop->procesador_modelo }}</td>
        </tr>
        <tr>
            <td>procesador_gen: </td><td>{{ $specLaptop->procesador_gen }}</td>
        </tr>
        <tr>
            <td>procesador_mhz: </td><td>{{ $specLaptop->procesador_mhz }}</td>
        </tr>
        <tr>
            <td>procesador_nucleos: </td><td>{{ $specLaptop->procesador_nucleos }}</td>
        </tr>
        <tr>
            <td>tarjetag: </td><td>{{ $specLaptop->tarjetag }}</td>
        </tr>
        <tr>
            <td>tarjetag_marca: </td><td>{{ $specLaptop->tarjetag_marca }}</td>
        </tr>
        <tr>
            <td>tarjetag_modelo: </td><td>{{ $specLaptop->tarjetag_modelo }}</td>
        </tr>
        <tr>
            <td>tarjetag_tipomemoria: </td><td>{{ $specLaptop->tarjetag_tipomemoria }}</td>
        </tr>
        <tr>
            <td>tarjetag_gb: </td><td>{{ $specLaptop->tarjetag_gb }} GB</td>
        </tr>
        <tr>
            <td>pantalla_tipo: </td><td>{{ $specLaptop->pantalla_tipo }}</td>
        </tr>
        <tr>
            <td>pantalla_tamano: </td><td>{{ $specLaptop->pantalla_tamano }} "</td>
        </tr>
        <tr>
            <td>pantalla_tactil: </td><td>{{ $specLaptop->pantalla_tactil }}</td>
        </tr>
        <tr>
            <td>pantalla_resolucion</td><td>{{ $specLaptop->pantalla_resolucion }}</td>
        </tr>
        <tr>
            <td>taclado_idioma: </td><td>{{ $specLaptop->teclado_idioma }}</td>
        </tr>
        <tr>
            <td>taclado_retroi: </td><td>{{ $specLaptop->teclado_retroi }}</td>
        </tr>
        <tr>
            <td>teclado_num: </td><td>{{ $specLaptop->teclado_num }}</td>
        </tr>
        <tr>
            <td>conectv_usb2: </td><td>{{ $specLaptop->conectv_usb2 }}</td>
        </tr>
        <tr>
            <td>conectv_usb3: </td><td>{{ $specLaptop->conectv_usb3 }}</td>
        </tr>
        <tr>
            <td>conectv_usbc: </td><td>{{ $specLaptop->conectv_usbc }}</td>
        </tr>
        <tr>
            <td>conectv_wifi: </td><td>{{ $specLaptop->conectv_wifi }}</td>
        </tr>
        <tr>
            <td>conectv_bluetooth: </td><td>{{ $specLaptop->conectv_bluetooth }}</td>
        </tr>
        <tr>
            <td>conectv_hdmi: </td><td>{{ $specLaptop->conectv_hdmi }}</td>
        </tr>
        <tr>
            <td>conectv_hdmi: </td><td>{{ $specLaptop->conectv_hdmi }}</td>
        </tr>
        <tr>
            <td>conectv_vga: </td><td>{{ $specLaptop->conectv_vga }}</td>
        </tr>
        <tr>
            <td>conectv_displayp: </td><td>{{ $specLaptop->conectv_displayp }}</td>
        </tr>
        <tr>
            <td>conectv_ethernet: </td><td>{{ $specLaptop->conectv_ethernet }}</td>
        </tr>
        <tr>
            <td>conectv_serialcom: </td><td>{{ $specLaptop->conectv_serialcom }}</td>
        </tr>
        <tr>
            <td>conectv_ieee1394: </td><td>{{ $specLaptop->conectv_ieee1394 }}</td>
        </tr>
        <tr>
            <td>so: </td><td>{{ $specLaptop->so }}</td>
        </tr>
        <tr>
            <td>software_ad: </td><td>{{ $specLaptop->software_ad }}</td>
        </tr>
        <tr>
            <td>audiov_camara: </td><td>{{ $specLaptop->audiov_camara }}</td>
        </tr>
        <tr>
            <td>audiov_microfono: </td><td>{{ $specLaptop->audiov_microfono }}</td>
        </tr>
        <tr>
            <td>lectura_unidadoptica: </td><td>{{ $specLaptop->lectura_unidadoptica }}</td>
        </tr>
        <tr>
            <td>lectura_sd: </td><td>{{ $specLaptop->lectura_sd }}</td>
        </tr>
        <tr>
            <td>bateria_tipo: </td><td>{{ $specLaptop->bateria_tipo }}</td>
        </tr>
        <tr>
            <td>bateria_celdas: </td><td>{{ $specLaptop->bateria_celdas }}</td>
        </tr>
    </table><br>
    <a href="{{ route('panel.index') }}">Volver al panel</a><br><br>
@endsection