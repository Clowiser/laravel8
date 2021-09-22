<?php
// A - méthode SANS passer par la console et la commande php artisan make::controller HomeController | attention, cette méthode peut ne pas faire fonctionner le code
namespace App\Http\Controllers; // on est dans le dossier Controllers où va se retrouver notre fichier ProductController

use App\Http\Controllers\Request;
use App\Models\Article;

// foreach (Article::all() as $article) {
//     echo $article->name;
// }

class ProductController extends Controller{

    public function listProduct()
{
    $articles = Article::all();
    return view('product-list', compact('articles'));
}

    // public function listProduct(){

    //     foreach (Article::all() as $article) {
    //         echo $article->nomArticle;
    //     }

    //     $articles = Article::all();
    //     return view('product-list', ['listeArticles' => $articles]); // La vue articles aura accès à la liste sous le nom listeArticles

    //     // return 'Liste de produits';
    //     // return view('product-list');
        
    // }

    public function IdProduct($id){
        $articles = Article::where('idArticles')
         ->get();
        return view('product-details', ['articles' => $id]);
    }

    // public function IdProduct($id){

    //     // $article = Article::where('idArticles')->get();
    //     // return view('product-details', ['article' => $article]); // La vue article aura accès à un seul article sous le nom article
    // }

    //     // return 'Produit' .$id;
    //     // return view('product-details',['numero'=>$id]);
        
}



?>