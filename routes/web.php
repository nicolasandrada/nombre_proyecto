<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/listado', function(){
    $herramientas = [[
        "nombre" => "martillo",
        "cantidad" => 12
    ],[
        "nombre" => "destornillador",
        "cantidad" => 2
    ],[
        "nombre" => "pinzas",
        "cantidad" => 4
    ]];

    return view('herramientas/listado_herramientas')->with("h",$herramientas);
});

