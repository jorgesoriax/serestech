<?php

use App\Models\SpecificationsLaptop;
use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Parameters:
// home = call name
// HOME = output

// Home
Breadcrumbs::for('home', function($trail){
    $trail->push("Inicio", route('home.index'));
});

// Home > Search
Breadcrumbs::for('search', function($trail, $textClear){
    $trail->parent('home');
    $trail->push($textClear, route('home.search'));
});

// Home > Product
Breadcrumbs::for('product', function(BreadcrumbTrail $trail, SpecificationsLaptop $specLaptop){
    $trail->parent('home');
    $productName = $specLaptop->equipo_marca.' '.$specLaptop->equipo_linea.' '.$specLaptop->equipo_modelo;
    $trail->push($productName, route('product.index', $specLaptop));
});