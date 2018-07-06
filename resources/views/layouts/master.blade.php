<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

   {{-- <title>Laravel  {{ $title ?? 'Boom'}}</title>--}}
   <title>Laravel @yield('title','Boom')</title>
       @yield('stylesheets')
       @yield('scripts.header')
    </head>
    <body>
        @include('layouts/_nav',['age'=>'18']) <!-- _nav a acces à tous les variables qui se trouvent au niveau de master expl title-->
        @verbatim {{-- on met le bloc de code qu'on veut pas l'interpreter avec blade --}}
        {{ 'helloo' }}
        {{ 'cv' }}
        @endverbatim
        @{{ 'dd'}} {{-- de meme s'il y on a une seule instruction--}}
       
        @yield('container')
    <footer>
           @yield('footer')
    </footer>
    @yield('scripts.footer')
    </body>
</html>
