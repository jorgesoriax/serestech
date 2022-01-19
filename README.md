## Tareas inmediatas

### OPTIMIZACIÓN
1. Cambiar formato de imagenes
2. Habilitar el consumo de API messenger para LARAVEL
### AVISOS POR AÑADIR
1. Se recomienda que las imagenes a subir sean cuadradas o por lo menos su alto sea mayor que su largo (retrato). Si la imagen cuenta con fondo blanco, ignore estas recomendaciones. Además de centrar la imagen y mantener margenes anchos para mejor visualización con respecto al zoom.
### PANEL
1. Verificar la posibilidad de dos puntos de edición en crud, el primero directamente en la tabla y el segundo a través de un modal.
2. Cambiar los iconos para las alertas de sesión por iconos más legibles.

### BASE DE DATOS
1. Cambiar tipo de datos para precios a **float**.
2. Cambiar todos los nombres de los campos de tablas para producto a Español.
## Notas
Debido a la cantidad de informacion que contiene la db, el crud necesita un modal para modificar la información, es por esto que es necesario mostrar solo información de primera mano, como podría ser:

    1. Imagen principal de producto
    2. Título
    3. Precio publicado
    4. Cantidad de unidades
    5. Etiquetas
    6. Botón de borrar
    7. Botón de modificar