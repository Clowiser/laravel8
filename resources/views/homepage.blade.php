<!-- la view de Home page : ce qui va être affiché -->
@extends('template') <!-- ici, il reprend la page template pour un affichage uni, défini dans la template -->

@section('titre')
    Home Page
@endsection

@section('description')
    <p>Vous êtes sur l'accueil</p>
@endsection

@section('next')
    <a id="next-page" href="{{url('/product')}}">NEXT PAGE</a>
@endsection
