@extends('template')

@section('titre')
    Le Panier
@endsection

@section('description')
    <p>Vous êtes sur le panier</p>
@endsection

@section('next')
    <a id="next-page" href="{{url('/accueil')}}" class="underline text-gray-900 dark:text-white">NEXT PAGE</a>
@endsection
