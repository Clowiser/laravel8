@extends('template')

@section('titre')
    Détails des produits
@endsection

@section('description')
    <p>Vous êtes sur l'article : {{$articles}} des produits</p>
@endsection

@section('contenu')
<h3>{{ $article->nomArticle }}</h3>
<p>{{ $article->idArticle }}</p>
<p>{{ $article->descArticle }}</p>
<p>{{ $article->prixArticle}}</p>
<img class="article" src="{{$article->imgArticle}}" style=width:150px>

@endsection

@section('next')
    <a id="next-page" href="{{url('/panier')}}" >NEXT PAGE</a>
@endsection