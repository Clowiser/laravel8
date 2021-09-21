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

// Route::get('/', function () { -> route avec la méthode get car on travaille avec l'URL + / de l'url et la fonction qui est appelée et exécutée
//     return view('welcome'); -> il retourne la vue(view) 'welcome.blade.php avec les informations HTML et autres qui sont dedans
// });

//  1 - Mise en place des URL dans votre fichier de route

// Route::get('/', function () {
//     return 'Home page'; // -> dans cette méthode on retourne pas par la view mais directement en notant ce que l'on veut retourner
// });

// Route::get('/product', function () {
//     return 'Liste des produits';
// });

// Route::get('/product/{id}', function ($id) { // Paramètre dynamique -> la fonction magique - a revoir
//     return 'Produit' .$id;
// });

// Route::get('/cat', function () {
//     return 'Panier';
// });


// 2 - Création de CONTROLLER

use App\Http\Controllers\HomeController; // sous windows antislash!! - use à mettre au début
Route::get('/', [HomeController::class, 'index']);

use App\Http\Controllers\ProductController;
Route::get('/product', [ProductController::class, 'listProduct']);

Route::get('/product/{id}', [ProductController::class, 'IdProduct']);

use App\Http\Controllers\CartController;
Route::get('/cart', [CartController::class, 'panier']);