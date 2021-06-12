<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

{{-- <link rel="stylesheet" href="{{mix('css/style.css')}}"> --}}
    <title>{{$title}}</title>
    <style>
        a.current{
            text-decoration: none;
        }
    </style>
</head>
<body>

{{-- NAVIGATION BAR --}}
@include('clinic/partials.nav_bar',[
    'current'=> $current_menu_item ?? null
])



{{-- MAIN BODY  --}}
<main>

    @include('clinic/partials.messages')

    @yield('content')



</main>
</body>
</html>