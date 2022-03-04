@extends('layouts.template')
@section('title', 'Política de cookies')
@section('content')

{{-- <div class="aside box--ow-max menu"></div>
<div class="aside aside-r box--ow-max"></div> --}}

<div class="docs-container">
    <div class="header">
        <a href="{{ route('home.index') }}">
            <img src="{{ asset('storage/images/logo-large-b.svg') }}" alt="Logo SeresTech">
            <p>Volver a inicio</p>
        </a>
    </div>
    <div class="body">
        <h1>Política de cookies</h1>

        <h2 id="que-es-una-cookie">
            <a href="#que-es-una-cookie" class="permalink">¿Qué es una cookie?</a>
        </h2>
        <p>Las cookies son un fragmento de texto que los sitios que suele visitar almacenan en su navegador por un periodo de tiempo variable, estas permiten que los sitios recuerden su información técnica, como preferencias y contenido personalizados, estadísticas, sesiones, acceso a cuentas, etc. De esta forma, el contenido del sitio web se adapta a su perfil para ofrecer una experiencia mejorada.</p>
        <p>Podemos encontrar dos tipos de cookies:</p>
        <ul>
            <li><span>Cookies propias:</span> son creadas por el sitio web que visita y se muestran en la barra de direcciones.</li>
            <li><span>Cookies de terceros:</span> son creadas por sitios externos, los cuales brindan elementos que son insertados en el sitio web que visita.</li>
        </ul><br>

        <h2 id="cookies-empleadas">
            <a href="#cookies-empleadas" class="permalink">Cookies empleadas en este sitio</a>
        </h2>
        
        <h3>Cookies propias</h3>
        <p>Descripción de cookies</p>
        <div class="table-container table-container-100w">
            <table class="table-cookies">
                <thead>
                    <tr>
                        <th class="th-name">Nombre</th>
                        <th>Tipo</th>
                        <th>Caducidad</th>
                        <th>Origen</th>
                        <th>Descripción</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>XSRF-TOKEN</td>
                        <td>Técnica</td>
                        <td>1 día</td>
                        <td>Propio</td>
                        <td>Garantiza la seguridad de navegación de los visitantes al evitar la falsificación de solicitudes entre sitios.</td>
                    </tr>
                    <tr>
                        <td>laravel_session</td>
                        <td>Técnica</td>
                        <td>1 día</td>
                        <td>Propio</td>
                        <td>Esta cookie es utilizada al cargar o renovar el contenido del sitio web.</td>
                    </tr>
                    <tr>
                        <td>remember_web</td>
                        <td>Técnica</td>
                        <td>_pendiente</td>
                        <td>Propio</td>
                        <td>_pendiente</td>
                    </tr>
                    <tr>
                        <td>laravel_cookie_consent</td>
                        <td>Técnica</td>
                        <td>_pendiente</td>
                        <td>Propio</td>
                        <td>_pendiente</td>
                    </tr>
                </tbody>
            </table>
        </div><br>

        <h2 id="como-administrar-las-cookies">
            <a href="#como-administrar-las-cookies" class="permalink">Cómo administrar las cookies en su ordenador</a>
        </h2>
        <p>Usted puede permitir, bloquear o eliminar las cookies instaladas en su navegador mediante la configuración de su navegador o en la barra de direcciones de algunos navegadores al hacer clic sobre el icono <i class='bx bxs-lock-alt'></i> de la izquierda.</p>
        <p>Según su navegador, usted puede consultar cómo hacerlo:</p>
        <ul>
            <li><a href="https://support.google.com/chrome/answer/95647?hl=es" target="_blank" rel="noopener noreferrer">Google Chrome</a></li>
            <li><a href="https://support.mozilla.org/es/kb/habilitar-y-deshabilitar-cookies-sitios-web-rastrear-preferencias?redirectslug=habilitar-y-deshabilitar-cookies-que-los-sitios-we&redirectlocale=es" target="_blank" rel="noopener noreferrer">Mozilla Firefox</a></li>
            <li><a href="https://support.microsoft.com/es-es/Search/results?query=edge+cookies" target="_blank" rel="noopener noreferrer">Edge</a></li>
            <li><a href="https://support.apple.com/es-es/guide/safari/sfri11471/mac" target="_blank" rel="noopener noreferrer">Safari</a></li>
            <li><a href="https://support.apple.com/es-es/HT201265" target="_blank" rel="noopener noreferrer">Safari para iOS</a></li>
            <li><a href="https://support.google.com/chrome/answer/114662?hl=es&visit_id=637817611515940067-4242310704&rd=1" target="_blank" rel="noopener noreferrer">Chrome para Android</a></li>
        </ul>
        <br>
    </div>
</div>

@section('scripts')
@endsection
@endsection