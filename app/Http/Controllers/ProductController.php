<?php
// A - méthode SANS passer par la console et la commande php artisan make::controller HomeController | attention, cette méthode peut ne pas faire fonctionner le code
namespace App\Http\Controllers; // on est dans le dossier Controllers où va se retrouver notre fichier ProductController

use App\Http\Controllers\Request;
use App\Models\Article;
use Illuminate\Support\Facades\DB; // DB = Database qui est fichier ou il y a plein de fonction dedans

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
    //     foreach (Article::all() as $article) 
    //     { //-> affiche l'ensemble des articles
    //         echo $article->nomArticle;
    //     }
    // }
    //     $articles = Article::all();
    //     return view('product-list', ['listeArticles' => $articles]); // La vue articles aura accès à la liste sous le nom listeArticles
    //     // return 'Liste de produits';
    //     // return view('product-list');
    // }

    public function listProductByName()
    {
        $articles = Article::orderBy('nomArticle')->get(); // It6 par Nom - afficher par nom alphabétique
        return view('orderName', compact('articles'));
    }

    public function listProductByPrix()
    {
        $articles = Article::orderBy('prixArticle')->get(); // It6 par prix - afficher par prix croissant
        return view('orderPrix', compact('articles'));
    }

    // 4 - méthode permettant d'afficher des articles en fonctions de l'id noté en URL 
    public function IdProduct($id){
        $articles = DB::table('Articles')->where('idArticles', $id)->get();
        return view('product-details', ['articles' => $articles]);
    }

    // public function IdProduct($id){
    //     // $article = Article::where('idArticles')->get();
    //     // return view('product-details', ['article' => $article]); // La vue article aura accès à un seul article sous le nom article
    // }
    //     // return 'Produit' .$id;
    //     // return view('product-details',['numero'=>$id]);
        
}
?>