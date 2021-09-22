<?php
// A - méthode EN passant par la console et la commande php artisan make::controller CartController | Meilleure méthode !
namespace App\Http\Controllers;

use App\Http\Controllers\Request;

class CartController extends Controller
{
    public function panier(){
        // return 'Panier';
        return view('cart');
    }
}
