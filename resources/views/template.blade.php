<!DOCTYPE html>
<!-- le template sera identique pour chacune des pages -> view -->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> <!-- blade {{}} -->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('titre')</title> <!-- ce sont les @yield('') qui font le lien avec les éléments correspondant de chaque page -->
</head>
<body>

<p>@yield('description')</p>

<div>@yield('contenu')</div>

<p>@yield('next')</p>

</body>
</html>