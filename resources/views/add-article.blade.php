@extends('template')

@section('titre')
    Ajouter un article
@endsection

@section('description')
    <p>Vous êtes sur le formulaire d'ajout d'un article</p>
@endsection

@section('next')
    <a id="next-page" href="{{ url('panier') }}">NEXT PAGE</a>
@endsection
