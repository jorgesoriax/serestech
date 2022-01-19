@extends('layouts.template')

@section('title', 'test-view')

@section('content')

<table border="1" width="100%" style="border-spacing: 0px;">
    <caption>Tabla product</caption>
    <thead>
        <th>id</th>
        <th>name</th>
        
        <th>sku</th>
        <th>price</th>
        <th>discount_price</th>
        <th>image_1</th>
        <th>image_2</th>
        <th>image_3</th>
        <th>image_4</th>
        <th>image_5</th>
        <th>image_6</th>
        <th>image_7</th>
        <th>category_id</th>
        <th>inventory_id</th>

    </thead>
    <tbody>
        @foreach ($productos as $producto)
            <tr>
               <td> {{ $producto->id }} </td>
               <td> {{ $producto->name }} </td>

               <td> {{ $producto->product->sku }} </td>
               <td> {{ $producto->product->price }} </td>
               <td> {{ $producto->product->discount_price }} </td>
               <td> {{ $producto->product->image_1 }} </td>
               <td> {{ $producto->product->image_2 }} </td>
               <td> {{ $producto->product->image_3 }} </td>
               <td> {{ $producto->product->image_4 }} </td>
               <td> {{ $producto->product->image_5 }} </td>
               <td> {{ $producto->product->image_6 }} </td>
               <td> {{ $producto->product->image_7 }} </td>
               <td> {{ $producto->product->category->name }} </td>
               <td> {{ $producto->product->inventory->quantity }} </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection