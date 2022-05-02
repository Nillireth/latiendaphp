<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('Paises',function()
{
    $Paises = [
        "Colombia" => ["Capital" => "Bogota", "Moneda" => "Peso", "Poblacion" => 51.6, "Ciudades" => "Cali", "Medellin", "Barranquilla"],
         "Peru" => ["Capital" => "Lima", "Moneda" => "Sol", "Poblacion" =>  32.6, "Ciudades" => "Cusco", "Chiclayo", "Piura", "Tacna"],
         "Paraguay" => ["Capital" => "Asuncion", "Moneda" => "Guarani", "Poblacion" => 7.453, "Ciudades" => "Ciudad del Este", "Encarnacion"]
        ];

        
        //Mostrar vista de paises)
        return view("Paises")->with("Paises", $Paises);
});