@extends('template')

@section('titre')
    La liste des Produits
@endsection

@section('description')
    <p>Vous êtes sur la liste des produits</p>
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
    <a id="next-page" href="{{url('/product/1')}}">NEXT PAGE</a>
@endsection
