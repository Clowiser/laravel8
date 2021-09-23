@extends('template')

@section('titre')
    Détails des produits
@endsection

@section('description')
    <p>Vous êtes sur l'article : {{ $articles->idArticles }} des produits</p>
@endsection

@section('contenu')
        <h3>{{ $articles->nomArticle }}</h3>
        <p>{{ $articles->descArticle }}</p>
        <p>{{ $articles->prixArticle }}</p>
        <img class="article" src="{{ $articles->imgArticle }}" style=width:150px>
@endsection

@section('next')
    <a id="next-page" href="{{ url('product') }}" >NEXT PAGE</a>
@endsection