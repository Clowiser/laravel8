<!DOCTYPE html>
<!-- le template sera identique pour chacune des pages -> view -->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> <!-- blade  -->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/style.css"/>
    <title>@yield('titre')</title> <!-- ce sont les @yield('') qui font le lien avec les éléments correspondant de chaque page -->
</head>

<header> 
<div id="titre">
<a href="{{url('accueil')}}"><h1>La Boutique des Etoiles</h1></a>
</div> 

    <nav class="nav_bar">
        <ol>
            <li class=""><a href="{{url('/product')}}">Catalogue</a></li>
            <li class=""><a href="{{url('panier')}}">Panier</a></li>
        </ol>
    </nav>
</header>

<body>

<p>@yield('description')</p>

<div>@yield('contenu')</div>

<p>@yield('next')</p>

<footer>
<p>Copyright Jessica Rigaud 2021</p>
</footer>

</body>
</html>