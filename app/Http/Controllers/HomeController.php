<?php
// A - méthode SANS passer par la console et la commande php artisan make::controller HomeController | attention, cette méthode peut ne pas faire fonctionner le code
namespace App\Http\Controllers; // name space est le nom complet avec le chemin

use App\Http\Controllers\Request;

class HomeController extends Controller{
    public function index(){
        return 'Home Page'; // méthode sans le view (c-a-d en notant directement ce que l'on veut retourner)
    }
}
?>