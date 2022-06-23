<?php

use Illuminate\Support\Facades\Route;
use App\Models\Marca;
use App\Models\Categoria;
use App\Http\Controllers\ProductoController;

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
        "Colombia" => ["Capital" => "Bogota", "Moneda" => "Peso", "Poblacion" => 51.6, "Ciu" => ["Cali", "Medellin", "Barranquilla"]],
         "Peru" => ["Capital" => "Lima", "Moneda" => "Sol", "Poblacion" =>  32.6, "Ciu" => ["Cusco", "Chiclayo", "Piura", "Tacna"]],
         "Paraguay" => ["Capital" => "Asuncion", "Moneda" => "Guarani", "Poblacion" => 7.453, "Ciu" => ["Ciudad del Este", "Encarnacion"]]
        ];

        
        //Mostrar vista de paises)
        return view("Paises")->with("Paises", $Paises);
});

Route::get('prueba', function(){
    //Seleccionar todas las marcas
    $Marcas = Marca::all();
    //Seleccionar todas las categorias
    $Categorias = Categoria::all();
    // ingresar marcas y categorias a la vista
    return view('productos.create')
                ->with('categorias', $Categorias)
                ->with('marcas', $Marcas);
});

// Rutas  REST
Route::resource('productos',  ProductoController::class);