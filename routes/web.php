<?php

use Illuminate\Support\Facades\Route;
use App\Models\Marca;
use App\Models\Producto;

Route::get('/', function () {
    $totalMarcas = Marca::count();
    $totalProductos = Producto::count();
    $nombre = 'Eriban';

    return view('inicio', compact('totalMarcas', 'totalProductos', 'nombre'));
});
