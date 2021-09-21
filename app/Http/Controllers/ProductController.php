<?php
// A - méthode SANS passer par la console et la commande php artisan make::controller HomeController | attention, cette méthode peut ne pas faire fonctionner le code
namespace App\Http\Controllers; // on est dans le dossier Controllers où va se retrouver notre fichier ProductController

use App\Http\Controllers\Request;

class ProductController extends Controller{
    public function listProduct(){
        return 'Liste de produits';
    }

    public function IdProduct($id){
        return 'Produit' .$id;
    }
}

?>