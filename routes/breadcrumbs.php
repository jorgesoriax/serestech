<?php

use App\Models\SpecificationsLaptop;
use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Parameters:
// 1 => call view name
// 2 => output text in breadcrumb
// 3 => route from link

/**
 * HOME
 */

// Home
Breadcrumbs::for('home', function($trail){
    $trail->push("Inicio", route('home.index'));
});

// Home > Query
Breadcrumbs::for('search', function($trail, $query){
    $trail->parent('home');
    $trail->push($query, route('search.home'));
});

// Home > Product
Breadcrumbs::for('product', function(BreadcrumbTrail $trail, SpecificationsLaptop $specLaptop){
    $trail->parent('home');
    $productName = $specLaptop->equipo_marca.' '.$specLaptop->equipo_linea.' '.$specLaptop->equipo_modelo;
    $trail->push($productName, route('product.index', $specLaptop));
});

/**
 * PANEL
 */

// Panel
Breadcrumbs::for('panel', function($trail){
    $trail->push("Panel", route('panel.index'));
});

// Panel > Query
Breadcrumbs::for('searchPanel', function($trail, $query){
    $trail->parent('panel');
    $trail->push($query, route('search.panel'));
});