<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,400;0,700;0,900;1,100;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{mix('css/app.css')}}">
    <title>{{$title}}</title>
    {{-- <style>
        a.current{
            text-decoration: none;
        }
    </style> --}}
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
