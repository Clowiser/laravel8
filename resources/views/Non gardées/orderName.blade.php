@extends('template')

@section('titre')
    La liste des Produits
@endsection

@section('description')
    <p>Vous êtes sur la liste des produits triée par Nom Alphabétique</p>
@endsection

@section('contenu')
@foreach($articles as $article)
<h3>{{ $article->nomArticle }}</h3>
<p>{{ $article->descArticle }}</p>
<p>{{ $article->prixArticle}}</p>
<a href="{{url("/product/$article->idArticles")}}">
     <img class="article" src="{{$article->imgArticle}}" style=width:150px>
</a>
@endforeach
@endsection

@section('next')
    <a id="next-page" href="{{url('panier')}}">NEXT PAGE</a>
@endsection