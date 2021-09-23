@extends('template')

@section('titre')
    Back Office
@endsection

@section('description')
    <p>Vous êtes sur le Back Office</p>
@endsection

@section('next')
    <a id="next-page" href="{{ url('panier') }}">NEXT PAGE</a>
@endsection