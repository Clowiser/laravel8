<?php
// A - méthode SANS passer par la console et la commande php artisan make::controller HomeController | attention, cette méthode peut ne pas faire fonctionner le code
namespace App\Http\Controllers; // on est dans le dossier Controllers où va se retrouver notre fichier ProductController

use App\Http\Controllers\Request;
use App\Models\Article;
// use Illuminate\Support\Facades\DB; // DB = Database qui est fichier ou il y a plein de fonction dedans


class ProductController extends Controller{

        public function listProduct()
    {
        $articles = Article::all();
        return view('product-list', compact('articles'));
    }

    public function listProductByName()
    {
        $articles = Article::orderBy('nomArticle')->get(); // It6 par Nom - afficher par nom alphabétique
        return view('product-list', compact('articles'));
    }

    public function listProductByPrix()
    {
        $articles = Article::orderBy('prixArticle')->get(); // It6 par prix - afficher par prix croissant
        return view('product-list', compact('articles'));
    }

    // 4 - méthode permettant d'afficher des articles en fonctions de l'id noté en URL 
    public function IdProduct($id){
        $articles = Article::firstwhere('idArticles', $id);
        return view('product-details', ['articles' => $articles]);
    }

}
?>