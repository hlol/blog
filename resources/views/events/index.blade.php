<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>events</title>

       
    </head>
    <body>
       <!-- <ul>
       @foreach ($events as $event)
           <li> {{ $event }}  </li>
       @endforeach
        </ul>
    -->
    <ul>
    @forelse ($events as $event)
        <li>{{ $event }}</li>
    @empty
        {{ "Pas d'événement" }}
    @endforelse
    </ul>
    </body>
</html>
