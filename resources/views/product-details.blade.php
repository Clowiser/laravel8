@extends('template')

@section('titre')
    Détails des produits
@endsection

@section('description')
@foreach($articles as $article)
    <p>Vous êtes sur l'article : {{ $article->idArticles }} des produits</p>
@endforeach
@endsection

@section('contenu')
@foreach($articles as $article)
<h3>{{ $article->nomArticle }}</h3>
<p>{{ $article->descArticle }}</p>
<p>{{ $article->prixArticle}}</p>
<img class="article" src="{{$article->imgArticle}}" style=width:150px>
@endforeach

@endsection

@section('next')
    <a id="next-page" href="{{url('product')}}" >NEXT PAGE</a>
@endsection